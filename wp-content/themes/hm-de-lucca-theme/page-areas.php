<?php
/**
 * Template Name: Áreas de Atuação
 * page-areas.php — Light Theme v3.0
 */
get_header();
?>

<main id="main" role="main" class="page-areas">

  <!-- Page Hero -->
  <section class="page-hero" aria-label="Áreas de Atuação">
    <div class="container">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
        <span aria-hidden="true">›</span>
        <span class="current" aria-current="page">Áreas de Atuação</span>
      </nav>
      <div class="section-label">Especialidades</div>
      <h1>Áreas de Atuação</h1>
      <p class="lead">Atuamos em diferentes áreas do Direito, com profissionais especializados em cada segmento e atuação integrada para garantir as melhores estratégias jurídicas.</p>
    </div>
  </section>

  <!-- Banner de imagem -->
  <div class="img-banner" style="height:300px;" aria-hidden="true">
    <div class="img-placeholder" style="width:100%;height:100%;"></div>
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/areas-banner.jpg" alt="" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
    <div class="img-banner-overlay" style="background:rgba(11,26,39,0.45);">
      <h2 style="font-size:clamp(1.5rem,3vw,2.5rem);font-weight:300;">Especialidade técnica.<br><em>Resultado estratégico.</em></h2>
    </div>
  </div>

  <!-- Áreas grid -->
  <section class="section" aria-label="Áreas de atuação">
    <div class="container">

      <div class="section-header centered reveal" style="margin-bottom:60px;">
        <div class="section-label">Todas as áreas</div>
        <h2 class="section-title">Nossas Especialidades</h2>
        <p class="section-subtitle">Cada área conta com profissional especializado, atuando de forma integrada com o restante do escritório.</p>
      </div>

      <div class="areas-full-grid">

        <article class="area-full-card reveal">
          <div class="area-full-card-number" aria-hidden="true">01</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h2 class="area-full-card-title">Direito Criminal</h2>
          <p class="area-full-card-text">Atuação técnica e estratégica na defesa de clientes em processos criminais, desde a fase investigativa até os tribunais superiores. Atendemos crimes dolosos, culposos, econômicos e tributários, com foco na garantia dos direitos constitucionais do acusado.</p>
          <a href="<?php echo esc_url( home_url('/direito-criminal') ); ?>" class="area-card-link" style="margin-top: auto; padding-top: 20px;">
            Ver área completa
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

        <article class="area-full-card reveal reveal-delay-1">
          <div class="area-full-card-number" aria-hidden="true">02</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h2 class="area-full-card-title">Direito da Saúde</h2>
          <p class="area-full-card-text">Assessoria especializada em direito à saúde, com atuação em demandas contra planos de saúde, fornecimento de medicamentos e procedimentos via judicial, responsabilidade médica e hospitalar, e regulatório da saúde.</p>
          <a href="<?php echo esc_url( home_url('/direito-da-saude') ); ?>" class="area-card-link" style="margin-top: auto; padding-top: 20px;">
            Ver área completa
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

        <article class="area-full-card reveal reveal-delay-2">
          <div class="area-full-card-number" aria-hidden="true">03</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
          <h2 class="area-full-card-title">Direito Imobiliário</h2>
          <p class="area-full-card-text">Consultoria jurídica completa em negócios imobiliários, contratos de compra e venda, locações, incorporações, usucapião, regularização de imóveis e contencioso cível imobiliário.</p>
          <a href="<?php echo esc_url( home_url('/direito-imobiliario') ); ?>" class="area-card-link" style="margin-top: auto; padding-top: 20px;">
            Ver área completa
            <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
          </a>
        </article>

        <!--
        ADICIONAR NOVAS ÁREAS: copie e cole o bloco abaixo
        <article class="area-full-card reveal">
          <div class="area-full-card-number" aria-hidden="true">04</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><!-- ícone --></svg>
          </div>
          <h2 class="area-full-card-title">Nome da Área</h2>
          <p class="area-full-card-text">Descrição da área...</p>
        </article>
        -->

      </div>

    </div>
  </section>

  <!-- Integração + CTA -->
  <section class="section section-soft" aria-label="Atuação integrada">
    <div class="container" style="max-width:760px;margin:0 auto;text-align:center;">
      <div class="section-label reveal" style="justify-content:center;">Integração</div>
      <h2 class="section-title reveal" style="margin-bottom:24px;">Atuação Integrada</h2>
      <p class="reveal" style="margin-bottom:16px;">Mais do que atuar em diferentes áreas, o escritório funciona de forma coordenada e interligada. Cada profissional possui especialidade própria, e todas as áreas atuam em comunicação permanente.</p>
      <p class="reveal" style="margin-bottom:44px;">Essa integração permite que cada caso seja avaliado sob múltiplas perspectivas jurídicas, com estratégia definida de forma conjunta e responsável.</p>
      <div class="reveal" style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="#contato" class="btn btn-primary btn-lg">Solicitar atendimento</a>
        <a href="<?php echo esc_url(home_url('/equipe')); ?>" class="btn btn-outline btn-lg">Conheça a equipe</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
