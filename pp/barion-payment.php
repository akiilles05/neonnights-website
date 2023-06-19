<?php
// Barion fizetési adatok
$paymentId = $_GET['paymentId'];
$paymentStatus = $_GET['paymentStatus'];

// Ellenőrizze a fizetés státuszát a Barion API-n keresztül
function getPaymentState($paymentId)
{
    // Barion API konfiguráció
    $apiUrl = 'https://api.test.barion.com/v2/Payment/GetPaymentState';
    $apiKey = '8fa0a583-f93f-4bef-b901-f615c49e5a35';

    $url = $apiUrl . '?' . http_build_query(['POSKey' => $apiKey, 'PaymentId' => $paymentId]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

// Fizetés státuszának lekérése a Barion API-n keresztül
$paymentState = getPaymentState($paymentId);

// Fizetés státuszának ellenőrzése
if ($paymentState['Status'] === 'Succeeded') {
    // A fizetés státusza megegyezik, irányítsa át a sikeres oldalra
    header("Location: payment_success.php?paymentid=" . $paymentId);
    exit();
} else {
    // A fizetés státusza nem egyezik meg, irányítsa át a sikertelen oldalra
    header('Location: payment_failed.php');
    exit;
}


?>
