<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	var $portfolio_categories;
	var $technology;
	var $portfolio;
	var $portfolio_text;
	var $category;


	public function __construct()
	{
		parent::__construct();
		
	}

	function get_portfolio_text(){
		$this->portfolio_text = $this->db->get('portfolio_about')->row();
		return $this;
	}

	function get_technology($technology){
		$technology = str_replace("-", "%", $technology);
		$this->technology = $this->db->from('blog_category')->where("title like","%{$technology}%")->get()->row();

		return $this;
	}

	function get_technology_text(){
		$this->portfolio_text = new stdClass();
		$this->portfolio_text->title = "<img src='".image_url($this->technology->logo,100,100)."'/>". "<h2>".$this->technology->title."</h2>";
		$this->portfolio_text->description = $this->technology->description;				
		return $this;
	}

	function get_category($category){
		$category = str_replace("-", "%", $category);
		$this->category = $this->db->from('portfolio_category')->where("title like","%{$category}%")->get()->row();
		return $this;
	}

	function get_category_text(){
		$this->portfolio_text = new stdClass();
		$this->portfolio_text->title = $this->category->title;
		$this->portfolio_text->description = $this->category->description;				
		return $this;
	}

	function get_portfolio_by_category(){
		$this->portfolio = $this->db->
			select("portfolio.*,portfolio_category.title as category")->
			from('portfolio')->
			join("portfolio_category","portfolio.portfolio_category_id = portfolio_category.id","left")->
			where("portfolio.portfolio_category_id",$this->category->id)->
			order_by("portfolio.featured","DESC")->get()->result();
		return $this;
	}



	public function get_portoflio_categories()
	{
		$this->portfolio_categories = $this->db->get('portfolio_category')->result();
		foreach ($this->portfolio_categories as &$category) {
			$category->link = site_url("portfolio/".strtourl($category->title));
		}
		return $this;


	}

	function get_portfolio_detail($title){
		$title = str_replace("-", "%", $title);
		$this->portfolio = $this->db->
			select("portfolio.*,portfolio_category.title as category")->
			from("portfolio")->
			join("portfolio_category","portfolio.portfolio_category_id = portfolio_category.id","left")->
			where("portfolio.title like ","%{$title}%")->get()->row();

		$this->get_portfolio_gallery();
		$this->get_portfolio_tags();
		return $this;
	}


/*

select * from portfolio 
join portfolio_technology on portfolio_technology.mngr_token = portfolio.mngr_token
join technology on technology.id = portfolio_technology.technology_id
where technology.title like '%c%'

*/
	function get_portfolio_by_tag($tag_title){
		$tag_title = str_replace("-", "%", $tag_title);
		$this->portfolio = $this->db->
			select("portfolio.*,portfolio_category.title as category")->
			from("portfolio")->
			join("portfolio_category","portfolio.portfolio_category_id = portfolio_category.id","left")->
			join("portfolio_blog_category","portfolio_blog_category.mngr_token = portfolio.mngr_token")->
			join("blog_category","blog_category.id = portfolio_blog_category.blog_category_id")->
			where("blog_category.title like","%{$tag_title}%")->
			group_by("portfolio.id")->get()->result();
		return $this;
	}
	function get_portfolio_by_tags($tags_array_id){
		$this->portfolio = $this->db->
			select("portfolio.*,portfolio_category.title as category")->
			from("portfolio")->
			join("portfolio_category","portfolio.portfolio_category_id = portfolio_category.id","left")->
			join("portfolio_blog_category","portfolio_blog_category.mngr_token = portfolio.mngr_token")->
			join("blog_category","blog_category.id = portfolio_blog_category.blog_category_id")->
			where_in("blog_category.id",$tags_array_id)->
			group_by("portfolio.id")->get()->result();
		return $this;
	}
	function get_portfolio_tags(){
		$this->portfolio->tags = $this->db->
			select("blog_category.*")->
			from("blog_category")->
			join("portfolio_blog_category","portfolio_blog_category.blog_category_id = blog_category.id")->
			where("portfolio_blog_category.mngr_token",$this->portfolio->mngr_token)->get()->result();

		foreach ($this->portfolio->tags as &$tag) {
			$tag->link = site_url("portfolio/tecnologia/".strtourl($tag->title));
		}

		return $this;
	}

	function get_portfolio_gallery(){
		$this->portfolio->gallery = $this->db->get_where('portfolio_gallery', array("portfolio_id"=>$this->portfolio->id))->result();
		return $this;
	}

	function get_portfolio(){
		$this->portfolio = $this->db->
			select("portfolio.*,portfolio_category.title as category")->
			from('portfolio')->
			join("portfolio_category","portfolio.portfolio_category_id = portfolio_category.id","left")->
			order_by("portfolio.featured","DESC")->get()->result();
		return $this;
	}

	function format_portfolio(){
		foreach ($this->portfolio as &$portfolio) {
			$portfolio->eye = word_limiter(strip_tags($portfolio->description),40);
			$portfolio->formated_date = anchor(site_url("portfolio/".strtourl($portfolio->category)), $portfolio->category);
			$portfolio->cover_photo_path = image_url($portfolio->cover_image,400,400);
			$portfolio->link = site_url("portfolio/".strtourl($portfolio->category)."/".strtourl($portfolio->title));
			$portfolio->display_image = true;
		}
		return $this;
	}



	public function get_categories()
	{
		$this->technology = $this->db->select("blog_category.*")->from('blog_category')->join("portfolio_blog_category","portfolio_blog_category.blog_category_id = blog_category.id")->join("portfolio","portfolio.mngr_token = portfolio_blog_category.mngr_token")->group_by("blog_category.id")->get()->result();
		foreach ($this->technology as &$cat) {
			$cat->link = site_url("portfolio/tecnologia/".strtourl($cat->title));
		}
		return $this;
	}

}

/* End of file Portfolio_model.php */
/* Location: ./application/models/Portfolio_model.php */