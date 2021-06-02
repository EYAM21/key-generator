<?php



$chk1 = filter_var($_POST['r1'], FILTER_VALIDATE_BOOLEAN);
$chk2 = filter_var($_POST['r2'], FILTER_VALIDATE_BOOLEAN);
$chk3 = filter_var($_POST['r3'], FILTER_VALIDATE_BOOLEAN);
$chk4 = filter_var($_POST['r4'], FILTER_VALIDATE_BOOLEAN);
$cantidad= filter_var($_POST['r5'], FILTER_VALIDATE_INT);
$cadena = "";

$numeros=array("0","1","2","3","4","5","6","7","8","9");
$minusculas=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$mayusculas=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$simbolos=array("$","#","@","!","?","=","%","-","+","*",".","[","]","{","}","_",",",";",":","<",">","|");




if ($chk1 && $chk2 && $chk3 && $chk4 ) {


    $cadena=array_merge($numeros,$minusculas,$mayusculas,$simbolos);



}


else if ($chk1 && !$chk2 && !$chk3 && !$chk4) {


    $cadena=array_merge($numeros);



}

else if ($chk1 && $chk2 && !$chk3 && !$chk4 ) {


    $cadena=array_merge($numeros,$minusculas);



}

else if ($chk1 && !$chk2 && $chk3 && !$chk4 ) {


    $cadena=array_merge($numeros,$mayusculas);



}

else if ($chk1 && !$chk2 && !$chk3 && $chk4 ) {


    $cadena=array_merge($numeros,$simbolos);



}



else if ($chk1 && $chk2 && $chk3 && !$chk4 ) {


    $cadena=array_merge($numeros,$minusculas,$mayusculas);



}

else if ($chk1 && !$chk2 && $chk3 && $chk4 ) {


    $cadena=array_merge($numeros,$mayusculas,$simbolos);



}

else if ($chk1 && $chk2 && !$chk3 && $chk4 ) {


    $cadena=array_merge($numeros,$minusculas,$simbolos);



}



else if (!$chk1 && $chk2 && !$chk3 && !$chk4 ) {


    $cadena=array_merge($minusculas);



}

else if (!$chk1 && $chk2 && $chk3 && !$chk4 ) {


    $cadena=array_merge($minusculas,$mayusculas);



}

else if (!$chk1 && $chk2 && !$chk3 && $chk4 ) {


    $cadena=array_merge($minusculas,$simbolos);



}

else if (!$chk1 && $chk2 && $chk3 && $chk4 ) {


    $cadena=array_merge($minusculas,$mayusculas,$simbolos);



}


else if (!$chk1 && !$chk2 && $chk3 && !$chk4 ) {


    $cadena=array_merge($mayusculas);



}

else if (!$chk1 && !$chk2 && $chk3 && $chk4 ) {


    $cadena=array_merge($mayusculas,$simbolos);



}

else if (!$chk1 && !$chk2 && !$chk3 && $chk4 ) {


    $cadena=array_merge($simbolos);



}



function seguridad_clave($string){ 

    /*
        <= 60% clave debil
        > 60% y <=70% clave Segura
        > 71% clave Robusta
    */



    $h    = 0; 
    $size = strlen($string); 
    foreach(count_chars($string, 1) as $v){ 
        $p = $v / $size; 
        $h -= $p * log($p) / log(2); 
    } 
    $strength = ($h / 4) * 100; 
    if($strength > 100){ 
        $strength = 100; 
    } 
    return $strength; 
} 



    
  


   
    shuffle($cadena);
    $largocadena=sizeof($cadena)-1;
    $clave="";

    for($i=0;$i<=$cantidad-1;$i++) {
        $clave.= $cadena[rand(0, $largocadena-1)];
    }

//echo $clave;
//echo "% de Seguridad :".seguridad_clave($clave);

$data = array(
    'clv' => $clave,
    'pds' => round(seguridad_clave($clave))
);

echo $data = json_encode($data);


?>