<?php

namespace App\Http\Controllers;

use App\Models\Waiter;
use Illuminate\Http\Request;
use File;

class WaiterController extends Controller
{
    public function index()
    {
        $waiters = Waiter::get();
       return view('Admin.Waiter.Admin-Waiter',compact("waiters"));
    }


    public function store(Request $request)
    {
        
        // $request->validate([

        //     'design' => 'required',
        //     'color' => 'required',                      
        //     'lenght' => 'required',
        //     'color' => 'required',
        //     'width' => 'required',
        //     'price' => 'required',
        //     'img' => 'required',
      
        // ]);

        $waiter=$request->toArray();
        
       
        if($request->hasfile('img'))
          {
           
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/waiter/', $filename); 
            $waiter['img']=$filename; 
                 
        } 
       
        Waiter::create($waiter);
     
        return redirect(route('waiter_index'))->with('message','Data Inserted Successfully!');     
        // return $request;
    }

      
    public function edit($id)
    {

        $waiter= waiter::find($id);
        return view('Admin.Waiter.WaiterEdit', ['waiter'=>$waiter]);

    }

      
    public function update(Request $request, $id)
    {
        $waiter= Waiter::find($id);
        $data = $request->toArray();
        if( $request->hasfile('img'))
        {
           
            $imageToBeDeleted = "Images/waiter/".$waiter->img;

            if(File::exists($imageToBeDeleted)){
                File::delete($imageToBeDeleted);
            } 
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/waiter/', $filename); 
            $data['img']=$filename; 
    
      } 
        
        $waiter->update($data);
         $waiter->save();
        return redirect(route('waiter_index'))->with('message','Data Updated Successfully!');
    }

   
    public function destroy($id)
    {
        $waiter= Waiter::find($id);
        $imageToBeDeleted = "Images/waiter/".$waiter->img;
        if(File::exists($imageToBeDeleted)){
            File::delete($imageToBeDeleted);
        } 
        $waiter->delete();
        return redirect(route('waiter_index'));   
    }
}
