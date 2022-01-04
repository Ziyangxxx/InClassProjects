<?php
/**
 * Template Name: Single Page
 */
get_header();

?>

<header class="masthead" style="background-image: url('/wp-content/themes/dogs/images/d_beijing.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Woof!!</h1>
          <?php while(have_posts()) : the_post(); ?>
            <span class="subheading"><?php the_title(); ?></span>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</header>

  <!-- Main Content -->
  <div class="container">

    <div class="row">
        <?php while(have_posts()) : the_post(); ?>
        <!-- Single Post -->
        
        <div class="col">
            <div class="card h-100">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div class="card-body">
              <h4 class="card-title"><?php the_title() ?></h4>
              <p class="car-text">
                <a href="/dogs/<?php echo get_post_field( 'post_name', get_post()); ?>">More detail</a>
                <?php the_content(); ?>
              </p>
              <?php comments_template(); ?>
            </div>
            </div>
        </div>
        
        <?php endwhile; ?>
    </div>

  </div>

<?php get_footer(); ?>