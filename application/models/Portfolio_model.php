<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

	var $portfolio_categories;
	var $technology;
	var $portfolio;

	public function __construct()
	{
		parent::__construct();
		
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
			join("portfolio_technology","portfolio_technology.mngr_token = portfolio.mngr_token")->
			join("technology","technology.id = portfolio_technology.technology_id")->
			where("technology.title like","%{$tag_title}%")->
			group_by("portfolio.id")->get()->result();
		return $this;
	}

	function get_portfolio_tags(){
		$this->portfolio->tags = $this->db->
			select("technology.*")->
			from("technology")->
			join("portfolio_technology","portfolio_technology.technology_id = technology.id")->
			where("portfolio_technology.mngr_token",$this->portfolio->mngr_token)->get()->result();

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
		$this->technology = $this->db->select("technology.*")->from('technology')->join("portfolio_technology","portfolio_technology.technology_id = technology.id")->join("portfolio","portfolio.mngr_token = portfolio_technology.mngr_token")->group_by("technology.id")->get()->result();
		foreach ($this->technology as &$cat) {
			$cat->link = site_url("portfolio/tecnologia/".strtourl($cat->title));
		}
		return $this;
	}

}

/* End of file Portfolio_model.php */
/* Location: ./application/models/Portfolio_model.php */