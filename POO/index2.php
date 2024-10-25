<?php
interface Info{
    public function getInfo();
}
class Produto implements Info{
    public $nome;
    public $preco;
    public $descricao;
    public $quantidade;

    public function __construct($nome, $preco, $descricao, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
    }
    
    public function getInfo(){
        echo "Nome: ".$this->nome.", Preço: ".$this->preco.", Quantidade: ".$this->quantidade.", Descrição: ".$this->descricao;
    }
}

$camisaCurintia = new Produto("Camisa Corinthians", 350.50, "Poliester Albino", 520);
echo "<pre>";
var_dump($camisaCurintia);
echo "</pre>";
echo "<br>";
$camisaCurintia->getInfo();

class Usuario{
    public $nome;
    public $email;
    public $senha;
    public $telefone;
    
    public function __construct($nome, $email, $senha, $telefone){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }
    
    public function getInfo(){
        echo "Nome: ".$this->nome.", Email: ".$this->email.", Senha: ".$this->senha.", Telefone: ".$this->telefone;
    }

}

$nicolas = new Usuario("Nicolas", "fabio@hotmail.com", "12345coder", "67993026432");
echo "<pre>";
var_dump($nicolas);
echo "</pre>";
echo "<br>";
$nicolas->getInfo();