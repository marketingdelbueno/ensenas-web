<!DOCTYPE HTML>

<html lang="en-US">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title>Más Vistos | Enseñas</title>



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

    <?php $archivo = "contador/masvistas.txt";?>

      <section class="vistos col-7">

        <div class="back-home">

          <a class="btn btn-success" href="index.php" title="Regresar">

            <i class="icon-regresar"></i>

            <span>Regresar a la Página Principal</span>

          </a>

        </div>

        <div class="ir-categorias">

          <a class="btn btn-success" href="catalogo.php" title="Ir a Categorias">

            <span>Ir a Categorías</span>

            <i class="icon-ircategorias"></i>

          </a>

        </div>

        <h2 class="title">Lo más popular</h2>

        <table class="mas-vistos">

          <thead>

            <tr>

              <th>#</th>

              <th>Nombre</th>

              <th>Reproducciones</th>

            </tr>

          </thead>

          <tbody>

            <?php

            if (file_exists($archivo)){

                $palabras = file($archivo);

                $i=0;

                $img = 1;



                while($i<8) {

                    if(rtrim($palabras[$i+1]) > 0 ) {

                        $pal = str_replace("-","?",$palabras[$i]);

                        $pal = str_replace("ny","ñ",$pal);

                        $pal = str_replace("_"," ",$pal);

                        $pal = ucfirst(strtolower($pal));

                        echo "<tr>

                                <td><a href='control.php?palabra=".$palabras[$i]."&bandera=true'><img src='assets/css/img/visto".$img.".png' alt=''></a></td>

                                <td><a href='control.php?palabra=".$palabras[$i]."&bandera=true'>$pal</a></td>

                                <td>".$palabras[$i+1]."</td>

                              </tr>";

                    }

                    $img++;

                    $i+=2;

                }



            } else {

                print "El archivo no existe.";

            }

            ?>

          </tbody>

        </table>

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