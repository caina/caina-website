<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Model extends CI_Model {

	var $contact_data;
	var $poll;


	public function __construct()
	{
		parent::__construct();
		
	}

	function get_data(){
		$this->contact_data = $this->db->select("contact.*,about.banner as banner")->from('contact')->from("about")->get()->row();
		return $this;
	}

	function get_poll(){
		$this->poll = $this->db->get('poll')->row();
		$this->poll->options = $this->db->get_where('poll_options', array("poll_id"=>$this->poll->id))->result();
		return $this;
	}

	function set_vote($id){
		$poll_option = $this->db->get_where('poll_options', array("id"=>$id))->row(); 
		$poll_option->votes+=1;
		$id = $poll_option->id;
		unset($poll_option->id);
		$this->db->update('poll_options', $poll_option, array("id"=>$id));
	}
}

/* End of file About_Model.php */
/* Location: ./application/models/About_Model.php */