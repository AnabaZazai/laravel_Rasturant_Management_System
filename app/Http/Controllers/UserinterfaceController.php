<?php

namespace App\Http\Controllers;
use App\Models\Table;
use App\Models\Reservation;

use Illuminate\Http\Request;

class UserinterfaceController extends Controller
{
    public function index()
    {
        $tables= Table::get();
        return view('User_Interface.userinterface',compact("tables"));
    }

    
    public function store_reservation(Request $request)
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
}
