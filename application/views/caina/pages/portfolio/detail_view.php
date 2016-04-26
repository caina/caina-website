<div class="container container-portfolio" id="conteudo" itemscope itemtype="https://schema.org/SoftwareApplication">

	<div class="row about-links">
		<div class="col-md-12 breadcrumb-custom no-padding">
			<ul>
				<?php foreach ($categories as $cat): 
					$current = $portfolio->portfolio_category_id == $cat->id;
					?>
						<li class="<?php echo $current?'current':'' ?>" <?php echo $current?"itemprop='applicationCategory'":"" ?>>
							<a href="<?php echo $cat->link ?>" rel="tag"><?php echo $cat->title ?></a>
						</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="row bg-white" itemscope itemtype="https://schema.org/CreativeWork">
		<meta itemprop="creator" content="Douglas Caina"></meta>
		<div class="col-md-4 row-img">
			<img src="<?php echo image_url($portfolio->cover_image,400,400) ?>" itemprop="screenshot">
		</div>
		<div class="col-md-8 padding-50">
			<div class="row">
				<div class="col-md-12">
					<h1 itemprop="name"><?php echo $portfolio->title ?></h1>
				</div>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
						    <div class="item-content-block tags">
						    	<?php foreach ($portfolio->tags as $tag): ?>
						    		<a href="<?php echo $tag->link ?>" rel="tag"><?php echo $tag->title ?></a>
						    	<?php endforeach ?>
						    </div>
	                    </div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="row row-separeted bg-white">
		<div class="col-md-12 padding-50" itemprop="about">
			<?php echo $portfolio->description ?>
		</div>
	</div>
</div>

<?php echo $contact_view ?>