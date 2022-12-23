<?php

namespace App\Http\Controllers;

use App\Models\Menue;
use App\Models\Catagory;
use Illuminate\Http\Request;
use File;

class MenueController extends Controller
{
    public function index()
    {
        $menues= Menue::get();       
        $catagories= Catagory::get();
       return view('Admin.Menue.Admin-Menue',compact("catagories","menues"));
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

        $menue=$request->toArray();
        
       
        if($request->hasfile('img'))
          {
           
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/menue/', $filename); 
            $menue['img']=$filename; 
                 
        } 
       
        Menue::create($menue);
     
        return redirect(route('menue-index'))->with('message','Data Inserted Successfully!');     
        // return $request;
    }

  
    // public function editmenue()
    // {
       
    //    return view('Admin.MenueEdit');
    // }

    
    public function edit($id)
    {
        $catagories= Catagory::get();
        $menue= Menue::find($id);
        return view('Admin.Menue.MenueEdit', ['menue'=>$menue],compact("catagories"));

    }

      
    public function update(Request $request, $id)
    {
        $menue= Menue::find($id);
        $data = $request->toArray();
        if( $request->hasfile('img'))
        {
           
            $imageToBeDeleted = "Images/menue/".$menue->img;

            if(File::exists($imageToBeDeleted)){
                File::delete($imageToBeDeleted);
            } 
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/menue/', $filename); 
            $data['img']=$filename; 
    
      } 
        
        $menue->update($data);
         $menue->save();
        return redirect(route('menue-index'))->with('message','Data Updated Successfully!');
    }

   
    public function destroy($id)
    {
        $menue= Menue::find($id);
        $imageToBeDeleted = "Images/menue/".$menue->img;
        if(File::exists($imageToBeDeleted)){
            File::delete($imageToBeDeleted);
        } 
        $menue->delete();
        return redirect(route('menue-index'));   
    }
    

   
}
