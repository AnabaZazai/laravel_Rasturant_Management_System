@extends('Layout.AdminSidebar')
@section('Page_Content')

    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Tables</h1>

        <div class="row">
            <div class="col-md-4 col-xl-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                        
                    </div>



                    <div class="card-body">

                        <div class="row">
                            @foreach ($tables as $table)
                            <div class="col-md-2 text-center">
                                <div class="card bg-light py-2 py-md-3 border">
                                    <div class="card-body">
                                        <h5>{{$table->name}}</h5>  
                                        <img src="{{ asset('Images/34345498.jpg') }}" alt="" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker" >
                                          
                                        <div class="mb-2">
                                            <i class="align-middle mr-2" data-feather="printer"></i> <span class="align-middle"></span>
                                            <a href="{{url('/table/edit',$table->id)}}"> <i class="align-middle mr-2" data-feather="edit"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                           
                        </div>

                        {{-- <form method="Post" enctype="multipart/form-data"> --}}

                    {{-- <div class="mb-3">

                        <label class="form-label" for="">Select The Table:</label>
                        <select class="form-control" id="table" name="table_id">
                          @foreach ($tables as $table)
                              <option class="text-black " value="{{$table->id}}">{{$table->name}}</option>
                          @endforeach
                          </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="">Select The Waiter:</label>
                        <select class="form-control" id="waiter" name="waiter_id">
                          @foreach ($waiters as $waiter)
                              <option class="text-black " value="{{$waiter->id}}">{{$waiter->first_name}}</option>
                          @endforeach
                          </select>
                      </div> --}}

                    </div>

              
                </div>
            </div>

            <div class="col-md-8 col-xl-6">
                <div class="card">
                    <div class="card-header flex">

                        <h5 class="card-title mb-0">Avilable Foods</h5>
                    

{{-- Model start
                        <div class="container mt-5">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModel"> Salse</button>
                             <div class="modal" id="editModel">
                                 <div class="modal-dialog">
                                     <div class="modal-contact">
                                        <div class="card">
                                            <div class="card-header">
                                                <h1 class="h3 mb-3">Catagory :</h1>
                                                
                                            </div>
                                            <div class="card-body">
                                                <form method="Post">
                                                     @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" >
                                                    </div>
                                                
                                                    <button type="submit" value="post" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                    
                                     </div>
                                 </div>
                             </div>
    Mdel End                    </div> --}}






                    </div>
                    <div class="card-body h-100">

                        <div class="col-12 col-lg-12">
							<div class="card">
								<div class="card-header">
                                   
									<ul class="nav nav-pills card-header-tabs pull-right" role="tablist" id="pills-tab" role="tablist">
                                        @foreach($catagories as $catagory)
                                           
                                        <li class="nav-item">
                                                <a  class="nav-link {{$catagory->title === "xgbdf" ? "active" : ""}}" 
                                                    data-toggle="pill"
                                                     id="{{$catagory->title}}-tab" 
                                                     href="#{{$catagory->title}}" 
                                                     role="tab" 
                                                     aria-controls="{{$catagory->title}}"
                                                      aria-selected="true">{{$catagory->title}}</a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tab-2">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled" data-toggle="tab" href="#tab-3">Disabled</a>
                                            </li> --}}
                                       @endforeach  
									</ul>
								</div>
								<div class="card-body">
									<div class="tab-content" id="pills-tabContent">
                                        @foreach($catagories as $catagory)
                                        <div class="tab-pane {{$catagory->title === "xgbdf" ? "active show" : ""}} " role="tabpanel"  id="{{$catagory->title}}">
                                            
                                                @foreach($catagory->menue as $menue)
                                                <form method="post" class="" action="/menuesale">
                                                    @csrf 

                                                            <div class=" h-100 "> 
                                                                <div class=" d-flex flex-row justify-content-center">
                                                                    {{-- <div class="align-self-end mb-2">
                                                                        <input type="checkbpx" name="menue_id[]"  id="menue">
                                                                     </div> --}}
                                                                     <input  id=""   type="hidden" required="" placeholder="" value="{{$menue->id}}" name="menue_id" >
                                                                <img src="{{ asset('Images/menue/'.$menue->img) }}" alt="{{$menue->title}}"
                                                                width="130"
                                                                height="130" >
                                                                <h5>{{$menue->price}} $</h5>
                                                                    <div >
                                                                        <input type="number" placeholder="Quantity" name="quantity"   width="100" height="100">
                                                                        <button type="submit" > select</button>
                                                                    </div>
                                                                  
                                                            </div>
                                                 </form>
                                                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                                          <br>
                                                     </div>
                                                @endforeach
                                             </div> 
                                        
                                        @endforeach
                                              
									</div>
								</div>
							</div>
						</div>
                        <hr />
                    </div>    
                </div> 
            </div>

            
		{{-- <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-3">Make Sale</h1>		
                </div>
              
            </div>

        </div> --}}


        </div>
    </div>




    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Todays All Sales</h1>

        <div class="row">
            <div class="col-md-4 col-xl-8">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0"></h5>
                        
                    </div>


