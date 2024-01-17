<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Booking;


class BookingController extends Controller
{
    public function index()
    {
        $booking = DB::table('bookings')
        ->orderby('name','desc')
        ->get();

        // Controller
        $booking = Booking::all(); // Or fetch bookings as needed
        return view('/booking', compact('booking'));

        // return view ('/booking',['booking'=>$booking]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking= new Booking();
        $booking->Name=$request->Name;
        $booking->email=$request->email;
        $booking->phone=$request->phone;
        $booking->date=$request->date;
        $booking->time=$request->time;
        $booking->people=$request->people;
        $booking->message=$request->message;
        $booking->created_at=today();
        $booking->updated_at=today();
        $booking->save();
        return redirect('booking');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($email)
    {
        $booking=Booking::find($email);
        return view('edit-booking',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$email)
    {
        $booking=Booking::find($email);
        $booking->date=$request->input('date');
        $booking->time=$request->input('time');
        $booking->people=$request->input('people');
        $booking->message=$request->input('message');
        $booking->update();
        return redirect('view-booking')->with('status','Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove($email)
    {
        $booking = Booking::find($email);
        $booking->delete();
        return redirect('view-booking')->with('status','Data has been deleted successfully');
    }

    public function viewBooking()
    {
    $booking = booking::all();
    return view('view-booking', ['booking' => $booking]);
    }
}




