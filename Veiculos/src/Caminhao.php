<?php

require 'Veiculos.php';

class Caminhao extends Veiculos implements VeiculoInterface{
    public function explode(){
        echo "o caminhão explode no viaduto (Não sei o que um caminhao faz... acho que buzina)";
    }
}