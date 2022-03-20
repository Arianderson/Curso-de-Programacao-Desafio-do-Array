<?php

$usuario=array();

$usuario[0]['0']="Arianderson";
$usuario[0]['1']='22';
$usuario[0]['2']="(71)9-96247762";

$usuario[1]['0']="Luiz";
$usuario[1]['1']='19';
$usuario[1]['2']="(71)9-99433391";

$usuario[2]['0']="Daniel";
$usuario[2]['1']='22';
$usuario[2]['2']="(71)9-96825478";

$usuario[3]['0']="Douglas";
$usuario[3]['1']='23';
$usuario[3]['2']="(71)9-98745547";

for($valorUsuario = 0; $valorUsuario<=3; $valorUsuario++){
    for($dados=0; $dados < 3; $dados++){
        echo ' '.$usuario[$valorUsuario][$dados];
       
    }
    echo'<br />';
    echo'<br />';
}
?>