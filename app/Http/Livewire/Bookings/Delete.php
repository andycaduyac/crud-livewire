<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use App\Events\UserLog;
use App\Models\Log;
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

        $log_entry = 'Booking deleted with booking ID No: ' . $this->booking->id . '. Name: ' . $this->booking->name;
        // "New booking added with booking ID No: $booking->id. Name: $booking->name";
        event(new UserLog(($log_entry)));

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
