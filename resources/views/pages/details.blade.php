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
@stop