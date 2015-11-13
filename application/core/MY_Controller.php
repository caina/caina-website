<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DefaultController extends CI_Controller {

	var $data;
	var $theme = "caina/";

	public function __construct()
	{
		parent::__construct();
		$this->data['seo_title'] = "Douglas Caina";
		$this->data['seo_description'] = "";
		$this->data['website_tags'] = $this->blog->get_blog_tags()->blog_tags; 
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