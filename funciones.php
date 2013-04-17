<?php
function buscar($texto = null, $archivo = 'contador/categoria.txt')
{
    $arregloArchivo = file($archivo);
    $enlace = null;
    
    foreach($arregloArchivo as $linea){
        $palabra = explode(',', utf8_encode($linea));
        if (mb_strtolower($palabra[0], 'UTF-8') == mb_strtolower($texto, 'UTF-8')) {
            $enlace = $palabra[1];
            continue;
        }
    }
 
    return $enlace;
}