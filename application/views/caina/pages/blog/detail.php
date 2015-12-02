<div class="container blog-detail">
	<div class="row bg-contrast">
		<div class="col-md-6 same-size full-image">
			<?php echo img(image_url($post->cover_photo)) ?>
		</div>
		<div class="col-md-6 same-size title-data">
			<h1><?php echo $post->title ?></h1>
			<span><script id="dsq-count-scr" src="//douglascaina.disqus.com/count.js" async></script></span>
			<span><?php echo $post->formated_date ?></span>
			<ul>
				<?php foreach ($post->tags as $tag): ?>
					<li><?php echo anchor($tag->title, $tag->title); ?></li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="row bg-white post-entry">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo $post->entry ?>
		</div>
	</div>
</div>

<div class="container blog-detail comment">
	<div class="row bg-white">
		<div class="col-md-12">
			<div id="disqus_thread"></div>
			<script>
				var disqus_config = function () {
				this.page.url = '<?php echo base_url(uri_string()); ?>'; // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = <?php echo $post->id ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//douglascaina.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
			</script>
		</div>
	</div>
</div>

<?php if(!empty($portfolios)): ?>
	<!-- titulo -->
	<div class="container blog-portfolio">
		<div class="row bg-white">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h3>Portfolio </h3>
			</div>
		</div>
		<div class="row portfolio-itens bg-white">
			<?php foreach ($portfolios as $portfolio): ?>
				<div class="col-md-6">
					<div class="image_holder">
						<h4><?php echo $portfolio->title ?></h4>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
<?php endif ?>