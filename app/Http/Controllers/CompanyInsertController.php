<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CompanyInsertController extends Controller
{
    function save(Request $request){
		//print_r($request->input());
		$customer = new Customer;
		$customer->CompanyName = $request->CompanyName;
		$customer->FirstName = $request->FirstName;
		$customer->LastName = $request->LastName;
		$customer->PhoneNumber = $request->PhoneNumber;
		$customer->Address = $request->Address;
		echo $customer->save();
		


return redirect()->back();

	}
	
}