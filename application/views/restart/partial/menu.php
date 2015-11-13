<header>
     <div class="container">
          <div class="navbar navbar-default" role="navigation">
               <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                         <img src="<?php echo base_url("assets/images/restart_logo.png") ?>" alt="optional logo" height="90" width="90">
                         <span class="logo_title">{Caina}<strong>.init</strong></span>
                         <span class="logo_subtitle">we must change this subtitle</span> 
                    </a>
                    <a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="nb_left pull-left"> <span class="fa fa-reorder"></span></span>
                         <span class="nb_right pull-right">menu</span>
                    </a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li class="<?php echo (@$current_page=='blog'?'active':'') ?>"><a href="<?php echo site_url() ?>">Home</a></li>
                         <li class="<?php echo (@$current_page=='about'?'active':'') ?>"><a href="<?php echo site_url("about") ?>">About me</a></li>
                         <li class="<?php echo (@$current_page=='portfolio'?'active':'') ?>"><a href="<?php echo site_url("portfolio") ?>">Portfolio</a></li>
                         <li class="<?php echo (@$current_page=='contact'?'active':'') ?>"><a href="<?php echo site_url("contact") ?>">Contact</a></li>
                    </ul>
               </div>
          </div>
     </div>
</header>



