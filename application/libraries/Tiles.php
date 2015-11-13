<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tiles {

	var $Tile;

	var $title;
	var $image;
	var $size = '2';
	var $description;
	var $size_small='4';
	
	var $row=0;
	var $current_size=0;

	var $tiles_row = array();


	public function addTile($title = false,$description = false,$image, $size=2,$size_small='4')
	{
		$tile = new Tiles();
		$tile->title = $title;
		$tile->image = $image;
		$tile->description = $description;
		$tile->size = $size;
		$tile->size_small = $size_small;


		if($this->current_size >=12){
			$this->row++;
			$this->current_size = 0;
		}
		$this->tiles_row[$this->row][] = $tile;
		$this->current_size += $size;
	}

	public function get_tiles()
	{
		$div = "<div class='container dynamicTile'>";
			foreach ($this->tiles_row as $tiles) {
				$div .= "<div class='row'>";
					foreach ($tiles as $tile) {
						$title = $tile->title;
						$image = $tile->image;
						$size = $tile->size;
						$div .= "
							<div class='col-md-{$size} col-xs-4 no-padding'>
						      <div id='tile1' class='tile'>
						         <div class='carousel slide' data-ride='carousel'>
						          <div class='carousel-inner'>
						            <div class='item active'>
						               <img src='{$image}' class='img-responsive'/>
						               <h3 class='tilecaption'>{$title}</h3>
						            </div>
						          </div>
						        </div>
						         
						      </div>
						    </div>
						";
					}
				$div .= "</div>";
			}
		$div .= "</div>";
		return $div;
	}

	public function sample()
	{
		
	}


}

/* End of file Tiles.php */
/* Location: ./application/controllers/Tiles.php */