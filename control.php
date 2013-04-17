<?php
require_once 'funciones.php';

if(isset($_GET['palabra'])) {
    $palabra = mb_strtolower($_GET['palabra'], 'UTF-8');
    $nombre_archivo = "contador/datos/{$palabra}.txt";
    
    if (file_exists($nombre_archivo)) {
        $archivo = file($nombre_archivo);
        $contador = rtrim($archivo[0]);
        $contador+=1;

        $fp = fopen($nombre_archivo,"w");
        fwrite($fp, $contador, 26);
        fclose($fp); 
    } else {
        $contador = 1;
        $fp = fopen($nombre_archivo, 'w');
        fwrite($fp, $contador, 26);
        fclose($fp); 
    }
	
    $archivo_masvistos = "contador/masvistas.txt";
    $masvistas = file($archivo_masvistos);

    $nuevo_masvistos = fopen($archivo_masvistos, 'w');
		
    $i=1;
    $bandera = true;
    $palabras = 0;
    
    while($i<8 & $palabras<4) {
        if( ( rtrim($masvistas[$i]) < $contador) & (rtrim($masvistas[$i-1]) != rtrim($palabra) ) & $bandera) {
            fwrite($nuevo_masvistos, $palabra."\n" , 36);
            fwrite($nuevo_masvistos, $contador."\n", 36);

            fwrite($nuevo_masvistos, $masvistas[$i-1], 36);
            fwrite($nuevo_masvistos, $masvistas[$i], 36);
            $palabras+=1;
            $bandera = false;
        } elseif( ( rtrim($masvistas[$i]) <= $contador) & (rtrim($masvistas[$i-1]) == rtrim($palabra) ) & $bandera) {
            fwrite($nuevo_masvistos, $palabra."\n" , 36);
            fwrite($nuevo_masvistos, $contador."\n", 36);
            $bandera = false;
        } else {
            if( rtrim($masvistas[$i-1]) !=  rtrim($palabra) ) {
                fwrite($nuevo_masvistos, $masvistas[$i-1], 36);
                fwrite($nuevo_masvistos, $masvistas[$i], 36);
            } else {
                $palabras-=1;
            }
	}
	
        $palabras+=1;
	$i+=2;
    }
		
    fclose($nuevo_masvistos);
	   
    $bandera = $_GET['bandera'];   
    $cont = $palabra;
	
    if($bandera) {
        $enlace = buscar($palabra);
        if (!is_null($enlace)) {
            $enlace = base64_encode($enlace);
            header("location: player.php?video={$enlace}"); 
        }
    }
}