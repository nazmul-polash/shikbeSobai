@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Create New Course</h4>
		<p class="mg-b-0"></p>
	</div>
</div>
<div class="br-pagebody">
	<div class="row">
		<div class="col-lg-12">
			<!-- main body part start -->
			<div class="card bd-0 shadow-base">
		        <div class="pd-25">
				@include('backend.flash-massage')
					<!-- body content start -->
					<form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
						@csrf 
			            <div class="row">

			            	<!-- 1st row -->
				            <div class="col-lg-4">
				                <div class="form-group">
				                	<label class="form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="code" required="required">
				                </div>

				                <div class="form-group">
					                <label class="form-control-label">Fixed Value [BDT / Taka]:</label>
					                <input class="form-control" type="text" name="fixed_value">
				                </div>
				            </div>

				            <!-- 2nd row -->
				            <div class="col-lg-4">

				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Discount Type:</label>
				                  	<select name="discount_type" class="form-control select2">
										<option value="1">Please Select The Discount Type</option>
										<option value="1">Fixed Amount</option>
										<option value="2">Percent Off</option>
									</select>
				                </div>

				                <div class="form-group">
				                	<label class="form-control-label">Percentage Off [%]:</label>
				                	<input class="form-control" type="text" name="percent_value">
				                </div>
				            </div>

				            <!-- 3rd row -->
				            <div class="col-lg-4">
				                
				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Course Type:</label>
				                  	<select name="course_type" class="form-control select2">
										<option value="1">Please Select the Course type</option>
										<option value="1">Online Course</option>
										<option value="2">Offline Off</option>
									</select>
				                </div>

				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Active/Inactive Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1">Active</option>
										<option value="2">Inactive</option>
									</select>
				                </div>

				            </div>
				            
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="addcoupon" class="btn btn-teal" value="Add Coupon Codes">
			              	<button class="btn btn-secondary">Cancel</button>
			            </div>
			        </form>
					<!-- body content end -->
		      </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection