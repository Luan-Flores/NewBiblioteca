<?php
    class Pessoa{
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        public function __construct($nome,$idade,$altura,$peso){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
        }


        public function getNome(){
            return $this->nome;
        }

        public function andar(){
            echo $this->nome . " andou!";
        }

        public function falar(){
            echo $this->nome . " falou!";
        }

        public function comer(){
            echo $this->nome . " comeu!";
        }
        
        public function dormir(){
            echo $this->nome . " dormiu!";
        }
    }

    $pedro = new Pessoa("Pedro Lucas",12,1.75,82);

    echo $pedro->andar();
