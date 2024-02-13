<?php

/*
    \n=nova linha
    \t=tab
    \\=barra invertida
    \$=sinal dólar

*/
    header("Content-type: text/plain");//faz o html interpretar como texto puro
    //pula linha
    echo "isso aqui vai ficar na primeira linha \n e isso na segunda \n";

    //tab
    echo "testando o tab \t aqui \n";

    //barra invertida
    echo "barra invertida \\ \n";

    //dolar
    echo "Imprimindo o dolar \$teste \n";

?>