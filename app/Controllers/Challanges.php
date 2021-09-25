<?php

namespace App\Controllers;
session_start();
use App\Models\ChallangesModel;

class Challanges extends BaseController
{

	public function index()
	{   
		return view('challanges',$data);
	}	

	public function category(){
		return view("category");
	}

}
