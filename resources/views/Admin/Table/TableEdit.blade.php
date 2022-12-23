@extends('Layout.AdminSidebar')
@section('Page_Content')

<div class="row" style="margin: auto; justify-content:center;">
    <div class="col-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 mb-3">Edit Table :</h1>
            </div>
            <div class="card-body">
                <form method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$table->name}}" >
                    </div>                                      
                
                    
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="inputState">Avilable</label>
                        <select id="inputState" class="form-control" name="status" >
                            <option selected value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection