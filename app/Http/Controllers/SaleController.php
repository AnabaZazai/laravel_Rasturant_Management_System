<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Waiter;
use App\Models\Table;
use App\Models\Menue;
use App\Models\Catagory;
use App\Models\Salemenue;

use Illuminate\Http\Request;

class SaleController extends Controller
{
   
    public function index()
    {
        // $menues= Menue::get();       
        $catagories= Catagory::has("menue")->get();
        $tables= Table::get();
        $waiters = Waiter::get();
        $salemenues = Salemenue::get();
        return view('Admin.Sale.SaleMenue',compact("tables","catagories","waiters","salemenues"));
    }

    public function menuesale(Request $request)
    { 
        
        $salemenue=$request->toArray();
        Salemenue::create($salemenue);
        return redirect(route('sale'));
        // return $request;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
