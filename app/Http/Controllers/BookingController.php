<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController
{

    public function getAllBookings(Request $request)
    {
        // Fetch all bookings with provider name, 5 bookings per page
        $bookings = Booking::with('provider:id,name') // Eager load only the provider's 'id' and 'name'
                    ->paginate(5);

        return response()->json($bookings); // This returns paginated data with provider details
    }

    public function getBookingsByUserId($userId, Request $request)
    {
        // Fetch bookings for a specific user where status is not 'pending' and include provider name
        $bookings = Booking::where('user_id', $userId)
                    ->where('status', '!=', 'pending')
                    ->with('provider:id,name') // Eager load only the provider's 'id' and 'name'
                    ->paginate(5);

        return response()->json($bookings); // This returns paginated data with provider details
    }

    public function addBooking(Request $request)
    {
        // Validate incoming data (you can add more validation rules based on your needs)
        $validated = $request->validate([
            'user_id' => 'required',
            'provider_id' => 'required',
            'date_time' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'address' => 'required',
        ]);

        // Create the booking record
        $booking = Booking::create([
            'user_id' => $validated['user_id'],
            'provider_id' => $validated['provider_id'],
            'date_time' => $validated['date_time'],
            'latitude' => $validated['latitude'],
            'longitude' => $validated['longitude'],
            'address' => $validated['address'],
        ]);
        // Return the bookingId after successfully creating the booking
        return response()->json([
            'message' => 'Booking created successfully.',
            'isBooked'=>true,
            'bookingId' => $booking->id  // Return the newly created booking's ID
        ]);
    }


        // Method to edit booking status
        public function editBookingStatus(Request $request, $bookingId)
        {
            // Validate the incoming request data
            $request->validate([
                'status' => 'required', // Only allow these statuses
            ]);

            // Find the booking by its ID
            $booking = Booking::findOrFail($bookingId);

            // Update the booking's status
            $booking->status = $request->status;
            $booking->save();

            // Return a response with the updated booking
            return response()->json([
                'message' => 'Booking status updated successfully.',
                'booking' => $booking,
            ]);
        }

}
