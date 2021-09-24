<?php

namespace App\Controllers;
session_start();
use App\Models\ChallangesModel;

class Challanges extends BaseController
{

	public function index()
	{   
		$challanges = new ChallangesModel();
		$data['challenges_list'] = $challanges->get_challenges_backend();
		return view('challanges',$data);
	}	

}
