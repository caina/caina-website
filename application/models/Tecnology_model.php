<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tecnology_model extends CI_Model {

	var $tecnology;

	public function __construct()
	{
		parent::__construct();
	}

	function get($title){
		$title = str_replace("-", "%", $title);

		// $this->tecnology = $this->db->from("technology")->
	}

	function get_all(){

	}

}

/* End of file About_Model.php */
/* Location: ./application/models/About_Model.php */