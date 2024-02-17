<?php
    class Car{
        public $rodas =4;
        private $vidro ="Sem película";
        protected $portas = 4;

        //só dá pra mudar aqui dentro pq é private
        public function pelicuaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        }

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico{

        public function alterarRodas($carro){
            $carro->rodas = 10;//consegue alterar pq é publica
        }

        public function colocarPelicula($carro, $pelicula){
            $carro -> vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $matheus =new Mecanico;

    $matheus->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    //não pode alterar pq é privado
    // $matheus->colocarPelicula($carro, "G20");

    $carro->pelicuaDeFabrica("G10");

    echo $carro->getVidro() . "<br>";

   // echo $carro->portas . "<br>"; //não dá pq o protected só é acessível dentro da classe dele

    echo $carro->getPortas() . "<br>"; 
?>