<?php
/**
 * Template Name: Equipe
 * page-equipe.php — Página da Equipe — Light Theme v3.0
 */
get_header();
?>

<main id="main" role="main" class="page-equipe">

  <!-- Page Hero -->
  <section class="page-hero" aria-label="Equipe">
    <div class="container">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Início</a>
        <span aria-hidden="true">›</span>
        <span class="current" aria-current="page">Equipe</span>
      </nav>
      <div class="section-label">Profissionais</div>
      <h1>Nossa Equipe</h1>
      <p class="lead">Conheça os profissionais que compõem o escritório HM De Lucca — especialistas dedicados a oferecer soluções jurídicas com excelência técnica.</p>
    </div>
  </section>

  <!-- Imagem banner da equipe -->
  <div class="img-banner" style="height: 360px;" aria-hidden="true">
    <div class="img-placeholder" style="width:100%;height:100%;background:linear-gradient(140deg,#0b1a27,#1c3449);"></div>
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/equipe-banner.jpg" alt="" loading="lazy" style="width:100%;height:100%;object-fit:cover;"> -->
    <div class="img-banner-overlay">
      <p style="font-family:var(--font-serif);font-size:clamp(1.4rem,3vw,2.2rem);color:white;font-weight:300;font-style:italic;max-width:600px;text-align:center;">
        "Especialistas que trabalham juntos por um resultado comum."
      </p>
    </div>
  </div>

  <!-- Team -->
  <section class="section" aria-label="Membros da equipe">
    <div class="container">

      <div class="team-grid">

        <!-- =====================================================
             SÓCIO FUNDADOR
             ATUALIZAR: Foto, nome, OAB, bio
        ====================================================== -->
        <article class="team-card reveal">
          <div class="team-card-photo">
            <div class="team-card-photo-placeholder" aria-hidden="true">
              <div class="team-card-photo-placeholder-inner">HM</div>
            </div>
            <!--
            Para adicionar a foto, descomente a linha abaixo
            e faça upload da imagem para assets/images/
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-socio-fundador.jpg" alt="Sócio Fundador — HM De Lucca" loading="lazy" />
            -->
          </div>
          <div class="team-card-body">
            <div class="team-card-role">Sócio Fundador</div>
            <!-- ATUALIZAR: Nome completo -->
            <h2 class="team-card-name">Nome do Advogado</h2>
            <!-- ATUALIZAR: Bio institucional (apresentação, não currículo) -->
            <p class="team-card-bio">
              Advogado com sólida formação jurídica e atuação comprometida com a excelência técnica. Ao longo de sua trajetória, construiu um escritório baseado em valores como integridade, ética e comprometimento real com cada cliente.
            </p>
            <p class="team-card-bio">
              Fundador do escritório HM De Lucca, atua com foco em estratégia jurídica integrada, garantindo que cada caso seja conduzido com rigor técnico e atenção personalizada.
            </p>
            <!-- ATUALIZAR: Número OAB -->
            <div class="team-card-oab" aria-label="Registro OAB">OAB/XX 000.000</div>
          </div>
        </article>

        <!--
        =====================================================
        ADICIONAR NOVOS MEMBROS: copie e cole o bloco abaixo

        <article class="team-card reveal">
          <div class="team-card-photo">
            <img src="URL_DA_FOTO" alt="Nome do Profissional" loading="lazy" />
          </div>
          <div class="team-card-body">
            <div class="team-card-role">Área de Especialidade</div>
            <h3 class="team-card-name">Nome Completo</h3>
            <p class="team-card-bio">Descrição institucional...</p>
            <div class="team-card-oab">OAB/XX 000.000</div>
          </div>
        </article>
        ====================================================
        -->

      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="section section-soft" aria-label="Trabalhe conosco">
    <div class="container" style="text-align:center;max-width:600px;margin:0 auto;">
      <div class="section-label reveal" style="justify-content:center;">Faça Parte</div>
      <h2 class="section-title reveal" style="margin-bottom:20px;">Trabalhe Conosco</h2>
      <p class="reveal" style="margin-bottom:40px;">Se você compartilha dos nossos valores e busca uma carreira com propósito e excelência técnica, entre em contato.</p>
      <div class="reveal">
        <a href="<?php echo esc_url(home_url('/trabalhe-conosco')); ?>" class="btn btn-primary btn-lg">Saiba como participar</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
