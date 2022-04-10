@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Edit Course</h4>
		<p class="mg-b-0"></p>
	</div>
</div>
<div class="br-pagebody">
	<div class="row">
		<div class="col-lg-12">
			<!-- main body part start -->
			<div class="card bd-0 shadow-base">
		        <div class="pd-25">
					<!-- body content start -->
					<form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
			            <div class="row">

			            	<!-- 1st row -->
				            <div class="col-lg-3">
				                <div class="form-group">
				                	<label class="form-control-label">Course Name [ English ]: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="english_title" required="required" value="{{ $course->english_title }}">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Intro Video URL:</label>
					                <input class="form-control" type="text" name="intro_video" required="required" value="{{ $course->intro_video }}">
				                </div>
				                
				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Course Duration: <span class="tx-danger">*</span></label>
									<input class="form-control" type="text" name="course_duration" required="required" value="{{ $course->course_duration }}">
				                </div>

				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Course Motivation:</label>
									<textarea class="form-control" name="motivational_content" rows="5">{{ $course->motivational_content }}</textarea>
				                </div>
				            </div>

				            <!-- 2nd row -->
				            <div class="col-lg-3">
				                <div class="form-group">
				                	<label class="form-control-label">Course Name [ Bangla ]:</label>
				                	<input class="form-control" type="text" name="bangla_title" required="required" value="{{ $course->bangla_title }}">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Total Graduate Number: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="graduate_number" required="required" value="{{ $course->graduate_number }}">
				                </div>
				                
				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Coupon Status:</label>
				                  	<select name="coupon_status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1" @if( $course->coupon_status ==1 ) selected @endif >Active</option>
										<option value="2" @if( $course->coupon_status ==2 ) selected @endif >Inactive</option>
									</select>
				                </div>

				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Course Opportunity:</label>
									<textarea class="form-control" name="course_oppertunity" rows="5">{{ $course->course_oppertunity }}</textarea>
				                </div>
				            </div>

				            <!-- 3rd row -->
				            <div class="col-lg-3">
				                <div class="form-group">
				                	<label class="form-control-label">Price [ In English ]: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="price" required="required" value="{{ $course->price }}">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Total Lecture: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="total_lecture" required="required" value="{{ $course->total_lecture }}">
				                </div>
				                
				                <div class="form-group mg-b-10-force">
				                  <label class="form-control-label">Course Active/Inactive Status:</label>
				                  	<select name="status" class="form-control select2">
										<option value="1">Please Select Status</option>
										<option value="1" @if( $course->status == 1 ) selected @endif >Active</option>
										<option value="2" @if( $course->status == 2 ) selected @endif >Inactive</option>
									</select>
				                </div>

				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Curriculum Description:</label>
									<textarea class="form-control" name="curriculum_description" rows="5">{{ $course->curriculum_description }}</textarea>
				                </div>
				            </div>

				            <!-- 4th row -->
				            <div class="col-lg-3">
				                <div class="form-group">
				                	<label class="form-control-label">Price [ In Bangla ]: <span class="tx-danger">*</span></label>
				                	<input class="form-control" type="text" name="bangla_price" required="required" value="{{ $course->bangla_price }}">
				                </div>
				                <div class="form-group">
					                <label class="form-control-label">Class Hour: <span class="tx-danger">*</span></label>
					                <input class="form-control" type="text" name="class_hour" required="required" value="{{ $course->class_hour }}">
				                </div>
				                
				                <div class="form-group">
				                	<label for="">Course Thumbnail</label>
				                	<input type="file" name="image" class="form-control-file">
				                </div>

				                <div class="form-group mg-b-10-force">
									<label class="form-control-label">Course Requirment:</label>
									<textarea class="form-control" name="course_requirment" rows="5">{{ $course->course_requirment }}</textarea>
				                </div>
				            </div>
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="editcourse" class="btn btn-teal" value="Update Course">
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