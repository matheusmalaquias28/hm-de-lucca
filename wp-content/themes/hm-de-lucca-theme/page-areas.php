<?php
/**
 * Template Name: Áreas de Atuação
 * page-areas.php — Página completa de áreas
 */
get_header();
?>

<main id="main" role="main" class="page-areas">

  <!-- Page Hero -->
  <section class="page-hero" aria-label="Áreas de Atuação">
    <div class="container">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
        <span aria-hidden="true">›</span>
        <span class="current" aria-current="page">Áreas de Atuação</span>
      </nav>
      <div class="section-label">Especialidades</div>
      <h1>Áreas de Atuação</h1>
      <p class="lead">
        Atuamos em diferentes áreas do Direito, com profissionais especializados em cada segmento e atuação integrada para garantir as melhores estratégias jurídicas.
      </p>
    </div>
  </section>

  <!-- Áreas grid -->
  <section class="section" aria-label="Todas as áreas de atuação">
    <div class="container">

      <div class="areas-full-grid">

        <!-- Direito Criminal -->
        <article class="area-full-card reveal">
          <div class="area-full-card-number" aria-hidden="true">01</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M3 6h18M3 12h18M3 18h18"/>
              <rect x="9" y="2" width="6" height="4" rx="1"/>
              <path d="M12 10v8M8 14h8"/>
            </svg>
          </div>
          <h2 class="area-full-card-title">Direito Criminal</h2>
          <p class="area-full-card-text">
            Atuação técnica e estratégica na defesa de clientes em processos criminais, desde a fase investigativa até os tribunais superiores. Atendemos casos de crimes dolosos, culposos, econômicos e tributários, com foco na garantia dos direitos constitucionais do acusado.
          </p>
        </article>

        <!-- Direito da Saúde -->
        <article class="area-full-card reveal reveal-delay-1">
          <div class="area-full-card-number" aria-hidden="true">02</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <h2 class="area-full-card-title">Direito da Saúde</h2>
          <p class="area-full-card-text">
            Assessoria especializada em direito à saúde, com atuação em demandas contra planos de saúde, fornecimento de medicamentos e procedimentos via judicial, responsabilidade médica e hospitalar, e regulatório da saúde.
          </p>
        </article>

        <!-- Direito Imobiliário -->
        <article class="area-full-card reveal reveal-delay-2">
          <div class="area-full-card-number" aria-hidden="true">03</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
              <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
          </div>
          <h2 class="area-full-card-title">Direito Imobiliário</h2>
          <p class="area-full-card-text">
            Consultoria jurídica completa em negócios imobiliários, contratos de compra e venda, locações, incorporações, usucapião, regularização de imóveis e contencioso cível imobiliário.
          </p>
        </article>

        <!--
        =====================================================
        ATUALIZAR: Adicione novas áreas aqui
        Copie e cole o bloco abaixo para cada nova área.
        Incremente o número sequencial.
        ====================================================

        <article class="area-full-card reveal">
          <div class="area-full-card-number" aria-hidden="true">04</div>
          <div class="area-full-card-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <!-- Ícone da área -->
            </svg>
          </div>
          <h2 class="area-full-card-title">Nome da Área</h2>
          <p class="area-full-card-text">
            Descrição detalhada da área de atuação...
          </p>
        </article>
        -->

      </div><!-- /areas-full-grid -->

    </div>
  </section>

  <!-- Diferencial + CTA -->
  <section class="section section-alt" aria-label="Diferencial do escritório">
    <div class="container" style="max-width: 760px; margin: 0 auto; text-align: center;">
      <div class="section-label reveal" style="justify-content: center;">Integração</div>
      <h2 class="section-title reveal" style="margin-bottom: 24px;">Atuação Integrada</h2>
      <p class="reveal" style="margin-bottom: 16px;">
        Mais do que atuar em diferentes áreas, o escritório funciona de forma coordenada e interligada. Cada profissional possui especialidade própria, e todas as áreas atuam em comunicação permanente.
      </p>
      <p class="reveal" style="margin-bottom: 44px;">
        Essa integração permite que cada caso seja avaliado sob múltiplas perspectivas jurídicas, com estratégia definida de forma conjunta e responsável.
      </p>
      <div class="reveal" style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
        <a href="#contato" class="btn btn-primary btn-lg">Solicitar atendimento</a>
        <a href="<?php echo esc_url( home_url('/equipe') ); ?>" class="btn btn-outline btn-lg">Conheça a equipe</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
