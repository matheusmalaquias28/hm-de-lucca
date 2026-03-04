<?php
/**
 * Template Name: Área de Atuação — Individual
 * page-area.php — Página individual de cada área de atuação — Light Theme v3.0
 */

/* ============================================================
   DADOS DE CADA ÁREA (indexados pelo slug da página)
============================================================ */
$areas_data = [

  'direito-criminal' => [
    'numero'   => '01',
    'label'    => 'Área Criminal',
    'titulo'   => 'Direito Criminal',
    'lead'     => 'Defesa técnica e estratégica em processos criminais, com acompanhamento especializado em todas as fases processuais — da fase investigativa até os tribunais superiores.',
    'frase'    => 'A defesa efetiva começa na fase investigativa.',
    'icon_svg' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
    'descricao' => [
      'Atuamos com rigor técnico e estratégia na defesa de clientes em processos criminais de diversas naturezas. Nosso trabalho começa desde o momento da investigação policial, garantindo que os direitos constitucionais do investigado sejam plenamente respeitados.',
      'Nossa abordagem combina profundo conhecimento jurídico-penal com análise estratégica de cada caso, buscando as melhores soluções — seja na absolvição, na redução de pena ou na aplicação de benefícios legais. Cada cliente recebe atenção personalizada, com atuação integrada e comunicação clara em todas as etapas.',
    ],
    'servicos' => [
      'Defesa em crimes dolosos e culposos',
      'Crimes econômicos e tributários',
      'Habeas corpus e liberdades individuais',
      'Acompanhamento em delegacias e inquéritos',
      'Recursos aos Tribunais Superiores (STJ e STF)',
      'Execução penal e progressão de regime',
      'Crimes contra a administração pública',
      'Lavagem de dinheiro e crimes financeiros',
    ],
    'etapas' => [
      [ 'num' => '01', 'titulo' => 'Análise do Caso',    'texto' => 'Estudo detalhado dos fatos, provas e enquadramento legal para definição da melhor estratégia de defesa.' ],
      [ 'num' => '02', 'titulo' => 'Estratégia Jurídica', 'texto' => 'Elaboração de teses defensivas sólidas, considerando jurisprudência e particularidades do caso.' ],
      [ 'num' => '03', 'titulo' => 'Atuação Processual', 'texto' => 'Representação técnica em todas as fases — investigação, instrução, julgamento e recursos.' ],
      [ 'num' => '04', 'titulo' => 'Acompanhamento',     'texto' => 'Comunicação constante com o cliente, com transparência sobre o andamento e perspectivas do processo.' ],
    ],
  ],

  'direito-da-saude' => [
    'numero'   => '02',
    'label'    => 'Área da Saúde',
    'titulo'   => 'Direito da Saúde',
    'lead'     => 'Assessoria especializada em demandas de saúde — acesso a tratamentos, responsabilidade médica, planos de saúde e regulatório setorial.',
    'frase'    => 'Acesso à saúde é direito. Nós garantimos.',
    'icon_svg' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
    'descricao' => [
      'O Direito da Saúde é uma área que exige conhecimento técnico-jurídico especializado aliado à compreensão do sistema de saúde suplementar e público. Atuamos para garantir que pacientes tenham acesso aos tratamentos, medicamentos e procedimentos que necessitam.',
      'Nossa equipe tem experiência consolidada em demandas contra planos de saúde, ações de responsabilidade médica e hospitalar, além de atuação no campo regulatório. Trabalhamos tanto na esfera judicial quanto extrajudicial, sempre buscando a solução mais ágil e efetiva para cada situação.',
    ],
    'servicos' => [
      'Demandas contra planos de saúde',
      'Fornecimento de medicamentos via judicial',
      'Cobertura de procedimentos negados',
      'Responsabilidade médica e hospitalar',
      'Erro médico e dano estético',
      'Saúde suplementar e ANS',
      'Internação compulsória e saúde mental',
      'Regulatório da saúde e vigilância sanitária',
    ],
    'etapas' => [
      [ 'num' => '01', 'titulo' => 'Avaliação Médico-Jurídica', 'texto' => 'Análise do caso com compreensão técnica da situação clínica e dos direitos envolvidos.' ],
      [ 'num' => '02', 'titulo' => 'Notificação Extrajudicial',  'texto' => 'Tentativa de resolução direta com operadoras ou prestadores de saúde, quando cabível.' ],
      [ 'num' => '03', 'titulo' => 'Ação Judicial',              'texto' => 'Propositura de ação com pedido de tutela de urgência quando necessário, garantindo acesso imediato ao tratamento.' ],
      [ 'num' => '04', 'titulo' => 'Acompanhamento',             'texto' => 'Monitoramento do cumprimento das decisões e suporte em todas as etapas do processo.' ],
    ],
  ],

  'direito-imobiliario' => [
    'numero'   => '03',
    'label'    => 'Área Imobiliária',
    'titulo'   => 'Direito Imobiliário',
    'lead'     => 'Consultoria jurídica completa em negócios e contencioso imobiliário — do contrato ao registro, com segurança jurídica em cada etapa.',
    'frase'    => 'Segurança jurídica em cada transação imobiliária.',
    'icon_svg' => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
    'descricao' => [
      'O mercado imobiliário envolve transações de alto valor e complexidade jurídica que exigem acompanhamento especializado. Atuamos em todas as etapas dos negócios imobiliários, da análise de viabilidade à conclusão do registro, garantindo segurança para compradores, vendedores, locadores e locatários.',
      'Nossa atuação abrange desde a consultoria preventiva em contratos até o contencioso judicial, incluindo ações de usucapião, rescisão contratual, cobrança de aluguéis e regularização de imóveis. Cada operação é analisada de forma integrada, com atenção aos aspectos jurídicos, tributários e registrais.',
    ],
    'servicos' => [
      'Contratos de compra e venda',
      'Locações residenciais e comerciais',
      'Usucapião e regularização de imóveis',
      'Incorporações e loteamentos',
      'Distrato imobiliário',
      'Contencioso cível imobiliário',
      'Análise de viabilidade jurídica',
      'Due diligence imobiliária',
    ],
    'etapas' => [
      [ 'num' => '01', 'titulo' => 'Análise Jurídica',   'texto' => 'Avaliação completa do imóvel, documentação, matrículas e situação registral.' ],
      [ 'num' => '02', 'titulo' => 'Elaboração Contratual', 'texto' => 'Redação ou revisão de contratos com cláusulas que protejam os interesses do cliente.' ],
      [ 'num' => '03', 'titulo' => 'Acompanhamento',     'texto' => 'Suporte em todas as etapas da transação, da assinatura ao registro em cartório.' ],
      [ 'num' => '04', 'titulo' => 'Contencioso',        'texto' => 'Representação judicial em disputas imobiliárias com estratégia focada em resultado.' ],
    ],
  ],

];

