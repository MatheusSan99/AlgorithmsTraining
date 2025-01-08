<?php

namespace TrainingAlgorithms\BuscaBinaria;

class BuscaBinariaSimplesRecursiva 
{
    public static function execute(array $listaNumeros, int $alvo, $inicio = 0, $fim = null): ?int{
        if ($fim === null) {
            $fim = count($listaNumeros) - 1;
        }
    
        while ($inicio <= $fim) {
            $meio = intdiv($inicio + $fim, 2);
    
            if ($listaNumeros[$meio] === $alvo) {
                return $meio;
            } 
    
            return $listaNumeros[$meio] > $alvo ? self::execute($listaNumeros, $alvo, $inicio, $meio - 1) : self::execute($listaNumeros, $alvo, $meio + 1, $fim);
        }
        return null; 
    }
}


