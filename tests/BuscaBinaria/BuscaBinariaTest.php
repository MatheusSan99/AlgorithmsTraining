<?php

namespace Tests\BuscaBinaria;

// ### Exercício 1: Busca Binária Simples
// Escreva uma função de busca binária que retorna o índice do elemento se encontrado; caso contrário, retorna `null`.

// - **Lista**: `[1, 3, 5, 7, 9, 11, 13]`
//   - **Alvo**: `7`
//   - **Resultado Esperado**: `3`

// - **Lista**: `[2, 4, 6, 8, 10, 12, 14]`
//   - **Alvo**: `5`
//   - **Resultado Esperado**: `null` (não está presente)

// ---

// ### Exercício 2: Busca Binária com Valores Duplicados
// Modifique a função para retornar todos os índices onde o valor aparece, caso esteja presente múltiplas vezes.

// - **Lista**: `[1, 3, 5, 5, 5, 7, 9]`
//   - **Alvo**: `5`
//   - **Resultado Esperado**: `[2, 3, 4]`

// - **Lista**: `[2, 4, 4, 4, 8, 10, 12]`
//   - **Alvo**: `4`
//   - **Resultado Esperado**: `[1, 2, 3]`

// ---

// ### Exercício 3: Índice do Primeiro Valor Maior que o Alvo
// Implemente uma função que retorna o índice do primeiro valor maior que o alvo, caso o alvo não esteja na lista.

// - **Lista**: `[1, 3, 5, 7, 9]`
//   - **Alvo**: `4`
//   - **Resultado Esperado**: `2` (índice do `5`, que é o primeiro valor maior que `4`)

// - **Lista**: `[2, 4, 6, 8, 10]`
//   - **Alvo**: `11`
//   - **Resultado Esperado**: `null` (não há valor maior que `11`)

// ---

// ### Exercício 4: Busca Binária Recursiva
// Implemente a versão recursiva do algoritmo para encontrar o índice de um valor.

// - **Lista**: `[1, 2, 4, 6, 8, 10]`
//   - **Alvo**: `6`
//   - **Resultado Esperado**: `3`

// - **Lista**: `[0, 2, 4, 6, 8]`
//   - **Alvo**: `5`
//   - **Resultado Esperado**: `null` (não está presente)

// ---

// ### Exercício 5: Busca Binária em Lista de Palavras
// Implemente a busca binária para listas de strings ordenadas alfabeticamente.

// - **Lista**: `["apple", "banana", "cherry", "date", "fig", "grape", "kiwi"]`
//   - **Alvo**: `"date"`
//   - **Resultado Esperado**: `3`

// - **Lista**: `["ant", "bat", "cat", "dog", "eel"]`
//   - **Alvo**: `"fox"`
//   - **Resultado Esperado**: `null` (não está presente)
// ---

use PHPUnit\Framework\TestCase;
use TrainingAlgorithms\BuscaBinaria\BuscaBinariaComValoresDuplicados;
use TrainingAlgorithms\BuscaBinaria\BuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo;
use TrainingAlgorithms\BuscaBinaria\BuscaBinariaSimples;
use TrainingAlgorithms\BuscaBinaria\BuscaBinariaSimplesRecursiva;


class BuscaBinariaTest extends TestCase
{
    private BuscaBinariaSimples $buscaBinariaSimples;
    private BuscaBinariaComValoresDuplicados $buscaBinariaComValoresDuplicados;
    private BuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo $buscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo;
    private BuscaBinariaSimplesRecursiva $buscaBinariaSimplesRecursiva;
    protected function setUp(): void 
    {
        $this->buscaBinariaSimples = new BuscaBinariaSimples();
        $this->buscaBinariaComValoresDuplicados = new BuscaBinariaComValoresDuplicados();
        $this->buscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo = new BuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo();
        $this->buscaBinariaSimplesRecursiva = new BuscaBinariaSimplesRecursiva();
    }

    /**
     * @covers \TrainingAlgorithms\BuscaBinaria\BuscaBinariaSimples::execute
     * @return void
     */
    public function testBuscaBinariaSimples() 
    {
        $listaNumeros = [1, 3, 5, 7, 9, 11, 13];
        $listaInvalida = [2, 4, 6, 8, 10, 12, 14];
        $alvoListaNumeros = 7;
        $alvoListaInvalida = 5;

        $this->assertEquals(3, $this->buscaBinariaSimples::execute($listaNumeros, $alvoListaNumeros));
        $this->assertEquals(null, $this->buscaBinariaSimples::execute($listaInvalida, $alvoListaInvalida));
    }

    /**
     * @covers \TrainingAlgorithms\BuscaBinaria\BuscaBinariaComValoresDuplicados::execute
     * @return void
     */

    public function testBuscaBinariaComValoresDuplicados() 
    {
        $listaComValoresDuplicadosNoComeco = [1, 1, 1, 3, 5, 7, 9];
        $listaComValoresDuplicadosNoMeio = [2, 4, 6, 6, 6, 8, 10];
        $listaComValoresDuplicadosNoFim = [2, 4, 6, 8, 10, 12, 12];

        $alvoListaComValoresDuplicadosNoComeco = 1;
        $alvoListaComValoresDuplicadosNoMeio = 6;
        $alvoListaComValoresDuplicadosNoFim = 12;

        $this->assertEquals([0, 1, 2], $this->buscaBinariaComValoresDuplicados::execute($listaComValoresDuplicadosNoComeco, $alvoListaComValoresDuplicadosNoComeco));
        $this->assertEquals([2, 3, 4], $this->buscaBinariaComValoresDuplicados::execute($listaComValoresDuplicadosNoMeio, $alvoListaComValoresDuplicadosNoMeio));
        $this->assertEquals([5, 6], $this->buscaBinariaComValoresDuplicados::execute($listaComValoresDuplicadosNoFim, $alvoListaComValoresDuplicadosNoFim));
        
    }

    /**
     * @covers \TrainingAlgorithms\BuscaBinaria\BuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo::execute
     * @return void
     */

    public function testBuscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo() 
    {
        $listaNumeros = [1, 3, 5, 7, 9];
        $listaInvalida = [2, 4, 6, 8, 10];
        $alvoListaNumeros = 4;
        $alvoListaInvalida = 11;

        $this->assertEquals(2, $this->buscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo::execute($listaNumeros, $alvoListaNumeros));
        $this->assertEquals(null, $this->buscaBinariaIndiceDoPrimeiroValorMaiorQueOAlvo::execute($listaInvalida, $alvoListaInvalida));
    }

    /**
     * @covers \TrainingAlgorithms\BuscaBinaria\BuscaBinariaSimplesRecursiva::execute
     * @return void
     */

    public function testBuscaBinariaSimplesRecursiva() 
    {
        $listaNumeros = [1, 2, 4, 6, 8, 10];
        $listaInvalida = [0, 2, 4, 6, 8];
        $alvoListaNumeros = 6;
        $alvoListaInvalida = 5;

        $this->assertEquals(3, $this->buscaBinariaSimplesRecursiva::execute($listaNumeros, $alvoListaNumeros));
        $this->assertEquals(null, $this->buscaBinariaSimplesRecursiva::execute($listaInvalida, $alvoListaInvalida));
    }


}


