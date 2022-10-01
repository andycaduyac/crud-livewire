<?php

namespace App\Http\Livewire\Bookings;

use Livewire\Component;
use App\Models\Booking;
use App\Events\UserLog;

class Create extends Component
{

    public $name, $contact_number, $room_type, $checkin_date, $checkout_date;

    public function addBooking(){
        $this->validate([
            'name'                  =>      ['required', 'string', 'max:255'],
            'contact_number'        =>      ['required', 'string', 'max:255'],
            'room_type'             =>      ['required', 'string', 'max:255'],
            'checkin_date'          =>      ['required', 'date'],
            'checkout_date'         =>      ['required', 'date'],
        ]);

        $booking = Booking::create([

            'name'               =>      $this->name,
            'contact_number'     =>      $this->contact_number,
            'room_type'          =>      $this->room_type,
            'checkin_date'       =>      $this->checkin_date,
            'checkout_date'      =>      $this->checkout_date,
        ]);
        $log_entry = "New booking added with booking ID No: $booking->id. Name: $booking->name";
        event(new UserLog(($log_entry)));

        return redirect('/')->with('message', 'Created Successfully');
    }

    public function render()
    {
        return view('livewire.bookings.create');
    }
}
