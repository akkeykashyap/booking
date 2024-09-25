<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all(); // Fetch all bookings
        return view('bookings.index', compact('bookings')); // Return the bookings view
    }

    public function create()
    {
        return view('bookings.create'); // Return the create booking form view
    }

    public function store(Request $request)
    {
        // Validate and save the booking
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'booking_date' => 'required|date',
            'time_slot' => 'required|string|max:50',
        ]);

        Booking::create($request->all()); // Create a new booking

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!'); // Redirect back to the bookings page
    }
}
