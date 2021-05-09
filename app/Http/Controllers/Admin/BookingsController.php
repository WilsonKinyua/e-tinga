<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use AfricasTalking\SDK\AfricasTalking;

class BookingsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('booking_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookings = Booking::all();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        abort_if(Gate::denies('booking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bookings.show', compact('booking'));
    }
    // approve booking
    public function approveBooking($id) {

        $booking = Booking::findOrFail($id);
        $booking->status = 1;
        $booking->update();

        // send to farmer
        $username = ''; // use 'sandbox' for development in the test environment
        $apiKey   = ''; // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);

        // Get one of the services
        $sms      = $AT->sms();

        // Use the service
        $result1   = $sms->send([
            'to'      => "+". $booking->phone,
            'message' => 'Hello, ' . $booking->customer . ". Congratulations!! Your booking has been approved. Ready to be dispatched."
        ]);

        return redirect()->back();
    }

    // disapprove bookings
    public function disapproveBooking($id) {

        $booking = Booking::findOrFail($id);
        $booking->status = 0;
        $booking->update();

          // send to farmer
          $username = ''; // use 'sandbox' for development in the test environment
          $apiKey   = ''; // use your sandbox app API key for development in the test environment
          $AT       = new AfricasTalking($username, $apiKey);
  
          // Get one of the services
          $sms      = $AT->sms();
  
          // Use the service
          $result1   = $sms->send([
              'to'      => "+". $booking->phone,
              'message' => 'Hello, ' . $booking->customer . ". Sorry to inform you that your booking has not been approved. Try again later."
          ]);
  
        return redirect()->back();
    }
}
