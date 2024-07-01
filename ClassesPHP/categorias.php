<?php
class Categorias {
    private $id_cat;
    private $nome_cat;
    private $descricao;
    private $figura;

    public function __construct($nome_cat, $descricao, $figura) {
        $this->nome_cat = $nome_cat;
        $this->descricao = $descricao;
        $this->figura = $figura;
    }
    // SET: Mipula o atributo e insere o valor dentro dele.
    // GET: Retorna algo.
    function set_nome_cat($nome_cat) {
        $this->nome_cat = $nome_cat;
    }
    function set_descricao($descricao) {
        $this->descricao = $descricao;
    }
    function set_figura($figura) {
        $this->figura = $figura;
    }
}
?>