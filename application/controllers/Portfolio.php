<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "portfolio";
	}

	public function index()
	{
		$this->load->helper('Blog');
		$this->load->model('portfolio_model');
		$this->data['tecologias'] = $this->portfolio_model->get_categories()->technology;
		$this->data['categories'] = $this->portfolio_model->get_portoflio_categories()->portfolio_categories; 
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio()->format_portfolio()->portfolio;

		// dump($this->data['portfolio']);

		$this->loadView("pages.portfolio.portfolio_home_view");
	}

	public function portfolio_detail($category=false,$portfolio_title)
	{
		$this->load->model('portfolio_model');
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio_detail($portfolio_title)->portfolio;
		$this->data['categories'] = $this->portfolio_model->get_portoflio_categories()->portfolio_categories; 
		
		$this->data['seo_title'] = $this->data['portfolio']->title." - ".$this->data['portfolio']->category." - Portfolio ".$this->data['seo_title'];
		$this->data['seo_description'] = word_limiter(strip_tags($this->data['portfolio']->description),20);
		
		// dump($this->data['portfolio']);

		$this->loadView("pages.portfolio.detail_view");
	}

	function development_language(){
		$this->loadView("pages.portfolio.development_language_view");
	}


	public function development_language_list($language='')
	{
		$this->load->helper('Blog');
		$this->load->model('portfolio_model');
		$this->data['tecologias'] = $this->portfolio_model->get_categories()->technology;
		$this->data['categories'] = $this->portfolio_model->get_portoflio_categories()->portfolio_categories; 
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio_by_tag($language)->format_portfolio()->portfolio; 
		// dump($this->data['portfolios']);
		// $this->loadView("pages.portfolio.tecnology_detail");
		$this->loadView("pages.portfolio.portfolio_home_view");

		
	}


}

/* End of file Portfolio.php */
/* Location: ./application/controllers/Portfolio.php */