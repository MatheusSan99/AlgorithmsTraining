<?php

namespace TrainingAlgorithms\BuscaBinaria;

class BuscaBinariaEmListaPalavras 
{
    public static function execute(array $listaPalavras, string $alvo) {
        $inicio = 0;
        $fim = count($listaPalavras) - 1;
    
        while ($inicio <= $fim) {
            $meio = intdiv($inicio + $fim, 2);
    
            if ($listaPalavras[$meio] === $alvo) {
                return $meio;
            } 

            if (strcmp($listaPalavras[$meio], $alvo) > 0) {
                $fim = $meio - 1;
            } else {
                $inicio = $meio + 1;
            }
        }
        return null; 
    }
}


