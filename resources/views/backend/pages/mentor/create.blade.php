@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Add New Mentor</h4>
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
					<form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
			            <div class="row">
				            <div class="col-lg-4">
				                <div class="form-group">
				                	<label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="fullname" required="required">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Email: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="email" required="required">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="phone" required="required">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">OverView:</label>
									<textarea class="form-control" name="overview" rows="5"></textarea>
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address" required="required">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="designation" required="required">
				                </div>
				                <div class="form-group mg-b-10-force">
				                	<label class="form-control-label">Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1">Active</option>
										<option value="2">Inactive</option>
									</select>
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Profile Picture: <span class="tx-danger">*</span></label>
									<input class="form-control-file" type="file" name="image">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Fiverr: <span class="tx-danger">*</span></label>
									<input class="form-control-file" type="file" name="fiverr_img">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Fiverr URL: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="fiverr_url">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Upwork: <span class="tx-danger">*</span></label>
									<input class="form-control-file" type="file" name="upwork_img">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Upwork URL: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="upwork_url">
				                </div>
				                
				            </div>

			            </div>
			            <div class="offset-4">
				            <div class="form-layout-footer">
				              	<input type="submit" name="addmentor" class="btn btn-teal" value="Add New Mentor">
				              	<button class="btn btn-secondary">Cancel</button>
				            </div>
			            </div>
			        </form>
					<!-- body content end -->
		      </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection