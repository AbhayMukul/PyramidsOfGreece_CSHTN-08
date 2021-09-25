<?php

namespace App\Controllers;

class Compiler extends BaseController
{
	//fetches code from file
	public function index()
	{
		$link = new mysqli("localhost","root","","code_editor");
$language = strtolower($_POST['language']);
$code = $_POST['code'];
foreach($arr as $pat){
if(preg_match($pat, $code)){
	exit("you are not allowed to import ".$pat." package");
}
}
$random = substr(md5(mt_rand()),0,7);
if($_POST['path']==NULL){
$random = substr(md5(mt_rand()),0,7);

//code to create temp file
$filePath = $_SERVER['DOCUMENT_ROOT']."/code_editor/app/tmp/".$random.".py";
//$input = $_POST['input'];
$programFile = fopen($filePath,"w");
fwrite($programFile,$code);
fclose($programFile);

}
else{
	$file_tmp_path = mysqli_real_escape_string($link,$_POST['path']);
	$file_tmp_path = ltrim($file_tmp_path, '/');
	$filePath = $_SERVER['DOCUMENT_ROOT']."/code_editor/code/".$file_tmp_path;
}

$file_input = "tmp/".$random.".txt";
$program_input = fopen($file_input,"w");
fwrite($program_input,$_POST['input']);
		fclose($program_input);

		$output=shell_exec("python ".$filePath." <".$_SERVER['DOCUMENT_ROOT'].'/code_editor/app/'. $file_input." 2>&1");

		print_r($output);
		return $output;
	}	
}
