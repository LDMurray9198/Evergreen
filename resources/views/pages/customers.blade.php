@extends('layouts.layout')
@section('content')
	Customer records will be below
	
<ul>
	@foreach($customer as $customer)
		<li><a href="/customer/{{ $customer->id }}">{{$customer->CompanyName}}</a></li>
		@endforeach
	</ul>
@stop