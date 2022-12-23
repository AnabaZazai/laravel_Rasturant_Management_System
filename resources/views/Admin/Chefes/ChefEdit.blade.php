@extends('Layout.AdminSidebar')
@section('Page_Content')

<div class="row" style="margin: auto; justify-content:center;">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3">Edit Chef:</h1>
            </div>
            <div class="card-body">
                <form method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{$chef->first_name}}" >
                    </div>                                      


                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_nam"  value="{{$chef->last_nam}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$chef->address}}">
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$chef->email}}">
                    </div>                                      


                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" value="{{$chef->contact_number}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Textarea" rows="3" name="description" >{{$chef->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Year Of Experience</label>
                        <input type="number" class="form-control" name="year_of_experience" value="{{$chef->year_of_experience}}">
                    </div>  

                    <div class="mb-3">
                        <label class="form-label w-100">Image</label>
                        <input   class="w-full px-2 py-2 text-gray-700 " id=""  name="img" type="file"  placeholder="" >                
                        <img src="{{ asset('Images/chef/'.$chef->img) }}" alt="img" width="160px">
                        
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection