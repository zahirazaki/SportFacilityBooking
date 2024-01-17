<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ShowController extends Controller
{
    public function show()
    {
        $booking = Booking::all();

        return view('view-booking',compact('booking'));

    }
}
