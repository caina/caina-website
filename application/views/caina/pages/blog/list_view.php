<div class="container container-blog">

	<div class="row content-padding">
		<div class="col-md-12 bg-white">
			<!-- CONTEUDO COMECAO AQUI -->
			<div class="row">
				<div class="col-md-3 padding-default-content blog_tools_box">
					<div class="input-group col-md-12">
                        <input type="text" class="  search-query form-control" placeholder="Buscar" />
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button">
                                <span class=" glyphicon glyphicon-search"></span>
                            </button>
                        </span>
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
							if (!empty(current($blog_posts))):
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
</div>
