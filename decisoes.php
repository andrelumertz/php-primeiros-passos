<?php 

$idade=16;
$numeroDePessoas= 1;


echo "Voce só pode entrar se tiver mais do que 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos." . PHP_EOL;
    echo "Voce tem $idade, pode entrar sozinho !! ";
} 
   else if ($idade >=16 && $numeroDePessoas == 1) {
       echo "Voce tem $idade anos. Mas como esta acompanhado(a), pode entrar !!";
   }
   else {
        echo "Voce tem $idade anos." . PHP_EOL;
        echo "Voce não tem 18 anos e tambem não esta acompanhado, então não pode entrar !!";
}

echo PHP_EOL;
echo "Adeus galerinha !";


/*

Nessa aula, aprendemos sobre controle de fluxo (decisões) através do if:

Podemos tomar uma decisão no código através do if, elseif e else
if e elseif vão avaliar uma condição, se for verdadeira executam o bloco associado
O if é o primeiro comando, elseif e else são opcionais
O bloco elseif sempre precisa de um if antes
O bloco else sempre precisa de um if ou elseif antes -O bloco else só executa se nenhuma das condições anteriores forem verdadeiras
Através do && (AND lógico) e do || (OR lógico) podemos avaliar mais de uma condição





*/


