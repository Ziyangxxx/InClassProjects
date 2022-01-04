<?php
/**
 * Template Name: index
 */
get_header(); 

?>

<!-- Page Header -->
  
<header class="masthead" style="background-image: url('/wp-content/themes/dogs/images/beijing.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Woof!!</h1>
          <span class="subheading">We Present to You Our Most Popular Dogs</span>
        </div>
      </div>
    </div>
  </div>
</header>

  <!-- Main Content -->
  <div class="container">

  <div id="cat">
    <?php wp_list_categories(['title_li' => '']); ?>
  </div>

    <div class="row">
      <?php while(have_posts()) : the_post(); ?>
      <!-- Blog Post -->
    
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="<?php the_permalink(); ?>">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
          </a>
          
          <div class="card-body">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
          <div class="card-footer">
            <a href="/dogs/<?php echo get_post_field( 'post_name', get_post()); ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>
    
      <?php endwhile; ?>
    </div>

  </div>

<?php get_footer(); ?>