/* ============================================================
   RESOLUÇÃO DO SLUG ATUAL
============================================================ */
$current_slug = get_post_field( 'post_name', get_the_ID() );
$area = isset( $areas_data[ $current_slug ] ) ? $areas_data[ $current_slug ] : null;

// Fallback: se não houver dados para este slug, redireciona para a listagem
if ( ! $area ) {
  wp_redirect( home_url( '/areas-de-atuacao' ) );
  exit;
}

get_header();
?>

<main id="main" role="main" class="page-area-individual">

  <!-- ============================================================
       PAGE HERO
  ============================================================ -->
  <section class="page-hero" aria-label="<?php echo esc_attr( $area['titulo'] ); ?>">
    <div class="container">

      <nav class="page-hero-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url('/') ); ?>">Início</a>
        <span aria-hidden="true">›</span>
        <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>">Áreas de Atuação</a>
        <span aria-hidden="true">›</span>
        <span class="current" aria-current="page"><?php echo esc_html( $area['titulo'] ); ?></span>
      </nav>

      <div class="area-hero-meta">
        <div class="area-hero-number" aria-hidden="true"><?php echo esc_html( $area['numero'] ); ?></div>
        <div class="section-label"><?php echo esc_html( $area['label'] ); ?></div>
      </div>

      <h1><?php echo esc_html( $area['titulo'] ); ?></h1>
      <p class="lead"><?php echo esc_html( $area['lead'] ); ?></p>

      <a href="#contato" class="btn btn-primary btn-lg" style="margin-top: 8px;">
        Solicitar Consulta
        <span class="btn-arrow" aria-hidden="true">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
      </a>

    </div>
  </section>

  <!-- ============================================================
       BANNER COM FRASE DE DESTAQUE
  ============================================================ -->
  <div class="img-banner area-banner" aria-hidden="true">
    <div class="img-placeholder" style="width:100%;height:100%;"></div>
    <div class="img-banner-overlay">
      <div class="area-banner-icon">
        <svg viewBox="0 0 24 24" width="36" height="36" stroke="currentColor" fill="none" stroke-width="1.5">
          <?php echo $area['icon_svg']; ?>
        </svg>
      </div>
      <h2 class="area-banner-frase"><?php echo esc_html( $area['frase'] ); ?></h2>
    </div>
  </div>

  <!-- ============================================================
       DESCRIÇÃO + SERVIÇOS
  ============================================================ -->
  <section class="section section-soft" aria-labelledby="area-descricao-title">
    <div class="container">

      <div class="area-content-split">

        <!-- Texto descritivo -->
        <div class="area-descricao reveal">
          <div class="section-label">Sobre a Área</div>
          <h2 class="section-title" id="area-descricao-title">
            <?php echo esc_html( $area['titulo'] ); ?>
          </h2>
          <?php foreach ( $area['descricao'] as $paragrafo ) : ?>
            <p><?php echo esc_html( $paragrafo ); ?></p>
          <?php endforeach; ?>
          <a href="#contato" class="btn btn-outline" style="margin-top: 24px;">Falar com um advogado</a>
        </div>

        <!-- Lista de serviços -->
        <div class="area-servicos reveal reveal-delay-1">
          <div class="area-servicos-header">
            <div class="area-servicos-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" fill="none" stroke-width="1.5">
                <?php echo $area['icon_svg']; ?>
              </svg>
            </div>
            <h3 class="area-servicos-title">Serviços</h3>
          </div>
          <ul class="area-servicos-list" role="list">
            <?php foreach ( $area['servicos'] as $servico ) : ?>
              <li class="area-servico-item">
                <span class="area-servico-check" aria-hidden="true">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                    <path d="M2 5l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </span>
                <?php echo esc_html( $servico ); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- ============================================================
       PROCESSO DE TRABALHO (etapas)
  ============================================================ -->
  <section class="section" aria-labelledby="area-etapas-title">
    <div class="container">

      <div class="section-header centered reveal" style="margin-bottom: 60px;">
        <div class="section-label">Metodologia</div>
        <h2 class="section-title" id="area-etapas-title">Como Trabalhamos</h2>
        <p class="section-subtitle">Nossa atuação segue um processo estruturado, garantindo clareza, estratégia e resultado em cada fase do caso.</p>
      </div>

      <div class="area-etapas-grid">
        <?php foreach ( $area['etapas'] as $idx => $etapa ) :
          $delay = $idx > 0 ? ' reveal-delay-' . $idx : '';
        ?>
          <div class="area-etapa reveal<?php echo esc_attr( $delay ); ?>">
            <div class="area-etapa-num" aria-hidden="true"><?php echo esc_html( $etapa['num'] ); ?></div>
            <h3 class="area-etapa-titulo"><?php echo esc_html( $etapa['titulo'] ); ?></h3>
            <p class="area-etapa-texto"><?php echo esc_html( $etapa['texto'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- ============================================================
       OUTRAS ÁREAS
  ============================================================ -->
  <section class="section section-soft" aria-labelledby="outras-areas-title">
    <div class="container">

      <div class="section-header centered reveal" style="margin-bottom: 48px;">
        <div class="section-label">Especialidades</div>
        <h2 class="section-title" id="outras-areas-title">Outras Áreas de Atuação</h2>
      </div>

      <div class="outras-areas-grid">

        <?php
        $outras_areas = [
          'direito-criminal'    => [ 'num' => '01', 'titulo' => 'Direito Criminal',    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>' ],
          'direito-da-saude'    => [ 'num' => '02', 'titulo' => 'Direito da Saúde',    'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>' ],
          'direito-imobiliario' => [ 'num' => '03', 'titulo' => 'Direito Imobiliário', 'icon' => '<path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>' ],
        ];
        foreach ( $outras_areas as $slug => $info ) :
          if ( $slug === $current_slug ) continue;
        ?>
          <a href="<?php echo esc_url( home_url( '/' . $slug ) ); ?>" class="outra-area-card reveal">
            <div class="outra-area-num" aria-hidden="true"><?php echo esc_html( $info['num'] ); ?></div>
            <div class="outra-area-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24"><?php echo $info['icon']; ?></svg>
            </div>
            <h3 class="outra-area-titulo"><?php echo esc_html( $info['titulo'] ); ?></h3>
            <span class="outra-area-link">
              Saiba mais
              <svg viewBox="0 0 14 14"><path d="M2 7h10M8 3l4 4-4 4"/></svg>
            </span>
          </a>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

  <!-- ============================================================
       CTA — CONTATO
  ============================================================ -->
  <section class="section section-warm" id="contato" aria-labelledby="area-contato-title">
    <div class="container" style="max-width: 760px; margin: 0 auto; text-align: center;">

      <div class="section-label reveal" style="justify-content: center;">Contato</div>
      <h2 class="section-title reveal" id="area-contato-title" style="margin-bottom: 16px;">
        Fale com um <em>Especialista</em>
      </h2>
      <p class="reveal" style="margin-bottom: 44px; color: var(--text-body);">
        Cada caso é único. Entre em contato para uma avaliação personalizada da sua situação jurídica em <?php echo esc_html( $area['titulo'] ); ?>.
      </p>

      <div class="reveal" style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
        <a href="<?php echo esc_url( home_url('/fale-conosco') ); ?>" class="btn btn-primary btn-lg">Solicitar Atendimento</a>
        <a href="<?php echo esc_url( home_url('/areas-de-atuacao') ); ?>" class="btn btn-outline btn-lg">Ver todas as áreas</a>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>
