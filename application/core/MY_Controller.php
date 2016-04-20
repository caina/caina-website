<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DefaultController extends CI_Controller {

	var $data;
	var $theme = "caina/";

	public function __construct()
	{
		parent::__construct();
		$this->data['configuration'] = $this->configuration->get_data()->contact_data;
		$this->data['poll'] = $this->configuration->get_poll()->poll;
		$this->data['seo_title'] = $this->configuration->contact_data->website_title;
		$this->data['seo_description'] = strip_tags($this->configuration->contact_data->website_description);
		$this->data['website_tags'] = $this->blog->get_blog_tags()->blog_tags; 
		$this->data['breadcrumb'] = array();
		$this->add_breadcrumb(array("text"=>"Home","link"=>site_url()));
	}

	function set_title($title){
		$this->data['seo_title'] = $title." - ".$this->data['seo_title'];
	}
	function set_description($description){
		$this->data['seo_description'] = $description;
	}

	// apenas arrays
	function add_breadcrumb($item){
		if(is_array($item)){
			$this->data['breadcrumb'][] = $item;
		}
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