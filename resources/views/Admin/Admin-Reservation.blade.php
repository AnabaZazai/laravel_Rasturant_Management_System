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
												<th scope="col">Date</th>
												<th scope="col">Gest Number</th>										
												<th scope="col">Table</th>
												<th scope="col">Action</th>
										
											</tr>
										</thead>
										<tbody>
												<tr>
													 @foreach($reservations as $resered)
														<td>{{$resered->id}}</td>
														<td>{{$resered->first_name}}</td>
														<td>{{$resered->last_name}}</td>
														<td>{{$resered->email}}</td>							
														<td>{{$resered->contact_number}}</td>
														<td>{{$resered->date}}</td>
														<td>{{$resered->guest_no}}</td>
														<td>{{$resered->table->name}}</td>
														<td>                                           
															{{-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> --}}
															<a href="{{url('/reserve/delete',$resered->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
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
                    