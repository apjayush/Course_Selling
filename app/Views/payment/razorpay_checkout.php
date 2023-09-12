<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary CSS and JavaScript files -->

    <!-- Include the Razorpay JavaScript SDK -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <!-- Automatically open Razorpay Checkout when the page loads -->
    <script>
        var options = {
            "key": "rzp_test_GIszA4oBMH50bF", // Replace with your Razorpay key
            "amount": <?= $order->amount ?>,
            "currency": "INR",
            "name": "Kali",
            "description": "Payment for Courses",
            "order_id": "<?= $order->id ?>",
            "handler": function (response) {
                // Handle the success callback when payment is successful
                // You can redirect to the success page or handle it as needed
                window.location.href = "/payment/success";
            },
            "prefill": {
                "name": "", // Replace with user's name
                "email": "" // Replace with user's email
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    </script>
</body>
</html>
