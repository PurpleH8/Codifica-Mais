<?php

require 'Veiculos.php';

class Moto extends Veiculos{
    public function darGrau(){
        "A policia está a procura de uma " . $this->nome . $this->marca . $this->modelo . " dando grau. caraca, o menó ta voando, slk";
    }
}