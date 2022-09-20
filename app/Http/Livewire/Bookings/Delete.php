<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Delete extends Component
{
    public $bookingId;

    public function getBookingProperty(){
        return Booking::select('id', 'name', 'room_type')
                ->find($this->bookingId);
    }

    public function delete(){
        $this->booking->delete();

        return redirect('/')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.bookings.delete');
    }
}
