@extends('Layout.AdminSidebar')
@section('Page_Content')
			
					<div class="row">
						<div class="col-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">Insert Table :</h1>
								</div>
								<div class="card-body">
									<form method="post" action="/table">
										@csrf
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input type="text" class="form-control" name="name" >
										</div>                                      
									
										
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="inputState">Avilable</label>
                                            <select id="inputState" class="form-control" name="status">
                                                <option selected value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>

										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>



						<div class="col-12 col-xl-8">
                            <div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">All Tables:</h1>		
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												
												<th scope="col">ID</th>
												<th scope="col">Name</th>
												<th scope="col">Statuse</th>											
												{{-- <th scope="col">Slug</th> --}}
												<th scope="col">Action</th>
										
											</tr>
										</thead>
										<tbody>
											<tr>
												@foreach ($tables as $table) 
													<th scope="row">{{$table->id}}</th>
													<td>{{$table->name}}</td>
												
													
														@if ($table->status==1)
													     	<td>Avilable</td>
														@else
														<td>Unavilable</td>	 
														@endif
													

													<td>                                           
														<a href="{{url('/table/edit',$table->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
														<a href="{{url('/table/delete',$table->id)}}" onclick="return confirm('Are you sure to delete this record !');"><i class="align-middle" data-feather="trash"></i></a>
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
                    