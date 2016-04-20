<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends DefaultController {

	public function __construct()
	{
		parent::__construct();
		$this->data['current_page'] = "blog";
		$this->load->model('Blog_model', 'blog');
		$this->load_widget();
	}





	public function blog_home()
	{	
		$page = $this->input->get('p');
		$query = $this->input->get('q');

		$this->data['blog_posts'] = $this->blog->set_query($query)->set_page($page)->get_posts()->posts;
		$this->data['blog_posts_pages'] = $this->blog->pages_count;
		$this->data['current_page'] = $page;
		$this->data['query'] = $query;

		if(!empty($query)){
			$this->add_breadcrumb(array("link"=>site_url("blog?q={$query}"),"text"=>$query));
		}

	// dump($this->data['blog_posts']);

		$this->loadView("pages.blog.list_view");
	}






	public function blog_post_detail($post_title)
	{	
		$this->load->helper('html');
		$this->load->model('Portfolio_model', 'portfolio');
		$this->data['post'] =  $this->blog->get_post(url_to_id($post_title))->post;
		
		// $this->data['portfolios'] = $this->portfolio->get_portfolio_by_tags($this->data['post']->tags_id)->portfolio;
		$this->set_title($this->data['post']->title);
		$this->set_description($this->data['post']->eye);
		
		foreach ($this->data['post']->tags as $tag) {
			$this->add_breadcrumb(array("link"=>$tag->link,"text"=>$tag->title));
		}

		$this->add_breadcrumb(array("link"=>$this->data['post']->link,"text"=>word_limiter($this->data['post']->title,3)));

		$this->loadView("pages.blog.detail");
	}



	function load_widget(){
		$this->data['blog_tags'] = $this->blog->get_blog_tags()->blog_tags;

		$this->data['html_sidebar_view'] = "";// $this->load->view('pages/blog/blog_widget_view', $this->data, TRUE);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */