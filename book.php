<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Buscar A-Z | Enseñas</title>
  
  <link rel="stylesheet" type="text/css" href="assets/css/commons.css" media="all">
  <link rel="stylesheet" type="text/css" href="assets/css/mobile.css" media="only screen and (max-width: 599px) and (min-width: 120px)">
  <link rel="stylesheet" type="text/css" href="assets/css/tablet.css" media="only screen and (max-width: 999px) and (min-width: 600px)">
  <link rel="stylesheet" type="text/css" href="assets/css/desktop.css" media="only screen and (min-width: 1000px)">

  <script src="assets/js/modernizr.js" type="text/javascript"></script>
  <script TYPE="text/javascript" src="javascript/filterlist.js"></script>
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
      <section class="buscar-az col-7">
        <div class="back-home">
          <a class="btn btn-success" href="index.php" title="Regresar">
            <i class="icon-regresar"></i>
            <span>Regresar a la Página Principal</span>
          </a>
        </div>        
        <h2 class="title">Buscar</h2>
        <form class="search-select" name="myform" action="" method="">
          <select name="search" multiple="multiple" onchange="javascript:handleSelect(this)">
            <!-- elementos de prueba -->
            <?php
			$archivo = "contador/categoria.txt";
			if (file_exists($archivo))
			{
				$palabras = file($archivo);
				$num_categoria = trim($palabras[0]);
				$posicion = 2;
						
				for($i=0;$i < (int)$num_categoria ;$i++){ 
							
					$num_palabras = rtrim($palabras[$posicion]);
					$posicion++;
							
					for($j=0;$j<(int)$num_palabras;$j++){
							
						$linea = rtrim($palabras[$posicion]);
						$palabra = utf8_encode( substr($linea,0, stripos($linea, ',') ));
					
						$link = strrchr( $linea , '/' );					
						$link = substr($link,1,strlen($link));
						$link = substr($link,0, stripos($link, '.') );
						
						//echo "<OPTION><a href='control.php?id=".$link."&band=true' style='font-size:15px'>".$palabra."</a></OPTION>";
						
						//echo "<OPTION value='volvo'>".$palabra."</OPTION>";
						echo "<OPTION value=".$link." >".$palabra."</a></OPTION>";
						
						$posicion++;
						
					}
				}	
			}
			else
			{
				//print "el archivo no existe";
			}
		?>  
            <!-- /elementos de prueba -->         
          </select>
        </form>
        <div class="filtrar">
          <form class="filtro-select" action="" method="" >
            <p>Filtro</p>
            <select name="" id="filtroSelect" onchange="filtra()">
              <option value="">Todos</option>
              <option value="A">a</option>
              <option value="B">b</option>
              <option value="C">c</option>
              <option value="D">d</option>
              <option value="E">e</option>
              <option value="F">f</option>
              <option value="G">g</option>
              <option value="H">h</option>
              <option value="I">i</option>
              <option value="J">j</option>
              <option value="K">k</option>
              <option value="L">l</option>
              <option value="M">m</option>
              <option value="N">n</option>
              <option value="O">o</option>
              <option value="P">p</option>
              <option value="Q">q</option>
              <option value="R">r</option>
              <option value="S">s</option>
              <option value="T">t</option>
              <option value="U">u</option>
              <option value="V">v</option>
              <option value="W">w</option>
              <option value="X">x</option>
              <option value="Y">y</option>
              <option value="Z">z</option>
            </select>
          </form>
          <form class="filtro-palabra" action="" method="">
            <p>Filtrar con palabras</p>
            <a class="btn btn-success limpiar" href="" onClick="myfilter.reset();this.form.regexp.value=''">Limpiar</a>
            <input class="palabra" type="text" name="palabra" placeholder="Coloca la palabra" onKeyUp="myfilter.set(this.value)">
            <button class="btn btn-success enviar" onClick="myfilter.set(this.form.palabra.value)" type="button">Filtrar</button>
          </form>
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

<script type="text/javascript">
    var myfilter = new filterlist(document.myform.search);
    function handleSelect(elm){

        //$pagina = "control.php?id="+elm.value+"&band=true"; 
        //Header("Location: $pagina"); 

    window.location = "control.php?palabra="+elm.value+"&bandera=true";

    }

    function filtra(){
        var filtro=document.getElementById('filtroSelect').value;
        if (filtro==""){
            myfilter.reset();
        }else{
            myfilter.set('^'+filtro);
        }
        
        
        //alert('^'+filtro);
    }
</script>

</html>      