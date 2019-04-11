<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Categorías | Enseñas</title>
  <link rel="stylesheet" type="text/css" href="assets/css/commons.css" media="all">
  <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" media="only screen and (max-width: 599px) and (min-width: 120px)">
  <link rel="stylesheet" type="text/css" href="assets/css/tablet.css" media="only screen and (max-width: 999px) and (min-width: 600px)">
  <link rel="stylesheet" type="text/css" href="assets/css/desktop.css" media="only screen and (min-width: 1000px)">
  <script src="assets/js/modernizr.js" type="text/javascript"></script>
  <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="assets/css/ie.css">
  <![endif]-->
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

  <div class="content">
    <div class="container">
      <section class="categorias col-7">
        <div class="back-home">
          <a class="btn btn-success" href="index.php" title="Regresar">
            <i class="icon-regresar"></i>
            <span>Regresar a la Página Principal</span>
          </a>
        </div>
        <h2 class="title">Categorías</h2>
        <?php
          $archivo = "contador/categoria.txt";

          if (file_exists($archivo)) {
				    $palabras = file($archivo);
				    $num_categoria = trim($palabras[0]);
            $posicion = 1;
          }
        ?>

        <?php
          for($i=0;$i < (int)$num_categoria ;$i++) {
            $name_categoria = rtrim($palabras[$posicion]);
            $posicion++;
            $num_palabras = rtrim($palabras[$posicion]);
        ?>
        <div class="categoria col-5">
          <i class="icon-categoria"></i>
          <h3><a onclick="javascript:return show(<?=$i?>)" href="" title=""><?=  utf8_encode($name_categoria);?></a></h3>
          <div style='clear:both;display:none;' id="id<?=$i?>">
          <?php
            $posicion++;
            for($j=0;$j<(int)$num_palabras;$j++){
              $linea = rtrim($palabras[$posicion]);
              $coma = stripos($linea, ',');
              $palabra = utf8_encode(substr($linea,0, $coma ));

              $link = substr($linea, $coma+1, strlen($linea));

              echo "<div><a href='control.php?palabra={$palabra}&bandera=true'>{$palabra}</a></div>";

              $posicion++;
            }

          ?>
          </div>
        </div>
        <?php
          }
        ?>
      </section>

      <div class="clear"></div>
    </div>
  </div>

    <footer class="foot">
      <div class="container">
        <div class="txtc">
          <p>2011 - 2019 <a href="http://www.marketingdelbueno.com/" target="_blank">Marketing del Bueno</a>.</p>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      function show(id) {
        if (document.getElementById('id'+id).style.display=='none')
          document.getElementById('id'+id).style.display='block';
        else
          document.getElementById('id'+id).style.display='none';

        return false;

      }
    </script>

  </body>
</html>