<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use File;

class ChefController extends Controller
{
    public function index()
    {
        $chefes= chef::get();
       return view('Admin.Chefes.Admin-Chef',compact("chefes"));
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

        $chef=$request->toArray();
        
       
        if($request->hasfile('img'))
          {
           
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/chef/', $filename); 
            $chef['img']=$filename; 
                 
        } 
       
        Chef::create($chef);
     
        return redirect(route('chef_index'))->with('message','Data Inserted Successfully!');     
        // return $request;
    }

    public function edit($id)
    {

        $chef= Chef::find($id);
        return view('Admin.Chefes.chefEdit', ['chef'=>$chef]);

    }

      
    public function update(Request $request, $id)
    {
        $chef= Chef::find($id);
        $data = $request->toArray();
        if( $request->hasfile('img'))
        {
           
            $imageToBeDeleted = "Images/chef/".$chef->img;

            if(File::exists($imageToBeDeleted)){
                File::delete($imageToBeDeleted);
            } 
            $file = $request->file('img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('Images/chef/', $filename); 
            $data['img']=$filename; 
    
      } 
        
        $chef->update($data);
         $chef->save();
        return redirect(route('chef_index'))->with('message','Data Updated Successfully!');
    }

    
    public function destroy($id)
    {
        $chef= Chef::find($id);
        $imageToBeDeleted = "Images/chef/".$chef->img;
        if(File::exists($imageToBeDeleted)){
            File::delete($imageToBeDeleted);
        } 
        $chef->delete();
        return redirect(route('chef_index'));
    }

}
