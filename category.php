
<?php get_header(); ?>


<section class="page-header">
    <div class="container-xl">
       <div class="text-center">
          <h1 class="mt-0 mb-2"><?php echo single_cat_title(); ?> </h1>
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Anasayfa</a></li>
                <?php $category = single_term_title("", false);
					$catid = get_cat_ID( $category );
		
					?>
                <li class="breadcrumb-item active" aria-current="page">/<a href="<?php echo get_category_link($catid); ?>"/> <?php echo single_cat_title(); ?></li>
             </ol>
          </nav>
       </div>
    </div>
 </section>
 <!-- section main content -->
 <section class="main-content">
    <div class="container-xl">
       <div class="row gy-4">
          <div class="col-lg-12">
             <div class="row gy-4">
                <div class="section-header">
                   <h3 class="section-title">Tüm Yazılar</h3>
                </div>
                <?php 
if ( have_posts() ) :
   while ( have_posts() ) :
      the_post(); ?>
                 <div class="col-sm-6 col-md-4">
                  <!-- post -->
                  <div class="post post-grid rounded bordered">
                     <div class="thumb top-rounded">
                        <a href="<?php echo the_permalink(); ?>">
                           <div class="inner">
                              <!--<img src="images/posts/post-md-1.jpg" alt="post-title" />-->
                              <?php the_post_thumbnail(); ?>
                           </div>
                        </a>
                     </div>
                     <div class="details">
                        <ul class="meta list-inline mb-0">
                           <?php 
                              $post_id = get_the_ID(); // or use the post id if you already have it
                              $category_object = get_the_category($post_id);
                              $category_name = $category_object[0]->name;
                           ?>
                           <li class="list-inline-item"><?php echo $category_name;?></li>
                           <li class="list-inline-item"><?php echo the_date();?> </li>
                        </ul>
                        <h5 class="post-title mb-1 mt-2"><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h5>
                        <p class="excerpt mb-0"><?php echo the_excerpt() ?> </p>
                     </div>
                     <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                           <button class="toggle-button icon-share"></button>
                           <ul class="icons list-unstyled list-inline mb-0">
                              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                              <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                           </ul>
                        </div>
                        <div class="more-button float-end">
                           <a href="#"><span class="icon-options"></span></a>
                        </div>
                     </div>
                  </div>
               </div>
                <?php endwhile; ?>
				<?php endif; ?>
             </div>
             <nav>
                <ul class="pagination justify-content-center">
                   <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
                   <li class="page-item active" aria-current="page">
                      <span class="page-link">1</span>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
                </ul>
             </nav>
          </div>
       </div>
    </div>
 </section>


<?php get_footer(); ?>




