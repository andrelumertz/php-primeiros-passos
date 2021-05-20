<?php


// Functions 

/*
Crie mais uma função para depositar dinheiro na conta. 
Adicione a função logo abaixo da função exibeMensagem:
*/

function depositar( array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem: "Depositos precisam ser positivos");
    }
    return $conta;
}  // Repara que chamamos a função exibeMensagem e retornamos a conta.


// Logo abaixo da função depositar adicione a função sacar:

function sacar(array $conta, float $valorASacar) : array 
{  // dois parametros
    if ($valorASacar > $conta['saldo']) {   // se o sque for maior que o valor do saldo da conta do cliente
    exibeMensagem(mensagem: "Voce não pode sacar");
} else {
    $conta['saldo'] -= $valorASacar; // vai retirar o valor do saque da conta do cliente
}

 return $conta;
}

// end Fuction sacar


// função exibeMensagem(..) que imprime uma mensagem junto com PHP_EOL:

function exibeMensagem($mensagem) 
{                                  
    echo $mensagem . PHP_EOL;
}
// end function  exibeMensagem

// function para o nime do titular ficar em letras maiusculas
function titularComLetrasMaiusculas( array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

// end de todas as Functions






