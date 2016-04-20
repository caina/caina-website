<div class="container container-portfolio" id="conteudo">

	<div class="row about-links">
		<div class="col-md-12 breadcrumb-custom no-padding">
			<ul>
				<?php foreach ($categories as $cat): ?>
						<li class="<?php echo $portfolio->portfolio_category_id == $cat->id?'current':'' ?>">
							<a href="<?php echo $cat->link ?>" rel="tag"><?php echo $cat->title ?></a>
						</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="row bg-white">
		<div class="col-md-4 row-img">
			<img src="<?php echo image_url($portfolio->cover_image,400,400) ?>">
		</div>
		<div class="col-md-8 padding-50">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo $portfolio->title ?></h1>

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
		<div class="col-md-12 padding-50">
			<?php echo $portfolio->description ?>
		</div>
	</div>
</div>

<?php echo $contact_view ?>