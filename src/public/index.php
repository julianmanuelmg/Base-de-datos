<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hola/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hola, $name");

    return $response;
});
// este cambio es de master


//Ejemplo uso if else aprenderaprogramar.com
$variable=7;
if($variable==1) {
echo '$variable es igual a 1.';
} else if($variable==2) {
echo '$variable es igual a 2.';
} else if($variable==3) {
echo '$variable es igual a 3.';
} else {
echo '$variable no es igual a 1, 2 o 3.';
}


//Ejemplo 2
$variable=7;
echo "<br>";
switch($variable) {
case 1:
echo '$variable es igual a 1.';
break;
case 2:
echo '$variable es igual a 2.';
break;
case 3:
echo '$variable es igual a 3.';
break;
default:
echo '$variable no es igual a 1, 2 o 3.';
}

//Ejemplo de uso switch PHP aprenderaprogramar.com
$mes = 8;
echo "<br>";
switch ($mes) {
    case 1:
    echo ("El mes es enero");
    break;
    case 2: echo ("El mes es febrero"); break;
    case 10: echo ("El mes es octubre"); break;
    default: echo ("El mes no es enero, febrero ni octubre"); break;
}

//Ejemplo WHILE
$galletas = 0;
echo "<br>";
while ($galletas < 10){
echo "$galletas, ";
$galletas++;
}

//Ejercicio While
$contador = 40;
echo "<br>";
while ($contador < 51){
    echo "$contador,";
    $contador++;
}

//Ejercicio 2 While




// Ejemplo For
echo "<br>";
for ($galletas = 0; $galletas < 10; $galletas++){
    echo "$galletas, ";
    }
echo"<br>";

//Ejercicio For
for ($galletas = 40; $galletas < 50; $galletas++){
    echo "$galletas, ";  
    }
echo"<br>";

//Modificar step
for ( $i = 0; $i < 50; $i+=5 ){
    echo "&nbsp;&nbsp; $i <br/> ";
    }
echo"<br>";

//Ejercicio 4 For
for ( $i = 50; $i < 525; $i+=25 ){
echo "&nbsp;&nbsp; $i <br/> ";
}
echo"<br>";

//Ejemplo arrays vectores
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
echo $estacion[2];
$numero[0] = 7;
$numero[1] = 11;
$numero[2] = 15;
echo"<br>";

//Ejemplo Matrices (arrays dos dimensiones)
$animal[0][0] = "Perro";
$animal[0][1] = "Gato";
$animal[1][0] = "Lombriz";
$animal[1][1] = "Burro";
$animal[2][0] = "Murciélago";
$animal[2][1] = "Cocodrilo";
echo $animal[2][1];
echo"<br>";
echo $animal[0][0];
echo"<br>";

//Ejemplo arrays multidimensionales
$animal[0][0][0] = "Perro";
$animal[0][0][1] = "Gato";
$animal[0][0][2] = "Lombriz";
$animal[1][0][0] = "Burro";
$animal[1][0][1] = "Murciélago";
$animal[1][0][3] = "Cocodrilo";
echo $animal[1][0][1];
echo $animal[0][0][0];

?>


$app->run();