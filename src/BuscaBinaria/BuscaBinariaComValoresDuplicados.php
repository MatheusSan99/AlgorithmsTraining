<?php

namespace TrainingAlgorithms\BuscaBinaria;

class BuscaBinariaComValoresDuplicados 
{
    public static function execute(array $listaNumeros, int $alvo) {
        $inicio = 0;
        $fim = count($listaNumeros) - 1;
        $indicesAlvo = [];
    
        while ($inicio <= $fim) {
            $meio = intdiv($inicio + $fim, 2);
    
            if ($listaNumeros[$meio] == $alvo) {
                $esquerda = $meio;
                $direita = $meio;
    
                while ($esquerda >= 0 && $listaNumeros[$esquerda] == $alvo) {
                    $indicesAlvo[] = $esquerda;
                    $esquerda--;
                }
                while ($direita < count($listaNumeros) && $listaNumeros[$direita] == $alvo) {
                    $indicesAlvo[] = $direita;
                    $direita++;
                }
                break;
            }
    
            if ($listaNumeros[$meio] < $alvo) {
                $inicio = $meio + 1;
            } else {
                $fim = $meio - 1;
            }
        }
        return array_unique($indicesAlvo) ?: null;
    }
}


