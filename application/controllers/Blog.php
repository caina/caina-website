<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "blog";
		$this->load->model('Blog_model', 'blog');
		$this->load->helper('Blog');
		$this->load_widget();
	}



	

	public function blog_home()
	{	
		$this->data['blog_posts'] = $this->blog->get_posts()->posts;
		dump( $this->blog->pages_count);
		$this->loadView("pages.blog.list_view");
	}






	public function blog_post_detail($post_title)
	{	
		$this->load->helper('html');
		$this->load->model('Portfolio_model', 'portfolio');
		$this->data['post'] =  $this->blog->get_post(url_to_id($post_title))->post;
		
		$this->data['portfolios'] = $this->portfolio->get_portfolio_by_tags($this->data['post']->tags_id)->portfolio;
		// dump($this->data['portfolios']);

		$this->set_title($this->data['post']->title);
		$this->set_description($this->data['post']->eye);

		// dump($this->data['post']);
		$this->loadView("pages.blog.detail");
	}



	function load_widget(){
		$this->data['blog_tags'] = $this->blog->get_blog_tags()->blog_tags;

		$this->data['html_sidebar_view'] = "";// $this->load->view('pages/blog/blog_widget_view', $this->data, TRUE);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */