@extends('Layout.AdminSidebar')
@section('Page_Content')
				

					
					<div class="row">

						<div class="col-12 col-xl-12">
                            <div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">Form Layouts</h1>		
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
												<th scope="col">Message</th>
												<th scope="col">Action</th>
										
											</tr>
										</thead>
										<tbody>
											<tr>
												@foreach ($contacts as $contact)
														<td>{{$contact->id}}</td>
														<td>{{$contact->first_name}}</td>
														<td>{{$contact->last_name}}</td>
														<td>{{$contact->email}}</td>
														<td>{{$contact->contact_number}}</td>							
														<td>{{$contact->message}}</td>
													
														<td>                                           
															{{-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> --}}
															<a href="{{url('/contact/delete',$contact->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
															
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
                    