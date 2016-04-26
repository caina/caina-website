<div class="container" itemscope itemtype="http://schema.org/Person">
	<div class="row bg-white">
		<div class="col-md-4 full-picture no-padding">
			<img src="<?php echo image_url($about->profile_photo) ?>" itemprop="image">
		</div>
		<div class="col-md-8 about-description padding-100">
			<h1 itemprop="name">
				<?php echo $about->about_title ?>
			</h1>
			<meta itemprop="jobTitle" content="Software Developer"></meta>
			<span>
				<?php echo $about->about_text ?>
			</span>
		</div>
	</div>

	<div class="row bg-gray tecnologies">
		<div class="col-md-4">
			<div class="row featured_tech">
			<?php foreach ($technologies as $tec):?>
				<?php if($tec->is_featured!=1){continue;} ?>
				<div class="col-md-6" style="background-color:<?php echo $tec->background_color ?>">
					<a href="<?php echo $tec->link ?>" rel="tag">
						<span class="col-md-12">
							<img src="<?php echo image_url($tec->logo,100,100) ?>">
						</span>
						<span class="col-md-12">
							<?php echo $tec->title ?>
						</span>
					</a>
				</div>
			<?php endforeach ?>
		</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12 technology-description">
					<h2>Técnologias que eu conheço</h2>
					<span>
						Já trabalhei em divérsas áreas, em cada uma com um framework/linguagem diferente, listei aqui tudo com o que já trabalhei
					</span>
				</div>
			</div>
			<div class="row">
				<?php foreach ($technologies as $tec):?>
					<?php if($tec->is_featured==1){continue;} ?>
					<div class="col-md-2 padding-10" style="background-color:<?php echo $tec->background_color ?>">
						<a href="<?php echo $tec->link ?>" rel="tag">
							<span class="col-md-12">
								<img src="<?php echo image_url($tec->logo,80,80) ?>">
							</span>
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>

<?php echo $contact_view ?>