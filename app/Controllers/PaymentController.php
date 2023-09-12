<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\EnrollmentModel;

class PaymentController extends BaseController
{
    public function processPayment()
    {
        // Get the POST data from the form
        $totalAmount = $this->request->getPost('totalAmount');
        $userId = $this->request->getPost('user_id');
        $courseIds = $this->request->getPost('course_id');
    
        // Initialize Razorpay using your API keys from Config
        $razorpayConfig = config('Razorpay');
        $razorpay = new \Razorpay\Api\Api($razorpayConfig->keyId, $razorpayConfig->keySecret);
    
        // Create an order with Razorpay
        $orderData = [
            'amount' => $totalAmount * 100, // Razorpay accepts amount in paise, so convert to paise
            'currency' => 'INR',
            'receipt' => 'order_receipt_' . uniqid(),
        ];
    
        try {
            $order = $razorpay->order->create($orderData);
    
            // Pass the order details to the Razorpay Checkout view
            return view('payment/razorpay_checkout', [
                'order' => $order,
            ]);
        } catch (\Exception $e) {
            // Handle any exceptions here, e.g., show an error message to the user
            return redirect()->to('payment/error')->with('error', $e->getMessage());
        }
    }
    
}
