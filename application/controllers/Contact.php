<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "contact";
	}

	public function index()
	{
		$this->data['seo_title'] = $this->configuration->contact_data->title . " - " . $this->data['seo_title'];
		$this->data['seo_description'] = strip_tags($this->configuration->contact_data->description);

		$this->loadView("pages.contact.contact_view");	
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */