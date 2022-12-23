@extends('Layout.AdminSidebar')
@section('Page_Content')

					<div class="row">
						<div class="col-12 col-xl-4">
							<div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">Insert Catagory :</h1>
									
								</div>
								<div class="card-body">
									<form method="Post">
										 @csrf
										<div class="mb-3">
											<label class="form-label">Title</label>
											<input type="text" class="form-control" name="title" >
										</div>
									
										<button type="submit" value="post" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

						<div class="col-12 col-xl-8">
                            <div class="card">
								<div class="card-header">
									<h1 class="h3 mb-3">All Catagory :</h1>
									
								</div>
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">Title</th>
												{{-- <th scope="col">Slug</th> --}}
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												@foreach ($catagories as $catagory) 
												<td scope="row">{{$catagory->id}}</td>
												<td>{{$catagory->title}}</td>
												
												<td>    
													
													<a  href="{{url('/catagory/edit',$catagory->id)}}" ><i class="align-middle" data-feather="edit-2"></i></a>
                                                    <a  href="{{url('/catagory/delete',$catagory->id)}}" onclick="return confirm('Are you sure to delete this record !');" ><i class="align-middle" data-feather="trash"></i></a>
												</div> 
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
{{-- 
 <script>
	 function takeid(btn){
		// var catagory_id= $this.value();
		alert(btn.id);

	 }
 </script> --}}
   
 {{-- @section('scripts') --}}
 {{-- <script>
   $(document).ready(function(){
       $(document).on('click','.editbutton',function(){
          var catagoryid = $(this).val();
		//   alert(catagoryid);
		$('#editModel').modal('show');
	   });
   });
</script>
 @endsection
 <script>
	//  function doDelete(){
	// 	// var result=confirm("Are you sure to delete theis record");
    //     //     if(result){
    //     //        return true;
    //     //    }else{
	// 	//    return false;
	// 	// }

	// 	return confirm("Are you sure to delete theis record");
	//  }
 </script> --}}