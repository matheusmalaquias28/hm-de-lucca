<?php
/**
 * index.php — Blog / Fallback
 */
get_header();
?>

<main id="main" role="main">

  <!-- Page Hero -->
  <section class="page-hero" aria-label="Blog">
    <div class="container">
      <?php if ( is_home() && ! is_front_page() ) : ?>
        <div class="section-label">Publicações</div>
        <h1>Conteúdo Jurídico</h1>
        <p class="lead">Artigos e publicações voltadas à orientação jurídica, esclarecimento de dúvidas frequentes e análise de temas relevantes do Direito.</p>
      <?php elseif ( is_archive() ) : ?>
        <div class="section-label">Arquivo</div>
        <h1><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<p class="lead">', '</p>'); ?>
      <?php elseif ( is_search() ) : ?>
        <div class="section-label">Busca</div>
        <h1>Resultados para: "<?php echo get_search_query(); ?>"</h1>
      <?php else : ?>
        <div class="section-label">Blog</div>
        <h1>Conteúdo Jurídico</h1>
      <?php endif; ?>
    </div>
  </section>

  <!-- Posts -->
  <section class="section">
    <div class="container">
      <div class="blog-layout">

        <!-- Main content -->
        <div class="blog-posts">
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <article class="blog-card reveal" id="post-<?php the_ID(); ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="blog-card-thumb">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                    </a>
                  </div>
                <?php endif; ?>
                <div class="blog-card-body">
                  <div class="blog-card-category"><?php the_category(', '); ?></div>
                  <h2 class="blog-card-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
                  <div class="blog-card-meta">
                    <span class="blog-card-date">
                      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                      </svg>
                      <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d/m/Y'); ?></time>
                    </span>
                    <a href="<?php the_permalink(); ?>" class="btn btn-ghost" style="padding: 4px 0; font-size: 0.8rem;">Ler artigo →</a>
                  </div>
                </div>
              </article>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="pagination" style="margin-top: 48px;">
              <?php
                the_posts_pagination([
                  'prev_text' => '← Anterior',
                  'next_text' => 'Próximo →',
                  'mid_size'  => 2,
                ]);
              ?>
            </div>

          <?php else : ?>
            <div class="blog-empty" style="grid-column: 1/-1; padding: 80px 40px; background: var(--bg-card); text-align: center;">
              <div class="blog-empty-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                  <polyline points="14 2 14 8 20 8"/>
                </svg>
              </div>
              <?php if ( is_search() ) : ?>
                <p class="blog-empty-text">Nenhum resultado encontrado para "<?php echo get_search_query(); ?>".</p>
              <?php else : ?>
                <p class="blog-empty-text">Em breve, novos artigos e publicações jurídicas.</p>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div><!-- /blog-posts -->

        <!-- Sidebar -->
        <aside class="blog-sidebar" role="complementary" aria-label="Sidebar">
          <?php if ( is_active_sidebar('sidebar-blog') ) : ?>
            <?php dynamic_sidebar('sidebar-blog'); ?>
          <?php else : ?>
            <!-- Default sidebar content -->
            <div style="background: var(--bg-card); border: 1px solid var(--gold-border); padding: 32px;">
              <h4 style="font-family: var(--font-serif); font-size: 1.2rem; color: var(--text); margin-bottom: 20px;">Sobre o Escritório</h4>
              <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 24px; line-height: 1.7;">
                HM De Lucca Advocacia — soluções jurídicas com excelência técnica e comprometimento real com o cliente.
              </p>
              <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-outline" style="width: 100%; justify-content: center;">Conheça o escritório</a>
            </div>
          <?php endif; ?>
        </aside>

      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
