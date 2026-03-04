<?php
/**
 * front-page.php — Homepage
 * HM De Lucca Advocacia
 */
get_header();
?>

<main id="main" role="main">

  <!-- ============================================================
       HERO
  ============================================================ -->
  <section class="hero" id="inicio" aria-label="Início">

    <!-- Background layers -->
    <div class="hero-bg" aria-hidden="true">
      <div class="hero-bg-gradient"></div>
      <div class="hero-bg-pattern"></div>
      <div class="hero-bg-line"></div>
    </div>

    <div class="container">

      <!-- Text content -->
      <div class="hero-content">

        <div class="hero-badge" style="--delay: 0.1s">
          <span class="badge-dot" aria-hidden="true"></span>
          Atendimento nacional
        </div>

        <h1 class="hero-title" style="--delay: 0.3s">
          Advocacia técnica,<br>
          <em>estratégica</em> e<br>
          personalizada
        </h1>

        <p class="hero-subtitle" style="--delay: 0.5s">
          Atuação jurídica em diferentes áreas do Direito, aliando estratégia jurídica e precisão técnica.
        </p>

        <div class="hero-checks" style="--delay: 0.7s">
          <div class="hero-check">
            <span class="hero-check-icon" aria-hidden="true">
              <svg viewBox="0 0 10 10" fill="none" style="width:10px;height:10px;">
                <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            Atendimento nacional
          </div>
          <div class="hero-check">
            <span class="hero-check-icon" aria-hidden="true">
              <svg viewBox="0 0 10 10" fill="none" style="width:10px;height:10px;">
                <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            Excelência técnica e ética
          </div>
          <div class="hero-check">
            <span class="hero-check-icon" aria-hidden="true">
              <svg viewBox="0 0 10 10" fill="none" style="width:10px;height:10px;">
                <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            Estratégia jurídica integrada
          </div>
        </div>

        <div class="hero-buttons" style="--delay: 0.9s">
          <a href="#contato" class="btn btn-primary btn-lg">
            Solicitar atendimento
            <span class="btn-arrow" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
          </a>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="btn btn-outline btn-lg">
            Conheça nossas áreas de atuação
          </a>
        </div>

      </div><!-- /hero-content -->

      <!-- Visual card -->
      <div class="hero-visual" aria-hidden="true" style="--delay: 0.6s">
        <div class="hero-card">
          <div class="hero-card-monogram">HM</div>
          <div class="hero-card-label">Escritório</div>
          <h2 class="hero-card-title">HM De Lucca<br>Advocacia</h2>
          <p class="hero-card-text">
            Soluções jurídicas com excelência técnica, construindo relações duradouras baseadas em confiança e resultado.
          </p>
          <div class="hero-card-stats">
            <div class="hcs-item">
              <span class="hcs-number" data-count="3" data-suffix="+">3+</span>
              <span class="hcs-label">Áreas de atuação</span>
            </div>
            <div class="hcs-item">
              <span class="hcs-number">Nacional</span>
              <span class="hcs-label">Abrangência</span>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /container -->

    <!-- Scroll indicator -->
    <div class="hero-scroll" aria-hidden="true">
      <div class="hero-scroll-line"></div>
      <span>Rolar</span>
    </div>

  </section><!-- /hero -->


  <!-- ============================================================
       SOBRE O ESCRITÓRIO
  ============================================================ -->
  <section class="section section-sobre" id="sobre" aria-labelledby="sobre-title">
    <div class="container">

      <div class="section-header reveal">
        <div class="section-label">O Escritório</div>
        <h2 class="section-title" id="sobre-title">Sobre o Escritório</h2>
      </div>

      <div class="sobre-grid">

        <!-- Missão -->
        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3 class="sobre-card-title">Missão</h3>
          <p class="sobre-card-text">
            Oferecer soluções jurídicas com excelência técnica, guiando e protegendo clientes nos momentos mais desafiadores, com respeito, clareza e comprometimento, construindo relações duradouras baseadas em confiança e resultado.
          </p>
        </div>

        <!-- Visão -->
        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/>
              <polyline points="12 6 12 12 16 14"/>
            </svg>
          </div>
          <h3 class="sobre-card-title">Visão</h3>
          <p class="sobre-card-text">
            Crescer de forma organizada, com estrutura sólida e atuação estratégica, preservando a proximidade com o cliente e o comprometimento com a qualidade técnica.
          </p>
        </div>

        <!-- Valores -->
        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
          </div>
          <h3 class="sobre-card-title">Valores</h3>
          <ul class="valores-list">
            <li>Integridade sem concessões</li>
            <li>Excelência técnica com rigor ético</li>
            <li>Comprometimento real com o cliente</li>
            <li>Cooperação com respeito e mérito</li>
          </ul>
        </div>

      </div><!-- /sobre-grid -->

      <div class="section-cta reveal">
        <a href="#contato" class="btn btn-outline btn-lg">Fale com o escritório</a>
      </div>

    </div>
  </section><!-- /sobre -->


  <!-- ============================================================
       ÁREAS DE ATUAÇÃO
  ============================================================ -->
  <section class="section section-alt" id="areas" aria-labelledby="areas-title">
    <div class="container">

      <div class="section-header reveal">
        <div class="section-label">Especialidades</div>
        <h2 class="section-title" id="areas-title">Áreas de Atuação</h2>
        <p class="section-subtitle">
          Atuamos em diferentes áreas do Direito, com profissionais especializados em cada segmento.
        </p>
      </div>

      <div class="areas-grid">

        <!-- Direito Criminal -->
        <article class="area-card">
          <div class="area-card-number" aria-hidden="true">01</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M3 6h18M3 12h18M3 18h18"/>
              <rect x="9" y="2" width="6" height="4" rx="1"/>
              <path d="M12 10v8M8 14h8"/>
            </svg>
          </div>
          <h3 class="area-card-title">Direito Criminal</h3>
          <p class="area-card-text">
            Defesa técnica e estratégica em processos criminais, com acompanhamento especializado em todas as fases processuais.
          </p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link" aria-label="Saiba mais sobre Direito Criminal">
            Saiba mais
            <svg viewBox="0 0 14 14">
              <path d="M2 7h10M8 3l4 4-4 4"/>
            </svg>
          </a>
        </article>

        <!-- Direito da Saúde -->
        <article class="area-card">
          <div class="area-card-number" aria-hidden="true">02</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <h3 class="area-card-title">Direito da Saúde</h3>
          <p class="area-card-text">
            Assessoria jurídica especializada em direito à saúde, planos de saúde e responsabilidade médica.
          </p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link" aria-label="Saiba mais sobre Direito da Saúde">
            Saiba mais
            <svg viewBox="0 0 14 14">
              <path d="M2 7h10M8 3l4 4-4 4"/>
            </svg>
          </a>
        </article>

        <!-- Direito Imobiliário -->
        <article class="area-card">
          <div class="area-card-number" aria-hidden="true">03</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h3 class="area-card-title">Direito Imobiliário</h3>
          <p class="area-card-text">
            Consultoria e contencioso em direito imobiliário, contratos e negócios jurídicos imobiliários.
          </p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link" aria-label="Saiba mais sobre Direito Imobiliário">
            Saiba mais
            <svg viewBox="0 0 14 14">
              <path d="M2 7h10M8 3l4 4-4 4"/>
            </svg>
          </a>
        </article>

      </div><!-- /areas-grid -->

      <div class="section-cta reveal">
        <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="btn btn-primary btn-lg">
          Explorar outras áreas de atuação
          <span class="btn-arrow" aria-hidden="true">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>
      </div>

    </div>
  </section><!-- /areas -->


  <!-- ============================================================
       DIFERENCIAL TÉCNICO
  ============================================================ -->
  <section class="section section-diferencial" aria-labelledby="diferencial-title">
    <div class="container">
      <div class="diferencial-inner">

        <!-- Content -->
        <div class="diferencial-content">

          <div class="section-label reveal">Diferencial</div>

          <h2 class="section-title reveal" id="diferencial-title" style="margin-bottom: 24px;">
            Diferencial<br><em>Técnico</em>
          </h2>

          <blockquote class="diferencial-quote reveal">
            "Cada caso avaliado sob múltiplas perspectivas jurídicas, com estratégia definida de forma conjunta e responsável."
          </blockquote>

          <div class="diferencial-text reveal">
            <p>
              Mais do que atuar em diferentes áreas, o escritório funciona de forma coordenada e interligada. Cada profissional possui especialidade própria, e todas as áreas atuam em comunicação permanente para garantir análises amplas, decisões estratégicas consistentes e condução técnica alinhada.
            </p>
            <p>
              Essa integração permite que cada caso seja avaliado sob múltiplas perspectivas jurídicas, com estratégia definida de forma conjunta e responsável.
            </p>
          </div>

          <div class="diferencial-features reveal">
            <div class="df-item">Análise multidisciplinar</div>
            <div class="df-item">Estratégia integrada</div>
            <div class="df-item">Comunicação constante</div>
            <div class="df-item">Decisões coordenadas</div>
          </div>

          <div class="reveal">
            <a href="<?php echo esc_url( home_url('/equipe') ); ?>" class="btn btn-outline btn-lg">
              Conheça nossa equipe
            </a>
          </div>

        </div>

        <!-- Graphic -->
        <div class="diferencial-visual reveal" aria-hidden="true">
          <div class="diferencial-graphic">
            <div class="dg-ring dg-ring-1"></div>
            <div class="dg-ring dg-ring-2"></div>
            <div class="dg-ring dg-ring-3"></div>
            <div class="dg-dot dg-dot-1"></div>
            <div class="dg-dot dg-dot-2"></div>
            <div class="dg-dot dg-dot-3"></div>
            <div class="dg-center">
              <span class="dg-center-label">HM</span>
              <span class="dg-center-sub">Advocacia</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- /diferencial -->


  <!-- ============================================================
       CONTEÚDO JURÍDICO / BLOG
  ============================================================ -->
  <section class="section section-blog section-alt" aria-labelledby="blog-title">
    <div class="container">

      <div class="section-header centered reveal">
        <div class="section-label">Publicações</div>
        <h2 class="section-title" id="blog-title">Conteúdo Jurídico</h2>
        <p class="section-subtitle">
          Artigos e publicações voltadas à orientação jurídica, esclarecimento de dúvidas frequentes e análise de temas relevantes do Direito.
        </p>
      </div>

      <?php
      $recent_posts = new WP_Query([
        'posts_per_page' => 3,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
      ]);
      ?>

      <div class="blog-grid">
        <?php if ( $recent_posts->have_posts() ) : ?>
          <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
            <article class="blog-card reveal">
              <div class="blog-card-thumb">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                <?php else : ?>
                  <div class="blog-card-thumb-placeholder" aria-hidden="true">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                      <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" stroke="currentColor" stroke-width="1"/>
                      <polyline points="14 2 14 8 20 8" stroke="currentColor" stroke-width="1"/>
                    </svg>
                  </div>
                <?php endif; ?>
              </div>
              <div class="blog-card-body">
                <div class="blog-card-category">
                  <?php the_category(', '); ?>
                </div>
                <h3 class="blog-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
                <div class="blog-card-meta">
                  <span class="blog-card-date">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                      <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d/m/Y'); ?></time>
                  </span>
                </div>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="blog-empty">
            <div class="blog-empty-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
                <line x1="16" y1="13" x2="8" y2="13"/>
                <line x1="16" y1="17" x2="8" y2="17"/>
                <polyline points="10 9 9 9 8 9"/>
              </svg>
            </div>
            <p class="blog-empty-text">Em breve, novos artigos e publicações.</p>
          </div>
        <?php endif; ?>
      </div><!-- /blog-grid -->

      <div class="section-cta reveal">
        <a href="<?php echo esc_url( home_url('/blog') ); ?>" class="btn btn-outline btn-lg">
          Acessar o blog
          <span class="btn-arrow" aria-hidden="true">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>
      </div>

    </div>
  </section><!-- /blog -->


  <!-- ============================================================
       CONTATO INSTITUCIONAL
  ============================================================ -->
  <section class="section section-contato" id="contato" aria-labelledby="contato-title">
    <div class="container">
      <div class="contato-inner">

        <!-- Info -->
        <div class="contato-info">
          <div class="section-label reveal">Contato</div>
          <h2 class="section-title reveal" id="contato-title">Entre em Contato</h2>
          <p class="reveal">Entre em contato com o escritório ou acompanhe nossos canais institucionais.</p>

          <ul class="contato-list" role="list">

            <li class="reveal reveal-delay-1">
              <span class="contato-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </span>
              <div class="contato-detail">
                <strong>Endereço</strong>
                <!-- ATUALIZAR: Endereço completo do escritório -->
                Av. Exemplo, 1234 — Sala 56, Cidade — UF
              </div>
            </li>

            <li class="reveal reveal-delay-2">
              <span class="contato-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8.9a16 16 0 006.29 6.29l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
              </span>
              <div class="contato-detail">
                <strong>Telefone</strong>
                <!-- ATUALIZAR: Telefone do escritório -->
                (00) 00000-0000
              </div>
            </li>

            <li class="reveal reveal-delay-3">
              <span class="contato-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </span>
              <div class="contato-detail">
                <strong>E-mail</strong>
                <!-- ATUALIZAR: E-mail do escritório -->
                contato@hmdelucca.com.br
              </div>
            </li>

            <li class="reveal reveal-delay-4">
              <span class="contato-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"/>
                </svg>
              </span>
              <div class="contato-detail">
                <strong>Redes Sociais</strong>
                Instagram · LinkedIn · WhatsApp
              </div>
            </li>

          </ul>

          <div class="contato-buttons reveal">
            <a href="<?php echo esc_url( home_url('/fale-conosco') ); ?>" class="btn btn-primary btn-lg">
              Fale Conosco
            </a>
            <a href="<?php echo esc_url( home_url('/trabalhe-conosco') ); ?>" class="btn btn-outline btn-lg">
              Trabalhe Conosco
            </a>
          </div>
        </div>

        <!-- Visual card -->
        <div class="reveal">
          <div class="contato-card">
            <div class="contato-card-bg" aria-hidden="true">HM</div>
            <div class="contato-card-inner">
              <div class="contato-card-logo" aria-hidden="true">HM</div>
              <div class="contato-card-name">
                De Lucca Advocacia
                <span>Escritório de Advocacia</span>
              </div>
              <div class="contato-card-divider"></div>
              <p class="contato-card-tagline">
                "Advocacia técnica, estratégica e personalizada — com comprometimento real com o cliente."
              </p>
            </div>
          </div>
        </div>

      </div><!-- /contato-inner -->
    </div>
  </section><!-- /contato -->

</main>

<?php get_footer(); ?>
