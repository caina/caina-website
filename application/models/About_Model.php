<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_Model extends CI_Model {

	public $technology;
	public $about;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_technologies()
	{
		$this->technology = $this->db->get('technology')->result();
		return $this->prepare_technologies();
	}

	function get_featured_technologies(){
		$this->technology = $this->db->get_where('technology', array("is_featured"=>1))->result();
		return $this->prepare_technologies();
	}


	function prepare_technologies(){
		foreach ($this->technology as &$tec) {
			$tec->link = site_url("tecnologia/".strtourl($tec->title));
		}
		return $this;
	}

	public function get_about(){
		$this->about = $this->db->get('about')->row();
		return $this;
	}

}

/* End of file About_Model.php */
/* Location: ./application/models/About_Model.php */