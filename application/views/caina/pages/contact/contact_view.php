<div class="container bg-white contact">
	<div class="row">
		<div class="col-md-4 hidden-sm hidden-xs">
			<img src="<?php echo base_url("assets/images/390x1170clouds.jpg") ?>">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6 full-height about-text padding-25"><h1><?php echo $configuration->title ?></h1><?php echo $configuration->description ?></div>
				<div class="col-md-6 full-height form-poll">
					<form action="<?php echo site_url("contact/vote") ?>" id="vote_form" method="POST" role="form">
						<legend><?php echo $poll->name ?></legend>
						<div class="post-effect">
							<?php foreach ($poll->options as $option): ?>
								<div class="radio">
									<label>
										<input type="radio" name="opinion" value="<?php echo $option->id ?>">
										<?php echo $option->title ?>
									</label>
								</div>
							<?php endforeach ?>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="row social">
				<div class="col-md-6 linkedin"><h3><?php echo anchor(prep_url($configuration->linkedin_link), 'Linked In', array('target'=>'_blank')); ?></h3></div>
				<div class="col-md-6 github"><h3><?php echo anchor(prep_url($configuration->github_link), 'GitHub', array('target'=>'_blank')); ?></h3></div>
			</div>
			<div class="row social">
				<div class="col-md-6 facebook"><h3><?php echo anchor(prep_url($configuration->facebook_link), 'Facebook', array('target'=>'_blank')); ?></h3></div>
				<div class="col-md-6 twitter"><h3><?php echo anchor(prep_url($configuration->twitter_link), 'Twitter', array('target'=>'_blank')); ?></h3></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contact-container">
						<form action="<?php echo site_url("contact/send_email") ?>" id="contact_form" method="POST" role="form">
							<legend><i class="fa fa-envelope"></i> Me mande um email!</legend>
							<span class="response-message"></span>
							<div class="post-effect">
								<div class="form-group">
									<label for="">Nome</label>
									<input type="text" name="name" class="form-control"  placeholder="Nome">
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" name="email" class="form-control"  placeholder="Email">
								</div>
								<div class="form-group">
									<label for="">Mensagem</label>
									<textarea name="message" class="form-control"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>