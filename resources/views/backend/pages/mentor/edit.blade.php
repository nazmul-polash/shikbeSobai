@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Edit Mentor Information</h4>
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
					<form action="{{ route('mentor.update', $mentor->id ) }}" method="POST" enctype="multipart/form-data">
						@csrf
			            <div class="row">
				            <div class="col-lg-4">
				                <div class="form-group">
				                	<label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="fullname" required="required"
				                	value="{{ $mentor->fullname }}">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Email: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="email" required="required" value="{{ $mentor->email }}">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="phone" required="required" value="{{ $mentor->phone }}">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">OverView:</label>
									<textarea class="form-control" name="overview" rows="5">{{ $mentor->overview }}</textarea>
				                </div>
				            </div>

				            <div class="col-lg-4">
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Address: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="address" required="required" value="{{ $mentor->address }}">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Designation: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="designation" required="required" value="{{ $mentor->designation }}">
				                </div>
				                <div class="form-group mg-b-10-force">
				                	<label class="form-control-label">Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1" @if( $mentor->status == 1 ) selected @endif >Active</option>
										<option value="2" @if( $mentor->status == 2 ) selected @endif >Inactive</option>
									</select>
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Profile Picture: <span class="tx-danger">*</span></label>
									<br>
									@if( $mentor->profile_pic == NULL )
										<img src="{{ asset('backend/img/mentor/default.png') }}" width="100" alt="">
									@else
										<img src="{{ asset('backend/img/mentor/' . $mentor->profile_pic ) }}" width="100" alt="">
									@endif
									<br><br>
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
									<input class="form-control" type="text" name="fiverr_url" value="{{ $mentor->fiverr_url }}">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Upwork: <span class="tx-danger">*</span></label>
									<input class="form-control-file" type="file" name="upwork_img">
				                </div>
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Upwork URL: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="upwork_url" value="{{ $mentor->upwork_url }}">
				                </div>
				                
				            </div>

			            </div>
			            <div class="offset-4">
				            <div class="form-layout-footer">
				              	<input type="submit" name="updatementor" class="btn btn-teal" value="Update Mentor Information">
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