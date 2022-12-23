@extends('Layout.AdminSidebar')
@section('Page_Content')
<div class="row" style="margin: auto; justify-content:center;">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3">Edit Waiter:</h1>
            </div>
            <div class="card-body">
                <form method="Post" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$waiter->first_name}}" >
                    </div>                                      


                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_nam" value="{{$waiter->last_nam}}" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$waiter->address}}" >
                    </div>                                      


                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" value="{{$waiter->contact_number}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label w-100">Image</label>
                        <input   class="w-full px-2 py-2 text-gray-700 " id=""  name="img" type="file"  placeholder="" >                
                        <img src="{{ asset('Images/waiter/'.$waiter->img) }}" alt="img" width="160px">
                        
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


@endsection