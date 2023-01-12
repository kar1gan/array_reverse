<?php

declare(strict_types=1);

class TestArrayReverse extends \PHPUnit\Framework\TestCase
{

    public function dataProvider(): \Generator
    {
        yield [
            [0, 1, 2, 3, 4, 5, 6],
            [6 => 6, 5 => 5, 4 => 4, 3 => 3, 2 => 2, 1 => 1, 0 => 0]
        ];
        yield [
            ["a" => "a", "b" => "b", "c" => "c"],
            ["c" => "c", "b" => "b", "a" => "a"]
        ];
        yield [
            ["first" => "test", "second" => "array", "third" => "reverse"],
            ["third" => "reverse", "second" => "array", "first" => "test"]
        ];
        yield [
            ["f" => ['a', 'b'], 's' => ['c', 'd', 'e']],
            ['s' => ['c', 'd', 'e'], "f" => ['a', 'b']]
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testArrayReverseFunc(array $array, array $expected): void
    {
        static::assertEquals($expected, (new \App\ArrayReverse())->process($array));
    }
 }