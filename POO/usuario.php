<?php
interface Crud {
    public function Cadastro($nome, $email, $senha, $telefone);
}

class Usuario implements Crud {
    const MAX_EMPRESTIMO = 3;
    public $nome;
    public $email;
    public $senha;
    public $telefone;

    public function emprestar($livro){
        if(count($this->livro_emprestado) >= self::MAX_EMPRESTIMO){
            array_push($this->livro_emprestados, $livro);
            return;
        }
    }
    public function devolver($livro){
        if(in_array($livro, $this->livros_emprestados)){
            $position = array_search($livro, $this->livros_emprestados);
            unset($this->livros_emprestados[$position]);
        }
    }
    public function criar(){
        return "insert into usuario(nome,cep) values (".$this->nome.",".$this->nome.")";
    }
    public function ler(){
        return "select * from usuario where nome = ".$this->nome.";";
    }
    public function atualizar($nome_atualizado){
        return "update usuario set nome = ".$nome_atualizado." where nome = ".$this->nome.";";
    }
    public function deletar(){
        return "delete nome from usuario where = ".$this->nome.";";
    }
    public function Cadastro($nome, $email, $senha, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }

    // Construtor que aceita os parâmetros e chama o método Cadastro
    public function __construct($nome, $email, $senha, $telefone) {
        $this->Cadastro($nome, $email, $senha, $telefone);
    }

    public function getInfo() {
        echo "Nome: " . $this->nome . ", Email: " . $this->email . ", Senha: " . $this->senha . ", Telefone: " . $this->telefone;
    }
}