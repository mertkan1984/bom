<section class="hero-carousel mt-5">
   <div class="container-xl">
      <div class="row gy-4">
         <div class="section-header">
            <h3 class="section-title">Başlıca Kategoriler</h3>
         </div>
         <div class="row post-carousel-featured post-carousel">
            <!-- post -->
            <?php foreach(get_categories() as  $category):
            $term = get_term($category->term_id);
            $image = get_field('cat_image',$term );
            //echo $image
               ?>
            <div class="post featured-post-md">
               <div class="details clearfix">
                  <h4 class="post-title"><a href="<?php echo $category->slug ?>"><?php echo $category->name; ?></a></h4>
               </div>
               <a href="#">
                  <div class="thumb rounded">
                     <div class="inner data-bg-image" data-bg-image="<?php echo $image; ?>"></div>
                  </div>
               </a>
            </div>
         <?php endforeach; ?>
         </div>
      </div>
   </div>
</section>
