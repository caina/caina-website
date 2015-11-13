<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul>
					<li>
						<a href="<?php echo site_url() ?>">Home</a>
					</li>
					<li>
						<a href="<?php echo site_url("sobre") ?>">Sobre</a>
					</li>
					<li>
						<a href="#">Porfolio</a>
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
			<div class="col-md-4">
				instagram
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/min.js") ?>"></script>
</html>