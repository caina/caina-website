<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

	private $page = 0;
	public  $post;
	public  $posts;
	private $tags_param;
	private $query_param;
	public $pages_count;
	public $blog_tags;
	private $itens_per_page = 20;
	private $post_id;


	public function __construct(){
	parent::__construct();
	}

	public function set_page($page){
		$this->page = $page;
		return $this;
	}

	public function set_itens_per_page($limit){
		$this->itens_per_page = $limit;
		return $this;
	}

	public function set_tags($tags){
		$this->tags_param = explode(",", $tags);
		return $this;
	}

	public function set_query($query){
		if(empty($query)){
			return $this;
		}
		$is_tag = $this->db->from('blog_category')->where("title like", "%".str_replace("-", "%", $query)."%")->get();
		if($is_tag->num_rows() > 0){
			$is_tag = $is_tag->row();
			$this->query_param = array("blog_post_category.id_blog_category" =>$is_tag->id);
		}else{
			$this->query_param = array("title like" => "'%".str_replace(" ", "%", $query)."%'");
		}
		return $this;
	}

	public function get_posts(){
		
		$this->db->start_cache();
		$this->db->select("blog_post.*");
		$this->db->from('blog_post');
		$this->db->join('blog_post_category', 'blog_post_category.id_blog_post = blog_post.id', 'left');
		$this->db->where('blog_post.id_blog_post', 0,false);
		$this->db->where('blog_post.action', 1, FALSE);
		if(!empty($this->query_param)){
			$this->db->where($this->query_param, FALSE,FALSE);
		}

		if(!empty($this->post_id)){
			$this->db->where('blog_post.id', $this->post_id, FALSE);
		}
		$this->db->group_by('blog_post.id');
		$this->db->stop_cache();
		$this->pages_count = round($this->db->get()->num_rows() / $this->itens_per_page);
		$this->db->order_by('blog_post.id', 'desc');
		$this->db->limit($this->itens_per_page, $this->page * $this->itens_per_page);
		$this->posts = $this->db->get()->result();
		$this->db->flush_cache();
		return $this->prepare_data();
	}

	/*
		Get Posts
		search for my post using an id
	*/
	public function get_post($post_id){
		$this->post_id = $post_id;
		$this->get_posts();
		$this->post = end($this->posts);
		$this->get_tags();
		return $this;
	}

	function get_tags(){
		$this->post->tags = $this->db->
			select("blog_category.*")->
			from("blog_category")->
			join("blog_post_category","blog_category.id = blog_post_category.id_blog_category")->
			where("blog_post_category.id_blog_post",$this->post->id)->get()->result();

		$this->post->tags_id = array();
		foreach ($this->post->tags as &$tag) {
			$this->post->tags_id[] = $tag->id;
			$tag->link = site_url("?q=".strtourl($tag->title));
		}
		return $this;
	}

	public function get_pages(){
		
		return $this;
	}

	public function find_similar(){
		return $this;
	}


	public function get_blog_tags(){
		$this->blog_tags = $this->db->get('blog_category')->result();
		foreach ($this->blog_tags as &$tag) {
			$tag->link = site_url("?q=".strtourl($tag->title));
		}
		return $this;
	}

	/***
	PREPARE DATA TO BE VIEWD
	**/
	private function prepare_data(){
		
		foreach ($this->posts as &$result) {
			$result->link = site_url("blog/".strtourl($result->title)."-".$result->id);
			$result->cover_photo_path = image_url($result->cover_photo,750,500);
			$result->formated_date = date("M d, Y",strtotime($result->post_date));
			$result->eye = word_limiter(strip_tags($result->entry), 50);
			$result->display_image = !empty($result->cover_photo);
			$result->tags = $this->set_post($result)->get_tags()->post->tags;

		}
		return $this;
	}

	function set_post($post_object){
		$this->post = $post_object;
		return $this;
	}


}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */