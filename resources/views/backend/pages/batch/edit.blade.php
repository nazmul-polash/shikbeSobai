@extends('backend.layout.template')

@section('body')
<div class="br-pagetitle">
	<i class="icon ion-ios-home-outline"></i>
	<div>
		<h4>Edit the Batch</h4>
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
					<form action="{{ route('batch.update',$batch->id) }}" method="POST" enctype="multipart/form-data">
						@csrf 
			            <div class="row">

			            	<!-- 1st row -->
				            <div class="col-lg-3">
				                <div class="form-group">
				                	<label class="form-control-label">Batch Name:</label>
				                	<input class="form-control" type="text" name="batch_name" required="required" value="{{ $batch->batch_name }}">
				                </div>
				                <div class="form-group">
				                	<label class="form-control-label">Starting Date:</label>
				                	<input class="form-control" type="text" name="starting_date" required="required" value="{{ $batch->starting_date }}">
				                </div>
				                <div class="form-group">
				                	<label class="form-control-label">Facebook Group:</label>
				                	<input class="form-control" type="text" name="fb_group" required="required" value="{{ $batch->fb_group }}">
				                </div>
				                
				            </div>

				            <!-- 2nd row -->
				            <div class="col-lg-3">
				            	<div class="form-group">
					                <label class="form-control-label">Course Name:</label>
					                <select name="course_id" class="form-control select2">
					                	<option value="1">Please Select a Course</option>
					                	@foreach($courses as $course)
					                		<option value="{{ $course->id }}" @if($batch->course_id == $course->id) selected @endif >{{$course->english_title}} </option>
					                	@endforeach	
					                </select>
				                </div>

				                <div class="form-group">
				                	<label class="form-control-label">Total Sit Number:</label>
				                	<input class="form-control" type="text" name="sit_number" value="{{ $batch->sit_number }}">
				                </div>

				                <div class="form-group">
				                	<label for="">Status:</label>
				                	<select name="status" id="" class="form-control select2">
				                		<option value="1">Please Select The Status</option>
				                		<option value="1" @if($batch->status == 1 ) selected @endif >Active</option>
				                		<option value="2" @if($batch->status == 2 ) selected @endif >Inactive</option>
				                	</select>
				                </div>
				            </div>

				            <!-- 3rd row -->
				            <div class="col-lg-3">
				                <div class="form-group">
					                <label class="form-control-label">Mentor Name:</label>
					                <select name="mentor_id" class="form-control select2">
					                	<option value="1">Please Select a Mentor</option>
					                	@foreach($mentors as $mentor)
					                		<option value="{{ $mentor->id }}" @if($batch->mentor_id == $mentor->id ) selected @endif >{{$mentor->fullname}} </option>
					                	@endforeach	
					                </select>
				                </div>

				                <div class="form-group">
				                	<label class="form-control-label">Class Day:</label>
				                	<input class="form-control" type="text" name="class_day" value="{{ $batch->class_day }}">
				                </div>

				                <div class="form-group">
				                	<label for="">Batch Type:</label>
				                	<select name="batch_type" id="" class="form-control select2">
				                		<option value="1">Please Select The Batch Type</option>
				                		<option value="1" @if($batch->batch_type == 1 ) selected @endif >Online</option>
				                		<option value="2" @if($batch->batch_type == 2 ) selected @endif >Offline</option>
				                	</select>
				                </div>
				            </div>

				            <!-- 4th row -->
				            <div class="col-lg-3">
				            	<div class="form-group">
					                <label class="form-control-label">Branch Name:</label>
					                <select name="branch_id" class="form-control select2">
					                	<option value="1">Please Select a Branch</option>
					                	@foreach($branchs as $branch)
					                		<option value="{{ $branch->id }}" @if($batch->branch_id == $branch->id ) selected @endif >{{$branch->name}} </option>
					                	@endforeach	
					                </select>
				                </div>
				                
				                <div class="form-group">
				                	<label class="form-control-label">Class Time:</label>
				                	<input class="form-control" type="text" name="class_timing" value="{{ $batch->class_timing }}">
				                </div>
				                <div class="form-group">
				                	<label for="">Admission Type:</label>
				                	<select name="admission_status" id="" class="form-control select2">
				                		<option value="1">Please Select The Admission Status Type</option>
				                		<option value="1" @if($batch->admission_status == 1 ) selected @endif >Active</option>
				                		<option value="2" @if($batch->admission_status == 2 ) selected @endif >Inactive</option>
				                	</select>
				                </div>
				            </div>
			            </div>

			            <div class="form-layout-footer">
			              	<input type="submit" name="editbatch" class="btn btn-teal" value="Edit the Batch">
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