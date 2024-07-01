<?php
class Fornecedores {
    private $id_forn;    
    private $nome_empresa;
    private $nome_cont;
    private $cargo_cont;
    private $endereco;
    private $cidade;
    private $uf;
    private $cep;
    private $pais;
    private $telefone;

    public function __construct($nome_empresa, $nome_cont, $cargo_cont, $endereco, $cidade, $uf, $cep, $pais, $telefone) {
        $this->nome_empresa = $nome_empresa;
        $this->nome_cont = $nome_cont;
        $this->cargo_cont = $cargo_cont;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->pais = $pais;
        $this->telefone = $telefone;
    }
}
?>