@extends('layouts.layout')
@section('content')

<table border="1">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Phone Number</th>
		<th>Address</th>
		
		<tr>
			<td>{{ $customer->FirstName}}</td>
			<td>{{ $customer->LastName}}</td>
			<td>{{ $customer->PhoneNumber}}</td>
			<td>{{ $customer->Address}}</td>
		</tr>
</table>

<iframe width="100%" height"100%" src="https://maps.google.com/maps?q=<?php echo $customer->Address;?>&output=embed"></iframe>
@stop