<?php
$loggedIn = true;
if ($loggedIn) {
    echo "Welcome to CloverShop!\n\n";
}

$balance = 500;
$itemPrice = 300;
if ($balance >= $itemPrice) {
    echo "You can purchase this item.\n\n";
} else {
    echo "Insufficient balance.\n\n";
}

$shipping = "standard";
if ($shipping == "standard") {
    echo "Delivery will take 5-7 days.\n\n";
} elseif ($shipping == "express") {
    echo "Delivery will take 2-3 days.\n\n";
} else {
    echo "Same-day delivery selected!\n\n";
}

$payment = "gcash";
switch ($payment) {
    case "credit_card":
        echo "You paid using Credit Card.\n\n";
        break;
    case "paypal":
        echo "You paid using PayPal.\n\n";
        break;
    case "gcash":
        echo "You paid using GCash.\n\n";
        break;
    default:
        echo "Payment method not recognized.\n\n";
}
?>
