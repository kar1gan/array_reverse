<?php

declare(strict_types=1);

namespace App;

class ArrayReverse
{
    public function process(array $array): array
    {
        end($array);

        $newArray = [];
        while (count($newArray) !== count($array)) {
            $newArray[key($array)] = current($array);

            prev($array);
        }

        return $newArray;
    }
}
