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
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Pagina Principal | Enseñas</title>
    <link rel="stylesheet" type="text/css" href="assets/css/commons.css" media="all">
    <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" media="only screen and (max-width: 599px) and (min-width: 120px)">
    <link rel="stylesheet" type="text/css" href="assets/css/tablet.css" media="only screen and (max-width: 999px) and (min-width: 600px)">
    <link rel="stylesheet" type="text/css" href="assets/css/desktop.css" media="only screen and (min-width: 1000px)">
    <script src="assets/js/modernizr.js" type="text/javascript"></script>
    <!--[if (lt IE 9) & (!IEMobile)]>
      <link rel="stylesheet" href="assets/css/ie.css">
    <![endif]-->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </head>

  <body>

    <header>
      <div class="container">
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
          <a href="https://play.google.com/store/apps/details?id=com.progressumit.ensenas" title="Consigue nuestra aplicación para Android">Google Play</a>
        </li>
        <li class="app-world">
          <a href="http://appworld.blackberry.com/webstore/content/25673872/?countrycode=VE" title="Consigue nuestra aplicación para Blackberry">App World</a>
        </li>
      </ul>
    </div>

    <div class="content">
      <div class="container">
        <section class="wrap-form-search">
          <form class="form-search" action="#" method="get">
            <input class="search" type="text" name="palabra" placeholder="Busca y descubre">
            <button class="send btn btn-success" name="botonBuscar" type="submit">
              <span>Buscar</span>
              <i class="search-icon"></i>
            </button>
          </form>
        </section>

        <div class="clear"></div>

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

                <a href="http://twitter.com/share?via=progressumit&text=Acabo de descubrir una aplicación de Lengua de Señas Venezolana en &url=http://videodiccionario.net" rel="nofollow" title="Twitter" target="_blank">Apóyanos con un Tweet</a>

                <span>Apóyanos con un Tweet</span>

          </li>

          <li class="facebook">

            <a href="http://www.facebook.com/sharer.php?u=http://www.neoessentia.org/" title="Facebook" target="_blank">Búscanos en Facebook</a>

            <span>Búscanos en Facebook</span>

          </li>

        </ul>

      </nav>

      <div class="clear"></div>

      <section class="banner">

        <div class="txtc">

          <img src="assets/img/banner_progressum.gif" />

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