<?php

namespace TrainingAlgorithms\BuscaBinaria;

class BuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo 
{
    public static function execute(array $listaNumeros, int $alvo) {
        $inicio = 0;

        $fim = count($listaNumeros) - 1;
    
        while ($inicio <= $fim) {
            $meio = intdiv($inicio + $fim, 2);
    
            if ($listaNumeros[$meio] > $alvo) {
                return $meio;
            } else {
                $inicio = $meio + 1;
            }
        }
        return null; 
    }
}


