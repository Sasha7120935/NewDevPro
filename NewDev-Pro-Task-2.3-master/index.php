<?php

$Array = ["S", 0, 1,
    [1,],
    [1, 1, ["1", "RR"]]
];
$sumValuesArray = 0;

function sumElementsArray(array $array): float
{
    $resultSum = 0;
    if (count($array) !== 0) {
        foreach ($array as $elementArray) {
            if (is_array($elementArray)) {
                $resultSum += sumElementsArray($elementArray);
            }
            if (is_numeric($elementArray)) {
                $resultSum += $elementArray;
            }
        }
    }
    return $resultSum;
}
$sumValuesArray = sumElementsArray($Array);
echo "Сумма всех елементов массива :" . $sumValuesArray;