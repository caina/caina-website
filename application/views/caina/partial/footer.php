<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<ul class="menus-list ">
					<li>
						<a href="<?php echo site_url() ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url("sobre") ?>">Sobre</a>
					</li>
					<li>
						<a href="<?php echo site_url("portfolio") ?>">Porfolio</a>
					</li>
					<li>
						<a href="#">contato</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
					    <div class="item-content-block tags">
					    	<?php foreach ($website_tags as $tag): ?>
					    		<a href="<?php echo $tag->link ?>" rel="tag"><?php echo $tag->title ?></a>
					    	<?php endforeach ?>
					    </div>
                    </div>
				</div>
			</div>
			<div class="col-md-6 social">
				<ul class="list-inline">
					  <li><?php echo anchor(prep_url($configuration->github_link), '<i class="fa fa-github-alt fa-3x"></i>', array("target"=>"_blank")); ?></li>
					  <li><?php echo anchor(prep_url($configuration->linkedin_link), '<i class="fa fa-linkedin fa-3x"></i>', array("target"=>"_blank")); ?></li>
					  <li><?php echo anchor(prep_url($configuration->facebook_link), '<i class="fa fa-facebook fa-3x"></i>', array("target"=>"_blank")); ?></li>
					  <li><?php echo anchor(prep_url($configuration->twitter_link), '<i class="fa fa-twitter fa-3x"></i>', array("target"=>"_blank")); ?></li>
					</ul>
				
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div id="instafeed"></div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/min.js") ?>"></script>
</body>
</html>