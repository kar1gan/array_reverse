<?php

declare(strict_types=1);

namespace App;

class ArrayReverse
{
    public function process(array $array = [0, 1, 2, 3, 4, 5, 6]): array
    {
        $result = [];

        $lastElement = end($array);
        $result[key($array)] = $lastElement;

        while (($prev = prev($array)) !== false) {
            $result[key($array)] = $prev;
        }

        return $result;
    }
}
