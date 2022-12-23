<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index()
    {

        
        // $search = $request['search'] ?? "";
        // if($search != "")
        // {
        //     $cities= City::where('city_name','like',"%$search%")->paginate(7);
          
        // }

        // else{
        
        //     $cities= City::latest()->paginate(7);
        // }

       $catagories= Catagory::get();
       return view('Admin.Catagory.Admin-Catagory',compact("catagories"));
    }


    public function store(Request $request)
    {

        
        
        // $request->validate([
        
        //     'title' => 'required|min:10|max:20',

        // ]);
        
        $catagory=$request->toArray();
        Catagory::create($catagory);
        return redirect(route('catagory_index'))->with('message','Data Inserted Successfully!');
        // return $request;
    }

    public function edit($id)
    {
        $catagory= Catagory::find($id);
        return view('Admin.Catagory.CatagoryEdit', ['catagory'=>$catagory]);

    }

    public function update(Request $request, $id)
    {
        $catagory= Catagory::find($id);;
        $catagory->update($request->all());
        $catagory->save();  
        return redirect(route('catagory_index'))->with('message','Data Updated Successfully!');
    }

   
    public function destroy($id)
    {
        $catagory= Catagory::find($id);
        $catagory->delete();
        return redirect(route('catagory_index'));
    }
}
