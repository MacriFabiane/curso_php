<?php
/* crie um arr associativo com chaves com o valor de nomes e valores como pontuação
ordene os dados do maior para o menor
exiba uma lista simulando um ranking em html*/

$ranking =[
    'juju'=>1900,
    'macri'=>2345,
    'brunou'=>1287,
    'mabel'=>7263,
    'bianix'=>2542
];

arsort($ranking);
?>
<tiltle> <h2> Rancking do O JOGO </h2> </title>
<ol >
    <?php foreach($ranking as $nick => $pont): ?>
        <li>
        <?= "$nick\t\t\t\t -> $pont"; ?>
        </li>
    <?php endforeach ?>
</ol>