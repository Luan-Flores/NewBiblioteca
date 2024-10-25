<?php
require "Livro.php";
require "Usuario.php";
require "Biblioteca.php";

use Livro as Livro;
use Usuario as Usuario;

$dom_casmurro = new Livro ("Dom casmas","machado","terror","Disponível");

Biblioteca::cadastrarLivro($dom_casmurro);

