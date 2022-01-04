<?php
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
            <span class="subheading"><?php the_dog_name(); ?></span>
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
              <img class="card-img-top" src="<?php the_image(); ?>" alt="<?php the_dog_name(); ?>">
              <div class="card-body">
                <h4 class="card-title"><?php the_dog_name(); ?></h4>
                <p class="car-text"><strong>Other Names: </strong><?php the_other_name(); ?></p>
                <p class="car-text"><strong>Origin: </strong><?php the_dog_origin(); ?></p>
                <p class="car-text"><strong>Category: </strong><?php the_dog_category(); ?></p>
                <p class="car-text"><strong>Male Weight: </strong><?php the_male_weight(); ?></p>
                <p class="car-text"><strong>Female Weight: </strong><?php the_female_weight(); ?></p>
                <p class="car-text"><strong>Life Span: </strong><?php the_life_span(); ?></p>
                <p class="car-text"><strong>Legitimacy: </strong><?php the_legitimacy(); ?></p>
                <p class="car-text"><strong>Description: </strong><?php the_description(); ?></p>
              </div>
            </div>
        </div>
        
        <?php endwhile; ?>
    </div>

  </div>

<?php get_footer(); ?>