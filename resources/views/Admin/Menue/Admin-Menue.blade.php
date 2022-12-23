@extends('Layout.AdminSidebar')
@section('Page_Content')
						
					<div class="row">
						<div class="col-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">Insert Menue:</h1>
								</div>
								<div class="card-body">
									<form method="Post" enctype="multipart/form-data">
										@csrf
										<div class="mb-3">
											<label class="form-label">Title</label>
											<input type="text" class="form-control" name="title" >
										</div>                                      
									
										<div class="mb-3">
											<label class="form-label">Description</label>
											<textarea class="form-control" name="description" rows="3"></textarea>
										</div>

                                        <div class="mb-3">
											<label class="form-label">Price</label>
											<input type="text" name="price" class="form-control" >
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
											<label class="form-label w-100">Image</label>
											<input type="file" name="img">
											
										</div>

										
										<button type="submit" value="post" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>



						<div class="col-12 col-xl-8">
                            <div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">All Menues :</h1>		
								</div>
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
												@foreach ($menues as $menue) 
														<td scope="row">{{$menue->id}}</td>
														<td>{{$menue->title}}</td>
														<td>{{$menue->description}}</td>
														<td>{{$menue->price}}</td>
														<td>{{$menue->catagory->title}}</td>
														<td>	
															<div class="row g-0 align-items-center">
																<div >
																	<img src="{{ asset('Images/menue/'.$menue->img) }}" alt="img" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
																</div>			
															</div>
													</td>
														{{-- <td>{{$menue->}}</td> --}}
														<td>                                           
															<a href="{{url('/menue/edit',$menue->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
														
															<a href="{{url('/menue/delete',$menue->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
														</td>
												
												</tr>
											@endforeach
											
										</tbody>
									</table>
                                </div>
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