@extends('Layout.AdminSidebar')
@section('Page_Content')

					<div class="row">
						<div class="col-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">Insert New Chef:</h1>
								</div>
								<div class="card-body">
									<form method="Post" enctype="multipart/form-data" action="/chef">
										@csrf
										<div class="mb-3">
											<label class="form-label">First Name</label>
											<input type="text" class="form-control" name="first_name" >
										</div>                                      


                                        <div class="mb-3">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" name="last_nam" >
										</div>

										<div class="mb-3">
											<label class="form-label">Address</label>
											<input type="text" class="form-control" name="address" >
										</div>


                                        <div class="mb-3">
											<label class="form-label">Email</label>
											<input type="text" class="form-control" name="email" >
										</div>                                      
	

                                        <div class="mb-3">
											<label class="form-label">Contact Number</label>
											<input type="text" class="form-control" name="contact_number">
										</div>

										<div class="mb-3">
											<label class="form-label">Description</label>
											<textarea class="form-control" placeholder="Textarea" rows="3" name="description" ></textarea>
										</div>

										<div class="mb-3">
											<label class="form-label">Year Of Experience</label>
											<input type="number" class="form-control" name="year_of_experience">
										</div>  

										<div class="mb-3">
											<label class="form-label w-100">Image</label>
											<input type="file" name="img">
											
										</div>

										
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>



						<div class="col-12 col-xl-8">
                            <div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">All Chefes :</h1>		
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">First Name</th>
												<th scope="col">Last Name</th>
												<th scope="col">Email</th>
												<th scope="col">Contact Number</th>		
												<th scope="col">Description</th>
												<th scope="col">Year of Experience</th>										
												<th scope="col">Image</th>
												<th scope="col">Action</th>
										
											</tr>
										</thead>
										<tbody>
											<tr>
												@foreach ($chefes as $chef)
											
														<td>{{$chef->id}}</td>
														<td>{{$chef->first_name}}</td>
														<td>{{$chef->last_nam}}</td>
														<td>{{$chef->email}}</td>							
														<td>{{$chef->contact_number}}</td>
														<td>{{$chef->description}}</td>
														<td>{{$chef->year_of_experience}}</td>
														<td>
															<div class="row g-0 align-items-center">
																<div >
																	<img src="{{ asset('Images/chef/'.$chef->img) }}" alt="img" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
																</div>			
															</div>
														</td>
														<td>                                           
															<a href="{{url('/chef/edit',$chef->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
															<a href="{{url('/chef/delete',$chef->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
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
                    