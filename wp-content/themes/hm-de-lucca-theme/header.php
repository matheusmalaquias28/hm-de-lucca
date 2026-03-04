<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class('loading'); ?>>
<?php wp_body_open(); ?>

<!-- ============================================================
     PRELOADER — Light theme
============================================================ -->
<div id="preloader" role="status" aria-label="Carregando...">
  <div class="preloader-inner">
    <div class="preloader-monogram">H<span>M</span></div>
    <div class="preloader-subtitle">DE LUCCA</div>
    <div class="preloader-divider"></div>
    <div class="preloader-tagline">Advocacia</div>
  </div>
  <div class="preloader-bar"></div>
</div>

<!-- Mobile overlay -->
<div id="mobileOverlay" class="mobile-menu-overlay" aria-hidden="true"></div>

<!-- ============================================================
     NAVBAR — Light theme
============================================================ -->
<header class="navbar" id="navbar" role="banner">
  <div class="container">

    <!-- Logo -->
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="navbar-logo" aria-label="<?php bloginfo('name'); ?> — Início">
      <div class="logo-monogram" aria-hidden="true">HM</div>
      <div class="logo-text">
        <span class="logo-name">De Lucca</span>
        <span class="logo-tagline">Advocacia</span>
      </div>
    </a>

    <!-- Desktop Menu -->
    <nav class="navbar-menu" role="navigation" aria-label="Menu principal">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => '',
          'fallback_cb'    => 'hm_fallback_menu',
        ]);
      ?>
    </nav>

    <!-- Right side -->
    <div class="navbar-right">
      <a href="#contato" class="btn btn-primary btn-sm">Solicitar Atendimento</a>
      <button class="hamburger" id="hamburger" aria-label="Abrir menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</header>

<!-- ============================================================
     MOBILE MENU
============================================================ -->
<aside class="mobile-menu" id="mobileMenu" role="dialog" aria-label="Menu mobile" aria-modal="true">
  <button class="mobile-close" id="mobileClose" aria-label="Fechar menu">✕</button>

  <nav class="mobile-nav" role="navigation" aria-label="Menu mobile">
    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => 'hm_fallback_menu_mobile',
      ]);
    ?>
  </nav>

  <div class="mobile-nav-cta">
    <a href="#contato" class="btn btn-primary">Solicitar Atendimento</a>
  </div>
</aside>

<?php
function hm_fallback_menu() {
  echo '<ul>';
  echo '<li><a href="' . esc_url(home_url('/')) . '">Início</a></li>';
  echo '<li><a href="#sobre">Sobre</a></li>';
  echo '<li><a href="' . esc_url(home_url('/areas-de-atuacao')) . '">Áreas de Atuação</a></li>';
  echo '<li><a href="' . esc_url(home_url('/equipe')) . '">Equipe</a></li>';
  echo '<li><a href="' . esc_url(home_url('/blog')) . '">Conteúdo</a></li>';
  echo '</ul>';
}
function hm_fallback_menu_mobile() {
  echo '<ul>';
  echo '<li><a href="' . esc_url(home_url('/')) . '">Início</a></li>';
  echo '<li><a href="#sobre">Sobre</a></li>';
  echo '<li><a href="' . esc_url(home_url('/areas-de-atuacao')) . '">Áreas de Atuação</a></li>';
  echo '<li><a href="' . esc_url(home_url('/equipe')) . '">Equipe</a></li>';
  echo '<li><a href="' . esc_url(home_url('/blog')) . '">Conteúdo</a></li>';
  echo '</ul>';
}
?>
