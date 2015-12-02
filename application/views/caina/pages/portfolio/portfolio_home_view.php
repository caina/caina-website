<div class="container container-portfolio" id="pula_menu">
	<div class="row about-links">
		<div class="col-md-12 breadcrumb-custom no-padding">
			<ul>
				<?php foreach ($categories as $cat): ?>
						<li>
							<a href="<?php echo $cat->link ?>#pula_menu" rel="tag"><?php echo $cat->title ?></a>
						</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="row bg-white image-pattern">
		<div class="col-md-8">
			<?php for($i=1;$i<=2;$i++){
				echo load_blog_article($i,current($portfolio));
				array_shift($portfolio);	
			}?>
		</div>
		<div class="col-md-4 padding-50 ">
			<h1><?php echo $portfolio_text->title ?></h1>
			<?php echo $portfolio_text->description ?>
		</div>
	</div>
</div>
<div class="container container-portfolio">
	<div class="row bg-white">
		<div class="col-md-12">
			<?php $i=1; 
			foreach ($portfolio as $port): 
				echo load_blog_article($i,$port);
				$i = $i==2?1:2;
			endforeach ?>
		</div>
	</div>
</div>

