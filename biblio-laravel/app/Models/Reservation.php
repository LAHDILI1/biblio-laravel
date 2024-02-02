<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function ReservationBook(){
    return $this->hasMany(Reservation::class,"book_id");
    }
    public function ReservationUser(){
        return $this->hasMany(Reservation::class,"user_id");
        }
    protected $fillable = [
        'description',
        'reservation_date',
        'return_date',
        'is_returned',
        
    ];
}
