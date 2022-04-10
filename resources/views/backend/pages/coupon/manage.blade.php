@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Manage All Coupon Code</h4>
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
									<th scope="col">Coupon Code</th>
									<th scope="col">Coupon Type</th>
									<th scope="col">Course Type</th>
									<th scope="col">Fixed Amount</th>
									<th scope="col">Percent Off</th>
									<th scope="col">Status</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach( $coupons as $coupon )
								<tr>
									<th scope="row">{{ $i }}</th>
									
									<td>{{ $coupon->code }}</td>

									<td>
										@if( $coupon->discount_type == 1 )
											<span class="badge badge-info">Fixed Amount</span>
										@elseif( $coupon->discount_type == 2 )	
											<span class="badge badge-warning">Percentage Off</span>
										@endif
									</td>

									<td>
										@if( $coupon->course_type == 1 )
											<span class="badge badge-info">Online Course</span>
										@elseif( $coupon->course_type == 2 )	
											<span class="badge badge-warning">Offline Course</span>
										@endif
									</td>

									<td>
										@if( !empty($coupon->fixed_value) )
											{{$coupon->fixed_value}} BDT
										@else	
											-/-
										@endif
									</td>
									<td>
										@if( !empty($coupon->percent_value) )
											{{$coupon->percent_value}}%
										@else	
											-/-
										@endif
									</td>

									<td>
										@if( $coupon->status == 1 )
											<span class="badge badge-dark">Active</span>
										@elseif( $coupon->status == 2 )	
											<span class="badge badge-danger">Inactive</span>
										@endif	
									</td>

									<td>
										<div class="action_bar">
											<a href="{{ route('coupon.edit', $coupon->id) }}"><i class="fas fa-edit"></i></a>
											<a href="" data-toggle="modal" data-target="#delete{{ $coupon->id }}"><i class="fas fa-trash"></i></a>
										</div>

										<!-- Modal -->
										<div class="modal fade" id="delete{{ $coupon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											    <div class="modal-content">
												    <div class="modal-header">
												        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Delete This Coupon Code???</h5>
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												        <span aria-hidden="true">&times;</span>
												        </button>
												    </div>
											    	<div class="modal-footer">
											      	
												      	<form action="{{ route('coupon.destroy', $coupon->id) }}" method="POST">
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
						@if( $coupons->count() == 0 )
							<div class="alert alert-info">No Coupon Code Added Yet.</div>
						@endif
						<!-- manage part end -->
					</div>
		        </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection