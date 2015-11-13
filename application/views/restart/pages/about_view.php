<div class="full_page_photo" style="background-image: url(<?php echo image_url($about->banner) ?>);">
     <div class="container">
          <section class="call_to_action">
               <h3 class="animated bounceInDown"><?php echo $about->banner_title ?></h3>
               <h4 class="animated bounceInUp skincolored"><?php echo $about->banner_subtitle ?></h4>
          </section>
     </div>
</div>
<div class="main">
     
     <section class="call_to_action">
          <div class="container">
               <h3><?php echo $about->about_title ?></h3>
               <h4><?php echo $about->about_subtitle ?></h4>
          </div>     
     </section>
     <section class="features_teasers_wrapper">
          <div class="container">
               <div class="row">
                    <?php $number_itens = round(12/count($featured_technology)); ?>
                    <?php foreach ($featured_technology as $featured): ?>
                         <div class="feature_teaser col-sm-<?php echo $number_itens ?> col-md-<?php echo $number_itens ?>"> 
                              <img alt="<?php echo $featured->title ?>" src="<?php echo image_url($featured->logo,200,90) ?>">
                              <h3><?php echo $featured->title ?></h3>
                         </div>
                    <?php endforeach ?>
                    <!--  <div class="feature_teaser col-sm-3 col-md-3"> <img alt="responsive" src="<?php echo base_url("assets/images/git.png");?>">
                         <h3>.NET Developer</h3>
                    </div>
                    <div class="feature_teaser col-sm-3 col-md-3"> <img alt="responsive" src="<?php echo base_url("assets/images/less.png");?>">
                         <h3>JAVA Developer</h3>
                    </div>
                    <div class="feature_teaser col-sm-3 col-md-3"> <img alt="responsive" src="<?php echo base_url("assets/images/less.png");?>">
                         <h3>Javascript Developer</h3> 
                    </div>  
                         -->
               </div>
          </div>
     </section>
     
     <section class="article-text">
     <div class="container">
          <div class="row">
               <div class="col-sm-8 col-md-8">
                    <?php echo $about->about_text ?>
                    <!-- <p>
                         <img src="<?php echo base_url("assets/images/clients/jquery.jpg") ?>" width="140" height="70" alt="jquery">
                    </p>
                    <blockquote>
                         <p>Caina is a great developer, we work togheter for almost 5 years, and man, i got to tell you, it was a hell of a ride.</p>
                         <small>Client that love this son of a bitch</small>
                    </blockquote>
                    <blockquote>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                         <small>Clients are talking about us</small>
                    </blockquote> -->
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                         <div class="service_photo">
                              <figure style="background-image:url(<?php echo image_url($about->profile_photo, 350,230,true) ?>)"></figure>
                         </div>
                         <div class="service_details">
                              <h2 class="section_header skincolored"><?php echo $about->about_title ?></h2>
                              <a href="<?php echo site_url("portfolio/") ?>"> - Meu portfólio</a><br/>
                              <a href="<?php echo site_url("portfolio/technologies") ?>"> - Técnologias com que já trabalhei</a>
                              <div class="team_member" style="background-image:none !important;padding-bottom: 0px;">
                                   <div class="team_social">
                                        <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                        <a href="https://twitter.com/leonartgr"><i class="fa fa-twitter"></i></a>
                                        <a href="#pinterest"><i class="fa fa-linkedin"></i></a>
                                        <a href="https://github.com/PlethoraThemes"><i class="fa fa-github-alt"></i></a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>     
     </section>
     <div class="container">
     <div class="row">
          <h2 class="text-center">Tecnologias<br/><small>Todas as tecnologias que eu conheço</small></h2>
        <hr />
     </div>
    <div class="row">
          <div class="col-md-12">
               <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" data-toggle="tooltip" data-placement="top" title="HTML / HTML5">
                         <span class="sr-only">60% Complete</span>
                         <span class="progress-type">HTML / HTML5</span>
                    </div>
               </div>
               <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-toggle="tooltip" data-placement="top" title="CSS / CSS3">
                         <span class="sr-only">80% Complete</span>
                         <span class="progress-type">CSS / CSS3</span>
                    </div>
          </div>
               <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%;" data-toggle="tooltip" data-placement="top" title="Russian">
                         <span class="sr-only">1% Complete</span>
                         <span class="progress-type">Russian</span>
                    </div>
               </div>
               <div class="progress-meter">
                    <div class="meter meter-left" style="width: 25%;"><span class="meter-text">Meh</span></div>
                    <div class="meter meter-left" style="width: 25%;"><span class="meter-text">JÁ TESTEI</span></div>
                    <div class="meter meter-right" style="width: 20%;"><span class="meter-text">MASTER</span></div>
                    <div class="meter meter-right" style="width: 30%;"><span class="meter-text">CONHEÇO</span></div>
               </div>
          </div>
     </div>
</div>
     <?php echo $tiles_html ?>
     <!-- <div class="container">
          <section class="hgroup">
               <div class="container">
                    <h1>Portfolio</h1>
                    <h2>
                         Veja alguns dos projetos em que já trabalhe,
                    </h2>
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.html">veja todos os projetos</a> </li>
                    </ul>
               </div>
          </section>

          <div class="row">
               <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                         <div class="service_photo">
                              <figure style="background-image:url(<?php echo base_url("assets/images/serv_6.jpg") ?>)"></figure>
                         </div>
                         <div class="service_details">
                              <h2 class="section_header skincolored"><b>Service</b>Element<small>has many styles!</small></h2>
                              <p>This is where you put the description of the service. The element has a default styling that can be altered just by adding the appropriate class to the <code>&lt;div class=&quot;service_teaser&quot;&gt;</code>. The available classes are <code>right</code>, <code>elegant</code>, <code>vertical</code> and <code>inverted</code>. See some examples at the <a href="services.html">services</a> page.</p>
                              <a class="btn btn-primary" href="#"><i class="fa fa-info"></i>&nbsp; Optional button</a>
                         </div>
                    </div>
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                         <div class="service_photo">
                              <figure style="background-image:url(<?php echo base_url("assets/images/serv_6.jpg") ?>)"></figure>
                         </div>
                         <div class="service_details">
                              <h2 class="section_header skincolored"><b>Service</b>Element<small>has many styles!</small></h2>
                              <p>This is where you put the description of the service. The element has a default styling that can be altered just by adding the appropriate class to the <code>&lt;div class=&quot;service_teaser&quot;&gt;</code>. The available classes are <code>right</code>, <code>elegant</code>, <code>vertical</code> and <code>inverted</code>. See some examples at the <a href="services.html">services</a> page.</p>
                              <a class="btn btn-primary" href="#"><i class="fa fa-info"></i>&nbsp; Optional button</a>
                         </div>
                    </div>
               </div>
               <div class="col-sm-4 col-md-4">
                    <div class="service_teaser vertical">
                         <div class="service_photo">
                              <figure style="background-image:url(<?php echo base_url("assets/images/serv_6.jpg") ?>)"></figure>
                         </div>
                         <div class="service_details">
                              <h2 class="section_header skincolored"><b>Service</b>Element<small>has many styles!</small></h2>
                              <p>This is where you put the description of the service. The element has a default styling that can be altered just by adding the appropriate class to the <code>&lt;div class=&quot;service_teaser&quot;&gt;</code>. The available classes are <code>right</code>, <code>elegant</code>, <code>vertical</code> and <code>inverted</code>. See some examples at the <a href="services.html">services</a> page.</p>
                              <a class="btn btn-primary" href="#"><i class="fa fa-info"></i>&nbsp; Optional button</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
 -->