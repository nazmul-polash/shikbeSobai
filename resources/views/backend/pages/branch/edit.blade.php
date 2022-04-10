@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Edit Branch</h4>
		<p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
	</div>
</div>
<div class="br-pagebody">
	<div class="row">
		<div class="col-lg-12">
			<!-- main body part start -->
			<div class="card bd-0 shadow-base">
		        <div class="pd-25">
					<!-- body content start -->
					<form action="{{ route('branch.update', $branch->id) }}" method="POST">
						@csrf
			            <div class="row">
				            <div class="col-lg-4">
				                <div class="form-group">
				                	<label class="form-control-label">Branch Name: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="name" required="required" value="{{ $branch->name }}">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group">
					                <label class="form-control-label">Branch Name in Bangla: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="bangla_name" required="required" value="{{ $branch->bangla_name }}">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="">Please Select Status</option>
										<option value="1" @if($branch->status==1) selected @endif >Active</option>
										<option value="2" @if($branch->status==2) selected @endif >Inactive</option>
									</select>
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address Line-1: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address1" required="required" value="{{ $branch->address_line1 }}">
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address Line-2: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address2" required="required" value="{{ $branch->address_line2 }}">
				                </div>
				            </div>
				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Phone No: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="phone" required="required" value="{{ $branch->phone }}">
				                </div>
				            </div>
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="addbranch" class="btn btn-teal" value="Update Branch">
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