<?php
    $url = "https://www.google.com";
    $arrayUrl =parse_url($url);

    print_r($arrayUrl);

    echo "<br>" . $arrayUrl["host"] ."<br>";

    $url2= "http://www.horadecodar.com.br/usuarios/matheusbattisti?id=12&nome=Matheus";

    $arrayUrl2 =parse_url($url2);

    print_r($arrayUrl2);

    echo "<br>" . $arrayUrl2["host"] ."<br>";

?>