<?php
/**
 * single.php — Single post / artigo
 */
get_header();
?>

<main id="main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <!-- Post Hero -->
    <section class="single-post-header">
      <div class="container" style="max-width: 800px; margin: 0 auto;">
        <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
          <span aria-hidden="true">›</span>
          <a href="<?php echo esc_url( home_url('/blog') ); ?>">Conteúdo</a>
          <span aria-hidden="true">›</span>
          <span class="current" aria-current="page"><?php the_title(); ?></span>
        </nav>

        <div class="single-post-meta">
          <span class="single-post-category"><?php the_category(', '); ?></span>
          <span>
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d \d\e F \d\e Y'); ?></time>
          </span>
          <span><?php echo get_the_author(); ?></span>
        </div>

        <h1><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
          <div style="margin-top: 36px; overflow: hidden; border: 1px solid var(--border);">
            <?php the_post_thumbnail('large', ['style' => 'width:100%; height:auto; display:block;']); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <!-- Post content -->
    <section class="section">
      <div class="container" style="max-width: 800px; margin: 0 auto;">
        <div class="single-post-content">
          <?php the_content(); ?>
        </div>

        <!-- Tags -->
        <?php the_tags('<div class="post-tags" style="margin-top:40px; display:flex; gap:8px; flex-wrap:wrap;">', ' ', '</div>'); ?>

        <!-- Navigation -->
        <nav class="post-navigation" style="margin-top: 60px; display: flex; justify-content: space-between; gap: 20px; border-top: 1px solid var(--border); padding-top: 40px;" aria-label="Navegação entre posts">
          <div>
            <?php previous_post_link('<a href="%link" class="btn btn-outline">← %title</a>'); ?>
          </div>
          <div>
            <?php next_post_link('<a href="%link" class="btn btn-outline">%title →</a>'); ?>
          </div>
        </nav>

        <!-- Back to blog -->
        <div style="margin-top: 32px; text-align: center;">
          <a href="<?php echo esc_url( home_url('/blog') ); ?>" class="btn btn-ghost">
            ← Voltar para o blog
          </a>
        </div>
      </div>
    </section>

  <?php endwhile; ?>

</main>

<?php get_footer(); ?>
