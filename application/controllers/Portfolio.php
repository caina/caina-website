<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "portfolio";
	}

	public function index()
	{
		$this->load->library('tiles');
		$this->load->model('portfolio_model');
		$this->data['tecologias'] = $this->portfolio_model->get_categories()->technology;
		foreach ($this->data['tecologias'] as $tech) {
			$this->tiles->addTile($tech->title,false, image_url($tech->logo,400,400),2);
		}
		$this->data['tiles_html'] = $this->tiles->get_tiles();
		$this->loadView("pages.portfolio.portfolio_home_view");
	}

	public function portfolio_detail($iten=false)
	{
		$this->loadView("pages.portfolio.portfolio_detail_view");
	}

	function development_language(){
		$this->loadView("pages.portfolio.development_language_view");
	}


	public function development_language_detail($language='')
	{
		$this->loadView("pages.portfolio.development_language_detail_view");
		
	}


}

/* End of file Portfolio.php */
/* Location: ./application/controllers/Portfolio.php */