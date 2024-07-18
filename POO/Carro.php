<?php

class Carro{
    public string $marca;
    public string $modelo;
    public float $anoFab;

    public function __construct($marca, $modelo, $anoFab) {

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFab = $anoFab;

    }

    public function ligar() {
        return "O carro " . $this->marca . " " . $this->modelo . " foi ligado." . PHP_EOL . " Vrommmmmmm " . PHP_EOL . " O que você faz?" . PHP_EOL . PHP_EOL . " Vira para direita?" . PHP_EOL . " Vira para esquerda?" . PHP_EOL . " ou" . PHP_EOL . " buzinar?";
    }
    public function direita() {
        return "O carro tal marca virou para direita ... atropelou uma ou duas crianças albinas " . PHP_EOL . "a policia te perseguiu, foram atrás do ";
    }

    public function acelerar() {

    }

}