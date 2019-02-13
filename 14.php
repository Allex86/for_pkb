
<?php
/*
14. Необходимо написать функцию hasCollision() на php, которая проверяет, пересекается ли заданный круг хотя бы с одним кругом из списка. Круг - это индексный массив, содержащий три элемента типа int [ x, y, radius ], где x и y - координаты центра круга.
 */

// частный случай для окрудностей с центрами в положительной части оси координат
function hasCollision(array $circle, array $circlesLists): bool
{
    define("CENTER_CIRCLE_X", $circle[0]);
    define("CENTER_CIRCLE_Y", $circle[1]);
    define("CENTER_CIRCLE_R", $circle[2]);

    foreach ($circlesLists as $circleList) {
        // приравниваем тестируемую окружность к началу координат
        $x = $circleList[0] - CENTER_CIRCLE_X;
        $y = $circleList[1] - CENTER_CIRCLE_Y;
        $r = $circleList[2];
        // получаем прямоугольный треугольник с катетами $x и $y
        // вычисляем расстояние между центрами окружностей, равное гипотенузе
        $dr = sqrt(pow($x, 2) + pow($y, 2));
        // если сумма радиусов больше расстояния между центрами - окрудности пересекаются
        if ((CENTER_CIRCLE_R + $r) >= $dr) {
            echo "Пересечение окружностей найдено!";
        }
    }
}
