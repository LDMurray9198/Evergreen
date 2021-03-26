@extends('layouts.layout')
@section('content')
          
        
DB::table('customers')->insert([
		$companyName =  $_REQUEST['CompanyName'];
		$first_name =  $_REQUEST['FirstName'];
        $last_name = $_REQUEST['LastName'];
        $address = $_REQUEST['Address'];
        $phone = $_REQUEST['PhoneNumber'];
          
  
     
        $sql = "INSERT INTO customers  VALUES ('$companyName','$first_name', 
            '$last_name','$address','$phone')";
          
       