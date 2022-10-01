<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        collect(explode(" ", $term))
                ->filter()
                ->each(function ($term) use($query){
                    $term = '%'.$term.'%';

                    $query->where('name', 'like', $term)
                        ->orwhere('room_type', 'like', $term);
        });
    }
}
