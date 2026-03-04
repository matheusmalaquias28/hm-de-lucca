<?php
/**
 * Template Name: Equipe
 * page-equipe.php — Página da Equipe
 */
get_header();
?>

<main id="main" role="main" class="page-equipe">

  <!-- Page Hero -->
  <section class="page-hero" aria-label="Equipe">
    <div class="container">
      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
        <span aria-hidden="true">›</span>
        <span class="current" aria-current="page">Equipe</span>
      </nav>
      <div class="section-label">Profissionais</div>
      <h1>Nossa Equipe</h1>
      <p class="lead">
        Conheça os profissionais que compõem o escritório HM De Lucca — especialistas dedicados a oferecer soluções jurídicas com excelência técnica.
      </p>
    </div>
  </section>

  <!-- Team section -->
  <section class="section" aria-label="Membros da equipe">
    <div class="container">

      <div class="team-grid">

        <!-- =====================================================
             SÓCIO FUNDADOR
             ATUALIZAR: Foto, nome, OAB, bio
        ====================================================== -->
        <article class="team-card reveal">
          <div class="team-card-photo">
            <?php
            // Para adicionar foto: faça upload no WordPress e substitua o ID abaixo
            // Ou adicione o arquivo em: assets/images/foto-socio-fundador.jpg
            $founder_photo = get_template_directory_uri() . '/assets/images/foto-socio-fundador.jpg';
            // Verificar se o arquivo existe não é possível via PHP aqui diretamente,
            // então use media do WordPress para gerenciar fotos
            ?>
            <div class="team-card-photo-placeholder" aria-hidden="true">
              <div class="team-card-photo-placeholder-inner">HM</div>
            </div>
            <!-- Quando tiver a foto, substituir o placeholder por:
            <img
              src="<?php echo esc_url( $founder_photo ); ?>"
              alt="Foto do Sócio Fundador — HM De Lucca"
              loading="lazy"
            />
            -->
          </div>
          <div class="team-card-body">
            <div class="team-card-role">Sócio Fundador</div>
            <!-- ATUALIZAR: Nome completo do sócio fundador -->
            <h2 class="team-card-name">Nome do Advogado</h2>
            <!-- ATUALIZAR: Bio institucional do sócio fundador -->
            <p class="team-card-bio">
              Advogado com sólida formação jurídica e atuação comprometida com a excelência técnica. Ao longo de sua trajetória, construiu um escritório baseado em valores como integridade, ética e comprometimento real com cada cliente.
            </p>
            <p class="team-card-bio">
              Fundador do escritório HM De Lucca, atua com foco em estratégia jurídica integrada, garantindo que cada caso seja conduzido com rigor técnico e atenção personalizada.
            </p>
            <!-- ATUALIZAR: Número da OAB -->
            <div class="team-card-oab" aria-label="Registro OAB">
              OAB/XX 000.000
            </div>
          </div>
        </article>

        <!-- =====================================================
             NOVOS MEMBROS DA EQUIPE
             Adicione novos cards aqui conforme a equipe crescer.
             Copie e cole o bloco abaixo para cada novo membro.
        ====================================================== -->

        <!--
        <article class="team-card reveal">
          <div class="team-card-photo">
            <img src="URL_DA_FOTO" alt="Nome do Profissional" loading="lazy" />
          </div>
          <div class="team-card-body">
            <div class="team-card-role">Área de Atuação</div>
            <h3 class="team-card-name">Nome do Profissional</h3>
            <p class="team-card-bio">
              Descrição institucional do profissional...
            </p>
            <div class="team-card-oab">OAB/XX 000.000</div>
          </div>
        </article>
        -->

      </div><!-- /team-grid -->

    </div>
  </section>

  <!-- CTA section -->
  <section class="section section-alt" aria-label="Trabalhe conosco">
    <div class="container" style="text-align: center; max-width: 600px; margin: 0 auto;">
      <div class="section-label reveal" style="justify-content: center;">Faça Parte</div>
      <h2 class="section-title reveal" style="margin-bottom: 20px;">Trabalhe Conosco</h2>
      <p class="reveal" style="margin-bottom: 40px;">
        Se você compartilha dos nossos valores e busca uma carreira com propósito, excelência técnica e ambiente colaborativo, entre em contato.
      </p>
      <div class="reveal">
        <a href="<?php echo esc_url( home_url('/trabalhe-conosco') ); ?>" class="btn btn-outline btn-lg">
          Saiba como participar
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
