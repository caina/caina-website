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
		$this->data['portfolio_text'] = $this->portfolio_model->get_portfolio_text()->portfolio_text;
		// dump($this->data['portfolio']);

		$this->loadView("pages.portfolio.portfolio_home_view");
	}

	function portfolio_category($category){
		$this->load->helper('Blog');
		$this->load->model('portfolio_model');
		$this->data['categories'] = $this->portfolio_model->get_portoflio_categories()->portfolio_categories; 
		$this->data['tecologias'] = $this->portfolio_model->get_categories()->technology;
		$this->data['portfolio_text'] = $this->portfolio_model->get_category($category)->get_category_text()->portfolio_text;
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio_by_category()->format_portfolio()->portfolio;


		$this->data['seo_title'] = $this->portfolio_model->category->title." - Portfolio ".$this->data['seo_title'];
		$this->data['seo_description'] = strip_tags($this->portfolio_model->category->description);
		


		$this->loadView("pages.portfolio.portfolio_home_view");
	}

	// function portfolio_view($category,$item){

	// }



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
		$this->data['portfolio_text'] = $this->portfolio_model->get_technology($language)->get_technology_text()->portfolio_text;
		
		$this->data['seo_title'] = $this->portfolio_model->technology->title." - Portfolio ".$this->data['seo_title'];
		$this->data['seo_description'] = strip_tags($this->portfolio_model->technology->description);
		
		// dump($this->data['portfolios']);
		// $this->loadView("pages.portfolio.tecnology_detail");
		$this->loadView("pages.portfolio.portfolio_home_view");

		
	}


}




/* End of file Portfolio.php */
/* Location: ./application/controllers/Portfolio.php */