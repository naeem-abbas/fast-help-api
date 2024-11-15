<?php
// app/Http/Controllers/PaymentController.php
namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController
{
    public function createPaymentIntent(Request $request)
    {
        // Validate the input
        $request->validate([
            'amount' => 'required',
        ]);

        // Set the Stripe secret key
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // Create the PaymentIntent
        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount,  // Amount in cents (e.g. 1500 for $15.00)
            'currency' => 'cad',
        ]);

        // Return the client secret that we can use in frontend to handle the payment
        return response()->json([
            'isPaymentIntentCreated'=>true,
            'clientSecret' => $paymentIntent->client_secret,
        ]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required',
            'payment_method' => 'required',
            'amount' => 'required',
            'currency' => 'required',
            'payment_status' => 'required'
        ]);

        // Store payment information in the database
        $payment = Payment::create($validated);

        //Update the booking status

        $booking = Booking::findOrFail($validated['booking_id']);
        $booking->status = 'accepted';
        $booking->save();

        return response()->json([
            'message' => 'Payment processed successfully',
            'payment' => $payment,
        ]);
    }
}
