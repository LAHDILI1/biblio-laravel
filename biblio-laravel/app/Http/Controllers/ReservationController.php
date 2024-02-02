<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();
        // dd($reservations); // Uncomment for debugging
        return view("reservations.index", compact('reservations'));
        //, compact('reservations')
    }

    public function create(){
        return view("reservations.create");
    }
    public function store(Reservation $reservation , Request $request){
        
        $data = $request->validate([
            'title' => "required",
            'author' => "required",
            'genre' => "required",
            'description' => "required",
            'price' => "required|decimal:0,2",
            'publication_year' => "required",
            'total_copies' => "required",
            'available_copies' => "required"
        ]);

        $reservation::create($data);
        return redirect()->route("reservations");
    }
    public function edit(Reservation $reservation) {
       
        return view('reservations.edit', ['reservation' => $reservation]);
    }
    public function update(Reservation $reservation, Request $request) {
        $data = $request->validate([
            'title' => "required",
            'author' => "required",
            'genre' => "required",
            'description' => "required",
            'price' => "required|decimal:0,2",
            'publication_year' => "required",
            'total_copies' => "required",
            'available_copies' => "required"
        ]);

        $reservation->update($data);
        return redirect(route("reservations"))->with('success', "Reservation successfully updated");
    }

    public function destroy(Reservation $reservation) {
        $reservation->delete();
        return redirect(route("reservations"))->with('success', "reservation successfully deleted"); 
    }
}
