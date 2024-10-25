<?php 

    class Usuario{
        
        //  atributos -> sao caracteristicas que nossos objetos terao
        public $nome;
        public $idade;
        public $email;
        public $senha;
        
        //  acoes que nossos objetos poderao executar
        public function Cadastrar(){
            if($this->email == "luanflor@gmail.com" && $this->senha == "12345"){
                echo "Cadastrado com sucesso";
            }
        }
    }
    //  palavra reservada "new" para criarmos um novo objeto a partir da classe referida
    $caique = new Usuario();
    
    //  -> para indicar qual atributo ou metodo esta sendo chamado
    $caique->nome = "Luan Flôres";
    $caique->idade = 19;
    $caique->email = "luanflor@gmail.com";
    $caique->senha = "12345";
    $caique->Cadastrar();
