<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "contact";
	}

	public function index()
	{
		$this->loadView("pages.contact_view");	
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */