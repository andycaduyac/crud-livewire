<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Edit extends Component
{
    public $bookingId;
    public $name, $contact_number, $room_type, $checkin_date, $checkout_date;

    public function mount(){
        $this->name             =   $this->booking->name;
        $this->contact_number   =   $this->booking->contact_number;
        $this->room_type        =   $this->booking->room_type;
        $this->checkin_date     =   $this->booking->checkin_date;
        $this->checkout_date    =   $this->booking->checkout_date;
    }

    public function editBooking(){
        $this->validate([
            'name'                  =>      ['required', 'string', 'max:255'],
            'contact_number'        =>      ['required', 'string', 'max:255'],
            'room_type'             =>      ['required', 'string', 'max:255'],
            'checkin_date'          =>      ['required', 'date'],
            'checkout_date'         =>      ['required', 'date'],
        ]);

        $this->booking->update([
            'name'                      =>          $this->name,
            'contact_number'            =>          $this->contact_number,
            'room_type'                 =>          $this->room_type,
            'checkin_date'              =>          $this->checkin_date,
            'checkout_date'             =>          $this->checkout_date,
        ]);


        return redirect('/')->with('message', 'Updated Successfully');
    }



    public function getBookingProperty(){
        return Booking::find($this->bookingId);
    }

    public function render()
    {
        return view('livewire.bookings.edit');
    }
}
