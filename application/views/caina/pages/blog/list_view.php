<div class="container container-blog">

	<div class="row content-padding">
		<div class="col-md-12 bg-white">
			<!-- CONTEUDO COMECAO AQUI -->
			<div class="row">
				<div class="col-md-3 padding-default-content blog_tools_box">
					<div class="input-group col-md-12">
						<form method="GET" action="<?php echo site_url() ?>" class="form-inline" role="form">
							<div class="form-group">
	                        	<input type="text" name="q" class="search-query form-control" value="<?php echo $query ?>" placeholder="Buscar" />
	                        </div>
	                        <!-- <span class="input-group-btn"> -->
	                            <button class="btn btn-info" type="submit">
	                                <span class=" glyphicon glyphicon-search"></span>
	                            </button>
	                        <!-- </span> -->
						</form>
                    </div>
                    <div class="col-md-12 no-padding">
						    <div class="item-content-block tags">
						    	<?php foreach ($website_tags as $tag): ?>
						    		<a href="<?php echo $tag->link ?>" rel="tag"><?php echo $tag->title ?></a>
						    	<?php endforeach ?>
						    </div>
                    </div>
				</div>
				<div class="col-md-9 blog_news_head">
					<?php 
						// carrega os dois posts na home junto com a barra de pesquisa
						// O $i define qual template vai ser usado, por isso só pode ir até no maximo 2 
						for ($i=1; $i <=2; $i++) { 
							$post_atual = current($blog_posts);
							if (!empty($post_atual)):
								echo load_blog_article($i,current($blog_posts));
								array_shift($blog_posts);
							endif;
						}
					?>
						
				</div>
			</div>
			<?php 
			foreach ($blog_posts as $post):
				echo load_blog_article(false,$post);
			endforeach
			?>
			<!-- FIM CONTEUDO -->
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 no-padding">
			<ul class="list-inline custom-pagination">
				<?php for ($i=0;$i< $blog_posts_pages; $i++): ?>
					<li class="<?php echo $i==$current_page?'active':'' ?>"><?php echo anchor(site_url("blog?p={$i}&q={$query}"), $i+1, 'attributes'); ?></li>
				<?php endfor ?>				
			</ul>
		</div>
	</div>
</div>

