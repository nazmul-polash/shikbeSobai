@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Manage All Mentors</h4>
		<p class="mg-b-0"></p>
	</div>
</div>
<div class="br-pagebody">
	<div class="row">
		<div class="col-lg-12">
			<!-- main body part start -->
			<div class="card bd-0 shadow-base">
				@include('backend.flash-massage')
		        <div class="d-md-flex justify-content-between pd-25">
		        	<div class="bd bd-gray-300 rounded table-responsive">
						<!-- manage part start -->
						<table class="table table-bordered table-hover table-custom">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Serial</th>
									<th scope="col">Thumbnail</th>
									<th scope="col">Full Name</th>
									<th scope="col">Designation</th>
									<th scope="col">Phone</th>
									<th scope="col">Address</th>
									<th scope="col">Email</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach( $mentors as $mentor )
								<tr>
									<th scope="row">{{ $i }}</th>
									<td>
										@if( $mentor->profile_pic == NULL )
											<img src="{{ asset('backend/img/mentor/default.png') }}" width="40" alt="">
										@else
											<img src="{{ asset('backend/img/mentor/' . $mentor->profile_pic ) }}" width="40" alt="">
										@endif
									</td>
									<td>{{ $mentor->fullname }}</td>
									<td>{{ $mentor->designation }}</td>
									<td>{{ $mentor->phone }}</td>
									<td>{{ $mentor->address }}</td>
									<td>{{ $mentor->email }}</td>
									<td>
										@if( $mentor->status == 1 )
											<span class="badge badge-dark">Active</span>
										@elseif( $mentor->status == 2 )	
											<span class="badge badge-danger">Inactive</span>
										@endif	
									</td>
									<td>
										<div class="action_bar">
											<a href="{{ route('mentor.edit', $mentor->id) }}"><i class="fas fa-edit"></i></a>
											<a href="" data-toggle="modal" data-target="#delete{{ $mentor->id }}"><i class="fas fa-trash"></i></a>
										</div>
								<!-- Modal -->
								<div class="modal fade" id="delete{{ $mentor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete This Branch???</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-footer">
								      	
								      	<form action="{{ route('mentor.destroy', $mentor->id) }}" method="POST">
								      		@csrf
								      		<button type="submit" class="btn btn-danger">Confirm</button>
								      	</form>
								      		<a href="" class="btn btn-success">Cancel</a>
								      	
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Model end -->
									</td>
								</tr>
								@php $i++; @endphp
								@endforeach
							</tbody>
						</table>
						@if( $mentors->count() == 0 )
							<div class="alert alert-info">No Mentors Added Yet. Please Appoint a New Mentor.</div>
						@endif
						<!-- manage part end -->
					</div>
		        </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection