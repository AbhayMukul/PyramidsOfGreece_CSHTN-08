<?php  

namespace App\Models;

use CodeIgniter\Model;

class ChallangesModel extends Model{
	
	protected $table ="QUESTION_DEATILS";

	function get_challenges_frontend(){
		return $this->db->query("SELECT * FROM QUESTION_DEATILS WHERE challange_type = 'frontend'");
	}

	function get_challages_backend(){
		return $this->db->query("SELECT * FROM QUESTION_DEATILS WHERE challange_type = 'backend'");
	}

	function get_home_Jumbotron(){
		return $this->asArray()->where(['name'=>'welcome_message'])->first();
	}

	function get_home_description(){
		return $this->asArray()->where(['name'=>'welcome_message_description'])->first();
	}

	function get_mass_timings(){
		return $this->asArray()->where(['name'=>'mass_timings'])->first();
	}

	function get_parish_vision(){
		return $this->asArray()->where(['name'=>'parish_vision'])->first();
	}

	function save_data($name,$content){
		$query=$this->db->query("update home_page SET content='$content' where name='$name'");
	}
}