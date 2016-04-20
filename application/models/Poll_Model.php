<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Poll_Model extends CI_Model {

	public $polls;
	private $poll_position;

	public function __construct(){
		parent::__construct();
	}

	public function set_position($position){
		$this->position = $position;
		return $this;
	}
	public function get_poll($position=false)
	{
		
		if(empty($this->position)){
			throw new Exception("Poll needs an position", 1);
		}

	}
}

/* End of file Poll_Model.php */
/* Location: ./application/models/Poll_Model.php */