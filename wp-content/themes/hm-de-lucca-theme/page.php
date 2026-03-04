<?php
/**
 * page.php — Generic page template
 */
get_header();
?>

<main id="main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Page Hero -->
    <section class="page-hero">
      <div class="container">
        <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
          <span aria-hidden="true">›</span>
          <span class="current" aria-current="page"><?php the_title(); ?></span>
        </nav>
        <h1><?php the_title(); ?></h1>
      </div>
    </section>

    <!-- Content -->
    <section class="section">
      <div class="container" style="max-width: 800px; margin: 0 auto;">
        <div class="single-post-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>
