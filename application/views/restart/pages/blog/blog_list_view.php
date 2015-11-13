<div class="main">
  <div id="video">
    <?php echo $tiles_html ?>
  </div>
  <section>
      <div class="container">
           <div class="row">
                <div id="leftcol" class="col-sm-8 col-md-8 bg-white">
                      <?php foreach ($blog_posts as $post): ?>
                        <article class="post">
                          <div class="post_header">
                            <h3 class="post_title">
                              <a href="<?php echo $post->link ?>"><?php echo $post->title ?></a>
                            </h3>
                            <div class="post_sub">
                              <i class="fa-time"></i> 
                              <?php echo $post->formated_date ?>
                            </div>
                          </div>
                          <div class="post_content">
                            <?php if ($post->display_image): ?>
                              <figure>
                                <a href="<?php echo $post->link ?>">
                                  <img alt="0" src="<?php echo $post->cover_photo_path ?>">
                                </a>
                              </figure>
                            <?php endif ?>
                            <p>
                              <?php echo $post->eye ?>
                            </p>
                          <a href="<?php echo $post->link ?>" class="btn btn-primary">Read More</a>
                          </div>
                        </article>
                     <?php endforeach ?>
                     <div class="pagination_wrapper">
                          <ul class="pagination pagination-centered">
                               <li class="disabled"><a href="#">«</a></li>
                               <li class="active"><a href="#">1</a></li>
                               <li><a href="#">2</a></li>
                               <li><a href="#">3</a></li>
                               <li><a href="#">4</a></li>
                               <li><a href="#">5</a></li>
                               <li><a href="#">»</a></li>
                          </ul>
                     </div>
                </div>
               <?php echo $html_sidebar_view ?>
           </div>
      </div>
  </section>