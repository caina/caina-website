<div class="container-fluid menu-container-fluid parallax-window" data-parallax="scroll" data-image-src="<?php echo image_url($configuration->banner) ?>">
	<div class="container">
		<div class="row menu">
			<div class="col-md-12 content-padding">
				<!-- MENU -->
				<nav class="navbar bg-white">
			        <div class="container-fluid">
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			          </div>
			          <div id="navbar" class="navbar-collapse collapse">
			            <ul class="nav navbar-nav">
			              <li><a href="<?php echo site_url() ?>">Início</a></li>
			              <li><a href="<?php echo site_url("sobre") ?>">Sobre</a></li>
			              <li><a href="<?php echo site_url("portfolio") ?>">Portfólio</a></li>
			              <li><a href="<?php echo site_url("contato") ?>">Contato</a></li>
			            </ul>
			            <ul class="nav navbar-nav navbar-right">
			              <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
			              <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
			              <li><a href="#"><i class="fa fa-facebook-official fa-2x"></i></a></li>
			            </ul>
			          </div>
			        </div>
			      </nav>
			    <!-- FIM MENU -->
			</div>
			<div class="col-md-12 breadcrumb-custom no-padding">
				<ul itemprop="breadcrumb">
					<?php foreach ($breadcrumb as $bread): ?>
						<li>
							<?php echo anchor($bread["link"], $bread["text"]); ?>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div> 
	</div> 
</div>