<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Exemplo\Exemplo;

final class ExemploTest extends TestCase
{
    public function testExemplo(): void
    {
        $exemplo = new Exemplo();
        $valor = $exemplo->teste("email");

        $this->assertSame($valor, "10");
    }
    public function testFatorial(): void
    {
        $exemplo = new Exemplo();
        $valor = $exemplo->fatorial(5);
        $valor2 = $exemplo->fatorial(4);

        $this->assertSame($valor, 120);
        $this->assertSame($valor2, 24);
    }
    public function testFibonacci(): void
    {
        $exemplo = new Exemplo();
        $valor = $exemplo->fibonacci(7);

        $this->assertSame($valor, 13);
    }
}
