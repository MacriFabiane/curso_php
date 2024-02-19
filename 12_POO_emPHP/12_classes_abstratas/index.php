<?php
    abstract class Teste{
        public static function testandoClasse(){
            Echo "Método de uma classe abstrata<br>";
        }

        abstract public function testeAbs();
    }

    //$t =new Teste; //não dá para instanciar pois é abstrata

    Teste::testandoClasse(); //chamando direto (preferivel statico)

    class Nova extends Teste{
        public function testeAbs() {//obrigatoria implementação pq era um metodo abstrato na classe pai
          echo "Teste método abstrato <br>";  
        }
    }

    $n = new Nova;
    $n->testandoClasse();
    $n->testeAbs();
?>