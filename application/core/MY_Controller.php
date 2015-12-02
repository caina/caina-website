<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DefaultController extends CI_Controller {

	var $data;
	var $theme = "caina/";

	public function __construct()
	{
		parent::__construct();
		$this->data['configuration'] = $this->configuration->get_data()->contact_data;
		
		$this->data['seo_title'] = $this->configuration->contact_data->website_title;
		$this->data['seo_description'] = strip_tags($this->configuration->contact_data->website_description);
		$this->data['website_tags'] = $this->blog->get_blog_tags()->blog_tags; 
	}

	function set_title($title){
		$this->data['seo_title'] = $title." - ".$this->data['seo_title'];
	}
	function set_description($description){
		$this->data['seo_description'] = $description;
	}

	public function index()
	{
		
	}

	public function loadView($view='',$display_menu=true)
	{
		$this->load->view($this->theme.'partial/head', $this->data);
		if($display_menu){
			$this->load->view($this->theme.'partial/menu', $this->data);
		}
		if(is_array($view)){
			foreach ($view as $v) {
				$this->load->view($this->theme.$this->remove_slashes($v), $this->data);
			}
		}else{
			$this->load->view($this->theme.$this->remove_slashes($view), $this->data);
		}
		$this->load->view($this->theme.'partial/footer', $this->data);
	}

	public function remove_slashes($slash)
	{
		return str_replace(".", "/", $slash);
	}
}