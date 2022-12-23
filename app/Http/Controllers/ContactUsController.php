<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::get();
       return view('Admin.Admin-ContactUs',compact("contacts"));
    }
   
    public function store(Request $request)
    {
        // $request->validate([
        
        //     'title' => 'required|min:10|max:20',

        // ]);
        
        $contact=$request->toArray();
        ContactUs::create($contact);
        return redirect(route('User_Interfce'))->with('message','Data Inserted Successfully!');
    }

    
    public function destroy($id)
    {
        $contact= ContactUs::find($id);
        $contact->delete();
        return redirect(route('pepole_contact'));
    }

   
}
