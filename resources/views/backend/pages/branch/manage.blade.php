@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Manage All Branch</h4>
		<p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
									<th scope="col">Branch Name</th>
									<th scope="col">Branch Bangla Name</th>
									<th scope="col">Address Line-1</th>
									<th scope="col">Address Line-2</th>
									<th scope="col">Phone No</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach( $branchs as $branch )
								<tr>
									<th scope="row">{{ $i }}</th>
									<td>{{ $branch->name }}</td>
									<td>{{ $branch->bangla_name }}</td>
									<td>{{ $branch->address_line1 }}</td>
									<td>{{ $branch->address_line2 }}</td>
									<td>{{ $branch->phone }}</td>
									<td>
										@if( $branch->status == 1 )
											<span class="badge badge-dark">Active</span>
										@elseif( $branch->status == 2 )	
											<span class="badge badge-danger">Inactive</span>
										@endif	
									</td>
									<td>
										<div class="action_bar">
											<a href="{{ route('branch.edit', $branch->id) }}"><i class="fas fa-edit"></i></a>
											<a href="" data-toggle="modal" data-target="#delete{{ $branch->id }}"><i class="fas fa-trash"></i></a>
										</div>
								<!-- Modal -->
								<div class="modal fade" id="delete{{ $branch->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete This Branch???</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-footer">
								      	
								      	<form action="{{ route('branch.destroy', $branch->id) }}" method="POST">
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
						<!-- manage part end -->
					</div>
		        </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection