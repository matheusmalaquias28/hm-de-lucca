<?php
/**
 * front-page.php — Homepage
 * HM De Lucca Advocacia — Light Theme v3.0
 */
get_header();
?>

<main id="main" role="main">

  <!-- ============================================================
       HERO — SPLIT LAYOUT (Text left | Image right)
  ============================================================ -->
  <section class="hero" id="inicio" aria-label="Início">

    <!-- LEFT: Content -->
    <div class="hero-content">

      <div class="hero-eyebrow">
        <span class="hero-eyebrow-dot" aria-hidden="true"></span>
        <span class="hero-eyebrow-text">Atendimento nacional</span>
      </div>

      <h1 class="hero-title">
        Advocacia técnica,<br>
        <em>estratégica</em> e<br>
        personalizada
      </h1>

      <p class="hero-subtitle">
        Atuação jurídica em diferentes áreas do Direito, aliando estratégia jurídica e precisão técnica.
      </p>

      <div class="hero-checks">
        <div class="hero-check">
          <span class="hero-check-icon" aria-hidden="true">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
              <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          Atendimento nacional
        </div>
        <div class="hero-check">
          <span class="hero-check-icon" aria-hidden="true">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
              <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          Excelência técnica e ética
        </div>
        <div class="hero-check">
          <span class="hero-check-icon" aria-hidden="true">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
              <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
          Estratégia jurídica integrada
        </div>
      </div>

      <div class="hero-buttons">
        <a href="#contato" class="btn btn-primary btn-lg">
          Solicitar atendimento
          <span class="btn-arrow" aria-hidden="true">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>
        <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="btn btn-outline btn-lg">
          Áreas de atuação
        </a>
      </div>

    </div><!-- /hero-content -->

    <!-- RIGHT: Image -->
    <div class="hero-image" aria-hidden="true">
      <?php
      // Para substituir: faça upload de uma foto do escritório/advogado
      // e adicione o caminho abaixo como src da <img>
      ?>
      <div class="img-placeholder" style="width:100%; height:100%; min-height:600px;"></div>
      <!--
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-foto.jpg"
        alt="HM De Lucca Advocacia"
        loading="eager"
      />
      -->

      <!-- Stats overlay -->
      <div class="hero-stats" aria-label="Diferenciais">
        <div class="hero-stat">
          <div class="hero-stat-number" data-count="3" data-suffix="+">3+</div>
          <div class="hero-stat-label">Áreas de atuação</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">Nacional</div>
          <div class="hero-stat-label">Abrangência</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">100%</div>
          <div class="hero-stat-label">Comprometimento</div>
        </div>
      </div>
    </div><!-- /hero-image -->

    <!-- Scroll indicator (on hero-content side) -->
    <div class="hero-scroll" aria-hidden="true" style="position:absolute; bottom:40px; left:25%;">
      <div class="hero-scroll-line"></div>
      <span>Rolar</span>
    </div>

  </section><!-- /hero -->


  <!-- ============================================================
       FAIXA DE IMAGENS (3 imagens)
  ============================================================ -->
  <div class="img-strip" aria-hidden="true">
    <div class="img-strip-item">
      <div class="img-placeholder" style="width:100%;height:100%;"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-01.jpg" alt="Escritório" loading="lazy" /> -->
    </div>
    <div class="img-strip-item">
      <div class="img-placeholder" style="width:100%;height:100%;background:linear-gradient(140deg,#122030,#1c3449);"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-02.jpg" alt="Reunião" loading="lazy" /> -->
    </div>
    <div class="img-strip-item">
      <div class="img-placeholder" style="width:100%;height:100%;background:linear-gradient(140deg,#1a2e40,#0b1a27);"></div>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-03.jpg" alt="Consultório" loading="lazy" /> -->
    </div>
  </div>


  <!-- ============================================================
       SOBRE O ESCRITÓRIO
  ============================================================ -->
  <section class="section section-soft" id="sobre" aria-labelledby="sobre-title">
    <div class="container">

      <!-- Intro split: texto + imagem -->
      <div class="sobre-intro">

        <div class="reveal">
          <div class="section-label">O Escritório</div>
          <h2 class="section-title" id="sobre-title">Sobre o<br><em>Escritório</em></h2>
          <div class="sobre-intro-text">
            <p>
              Fundado com o propósito de oferecer soluções jurídicas de alto nível, o escritório HM De Lucca Advocacia atua com profissionais especializados em diferentes áreas do Direito, sempre com foco na excelência técnica e no comprometimento real com cada cliente.
            </p>
            <p>
              Nossa atuação é pautada por valores sólidos: integridade, rigor ético e a proximidade que faz a diferença nos momentos mais desafiadores.
            </p>
            <a href="#contato" class="btn btn-outline" style="margin-top: 8px;">Fale com o escritório</a>
          </div>
        </div>

        <!-- Imagem do escritório -->
        <div class="sobre-intro-img img-placeholder reveal reveal-delay-2" role="img" aria-label="Foto do escritório">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/escritorio.jpg" alt="HM De Lucca — Escritório" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
        </div>

      </div>

      <!-- Missão, Visão, Valores -->
      <div class="sobre-grid">

        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="sobre-card-title">Missão</h3>
          <p class="sobre-card-text">
            Oferecer soluções jurídicas com excelência técnica, guiando e protegendo clientes nos momentos mais desafiadores, com respeito, clareza e comprometimento, construindo relações duradouras baseadas em confiança e resultado.
          </p>
        </div>

        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3 class="sobre-card-title">Visão</h3>
          <p class="sobre-card-text">
            Crescer de forma organizada, com estrutura sólida e atuação estratégica, preservando a proximidade com o cliente e o comprometimento com a qualidade técnica.
          </p>
        </div>

        <div class="sobre-card">
          <div class="sobre-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3 class="sobre-card-title">Valores</h3>
          <ul class="valores-list">
            <li>Integridade sem concessões</li>
            <li>Excelência técnica com rigor ético</li>
            <li>Comprometimento real com o cliente</li>
            <li>Cooperação com respeito e mérito</li>
          </ul>
        </div>

      </div>

    </div>
  </section><!-- /sobre -->


  <!-- ============================================================
       ÁREAS DE ATUAÇÃO
  ============================================================ -->
  <section class="section" id="areas" aria-labelledby="areas-title">
    <div class="container">

      <div class="section-header reveal">
        <div class="section-label">Especialidades</div>
        <h2 class="section-title" id="areas-title">Áreas de Atuação</h2>
        <p class="section-subtitle">
          Atuamos em diferentes áreas do Direito, com profissionais especializados em cada segmento.
        </p>
      </div>

      <div class="areas-grid">

        <article class="area-card">
          <div class="area-card-top-line" aria-hidden="true"></div>
          <div class="area-card-number" aria-hidden="true">01</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="area-card-title">Direito Criminal</h3>
          <p class="area-card-text">Defesa técnica e estratégica em processos criminais, com acompanhamento especializado em todas as fases processuais.</p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link">
            Saiba mais
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

        <article class="area-card">
          <div class="area-card-top-line" aria-hidden="true"></div>
          <div class="area-card-number" aria-hidden="true">02</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3 class="area-card-title">Direito da Saúde</h3>
          <p class="area-card-text">Assessoria especializada em saúde, planos de saúde, responsabilidade médica e acesso a tratamentos via judicial.</p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link">
            Saiba mais
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

        <article class="area-card">
          <div class="area-card-top-line" aria-hidden="true"></div>
          <div class="area-card-number" aria-hidden="true">03</div>
          <div class="area-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h3 class="area-card-title">Direito Imobiliário</h3>
          <p class="area-card-text">Consultoria e contencioso em direito imobiliário, contratos e negócios jurídicos imobiliários.</p>
          <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="area-card-link">
            Saiba mais
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

      </div>

      <div class="section-cta reveal">
        <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="btn btn-primary btn-lg">
          Explorar todas as áreas
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
       BANNER DE IMAGEM — frase de destaque
  ============================================================ -->
  <div class="img-banner" aria-hidden="true">
    <div class="img-placeholder" style="width:100%;height:100%;"></div>
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-meio.jpg" alt="" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
    <div class="img-banner-overlay">
      <h2>Advocacia com propósito.<br><em>Resultado com responsabilidade.</em></h2>
      <p>Cada caso conduzido com rigor técnico e atenção personalizada.</p>
    </div>
  </div>


  <!-- ============================================================
       DIFERENCIAL TÉCNICO (dark section + image)
  ============================================================ -->
  <section aria-labelledby="diferencial-title">
    <div class="diferencial-split">

      <!-- Imagem lado esquerdo -->
      <div class="diferencial-img reveal" role="img" aria-label="Foto do diferencial técnico">
        <div class="img-placeholder" style="width:100%;height:100%;min-height:560px;"></div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/diferencial.jpg" alt="Diferencial técnico" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
      </div>

      <!-- Texto lado direito (dark) -->
      <div class="diferencial-body">
        <div class="section-label reveal">Diferencial</div>
        <h2 class="section-title reveal" id="diferencial-title">Diferencial<br><em>Técnico</em></h2>

        <blockquote class="diferencial-quote reveal">
          "Cada caso avaliado sob múltiplas perspectivas jurídicas, com estratégia conjunta e responsável."
        </blockquote>

        <div class="diferencial-text reveal">
          <p>
            Mais do que atuar em diferentes áreas, o escritório funciona de forma coordenada e interligada. Cada profissional possui especialidade própria, e todas as áreas atuam em comunicação permanente.
          </p>
          <p>
            Essa integração permite análises amplas, decisões estratégicas consistentes e condução técnica alinhada.
          </p>
        </div>

        <div class="diferencial-features reveal">
          <div class="df-item">Análise multidisciplinar</div>
          <div class="df-item">Estratégia integrada</div>
          <div class="df-item">Comunicação constante</div>
          <div class="df-item">Decisões coordenadas</div>
        </div>

        <div class="reveal">
          <a href="<?php echo esc_url( home_url('/equipe') ); ?>" class="btn btn-white-outline btn-lg">
            Conheça nossa equipe
          </a>
        </div>

      </div>

    </div>
  </section><!-- /diferencial -->


  <!-- ============================================================
       CONTEÚDO JURÍDICO / BLOG
  ============================================================ -->
  <section class="section section-soft" aria-labelledby="blog-title">
    <div class="container">

      <div class="section-header centered reveal">
        <div class="section-label">Publicações</div>
        <h2 class="section-title" id="blog-title">Conteúdo Jurídico</h2>
        <p class="section-subtitle">
          Artigos e publicações voltadas à orientação jurídica, esclarecimento de dúvidas e análise de temas relevantes do Direito.
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
              <a href="<?php the_permalink(); ?>" class="blog-card-thumb">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                <?php else : ?>
                  <div class="blog-card-thumb-placeholder" aria-hidden="true">Foto</div>
                <?php endif; ?>
              </a>
              <div class="blog-card-body">
                <div class="blog-card-category"><?php the_category(', '); ?></div>
                <h3 class="blog-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="blog-card-excerpt"><?php the_excerpt(); ?></p>
                <div class="blog-card-meta">
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>" style="font-size:0.76rem;color:var(--text-light);"><?php echo get_the_date('d/m/Y'); ?></time>
                  <a href="<?php the_permalink(); ?>" class="blog-card-read-more">
                    Ler artigo
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                      <path d="M2 6h8M6 2l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </div>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="blog-empty">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--border)" stroke-width="1" style="margin:0 auto 16px;" aria-hidden="true">
              <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
            </svg>
            <p style="font-family:var(--font-serif);font-size:1.2rem;color:var(--text-muted);">Em breve, novos artigos e publicações.</p>
          </div>
        <?php endif; ?>
      </div>

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
       CONTATO INSTITUCIONAL (image left | info right)
  ============================================================ -->
  <section class="section section-warm" id="contato" aria-labelledby="contato-title">
    <div class="container">
      <div class="section-header reveal" style="margin-bottom: 48px;">
        <div class="section-label">Contato</div>
        <h2 class="section-title" id="contato-title">Entre em<br><em>Contato</em></h2>
      </div>
    </div>

    <div class="contato-split">

      <!-- Imagem -->
      <div class="contato-img-side reveal" role="img" aria-label="Foto de contato">
        <div class="img-placeholder" style="width:100%;height:100%;min-height:500px;background:linear-gradient(140deg,#0b1a27,#1c3449);"></div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contato-foto.jpg" alt="Entre em contato" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
      </div>

      <!-- Info -->
      <div class="contato-info-side">

        <p class="reveal">Entre em contato com o escritório ou acompanhe nossos canais institucionais.</p>

        <ul class="contato-list" role="list">

          <li class="reveal reveal-delay-1">
            <span class="contato-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </span>
            <div class="contato-detail">
              <strong>Endereço</strong>
              <!-- ATUALIZAR -->
              Av. Exemplo, 1234 — Sala 56, Cidade — UF
            </div>
          </li>

          <li class="reveal reveal-delay-2">
            <span class="contato-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.8 19.79 19.79 0 01.4 1.12 2 2 0 012 .4h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 8.9a16 16 0 006.29 6.29l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </span>
            <div class="contato-detail">
              <strong>Telefone</strong>
              <!-- ATUALIZAR -->
              (00) 00000-0000
            </div>
          </li>

          <li class="reveal reveal-delay-3">
            <span class="contato-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </span>
            <div class="contato-detail">
              <strong>E-mail</strong>
              <!-- ATUALIZAR -->
              contato@hmdelucca.com.br
            </div>
          </li>

          <li class="reveal reveal-delay-4">
            <span class="contato-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
            </span>
            <div class="contato-detail">
              <strong>Redes Sociais</strong>
              Instagram · LinkedIn · WhatsApp
            </div>
          </li>

        </ul>

        <div class="contato-buttons reveal">
          <a href="<?php echo esc_url( home_url('/fale-conosco') ); ?>" class="btn btn-primary btn-lg">Fale Conosco</a>
          <a href="<?php echo esc_url( home_url('/trabalhe-conosco') ); ?>" class="btn btn-outline btn-lg">Trabalhe Conosco</a>
        </div>

      </div><!-- /contato-info-side -->

    </div><!-- /contato-split -->
  </section><!-- /contato -->

</main>

<?php get_footer(); ?>
