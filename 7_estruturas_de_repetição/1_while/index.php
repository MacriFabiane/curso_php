<?php


$arr = [5, "Matheus", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô"];

$x = count($arr);
$y = 0;

while($y < $x) {

  if(is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
  }
  if($y === 6){
    echo "Terminando o loop <br>";
    break; //para o loop
  }

  $y++;

}

// CONTINUE pula uma execução do loop

$a=10;

while($a > 0){

    
    if ($a ==5 || $a ==7){

        echo "Pulou a execução $a <br>";

        $a--;//sempre diminuir pra n ficar em infinito

        continue;
    }

    if($a == 2){
        echo "Terminando o loop break $a <br>";
        break;
    }
    
    echo "Exectando loop $a <br>";
    
    $a--;
}

?>