<?php
$idade = 345;
$pessoasMortas = 100;

if ($idade >= 1390) {
    echo "Você tem $idade anos. Pode entrar sozinho de boas.";
} else if ($idade >= 400 && $pessoasMortas > 10) {
    echo "Você tem $idade anos e consumiu a alma de mais de 10 pessoas, então pode entrar.";
} else {
    echo "Você só tem $idade anos e nem absorveu a energia vital de seres do plano material. Você não pode entrar";
   echo PHP_EOL . "É uma pena";
}
echo PHP_EOL;
echo "Adeus f !";