<?php
session_start();

$servername = "185.51.188.61";
$username = "illesinn_fivem";
$password = "Galgoczi20";
$dbname = "illesinn_payment_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentUrl = 'https://api.test.barion.com/v2/Payment/Start';
    $posKey = '8fa0a583-f93f-4bef-b901-f615c49e5a35';

    // var_dump($posKey);

     // Adatok a fizetéshez
    $itemPrice = $_POST["item_name"];
    $itemDescription = $_POST["item_description"];
    
    $_SESSION['itemPrice'] = $itemPrice;

    // var_dump($_SESSION);

    # Adatok
    $paymentType = "Immediate";
    $orderNumber = uniqid("NNPP-");
    $paymentRequestId = uniqid('NNRP-');
    $locale = "hu-Hu";
    $currency = "HUF";

    $redirectUrl = "http://localhost/pp/barion-payment.php";


    $paymentData = array(
        'POSKey' => $posKey,
        'PaymentType' => $paymentType,
        'BillingAddress' => $billingAddress,
        'Email' => $vasarloEmail,
        'GuestCheckOut' => true,
        "FundingSources" => ["All"],
        'PaymentRequestId' => $paymentRequestId,
        'Transactions' => array(
            array(
                "POSTransactionId" => $paymentRequestId,
                "Payee" => 'sellia0508@gmail.com',
                'OrderNumber' => $orderNumber,
                "Total" => $itemPrice, // Összeg PP pontok vásárlásához
                "Items" => array(
                    array(
                        "Name" => "Prémium pontok",
                        "Description" => $itemDescription,
                        "Quantity" => 1,
                        "Unit" => "db",
                        "UnitPrice" => $itemPrice, // Ár PP pontonként
                    )
                )
            )
        ),
        "RedirectURL" => $redirectUrl,
    );

    $paymentDataJSON = json_encode($paymentData);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $paymentUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json"
    ));
    curl_setopt($ch, CURLOPT_POST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $paymentDataJSON);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $paymentResponse = json_decode($response, true);
    $paymentId = $paymentResponse['PaymentId']; // Elmentjük a payment ID-t a válaszból
    $paymentRequestId = $paymentResponse['PaymentRequestId']; // Elmentjük a payment request ID-t a válaszból
    $paymentStatus = $paymentResponse['Status'];
    $paymentTime = date('Y-m-d H:i:s');

    $stmt = $conn->prepare("INSERT INTO payments (payment_id, payment_request_id, amount, status, payment_time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $paymentId, $paymentRequestId, $itemPrice, $paymentStatus, $paymentTime);
    $stmt->execute();
    $stmt->close();

    // var_dump($paymentResponse);

    header("Location: " . $paymentResponse['GatewayUrl']);
    exit;
}
?>