<?php
class Pedidos {
    private $id_pedido;
    private $id_cli;
    private $id_func;
    private $data_ped;
    private $data_entre;
    private $data_envio;
    private $frete;
    private $nome_destina;
    private $end_destina;
    private $cidade_desti;
    private $cep_desti;
    private $pais_desti;

    public function __construct($data_ped, $data_entre, $data_envio, $frete, $nome_destina, $end_destina, $cidade_desti, $cep_desti, $pais_desti) {
        $this->data_ped = $data_ped;
        $this->data_entre = $data_entre;
        $this->data_envio = $data_envio;
        $this->frete = $frete;
        $this->nome_destina = $nome_destina;
        $this->end_destina = $end_destina;
        $this->cidade_desti = $cidade_desti;
        $this->cep_desti = $cep_desti;
        $this->pais_desti = $pais_desti;
    }

}
?>