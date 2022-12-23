@extends('Layout.AdminSidebar')
@section('Page_Content')


<div class="row" style="margin: auto; justify-content:center;">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3">Catagory Edit :</h1>
                
            </div>
            <div class="card-body">
                <form method="Post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$catagory->title}}">
                    </div>
                
                    <button type="submit" value="post" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection