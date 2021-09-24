<?php

namespace App\Controllers;
session_start();
class Editor extends BaseController
{
	//fetches code from file
	public function index()
	{   
		if(!isset($_GET['edit'])){
			$data['code']='<pre></pre>';
		}
		else{
			//check if file exists
			if (file_exists($_SERVER['DOCUMENT_ROOT'].'/code_editor/code'.$_GET['edit'])){
      			$data['code']="<pre>".file_get_contents($_SERVER['DOCUMENT_ROOT'].'/code_editor/code'.$_GET['edit'])."</pre>";
			}
			else{
				$data['code']="<pre>file does not exist!</pre>";
			}
		}
		return view('index',$data);
	}	

	public function html_css(){
		//$data = "";
		//return view("html_css_js",$data);
		if(!isset($_GET['Challange_type'])&&!isset($_GET['challange_id'])){
			$data['code']='<pre></pre>';
		}
		else{
			//check if file exists
			if (file_exists($_SERVER['DOCUMENT_ROOT'].'/code_editor/code/'.$_GET['challange_type'].'/user_id/'.$_GET['challange_id'].'.html')){
      			$data['code']="<pre>".file_get_contents($_SERVER['DOCUMENT_ROOT'].'/code_editor/code/'.$_GET['challange_type'].'/user_id/'.$_GET['challange_id'].'.html')."</pre>";
			}
			else{
				$data['code']="<pre>file does not exist!</pre>";				
			}
		}
		//$data['code'] = '<pre></pre>';
		return view("html_css_js",$data);
	} 

}