{{-- 
                    <div class="card-body">
                        <form method="Post" enctype="multipart/form-data">

                    <div class="mb-3">

                        <label class="form-label" for="">Select The Table:</label>
                        <select class="form-control" id="table" name="table_id">
                          @foreach ($tables as $table)
                              <option class="text-black " value="{{$table->id}}">{{$table->name}}</option>
                          @endforeach
                          </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="">Select The Waiter:</label>
                        <select class="form-control" id="waiter" name="waiter_id">
                          @foreach ($waiters as $waiter)
                              <option class="text-black " value="{{$waiter->id}}">{{$waiter->first_name}}</option>
                          @endforeach
                          </select>
                      </div>

                    </div> --}}

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Catagory</th>
                                    {{-- <th scope="col">Slug</th> --}}
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                            
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($salemenues as $salemenue)
                                            <td >{{$salemenue->id}}</td>
                                            <td>{{$salemenue->first_name}}</td>
                                            <td>{{$salemenue->last_nam}}</td>
                                            <td>{{$salemenue->address}}</td>							
                                            <td>{{$salemenue->contact_number}}</td>
                                            <td>
                                                <div class="row g-0 align-items-center">
                                                    <div >
                                                        <img src="{{ asset('Images/salemenue/'.$salemenue->img) }}" alt="img" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                                    </div>			
                                                </div>
                                            </td>
                                            <td>                                           
                                                <a href="{{url('/salemenue/edit',$salemenue->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="{{url('/salemenue/delete',$salemenue->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
                                            </td>
                                
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

              
                </div>
            </div>

            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-header flex">

                        <h5 class="card-title mb-0">Create Sale</h5>
                    </div>
                      
                    <div class="card-body">
                        <form method="Post" enctype="multipart/form-data">

                            <div class="mb-3">

                                <label class="form-label" for="">Select The Table:</label>
                                <select class="form-control" id="table" name="table_id">
                                  @foreach ($tables as $table)
                                      <option class="text-black " value="{{$table->id}}">{{$table->name}}</option>
                                  @endforeach
                                  </select>
                              </div>
        

                      <div class="mb-3">
                        <label class="form-label" for="">Select The Waiter:</label>
                        <select class="form-control" id="waiter" name="waiter_id">
                          @foreach ($waiters as $waiter)
                              <option class="text-black " value="{{$waiter->id}}">{{$waiter->first_name}}</option>
                          @endforeach
                          </select>
                      </div>

                      

                      <div class="mb-3">
                        <label class="form-label">Total Quantity</label>
                        <input type="text" class="form-control" name="total_quantity" >
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Total</label>
                        <input type="text" class="form-control" name="totle" >
                    </div>


                      <div class="mb-3 col-md-4">
                        <label class="form-label" for="inputState">Payment Statuse</label>
                        <select id="inputState" class="form-control" name="status">
                            <option selected value="1">paid</option>
                            <option value="0">unpaid</option>
                        </select>
                    </div>

                    
                    <button type="submit" value="post" class="btn btn-primary">Submit</button>
                    </div>
                </div> 
            </div>

            
		{{-- <div class="col-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-3">Make Sale</h1>		
                </div>
              
            </div>

        </div> --}}


        </div>
    </div>


@endsection
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('#waiter').select2({
           //  placeholder : "Select Country",
     
        });
    });

    $(document).ready(function(){
        $('#table').select2({
           //  placeholder : "Select Country",
     
        });
    });
       
$("document").ready(function(){
       setTimeout(function(){
           $("#alert").remove();
       },5000);
});


</script>