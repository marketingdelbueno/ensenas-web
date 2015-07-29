<?php
if ( isset($_GET['botonBuscar']) ) {
  if( isset($_GET['palabra'])!=null ) {
    $palabra = $_GET['palabra'];
    $paginaVideo = "control.php?palabra={$palabra}&bandera=true";
    header ("Location: {$paginaVideo}");
  } else {
    echo "<script languaje='javascript'>alert('Debe escribir una palabra para buscar')</script>";
  }
}
?>
<!DOCTYPE HTML>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <!-- Open Graph url property -->
    <meta property="og:url" content="http://www.ensenas.com" />
    <!-- Open Graph title property -->
    <meta property="og:title" content="enSeñas: Aplicación de Lengua de Señas Venezolanas" />
    <!-- Open Graph description property -->
    <meta property="og:description" content="enSeñas es el video diccionario de Lengua de Señas Venezolana de la Fundación Neo Essentia﻿ para sordos y oyentes. Aprende tu palabra y DameTuSeña" />
    <!-- Open Graph image property -->
    <meta property="og:image" content="http://www.ensenas.com/assets/img/hi-res-icon.png" />
    <!-- Open Graph type property -->
    <meta property="og:type" content="website" />
    <!-- Open Graph site_name property -->
    <meta property="og:site_name" content="enSeñas" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Pagina Principal | Enseñas</title>
    <link rel="stylesheet" type="text/css" href="assets/css/commons.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" media="only screen and (max-width: 599px) and (min-width: 120px)">
    <link rel="stylesheet" type="text/css" href="assets/css/tablet.css" media="only screen and (max-width: 999px) and (min-width: 600px)">
    <link rel="stylesheet" type="text/css" href="assets/css/desktop.css" media="only screen and (min-width: 1000px)">
    <link rel="stylesheet" type="text/css" href="assets/css/ribbon.css" media="all">
    <script src="assets/js/modernizr.js" type="text/javascript"></script>
    <!--[if (lt IE 9) & (!IEMobile)]>
      <link rel="stylesheet" href="assets/css/ie.css">
    <![endif]-->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </head>

  <body>
    <header>
      <div class="container">
        <span class="forkongithub">
          <a href="https://github.com/neoessentia/ensenas-web" target="_blank">Colabora en GitHub</a>
        </span>
        <div class="logo">
          <h1>
            <a href="/" accesskey="1">Enseñas</a>
          </h1>
        </div>
      </div>
    </header><!-- /header -->

    <div class="mercados-app col-7">

      <h3>También puedes encontrarnos en:</h3>
      <ul>
        <li class="google-play">
          <a href="https://play.google.com/store/apps/details?id=org.neoesentia.ensenas" title="Consigue nuestra aplicación para Android">Google Play</a>
        </li>
        <li class="app-world">
          <a href="http://appworld.blackberry.com/webstore/content/25673872/?countrycode=VE" title="Consigue nuestra aplicación para Blackberry">App World</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <div class="container">
        <section class="wrap-form-search">
          <form class="form-search" action="" method="get">
            <input class="search" type="text" name="palabra" placeholder="Busca y descubre">
            <button class="send btn btn-success" name="botonBuscar" type="submit">
              <span>Buscar</span>
              <i class="search-icon"></i>
            </button>
          </form>
        </section>

        <div class="clear"></div>
          <?php if (isset($_GET['error'])): ?>
          <div class="alert-box warning"><span>Atención: </span>La palabra que busca no existe en nuestra base de datos.</div>
          <?php endif; ?>
        <nav class="menu col-7">
          <ul>
            <li class="categorias">
              <a href="catalogo.php" title="Categorias">Categorías</a>
              <span>Categorías</span>
            </li>

            <li class="buscar-az">
              <a href="book.php" title="Buscar">Buscar A-Z</a>
              <span>Buscar A-Z</span>
            </li>

            <li class="mas-vistos">
              <a href="vistos.php" title="Mas vistos">Más vistos</a>
              <span>Más vistos</span>
            </li>

            <li class="informacion">
              <a href="informacion.html" title="Ayuda e Informacion">Ayuda e Información</a>
              <span>Ayuda e Información</span>
            </li>

            <li class="twitter">
              <a href="http://twitter.com/share?via=neoessentia&url=http://ensenas.com/&hashtags=DameTuSeña&text=Acabo de descubrir enSeñas: el video diccionario de lengua de señas venezolano" rel="nofollow" title="Twitter" target="_blank">Apóyanos con un Tweet</a>
              <span>Apóyanos con un Tweet</span>
            </li>
            <li class="facebook">
              <a href="http://www.facebook.com/sharer.php?u=http://www.ensenas.com" title="Facebook" target="_blank">Búscanos en Facebook</a>
              <span>Búscanos en Facebook</span>
            </li>
          </ul>
        </nav>
        <div class="clear"></div>

        <div class="clear"></div>
        <section class="banner">
          <div class="txtc">
            <a href="http://digitel.com.ve/ConexionSocialDigitel/Paginas/default.aspx" target="_blank"><img src="assets/img/logo-digitel.jpg" height="80" /></a>
            <a href="http://empresas-polar.com" target="_blank"><img src="assets/img/logo-polar.png" height="80" /></a>
            <a href="http://produccionesenjoy.com/indexweb.html" target="_blank"><img src="assets/img/logo-enjoy.png" height="80" /></a>
            <a href="http://neoessentia.org" target="_blank"><img src="assets/img/logo-neo-vertical.png" height="80" /></a>
            <a href="http://marketingdelbueno.com" target="_blank"><img src="assets/img/logo-mkdb.png" height="80" /></a>
            <a href="http://php.org.ve" target="_blank"><img src="assets/img/logo-phpve.png" height="80" /></a>

          </div>
        </section>

      </div>
    </div>

    <footer class="foot">
      <div class="container">
        <div class="txtc">
          <p>2011 <a href="http://www.neoessentia.org/" target="_blank">Fundación NeoEssentia</a> Construyendo Nuevas Realidades.</p>
        </div>
      </div>
    </footer>
  </body>
</html>