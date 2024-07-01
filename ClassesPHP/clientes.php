<?php
class Clientes {
    private $id_cli;
    private $nome;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $pais;
    private $telefone;
  
    public function __construct($nome, $endereco, $cidade, $cep, $uf, $pais, $telefone) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->uf = $uf;
        $this->pais = $pais;
        $this->telefone = $telefone;
    }
    // SET: Mipula o atributo e insere o valor dentro dele.
    // GET: Retorna algo.
    function set_nome($nome) {
        $this->nome = $nome;
    }
    function set_endereco($endereco) {
        $this->endereco = $endereco;
    }
    function set_cidade($cidade) {
        $this->cidade = $cidade;
    }
    function set_cep($cep) {
        $this->cep = $cep;
    }
    function set_uf($uf) {
        $this->uf = $uf;
    }
    function set_pais($pais) {
        $this->pais = $pais;
    }
    function set_telefone($telefone) {
        $this->telefone = $telefone;
    }
}
?>