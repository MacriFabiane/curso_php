<?php
    trait Objeto{
        public function teste(){
            echo "testando trait de objeto <br>";
        }
    }

    trait Testando{
        public $y = 10;
        public function traitTeste(){
            echo "Este método é da trait testando <br>";
        }
    }

    class Central{
        use Objeto;//assim classe central vai ter acesso a classe objeto
        use Testando;
    }

    $x = new Central;

    $x->teste();
    $x->traitTeste();

    echo $x->y; //tbm tem acesso a propriedades

?>