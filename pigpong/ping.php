<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$inicio= $_GET ["inicio"];
$fim= $_GET ["fim"];

if ($iniio > $fim) {
    echo "<p> O valor de <b>inicio</b> deve ser menor que <b>fim</b></p>"
} else {
    for ($i = $inicio; $i<= $fim; $i++){
        if ($i %3==0 && $i %5==0){
            echo "<p>PingPong</p>";
        } else if ($i %3==0) {
            echo "<p>Ping</p>";
        } else if ($i %5==0) {
            echo "<p>Pong</p>";
        } else {
            echo "<p>$i</p>";
        }
    }
}

echo "a href=\"index.html\">Voltar para formulario</a>";

?>


</body>
</html>