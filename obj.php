<?php

class pessoa{
    function falar()    {
        echo 'ola pessoas ';
    }
}

$matheus = new pessoa;
$matheus->nome = 'matheus fantini teixeira <br> ';
$matheus->idade = '27';

print_r($matheus);
$matheus->falar();

class carro{
    function andar(){
        echo 'estou acelerando!';

    }
}

$pegeot = new carro;
$pegeot->modelo = 306;
$pegeot->ano = 2010;
$pegeot->andar();

print_r($pegeot);

class Livro {
    function proxPagina() {
        if ($this->paginaAtual <= $this->paginas) {
            $this->paginaAtual += 1;
            return $this->paginaAtual;
        } else {
            echo 'o livro ja está na ultima página';
        }
    }

    function mostraAutor(){
        echo $this->autor;
    }
}

$livro = new livro;
$livro->nome = 'deltora';
$livro->autor = 'clarisse ';
$livro->paginas = 230;
$livro->paginaAtual = 0;
$livro->mostraAutor();
$livro->proxPagina($livro ->paginaAtual);
$livro->proxPagina($livro ->paginaAtual);
echo 'o livro esta na página ' . $livro->paginaAtual;