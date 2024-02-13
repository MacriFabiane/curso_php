<?php

    $textoHtml ="<p>Testando paragrafo.</p><div>uma div</div>";

    echo $textoHtml;

    $salvarTextoBanco =strip_tags($textoHtml);

    echo $salvarTextoBanco;

?>