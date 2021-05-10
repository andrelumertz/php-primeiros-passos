<?php   


// break and continue 

$contador= 1;

for ($contador= 1; $contador <= 15; $contador++) {
    if ($contador == 13 ) {
     echo  "Esse é o numero 13" . PHP_EOL;
    }
    else {
      echo "$contador" . PHP_EOL;
    }
};
// end break and continue 

/*

Nessa aula aprendemos sobre laços (loops) para repetir um bloco de código várias vezes.

Existem algumas variações de laços, dentre elas:
while que possui uma condição de entrada
do-while que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)
for que possui a declaração de uma variável, uma condição entrada e o increment
Dentro do bloco do laço podemos pular uma interação com o comando continue
Com o comando break podemos sair do laço
A variável contador normalmente se chama i

*/

// desafio do numero impar 

for ($contador = 1; $contador <100; $contador++) {
  if ($contador % 2 != 0) {
      echo $contador . PHP_EOL;
  }
}


/*

No meu caso, utilizei um for com um $contador inicializado em 1. Se ele for menor do que 100, o loop é executado, incrementando esse contador. Dentro do loop, verifico se o resto da divisão de $contador por 2 é diferente de 0. Nesse caso, a variável em seu número atual é exibida. Já se a divisão por 0 tiver como resto um 1, nada é executado.

Executando esse código, os números ímpares de 1 a 100 são exibidos na tela. Dessa forma, resolvemos um problema prático de forma simples com o auxílio dos nossos conhecimentos sobre loops e decisões.

Outra solução possível seria:

for ($contador = 1; $contador <100; $contador++) {
    if ($contador % 2 == 0) {
        continue;
    }
        echo $contador . PHP_EOL;
}

Assim, se o resto de $contador for igual a 0, o código não é executado. Do contrário, a variável é exibida na tela, da mesma forma que no código anterior.

Quando estamos desenvolvendo no mundo real, é muito comum encontrarmos essa variável $contador com o nome de $i (de "iteração). No PhpStorm, se pressionarmos "Shift + F6" com uma variável selecionada, poderemos renomeá-la, aplicando essa alteração a todos os campos em que ela aparece.

Vamos para o próximo desafio? A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9. 





*/