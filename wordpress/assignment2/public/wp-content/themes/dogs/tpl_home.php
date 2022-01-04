<?php 
/**
 * Template Name: home
 */
get_header();

?>

<header class="masthead" style="background-image: url('/wp-content/themes/dogs/images/beijing.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Woof!!</h1>
          <span class="subheading">A Site for Your Favourite Dogs</span>
        </div>
      </div>
    </div>
  </div>
</header>

  <!-- Main Content -->
  <div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <a href="/dogs">
                    <h2 class="post-title">
                        Come check if you can find the dog which is on your mind!
                    </h2>
                    <h3 class="post-subtitle">
                        We have up to 10 dogs out of 5 categories for you to choose from.
                    </h3>
                    <div class="slider">
                      <?php echo do_shortcode('[slide-anything id="93"]'); ?>
                    </div>
                </a>
            </div>
        </div>
    </div>

  </div>

<?php get_footer(); ?>