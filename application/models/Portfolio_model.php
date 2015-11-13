<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	public $variable;
	var $technology;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_categories()
	{
		$this->technology = $this->db->select("technology.*")->from('technology')->join("portfolio_technology","portfolio_technology.technology_id = technology.id")->join("portfolio","portfolio.mngr_token = portfolio_technology.mngr_token")->group_by("technology.id")->get()->result();
		return $this;
	}

}

/* End of file Portfolio_model.php */
/* Location: ./application/models/Portfolio_model.php */