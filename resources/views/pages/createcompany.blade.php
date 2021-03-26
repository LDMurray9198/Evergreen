@extends('layouts.layout')
@section('content')

<div class="container">
  <h2 class="text-center">Insert a New Company</h2>
  <br>
  <form action = "/create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<label class="form-group">Company Name:</label>
    <input type="text" class="form-control" placeholder="CompanyName" name="CompanyName">
    <label class="form-group">First Name:</label>
    <input type="text" class="form-control" placeholder="FirstName" name="FirstName">
    <label>Last Name:</label>
    <input type="text" class="form-control" placeholder="LastName" name="LastName">
	<label class="form-group"> PhoneNumber: </label>
	<input type="text" class="form-control" placeholder="01234 567890" name="PhoneNumber">
	<label>Address:</label>
    <input type="text" class="form-control" placeholder="Enter the full address" name="Address"><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>
@stop