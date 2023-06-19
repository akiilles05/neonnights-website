<?php
// Adatbázis kapcsolat létrehozása

$servername = "185.51.188.61";
$username = "illesinn_fivem";
$password = "Galgoczi20";
$dbname = "illesinn_payment_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Adatok lekérdezése az adatbázisból
$paymentId = $_GET["paymentid"]; // A fizetés azonosítója, amelyet átadunk az URL-ben
$sql = "SELECT * FROM payments WHERE payment_id = '$paymentId'";
$result = $conn->query($sql);

// Adatok megjelenítése
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $paymentId = $row["payment_id"];
    $requestId = $row["payment_request_id"];
    $amount = $row["amount"];

    $updateSql = "UPDATE payments SET status = 'Fizetve' WHERE payment_id = '$paymentId'";
    if ($conn->query($updateSql) === TRUE) {
        echo "<p>A fizetés státusza frissítve lett.</p>";
    } else {
        echo "<p>A fizetés státuszának frissítése sikertelen: " . $conn->error . "</p>";
    }
} else {
    echo "Nincsenek elérhető fizetési adatok.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fizetési adatok</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .payment-info {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        h2 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #666666;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .success-message {
            color: #00cc66;
            font-size: 18px;
            margin-top: 20px;
        }

        .error-message {
            color: #ff3300;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="payment-info">
            <?php if (isset($statusUpdateMessage)): ?>
                <?php if (strpos($statusUpdateMessage, 'sikertelen') === false): ?>
                    <h2>Sikeres fizetés!</h2>
                    <p class="success-message"><?php echo $statusUpdateMessage; ?></p>
                <?php else: ?>
                    <h2>Hiba történt!</h2>
                    <p class="error-message"><?php echo $statusUpdateMessage; ?></p>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($paymentId)): ?>
                <h2>Fizetési adatok:</h2>
                <p><strong>Payment ID:</strong> <?php echo $paymentId; ?></p>
                <p><strong>Request ID:</strong> <?php echo $requestId; ?></p>
                <p><strong>Összeg:</strong> <?php echo $amount; ?></p>
            <?php else: ?>
                <p>Nincsenek elérhető fizetési adatok.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
