<?php
class Produtos {
    private $id_prod;
    private $nome_prod;
    private $id_forn;
    private $id_cat;
    private $quant_unid;
    private $preco_unit;
    private $unid_estoque;
    private $unid_pedd;
    private $nivel_estoque;
    private $descontinuado;

    public function __construct($nome_prod, $quant_unid, $preco_unit, $unid_estoque, $unid_pedd, $nivel_estoque, $descontinuado) { 
        $this->nome_prod = $nome_prod;
        $this->quant_unid = $quant_unid;
        $this->preco_unit = $preco_unit;
        $this->unid_estoque = $unid_estoque;
        $this->unid_pedd = $unid_pedd;
        $this->nivel_estoque = $nivel_estoque;
        $this->descontinuado = $descontinuado;
    }
}
?>