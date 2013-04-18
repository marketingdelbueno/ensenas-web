<!DOCTYPE HTML>
<html lang="en-US">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <title>Reproductor | Enseñas</title>

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
                        <a class="btn btn-success" href="catalogo.php" title="Regresar">
                            <i class="icon-regresar"></i>
                            <span>Regresar a la Categoría: </span>
                        </a>
                    </div>
                    <?php $videos = explode(';', rtrim(ltrim(base64_decode($_GET['video'])))); ?>

                    <video id="video" class="video" controls preload="auto"  autobuffer poster="assets/img/default-video.png" data-setup="{}">
                        <?php 
                            
                            foreach ($videos as $video):
                                $headers = get_headers($video, 1);
                                $http_status_code = $headers[0];
                                
                                if ($http_status_code == 'HTTP/1.1 302 FOUND') {
                                    $video = $headers['location'];
                                }
                                
                                $nombre = explode('.', $video);
                                $extension = rtrim(ltrim($nombre[3]));
                                
                                switch ($extension) {
                                    case 'webm':
                                        $type = 'type="video/webm"';
                                        break;
                                    case 'ogv':
                                        $type = 'type="video/ogg"';
                                        break;
                                    default:
                                        $type = null;
                                }
                        ?>
                        <source src="<?php echo $video;?>" <?php echo $type;?> />
                        <?php 
                            endforeach;
                        ?>
                    </video>
                    
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