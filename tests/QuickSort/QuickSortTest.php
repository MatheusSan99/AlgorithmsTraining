<?php

namespace Tests\QuickSort;

//     ### **Exercício 1: Quicksort Básico**  
//     Implemente o algoritmo Quicksort para ordenar um array de números inteiros em ordem crescente.

//     - **Lista**: `[8, 3, 1, 7, 0, 10, 2]`  
//       - **Resultado Esperado**: `[0, 1, 2, 3, 7, 8, 10]`  

//     - **Lista**: `[4, 15, 6, 2, 9]`  
//       - **Resultado Esperado**: `[2, 4, 6, 9, 15]`  

//     ---

//     ### **Exercício 2: Ordem Decrescente**  
//     Modifique o Quicksort para ordenar números em ordem decrescente.

//     - **Lista**: `[8, 3, 1, 7, 0, 10, 2]`  
//       - **Resultado Esperado**: `[10, 8, 7, 3, 2, 1, 0]`  

//     - **Lista**: `[4, 15, 6, 2, 9]`  
//       - **Resultado Esperado**: `[15, 9, 6, 4, 2]`  

//     ---

//     ### **Exercício 3: Ordenar Strings**  
//     Use o Quicksort para ordenar um array de strings em ordem alfabética.

//     - **Lista**: `["banana", "apple", "cherry", "date"]`  
//       - **Resultado Esperado**: `["apple", "banana", "cherry", "date"]`  

//     - **Lista**: `["zebra", "elephant", "lion", "antelope"]`  
//       - **Resultado Esperado**: `["antelope", "elephant", "lion", "zebra"]`  

//     ---

//     ### **Exercício 4: Ordenar Objetos**  
//     Implemente o Quicksort para ordenar um array de objetos com base em um campo específico.

//     - **Lista**:  
//       ```php
//       [
//           ["nome" => "João", "idade" => 25],
//           ["nome" => "Maria", "idade" => 30],
//           ["nome" => "Pedro", "idade" => 20]
//       ]
//       ```  
//       - **Ordenar Por**: `idade`  
//       - **Resultado Esperado**:  
//         ```php
//         [
//             ["nome" => "Pedro", "idade" => 20],
//             ["nome" => "João", "idade" => 25],
//             ["nome" => "Maria", "idade" => 30]
//         ]
//         ```  

//     - **Lista**:  
//       ```php
//       [
//           ["produto" => "TV", "preco" => 3000],
//           ["produto" => "Sofá", "preco" => 1500],
//           ["produto" => "Geladeira", "preco" => 2000]
//       ]
//       ```  
//       - **Ordenar Por**: `preco`  
//       - **Resultado Esperado**:  
//         ```php
//         [
//             ["produto" => "Sofá", "preco" => 1500],
//             ["produto" => "Geladeira", "preco" => 2000],
//             ["produto" => "TV", "preco" => 3000]
//         ]
//         ```  

//     ---

//     ### **Exercício 5: Pivot Personalizado**  
//     Modifique o Quicksort para utilizar estratégias diferentes para selecionar o pivô.  
//     Implemente as seguintes variações:  
//     1. Usar o primeiro elemento como pivô.  
//     2. Usar o elemento do meio como pivô.  

//     - **Lista**: `[8, 3, 1, 7, 0, 10, 2]`  
//       - **Resultado Esperado**: `[0, 1, 2, 3, 7, 8, 10]`  

//     - **Lista**: `[4, 15, 6, 2, 9]`  
//       - **Resultado Esperado**: `[2, 4, 6, 9, 15]`  

//     ---

//     ### **Exercício 6: Contar Comparações**  
//     Adapte o Quicksort para contar o número de comparações realizadas durante a ordenação.

//     - **Lista**: `[8, 3, 1, 7, 0, 10, 2]`  
//       - **Resultado Esperado**:  
//         - **Array Ordenado**: `[0, 1, 2, 3, 7, 8, 10]`  
//         - **Comparações**: `12`  

//     - **Lista**: `[4, 15, 6, 2, 9]`  
//       - **Resultado Esperado**:  
//         - **Array Ordenado**: `[2, 4, 6, 9, 15]`  
//         - **Comparações**: `7`  

//     ---

//     ### **Exercício 7: Ordenar Matriz pela Soma**  
//     Ordene um array de arrays (matriz) com base na soma dos elementos de cada subarray.

//     - **Lista**: `[[3, 2, 1], [1, 1, 1], [4, 4, 4]]`  
//       - **Resultado Esperado**: `[[1, 1, 1], [3, 2, 1], [4, 4, 4]]`  

//     - **Lista**: `[[5, 5], [2, 3], [7, 1]]`  
//       - **Resultado Esperado**: `[[2, 3], [7, 1], [5, 5]]`  

//     ---

//     ### **Exercício 8: Ordenar Subparte do Array**  
//     Implemente o Quicksort para ordenar apenas uma subparte específica de um array.

//     - **Lista**: `[10, 5, 2, 8, 1, 4, 7, 3, 9]`  
//       - **Subparte**: Índices `2 a 6`  
//       - **Resultado Esperado**: `[10, 5, 1, 2, 4, 7, 8, 3, 9]`  

//     - **Lista**: `[20, 15, 10, 25, 30, 5]`  
//       - **Subparte**: Índices `1 a 4`  
//       - **Resultado Esperado**: `[20, 10, 15, 25, 30, 5]`  

