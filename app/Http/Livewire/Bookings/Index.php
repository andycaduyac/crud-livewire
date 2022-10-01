<?php

namespace App\Http\Livewire\Bookings;

use App\Models\Booking;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $room_type = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function showBookings(){
        $query = Booking::orderBy('name')
                    ->search($this->search);
        if($this->room_type != 'all') {
            $query->where('room_type', $this->room_type);
        }
        $bookings = $query->paginate(10);
        return compact('bookings');
    }

    public function render()
    {
        return view('livewire.bookings.index', $this->showBookings());
    }
}
