<?php

$idadeList =  [26,12,65,13,7];

$nomes = array("João","Maria","Pedro","Ana");

for($indice=0; $indice < count($nomes) ;$indice++){
    echo $nomes[$indice].PHP_EOL;
}


/*
 gostaríamos de pegar esses três valores, nessas ordens, em uma única linha de código. 
 Será que o PHP nos permite informar uma lista de variáveis que queremos receber uma lista de valores
 já existe? Na verdade sim, e o nome dessa funcionalidade é list() - uma função que recebe variáveis e 
 faz com que os valores nos índices da lista sejam passados na mesma ordem:
*/ 

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;







/*

Nessa aula, aprendemos sobre a estrutura de dados Array. Vimos que um Array:

agrupa vários valores
também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)
usa-se [] ou array() para declarar um novo array
acessa um elemento usamos os []
dentro dos `[]´ vem a posição do elemento
possui um índice que por padrão começa com 0 (zero)
para acessar todos os elementos podemos usar uma estrutura de repetição
para saber quantos elementos um array tem existe a função count()

*/ 
