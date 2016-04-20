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
		$this->add_breadcrumb(array("link"=>site_url("contato"),"text"=>"Contato"));

		$this->loadView("pages.contact.contact_view");	
	}

	function send_email(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');

		$result=array("message"=>"Falha ao enviar, confira novamente os campos","type"=>0);

		if ($this->form_validation->run()){

			$name = $this->input->post('name');
			$email_from = $this->input->post('email');
			$message = $this->input->post('message');

			$email_to = $this->configuration->contact_data->email;
			$subject = "Contato via site: {$name} - ".date("d/m/Y");

			$message = "Nome: {$name}<br/>Email: {$email_from} <br/>Mensagem:{$message}";

			$a = send_email_helper($email_to,$subject,$message);
			$result=array("message"=>"Obrigado! Responderei o quanto antes.","type"=>1);
		}

		return $this->output ->set_content_type('application/json') ->set_output(json_encode($result));
	}

	function vote(){
		$this->configuration->set_vote($this->input->post('opinion'));
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */