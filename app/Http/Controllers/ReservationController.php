<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Table;
// use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::get();
        $table= Table::get();
       return view('Admin.Admin-Reservation',compact("reservations","table"));
    }
    public function store(Request $request)
    {
        // return $request;
        // $request->validate([
        
        //     'title' => 'required|min:10|max:20',

        // ]);
        // return $request;
        
        $reservation=$request->toArray();
        Reservation::create($reservation);
        // return redirect(route('User_Interfce'))->with('message','Data Inserted Successfully!');
    }

    public function destroy($id)
    {
        $reservation= Reservation::find($id);
        $reservation->delete();
        return redirect(route('reserve'));
    }

}
