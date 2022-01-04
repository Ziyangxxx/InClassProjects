<?php 
/**
 * Template Name: about
 */
get_header();

?>

<header class="masthead" style="background-image: url('/wp-content/themes/dogs/images/about_beijing.jpg')">
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

    <div class="row">
        <!-- Blog Post -->
    
        <div class="col-lg-8 col-md-10 mx-auto">
            <h2 class="section-heading">Hello, my fellow dog lovers!</h2>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </div>

  </div>

<?php get_footer(); ?>