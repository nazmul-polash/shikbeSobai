@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Create New Branch</h4>
		<p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
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
					<form action="{{ route('branch.store') }}" method="POST">
						@csrf
			            <div class="row">
				            <div class="col-lg-4">
				                <div class="form-group">
				                	<label class="form-control-label">Branch Name: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="name" placeholder="Enter Branch Name">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group">
					                <label class="form-control-label">Branch Name in Bangla: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="bangla_name" required="required" placeholder="Enter Bangla Name">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1">Active</option>
										<option value="2">Inactive</option>
									</select>
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address Line-1: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address1" required="required" placeholder="Enter address">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address Line-2: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address2" required="required" placeholder="Enter address">
				                </div>
				            </div>
				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Phone No: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="phone" placeholder="Enter Phone">
				                </div>
				            </div>
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="addbranch" class="btn btn-teal" value="Add New Branch">
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