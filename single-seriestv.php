<?php get_header(); ?>

<article id="row-1" class="background-img">
  <section class="min-vh-100 container d-flex flex-column align-content-center">
    <div class="row">



<div class="col-md-5">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1 class="text-gold"><?php the_title(); ?></h1>

  <p class="text-secondary mt-4"><?php  the_content(); ?></p>
<?php endwhile; else : ?>
    <article>
      <p>Sorry, no posts were found!</p>
    </article>

<?php endif; ?>
</div>
<div class="col-12 col-md-7">
  <img class="img-contain img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sample-plate.png" alt="sample-plate">
</div>
</div>
</section>
</article>

<?php get_footer(); ?>
