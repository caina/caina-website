<div class="main">

     <section class="hgroup">
          <div class="container">
               <h1><?php echo $post->title ?></h1>
               <h2><i class="fa-time"></i> <?php echo $post->formated_date ?> por<a href="#post_comments"><i class="fa-comments-alt"></i> Caina</a></h2>
               <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog.html">Atual</a></li>
               </ul>
          </div>
     </section>
     <section>
          <div class="container">
               <div class="row">
                    <div id="leftcol" class="col-sm-8 col-md-8">

                         <article class="post">
                              <div class="post_content">
                                   <?php if ($post->display_image): ?>
                                        <figure>
                                             <img alt="0" src="<?php echo $post->cover_photo_path ?>">
                                        </figure>
                                   <?php endif ?>
                                   <?php echo $post->entry ?>
                              </div>
                         </article>

                    </div>
                     <?php echo $html_sidebar_view ?>
               </div>
          </div>
     </section>
