@extends('Layout.AdminSidebar')
@section('Page_Content')

<div class="row" style="margin: auto; justify-content:center;">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3">Edit Menue:</h1>
            </div>
            <div class="card-body">
                <form method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$menue->title}} " >
                    </div>                                      
                
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3">{{$menue->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" value="{{$menue->price}}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Select The Catagory:</label>
                        <select class="form-control" id="catagory" name="catagory_id">
                          @foreach ($catagories as $catagory)
                              <option class="text-black " value="{{$catagory->id}}">{{$catagory->title}}</option>
                          @endforeach
                          </select>
                      </div>

                    
                    <div class="mb-3">
                        <label class="form-label w-100"> Change Image</label>                 
                            <input   class="w-full px-2 py-2 text-gray-700 " id=""  name="img" type="file"  placeholder="" >                
                            <img src="{{ asset('Images/menue/'.$menue->img) }}" alt="img" width="160px">
                    </div>

                    
                    <button type="submit" value="post" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('#catagories').select2({
           //  placeholder : "Select Country",
     
        });
    });


       
$("document").ready(function(){
       setTimeout(function(){
           $("#alert").remove();
       },5000);
});


</script>