<?php

/*
 
Caso o arquivo não seja encontrado, include irá lançar um aviso (E_WARNING) 
enquanto require irá lançar um erro e não permitirá a execução do programa. 
Você pode conferir mais detalhes na documentação ...

*/

require_once 'funcoes.php';  // deste forma eu estou incluindo o arquivo funçoes.php dentro 
// do arquivo banco.php o once junto ele ira verificar se existe um arquivo igiual inserido ...


// array associativo das 3 contas correntes

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

// end do array das contas contas correntes

/*
Agora tente usar as função sacar e depositar. 
Estamos sacando R$ 500,00 da conta com o CPF 123.456.789-10, R$ 200,00 da conta 123.456.689-11 e 
depositando R$ 900,00 na conta 123.256.789-12.
*/

$contasCorrentes ['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 100); // pegando do saldo dessa conta e tirando 500 dele
$contasCorrentes ['123.456.689-11'] = sacar($contasCorrentes['123.456.689-11'], 100);
$contasCorrentes ['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 100);

titularComLetrasMaiusculas(conta:$contasCorrentes['123.256.789-12']);

// Logo abaixo da função use um laço para imprimir o cpf, titular e saldo de cada conta. 
// O Foreach vai passar por cada indice inserido no array e com a função exibeMensagem 
// ele vai imprimir o cpf, titular e saldo de cada conta.

foreach ($contasCorrentes as $cpf => $conta) {
    //  Se não passamos os índices para uma lista ou array do PHP, ele atribui os índices numéricos 
    //(de 0 em diante), e é isso que ele está pressupondo na função list(), já que não estamos 
    //informando quais as chaves que queremos buscar.
    // Se passarmos esses índices, conseguiremos pegar tais valores:
    list ('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        mensagem: "$cpf  {$conta['titular']}  {$conta['saldo']}");
}

// end do Foreach


// Teste a função e execute o arquivo banco.php na linha de comando:
// php avancando\banco.php



/*

Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. 
Uma subrotina apenas executa um código isolado.

*/

/*

Primeiro vimos como usar um array associativo dentro de uma string. Aprendemos:

para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"
e alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"
Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
require_once garante que o arquivo será incluído apenas uma vez
Conhecemos que existem níveis de mensagens entre eles:

E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
E_ERROR, PHP dá erro e para a execução do programa


*/


/*

Não é incomum precisarmos pegar valores específicos de uma lista (array) em PHP para fazer 
manipulações. Uma forma simples e interessante de pegar valores é a função list.
Qual a sintaxe da função list?

resposta:
 $info = array('Café', 'marrom', 'cafeína');
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";

Desta forma pegamos de forma simples todos os valores de uma lista (array) em variáveis individuais.

*/