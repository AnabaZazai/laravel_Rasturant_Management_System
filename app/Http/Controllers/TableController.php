<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{


    public function index()
    {
        $tables= Table::get();
       return view('Admin.Table.Admin-Table' ,compact("tables"));
    }

    public function store(Request $request)
    {
        // return $request;
        // $request->validate([
        
        //     'title' => 'required|min:10|max:20',

        // ]);
        
        $table=$request->toArray();
        Table::create($table);
        return redirect(route('table_index'))->with('message','Data Inserted Successfully!');
    }

    
    public function edit($id)
    {
        $table= Table::find($id);
        return view('Admin.Table.tableEdit', ['table'=>$table]);

    }

    public function update(Request $request, $id)
    {
        $table= Table::find($id);;
        $table->update($request->all());
        $table->save();  
        return redirect(route('table_index'))->with('message','Data Updated Successfully!');
    }

    public function destroy($id)
    {
        $table= Table::find($id);
        $table->delete();
        return redirect(route('table_index'));
    }

}