use PHPUnit\Framework\TestCase;
use TrainingAlgorithms\QuickSort\QuickSortContarComparacoes;
use TrainingAlgorithms\QuickSort\QuickSortCrescente;
use TrainingAlgorithms\QuickSort\QuickSortDecrescente;
use TrainingAlgorithms\QuickSort\QuickSortObjetos;
use TrainingAlgorithms\QuickSort\QuickSortOrdenarMatrizPelaSoma;
use TrainingAlgorithms\QuickSort\QuickSortOrdenarSubparteDoArray;
use TrainingAlgorithms\QuickSort\QuickSortPivotPersonalizado;
use TrainingAlgorithms\QuickSort\QuickSortStrings;

class QuickSortTest extends TestCase
{
    private QuickSortCrescente $QuickSortCrescente;
    private QuickSortDecrescente $QuickSortDecrescente;
    private QuickSortStrings $QuickSortStrings;
    private QuickSortObjetos $QuickSortObjetos;
    private QuickSortPivotPersonalizado $QuickSortPivotPersonalizado;
    private QuickSortContarComparacoes $QuickSortContarComparacoes;
    private QuickSortOrdenarMatrizPelaSoma $QuickSortOrdenarMatrizPelaSoma;
    private QuickSortOrdenarSubparteDoArray $QuickSortOrdenarSubparteDoArray;

    protected function setUp(): void
    {
        $this->QuickSortCrescente = new QuickSortCrescente();
        $this->QuickSortDecrescente = new QuickSortDecrescente();
        $this->QuickSortStrings = new QuickSortStrings();
        $this->QuickSortObjetos = new QuickSortObjetos();
        $this->QuickSortPivotPersonalizado = new QuickSortPivotPersonalizado();
        $this->QuickSortContarComparacoes = new QuickSortContarComparacoes();
        $this->QuickSortOrdenarMatrizPelaSoma = new QuickSortOrdenarMatrizPelaSoma();
        $this->QuickSortOrdenarSubparteDoArray = new QuickSortOrdenarSubparteDoArray();
    }

    public function testExercicio1()
    {
        $this->assertEquals([0, 1, 2, 3, 7, 8, 10], $this->QuickSortCrescente->sort([8, 3, 1, 7, 0, 10, 2]));
        $this->assertEquals([2, 4, 6, 9, 15], $this->QuickSortCrescente->sort([4, 15, 6, 2, 9]));
    }

    public function testExercicio2()
    {
        $this->assertEquals([10, 8, 7, 3, 2, 1, 0], $this->QuickSortDecrescente->sort([8, 3, 1, 7, 0, 10, 2]));
        $this->assertEquals([15, 9, 6, 4, 2], $this->QuickSortDecrescente->sort([4, 15, 6, 2, 9]));
    }

    public function testExercicio3()
    {
        $this->assertEquals(["apple", "banana", "cherry", "date"], $this->QuickSortStrings->sort(["banana", "apple", "cherry", "date"]));
        $this->assertEquals(["antelope", "elephant", "lion", "zebra"], $this->QuickSortStrings->sort(["zebra", "elephant", "lion", "antelope"]));
    }

    public function testExercicio4()
    {
        $this->assertEquals(
            [
                ["nome" => "Pedro", "idade" => 20],
                ["nome" => "João", "idade" => 25],
                ["nome" => "Maria", "idade" => 30]
            ],
            $this->QuickSortObjetos->sort(
                [
                    ["nome" => "João", "idade" => 25],
                    ["nome" => "Maria", "idade" => 30],
                    ["nome" => "Pedro", "idade" => 20]
                ],
                "idade"
            )
        );

        $this->assertEquals(
            [
                ["produto" => "Sofá", "preco" => 1500],
                ["produto" => "Geladeira", "preco" => 2000],
                ["produto" => "TV", "preco" => 3000]
            ],
            $this->QuickSortObjetos->sort(
                [
                    ["produto" => "TV", "preco" => 3000],
                    ["produto" => "Sofá", "preco" => 1500],
                    ["produto" => "Geladeira", "preco" => 2000]
                ],
                "preco"
            )
        );
    }

    public function testExercicio5()
    {
        $this->assertEquals([0, 1, 2, 3, 7, 8, 10], $this->QuickSortPivotPersonalizado->sort([8, 3, 1, 7, 0, 10, 2]));
        $this->assertEquals([2, 4, 6, 9, 15], $this->QuickSortPivotPersonalizado->sort([4, 15, 6, 2, 9]));
    }

    public function testExercicio6()
    {
        $this->assertEquals(
            [
                "array" => [0, 1, 2, 3, 7, 8, 10],
                "comparacoes" => 12
            ],
            $this->QuickSortContarComparacoes->sort([8, 3, 1, 7, 0, 10, 2])
        );

        $this->assertEquals(
            [
                "array" => [2, 4, 6, 9, 15],
                "comparacoes" => 7
            ],
            $this->QuickSortContarComparacoes->sort([4, 15, 6, 2, 9])
        );
    }

    public function testExercicio7()
    {
        $this->assertEquals([[1, 1, 1], [3, 2, 1], [4, 4, 4]], $this->QuickSortOrdenarMatrizPelaSoma->sort([[3, 2, 1], [1, 1, 1], [4, 4, 4]]));
        $this->assertEquals([[2, 3], [7, 1], [5, 5]], $this->QuickSortOrdenarMatrizPelaSoma->sort([[5, 5], [2, 3], [7, 1]]));
    }

    public function testExercicio8()
    {
        $this->assertEquals([10, 5, 1, 2, 4, 7, 8, 3, 9], $this->QuickSortOrdenarSubparteDoArray->sort([10, 5, 2, 8, 1, 4, 7, 3, 9], 2, 6));
        $this->assertEquals([20, 10, 15, 25, 30, 5], $this->QuickSortOrdenarSubparteDoArray->sort([20, 15, 10, 25, 30, 5], 1, 4));
    }


}
