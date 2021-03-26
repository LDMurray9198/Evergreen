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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.852166907751!2d-1.4473452841855075!3d53.54255378002064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48797aa53223bff3%3A0xaebccdb2d38c3adc!2s72%20Hunningley%20Ln%2C%20Barnsley%20S70%203DT!5e0!3m2!1sen!2suk!4v1616752649016!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
@stop