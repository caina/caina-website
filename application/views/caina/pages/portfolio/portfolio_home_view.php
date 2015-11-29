
<div class="container container-portfolio">

	<div class="row about-links">
		<div class="col-md-12 breadcrumb-custom no-padding">
			<ul>
				<?php foreach ($categories as $cat): ?>
						<li>
							<a href="<?php echo $cat->link ?>" rel="tag"><?php echo $cat->title ?></a>
						</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="row bg-white">
		<div class="col-md-8">
			<?php for($i=1;$i<=2;$i++){
				echo load_blog_article($i,current($portfolio));
				array_shift($portfolio);	
			}?>
		</div>
		<div class="col-md-4 padding-50">
			<h1>
				Alguns projetos em que já trabalhei
			</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
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

