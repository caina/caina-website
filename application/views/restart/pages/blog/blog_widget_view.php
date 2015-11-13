<div id="sidebar" class="col-sm-4 col-md-4 bg-white">
  <aside class="widget">

    <form method="GET" action="<?php echo site_url() ?>">
       <div id="custom-search-input">
          <div class="input-group">
              <input type="text" name="q" class="  search-query form-control" placeholder="Pesquisar" />
              <span class="input-group-btn">
                  <button class="btn btn-danger" type="submit">
                      <span class=" glyphicon glyphicon-search"></span>
                  </button>
              </span>
          </div>
      </div>
    </form>
    
  </aside>
   <aside class="widget">
        <h4>Blog Categories</h4>

        <div class="tags">
        	<?php foreach ($blog_tags as $tag): ?>
              <a href="<?php echo $tag->link ?>"><?php echo $tag->title ?></a>
        	<?php endforeach ?>
         </div>
   </aside>
   <aside class="widget">
        <h4>Mais populares</h4>
        <div class="tab-content" id="myTabContent">
            <ul class="media-list">
                 <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#" class="media-date">19<span>FEB</span></a>
                      <h5 class="media-heading"><a href="#">Media heading, this is a title of a news...</a></h5>
                      <p>Fugiat dapibus, tellus ac cursus commodo, ut fermentum...</p>
                 </li>
            </ul>
        </div>
   </aside>
     <!-- enquete -->
     <aside class="widget">
       <div class="panel panel-primary">
           <div class="panel-heading">
               <h3 class="panel-title">
                  <i class="fa fa-exclamation-circle"></i> What do you think abou mongo DB?
               </h3>
           </div>
          <ul class="list-group">
              <li class="list-group-item">
                  <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios">
                          Good
                      </label>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios">
                          Excellent
                      </label>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios">
                          Bed
                      </label>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios">
                          Can Be Improved
                      </label>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios">
                          No Comment
                      </label>
                  </div>
              </li>
          </ul>
           <div class="panel-footer">
               <button type="button" class="btn btn-primary btn-sm">
                   <i class="fa fa-paper-plane"></i> Vote
               </button>
          </div>
       </div>
     </aside>
     <!-- enquete -->
     
</div>