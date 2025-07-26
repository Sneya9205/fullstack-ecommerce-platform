<?php
session_start();
?>
<?php
// Include the Razorpay PHP library
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Initialize Razorpay with your key and secret
/*
$api_key = 'rzp_test_Y2wy8t1wD1AFaA';
$api_secret = 'zSqRMpIa2ljBBpkieFYGmfLa';
*/
$api_key = 'rzp_test_jwh6SW5KxRAIdV';
$api_secret = '8j9Ev6BuP6zkSBaEdfHWDoC7';
$api = new Api($api_key, $api_secret);
$amount=(float)$_GET['amount'];
$total=intval($amount*100);
// Create an order
$order = $api->order->create([
    'amount' => $total, // amount in paise (100 paise = 1 rupee)
    'currency' => 'INR',
    'receipt' => 'order_receipt_12asa3'
]);
// Get the order ID
$order_id = $order->id;

// Set your callback URL
$callback_url = "http://127.0.0.1/DBMS-ecommerce/paySuccess.php";

// Include Razorpay Checkout.js library
echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>';

// Create a payment button with Checkout.js
//auto load using script 
//echo '<button onclick="startPayment()">Pay with Razorpay</button>';

// Add a script to handle the payment
// replaced amount: ' . $order->amount . ',

echo '<script>
    function startPayment() {
        var options = {
            key: "' . $api_key . '",
            amount: ' . $total . ',
            currency: "' . $order->currency . '",
            name: "Your Company Name",
            description: "Payment for your order",
            image: "https://cdn.razorpay.com/logos/GhRQcyean79PqE_medium.png",
            order_id: "' . $order_id . '",
            theme:
            {
                "color": "#738276"
            },
            callback_url: "' . $callback_url . '"
        };
        var rzp = new Razorpay(options);
        rzp.open();
    }
        window.onload = function() {
        startPayment();
    };
</script>';
?>
