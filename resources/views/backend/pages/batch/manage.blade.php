@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Manage All the Batch of Admission Going On. </h4>
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
									<th scope="col">Batch Name</th>
									<th scope="col">Admission Status</th>
									<th scope="col">Course Name</th>
									<th scope="col">Mentor Name</th>
									<th scope="col">Branch Name</th>
									<th scope="col">Class Starting Date</th>
									<th scope="col">Batch Type</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach( $batchs as $batch )
								<tr>
									<th scope="row">{{ $i }}</th>
									<td>{{ $batch->batch_name }}</td>
									
									<td>
										@if( $batch->admission_status == 1 )
											<span class="badge badge-info">Admission Going On </span>
										@elseif( $batch->admission_status == 2 )	
											<span class="badge badge-danger">Admission Close</span>
										@endif
									</td>

									<td>{{ $batch->course->english_title }}</td>
									<td>{{ $batch->mentor->fullname }}</td>
									<td>{{ $batch->branch->name }}</td>
									<td>{{ $batch->starting_date }}</td>
									 
									<td>
										@if( $batch->batch_type == 1 )
											<span class="badge badge-success">Online Batch</span>
										@elseif( $batch->batch_type == 2 )	
											<span class="badge badge-dark">Offline Batch</span>
										@endif	
									</td>

									<td>
										@if( $batch->status == 1 )
											<span class="badge badge-dark">Active</span>
										@elseif( $batch->status == 2 )	
											<span class="badge badge-danger">Inactive</span>
										@endif	
									</td>
									

									<td>
										<div class="action_bar">
											<a href="{{ route('batch.edit', $batch->id) }}"><i class="fas fa-edit"></i></a>
											<a href="" data-toggle="modal" data-target="#delete{{ $batch->id }}"><i class="fas fa-trash"></i></a>
										</div>

										<!-- Modal -->
										<div class="modal fade" id="delete{{ $batch->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											    <div class="modal-content">
												    <div class="modal-header">
												        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete This Coupon Code???</h5>
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												        <span aria-hidden="true">&times;</span>
												        </button>
												    </div>
											    	<div class="modal-footer">
											      	
												      	<form action="{{ route('batch.destroy', $batch->id) }}" method="POST">
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
						@if( $batchs->count() == 0 )
							<div class="alert alert-info">No Batch Added Yet.</div>
						@endif
						<!-- manage part end -->
					</div>
		        </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection