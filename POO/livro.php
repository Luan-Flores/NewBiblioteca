<?php

class Livro{
    public $titulo;
    public $autor;
    public $genero;
    public $status = "Disponível";
    public $usuario;

    public function __construct($titulo,$autor,$genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
   
    }
    public function emprestarLivro($usuario){
        if($this->status == 'Indisponível'){
            echo 'Livro já está emprestado';
            return;
        }
        $this->status = 'Indisponível';
        $this->usuarioEmprestado = $usuario;
    }
    public function devolverLivro($usuario){
        if($this->status == 'Disponível'){
            echo "Livro não está emprestado";
            return;
        }
        $this->status = 'Disponível';
        $this->usuarioEmprestado = null;
    }

    public function criar(){
        return $query = 'insert into livro(titulo,autor,genero,status_livro) values ("'.$this->titulo.'","'.$this->autor.'","'.$this->genero.'","'.$this->status.'");';
    }
    public function ler(){
        echo "select * from livro where titulo = ".$this->titulo.";";
    }
    public function atualizar($genero_novo){
        echo "update livro set genero = ".$genero_novo."where titulo = ".$this->titulo.";";
    }
    public function deletar(){
        echo "delete * from livro where titulo = ".$this->titulo.";";
    }
}