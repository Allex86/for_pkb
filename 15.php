
<?php
/*
15. Необходимо написать функцию sortMat(array $mat): array, которая наиболее компактным кодом выполняет сортировку произвольной матрицы NxM: бОльшие по значению элементы должны располагаться ниже, слева направо.
Пример исходной матрицы:

$mat = [
    [6, 5, 13],
    [1, 4, 2],
    [3, 9, 8],
    [5, 10, 7],
];
результат выполнения функции sortMat для исходной матрицы $mat будет иметь вид:

$result = [
    [3, 2, 1],
    [5, 5, 4],
    [8, 7, 6],
    [13, 10, 9],
];
 */

function sortMat(array $mat): array
{
        $result = [];
    foreach ($mat as $m) {
        $result = array_merge($result, $m);
    }
        arsort($result);
        $result = array_chunk($result, 3);
        sort($result);
        return $result;
}
