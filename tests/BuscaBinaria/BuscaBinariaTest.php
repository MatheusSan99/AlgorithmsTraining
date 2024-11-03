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
use TrainingAlgorithms\BuscaBinaria\BuscaBinariaSimples;

class BuscaBinariaTest extends TestCase
{
    private BuscaBinariaSimples $buscaBinariaSimples;
    private BuscaBinariaComValoresDuplicados $buscaBinariaComValoresDuplicados;
    protected function setUp(): void 
    {
        $this->buscaBinariaSimples = new BuscaBinariaSimples();
        $this->buscaBinariaComValoresDuplicados = new BuscaBinariaComValoresDuplicados();
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
        $listaComValoresDuplicados1 = [1, 3, 5, 5, 5, 7, 9];
        $listaComValoresDuplicados2 = [2, 4, 4, 4, 8, 10, 12];
        $alvoLista1 = 5;
        $alvoLista2 = 4;

        $buscaComValoresDuplicadosLista1 = $this->buscaBinariaComValoresDuplicados::execute($listaComValoresDuplicados1, $alvoLista1);
        $buscaComValoresDuplicadosLista2 = $this->buscaBinariaComValoresDuplicados::execute($listaComValoresDuplicados2, $alvoLista2);

        $this->assertContains(2, $buscaComValoresDuplicadosLista1);
        $this->assertContains(3, $buscaComValoresDuplicadosLista1);
        $this->assertContains(4, $buscaComValoresDuplicadosLista1);

        $this->assertContains(1, $buscaComValoresDuplicadosLista2);
        $this->assertContains(2, $buscaComValoresDuplicadosLista2);
        $this->assertContains(3, $buscaComValoresDuplicadosLista2);
    }
}


