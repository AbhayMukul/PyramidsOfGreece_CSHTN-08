<?php

namespace App\Controllers;
//session_start();
class Challanges extends BaseController
{
	
	public function index()
	{   
		$code = $_POST['code'];
		$language = $_POST['language'];
		$user = $_POST['user_id'];
		$filename = $_POST['file'];
		$token = $_POST['token'];
		$challange_type = $_POST['challange'];
		$file_path = $_SERVER['DOCUMENT_ROOT']."/code_editor/code/".$challange_type.'/'.$filename.'.'.$language;
		$fp = fopen($file_path, 'w');
		fwrite($fp,$code);
		fclose($fp);
		return view('success');
	}	

}
