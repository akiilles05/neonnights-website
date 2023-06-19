<?php
session_start();
function p($arr){
    return '<pre>'.print_r($arr, true).'</pre>';
}

$servername = '95.138.193.221';
$username = 'admin';
$password = 'OPlBBoB/C6XHNlIc';
$database = 'nightlife';

$connection = mysqli_connect($servername, $username, $password, $database);


// Kapcsolat ellenőrzése
if (!$connection) {
    die('A MySQL kapcsolódási hiba: ' . mysqli_connect_error());
}


$params = [
    'openid.assoc_handle' => $_GET['openid_assoc_handle'],
    'openid.signed'       => $_GET['openid_signed'],
    'openid.sig'          => $_GET['openid_sig'],
    'openid.ns'           => 'http://specs.openid.net/auth/2.0',
    'openid.mode'         => 'check_authentication',
];

$signed = explode(',', $_GET['openid_signed']);
    
foreach ($signed as $item) {
    $val = $_GET['openid_'.str_replace('.', '_', $item)];
    $params['openid.'.$item] = stripslashes($val);
}

$data = http_build_query($params);
//data prep
$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Accept-language: en\r\n".
        "Content-type: application/x-www-form-urlencoded\r\n".
        'Content-Length: '.strlen($data)."\r\n",
        'content' => $data,
    ],
]);

//get the data
$result = file_get_contents('https://steamcommunity.com/openid/login', false, $context);

if (preg_match("#is_valid\s*:\s*true#i", $result)) {
    preg_match('#^https://steamcommunity.com/openid/id/([0-9]{17,25})#', $_GET['openid_claimed_id'], $matches);
    // var_dump($_GET['openid_claimed_id']);

    if (!empty($matches[1])){
        $steamID64 = 'steam:' . $matches[1];
        // echo 'request has been validated by open id, returning the client id (steam id) of: ' . $steamID64;

        // Átalakítás SteamID64-ről hexadecimális formátumra
        $hexSteamID64 = steamID64toHex($matches[1]);

        // echo 'Hex representation of SteamID64: ' . $hexSteamID64;

        $steamIDQuery = "SELECT identifier FROM user_identifiers WHERE identifier = '$hexSteamID64'";
        $steamIDResult = mysqli_query($connection, $steamIDQuery);

        // var_dump($steamIDQuery);

        if (!$steamIDResult) {
            echo 'MySQL Error: ' . mysqli_error($connection);
            exit();
        }
        

        if ($steamIDResult && mysqli_num_rows($steamIDResult) > 0) {
            $steamIDRow = mysqli_fetch_assoc($steamIDResult);
            $steamID = $steamIDRow['identifier'];
        
            // Find Rockstar license key in identifiers table using Steam ID
            $rockstarLicenseKeyQuery = "SELECT license FROM user_identifiers WHERE identifier = '$hexSteamID64' AND license IS NOT NULL";
            $rockstarLicenseKeyResult = mysqli_query($connection, $rockstarLicenseKeyQuery);

            if ($rockstarLicenseKeyResult && mysqli_num_rows($rockstarLicenseKeyResult) > 0) {
                $rockstarLicenseKeyRow = mysqli_fetch_assoc($rockstarLicenseKeyResult);
                $rockstarLicenseKey = $rockstarLicenseKeyRow['license'];

                // Find user with the license key in user table
                $userQuery = "SELECT * FROM users WHERE identifier = '$rockstarLicenseKey'";
                $userResult = mysqli_query($connection, $userQuery);
                
                if ($userResult && mysqli_num_rows($userResult) > 0) {
                    $user = mysqli_fetch_assoc($userResult);

                    header('Location: vasarlas.php');
                } else {
                    echo 'error: user not found';
                    exit();
                }
            } else {
                echo 'error: Rockstar license key not found';
                exit();
            }
        } else {
            echo 'error: Steam ID not found';
            exit();
        }
    } else {
        echo 'error: Invalid Steam ID';
        exit();
    }
} else {
    echo 'error: unable to validate your request';
    exit();
}

function steamID64toHex($steamID64) {
    $steamID64 = trim($steamID64); // Eltávolítja a felesleges szóközöket

    // Az "STEAM_" előtagot és a második számjegyet levágjuk
    $steamID64 = substr($steamID64, 0);

    // Átalakítás hexadecimális formátumba
    $hex = "steam:".dechex($steamID64);

    return $hex;
}

$steam_api_key = '19333502059F72F55BE23DE5A546FF0B';

$response = file_get_contents('https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$steam_api_key.'&steamids='.$steamID64);
$response = json_decode($response,true);

// echo p($response);
