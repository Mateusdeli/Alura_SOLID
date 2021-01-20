<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel, Assistivel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . new Slug($this->categoria) . '/' . new Slug($this->nome);
    }
}


