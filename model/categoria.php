<?php

/*
CREATE TABLE IF NOT EXISTS categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    usuario_atualizacao INT,
    ativo TINYINT(1) DEFAULT 1
);
*/

class categoria extends Entidade
{
    
    private string $nome;
    private ?string $descricao;

    public function __construct(?int $id, string $nome, ?string $descricao, bool $ativo = true,
        ?string $dataCriacao = null, ?string $dataAtualizacao = null, ?int $usuarioAtualizacao = null)
    {
        parent::__construct($id, $ativo, $dataCriacao, $dataAtualizacao, $usuarioAtualizacao);
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getNome(): string { return $this->nome; }
    public function getDescricao(): ?string { return $this->descricao; }
}