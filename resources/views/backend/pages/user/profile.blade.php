@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>My Profile</h4>
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
					<form action="" method="">
					    <div class="row">
					    	<div class="col-md-4 border-right">
					            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
					            	<img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU">
					            	<span class="font-weight-bold">Amelly</span>
					            	<span class="text-black-50">amelly12@bbb.com</span>
					            </div>
					        </div>

					        <div class="col-md-8">
				                <div class="d-flex justify-content-center">
				                    <h4>Edite Profile</h4>
				                </div>
			            		<div class="col-lg-8 offset-2">
			            			<div class="form-group">
			            				<label for="">Name:</label>
			            				<input type="text" name="name" class="form-control" placeholder="Enter your Name" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="">Email:</label>
			            				<input type="email" name="email" class="form-control" placeholder="Enter your Email" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="">Password:</label>
			            				<input type="password" name="password" class="form-control" placeholder="Enter your Password" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="">Re-Password:</label>
			            				<input type="password" name="password" class="form-control" placeholder="Confirm your Password" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="">Phone:</label>
			            				<input type="text" name="phone" class="form-control" placeholder="Enter your Phone" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<label for="">Address:</label>
			            				<input type="text" name="address" class="form-control" placeholder="Enter your Address" required="required" value="">
			            			</div>
			            			<div class="form-group">
			            				<input type="submit" name="editname" class="btn btn-dark" value="Save Profile">
			            			</div>

			            		</div>
					        </div>
					    </div>
					</form>
				</div>
				<!-- body content end -->
		    </div>
			<!-- main body part end -->
		</div>
	</div>
</div>

@endsection