<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Model extends CI_Model {

	var $contact_data;

	public function __construct()
	{
		parent::__construct();
		
	}

	function get_data(){
		$this->contact_data = $this->db->get('contact')->row();
		return $this;
	}



}

/* End of file About_Model.php */
/* Location: ./application/models/About_Model.php */