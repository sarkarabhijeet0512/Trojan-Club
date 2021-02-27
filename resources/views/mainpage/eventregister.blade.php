@extends('layouts.header')
@push('scripts')
<style type="text/css">
	form{
	padding-bottom: 16px;
    border: 1px solid #8080804f;
}
.header{
	background-color: #49a6ff;
    color: #fff;
    text-align: center;
    padding-bottom: 8px;
}
.display{
	display: flex;
}
.form-control{
	margin: 7px;
}
.text-decoration{
	display: block;
}
.position{
	padding: 9px;
}
</style>
@section('content')
<!-- <div class="container"> -->
<div class="container" style="width: fit-content;margin-top: 13rem">
	<form action="/Event_register" method="Post">
		@csrf
		<div>
			<h1 class="header">Registration</h1>
		</div>
		<div class="display">
			<input type="text" name="first_name" placeholder="First Name" class="form-control">
			<input type="text" name="last_name" placeholder="Last Name" class="form-control">
		</div>
		<div class="display">
			<input type="text" name="branch" placeholder="Branch" class="form-control">
			<input type="number" name="contact_no" class="	form-control" placeholder="Phone no">
		</div>
		<div style="margin-right: 14px;">
			<input type="Email" name="email" class="form-control" placeholder="Your E-Mail Address">
			<select class="form-control" name="college_name">
				<option selected="selected" class="input-group">Select College Name if Student is Outside CEB</option>
			</select>
			<input type="text" name="event_name" class="form-control" value="{{ $event_name->event_title }}" readonly="readonly">
		</div>
		<div class="position">
			<li class="text-decoration"><input type="checkbox" name="terms">
			<span>I agree with the terms & conditons</span></li>
		</div>
		<div style="text-align: center;">
			<button class="btn btn-primary">Register</button>
		</div>
	</form>
</div>
@include('layouts.footer')
@endsection