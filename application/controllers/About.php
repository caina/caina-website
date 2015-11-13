<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "about";
		$this->load->model('About_model','about');

		 $this->about->get_about();

		 $this->data['seo_title'] = "Sobre ".$this->about->about->about_title." - ". $this->data['seo_title'];
		 $this->data['seo_description'] = strip_tags($this->about->about->about_text);
	}

	public function index()
	{
		$this->data['featured_technology'] = $this->about->get_featured_technologies()->technology;
		$this->data['about'] = $this->about->about;
		// dump($this->data['about']);

		$this->loadView("pages.about.about");		
	}

}
