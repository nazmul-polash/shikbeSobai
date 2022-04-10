@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Create New Course Curriculum</h4>
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
					<form action="{{ route('curriculum.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-lg-6">
								<div class="form-gorup">
									<label>Course Title</label>
									<select name="course_id" id="" class="form-control" required="required">
										<option value="0">Please Select the Course Title</option>
										@foreach ($courses as $course)
											<option value="{{ $course->id }}">{{ $course->english_title }}</option>
										@endforeach
									</select>
								</div>
							</div>	

							<div class="col-lg-6">
								<div class="form-group">
									<label>Status</label>
									<select name="status" id="" class="form-control">
										<option value="1">Please Select the status</option>
										<option value="1">Active</option>
										<option value="2">Inactive</option>
									</select>
								</div>
							</div>
						</div>

			            <div class="row">

			            	<!-- 1st step -->
				            <div class="col-lg">
				                <div class="form-group">
				                	<label>Step One Title [ English ]:</label>
				                	<input class="form-control" type="text" name="one_en" required="required">
				                </div>
				                
				                <div class="form-group">
									<label>Title [ Bangla ]:</label>
									<input class="form-control" type="text" name="one_bn" required="required">
				                </div>

				                <div class="form-group">
									<label>Step One Description:</label>
									<textarea class="form-control" name="one_desc" rows="3"></textarea>
				                </div>
				            </div>

				            <!-- 2nd step -->
				            <div class="col-lg">
				                <div class="form-group">
				                	<label>Step Two Title [ English ]:</label>
				                	<input class="form-control" type="text" name="two_en" required="required">
				                </div>
				                
				                <div class="form-group">
									<label>Title [ Bangla ]:</label>
									<input class="form-control" type="text" name="two_bn" required="required">
				                </div>

				                <div class="form-group">
									<label>Step Two Description:</label>
									<textarea class="form-control" name="two_desc" rows="3"></textarea>
				                </div>
				            </div>

				            <!-- 3rd three -->
				            <div class="col-lg">
				                <div class="form-group">
				                	<label>Step Three Title [ English ]:</label>
				                	<input class="form-control" type="text" name="three_en" required="required">
				                </div>
				                
				                <div class="form-group">
									<label>Title [ Bangla ]:</label>
									<input class="form-control" type="text" name="three_bn" required="required">
				                </div>

				                <div class="form-group">
									<label>Step Three Description:</label>
									<textarea class="form-control" name="three_desc" rows="3"></textarea>
				                </div>
				            </div>

				            <!-- 4th row -->
				            <div class="col-lg">
				                <div class="form-group">
				                	<label>Step Four Title [ English ]:</label>
				                	<input class="form-control" type="text" name="four_en" required="required">
				                </div>
				                
				                <div class="form-group">
									<label>Title [ Bangla ]:</label>
									<input class="form-control" type="text" name="four_bn" required="required">
				                </div>

				                <div class="form-group">
									<label>Step Four Description:</label>
									<textarea class="form-control" name="four_desc" rows="3"></textarea>
				                </div>
				            </div>

				            <!-- 5th row -->
				            <div class="col-lg">
				                <div class="form-group">
				                	<label>Step Five Title [ English ]:</label>
				                	<input class="form-control" type="text" name="five_en" required="required">
				                </div>
				                
				                <div class="form-group">
									<label>Title [ Bangla ]:</label>
									<input class="form-control" type="text" name="five_bn" required="required">
				                </div>

				                <div class="form-group">
									<label>Step Five Description:</label>
									<textarea class="form-control" name="five_desc" rows="3"></textarea>
				                </div>
				            </div>
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="addcurriculum" class="btn btn-teal" value="Publish Course Curriculum">
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