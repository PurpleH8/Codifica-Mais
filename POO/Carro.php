<?php

class Carro {
    public string $marca;
    public string $modelo;
    public float $anoFab;

    public function __construct($marca, $modelo, $anoFab) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFab = $anoFab;
    }

    public function ligar() {
        return "O carro " . $this->marca . " " . $this->modelo . " foi ligado." . PHP_EOL . " Vrommmmmmm " . PHP_EOL . " O que você faz?" . PHP_EOL . PHP_EOL . " Vira para direita?" . PHP_EOL . " Vira para esquerda?" . PHP_EOL . ' Só acelera ' . PHP_EOL . " ou" . PHP_EOL . " buzinar?" . PHP_EOL;
    }

    public function direita() {
        echo "O carro " . $this->marca . " " . $this->modelo . " virou para direita ... atropelou uma ou duas crianças orfãs albinas " . PHP_EOL . "a polícia te perseguiu, foram atrás do seu " . $this->marca . ' ' . $this->modelo . '.' . PHP_EOL . ' Alias, sabiam que o ano de fabricação era de ' . $this->anoFab . PHP_EOL . 'informação inútil, heinnnnnnnnnnnnnnn' . PHP_EOL . PHP_EOL . PHP_EOL . "Desculpa, o botãov 'N' do meu teclado deu uma emperrada do nada" . PHP_EOL . 'Deseja acelerar ou virar para a esquerda?' . PHP_EOL;

        while (true) {
            $acao = readline("Escolha : (acelerar, esquerda): ");

            switch ($acao) {
                case 'acelerar':
                    return $this->acelerar();
                case 'esquerda':
                    return $this->esquerda();
                default:
                    echo "Ação inválida. Tente novamente." . PHP_EOL;
            }
        }
    }

    public function acelerar() {
        return "Você acelerou o carro " . $this->marca . " " . $this->modelo . "." . PHP_EOL . ' Apenas isso... ' . PHP_EOL . 'VROOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOMMMMM';
    }

    public function esquerda() {
        return "O carro " . $this->marca . " " . $this->modelo . " virou para a esquerda." . PHP_EOL . 'Estranho, né? a vida é um mar de decisões, ir para a direita ou ir para a esquerda? essas coisas realmente importam? você apesar de suas escolhas, chegará em resultados que não importaram no final. No fim, o sol mais uma vez nascerá, e a nossa especie cada vez mais se afunda em sua própria decepção após suas escolhas, sendo boas ou não, essas coisas momentâneas acabaram, com você aqui ou não.' . PHP_EOL . 'Aliás, você dirigiu rápido demais em uma rua, acabou ganhando a multa de R$250,00, sabe nem andar de carro, filho, cuidado que ainda nem tem seguro.';
    }

    public function buzinar() {
        return "O carro " . $this->marca . " " . $this->modelo . " buzinou. Bibi!" . PHP_EOL . 'Eu não sei satisfazer minha mulher, e ela quer o divórcio.';
    }

    public function interagir() {
        echo $this->ligar();

        while (true) {
            $acao = readline("Escolha : (direita, esquerda, acelerar, buzinar, sair): ");

            switch ($acao) {
                case 'direita':
                    echo $this->direita() . PHP_EOL;
                    break;
                case 'esquerda':
                    echo $this->esquerda() . PHP_EOL;
                    break;
                case 'acelerar':
                    echo $this->acelerar() . PHP_EOL;
                    break;
                case 'buzinar':
                    echo $this->buzinar() . PHP_EOL;
                    break;
                case 'sair':
                    exit("nego ta realmente saindo do carro? talkey" . PHP_EOL);
                default:
                    echo "Ação inválida. Tente novamente." . PHP_EOL;
            }
        }
    }
}