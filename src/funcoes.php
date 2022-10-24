<?php

namespace SRC;

class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano): int {

        return floor($ano/100) + ($ano % 100 >= 1 ? 1 : 0);
    }

    
	
	
	
	
	
	
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero): int {
        if($numero < 2){
            return 0;
        }
        for($i = $numero - 1; $i > 0; $i--){
            $dividers = 0;
            for($j = 2; $j <= sqrt($i); $j++){
                if ($i % $j == 0){
                    $dividers++;
                }
            }
            if($dividers == 0){
                return $i;
            }
        }
    }










    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

     * */
    public function SegundoMaior(array $arr): int {
        $SEGUNDO_MAIOR = 0;
        $MAIOR = 0;
        foreach($arr as $inner_arr){
            foreach($inner_arr as $num){
                if($num > $MAIOR){
                    $SEGUNDO_MAIOR = $MAIOR;
                    $MAIOR = $num;
                }
            }
        }
        return $SEGUNDO_MAIOR;
    }
	
	
	
	
	
	
	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste 

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr) {
        if(count($arr) < 3){
            echo "true";
            return true;
        }
        for ($i = 0; $i < count($arr) - 1; $i++){
            if($arr[$i] >= $arr[$i + 1]){
                if($i == 0){
                    \array_splice($arr,0, 1);
                    break;
                    
                }else{
                    if($arr[$i - 1] < $arr[$i + 1]){
                        \array_splice($arr, $i, 1);
                    }else{
                        \array_splice($arr, $i + 1, 1);
                    }
                    break;
                }
            }
        }
        for($i = 0; $i < count($arr) - 1; $i++){
            
            if($arr[$i] >= $arr[$i + 1]){
                echo "false";
                return false;
            }
        }
        echo "true";
        return true;
        
    }
}
$teste1 = new Funcoes();
echo $teste1->SeculoAno(1905);
echo "\n";
echo $teste1->SeculoAno(1700);
echo "\n";
echo "\n";
echo "\n";
echo $teste1->PrimoAnterior(10);
echo "\n";
echo $teste1->PrimoAnterior(29);
echo "\n";
echo "\n";
echo "\n";
echo $teste1->SegundoMaior( array (
    array(25,22,18),
    array(10,15,13),
    array(24,5,2),
    array(80,17,15)
  ));
echo "\n";
echo "\n";
echo "\n";






echo $teste1->SequenciaCrescente(array(1, 3, 2, 1));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 3, 2));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 1, 2));
echo "\n";
echo $teste1->SequenciaCrescente(array(3, 6, 5, 8, 10, 20, 15));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 1, 2, 3, 4, 4));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 4, 10, 4, 2));
echo "\n";
echo $teste1->SequenciaCrescente(array(10, 1, 2, 3, 4, 5));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 1, 1, 2, 3));
echo "\n";
echo $teste1->SequenciaCrescente(array(0, -2, 5, 6));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 3, 4, 5, 3, 5, 6));
echo "\n";
echo $teste1->SequenciaCrescente(array(40, 50, 60, 10, 20, 30));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 1));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 5, 3, 5));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 5, 5, 5));
echo "\n";
echo $teste1->SequenciaCrescente(array(10, 1, 2, 3, 4, 5, 6, 1));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 3, 4, 3, 6));
echo "\n";
echo $teste1->SequenciaCrescente(array(1, 2, 3, 4, 99, 5, 6));
echo "\n";
echo $teste1->SequenciaCrescente(array(123, -17, -5, 1, 2, 3, 12, 43, 45));
echo "\n";
echo $teste1->SequenciaCrescente(array(3, 5, 67, 98, 3));
echo "\n";


