<?php
class ItensPedidos {
    private $num_ped;
    private $id_ped;
    private $preco_uni;
    private $quant;
    private $desconto;

    public function __construct($id_ped, $preco_uni, $quant, $desconto) {
        $this->id_ped = $id_ped;
        $this->preco_uni = $preco_uni;
        $this->quant = $quant;
        $this->desconto = $desconto;
    }
}
?>