<!-- Bài 1 -->
<?php
$arr1 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr1[] = intval(readline());
}
echo "Các phần tử trong mảng: " . implode(", ", $arr1) . PHP_EOL;
?>

<!-- Bài 2 -->
<?php
$arr2 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr2[] = intval(readline());
}
echo "Tổng các phần tử trong mảng: " . array_sum($arr2) . PHP_EOL;
?>

<!-- Bài 3 -->
<?php
$arr3 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr3[] = intval(readline());
}
echo "Các phần tử là số chẵn: " . implode(", ", array_filter($arr3, function ($value) {
        return $value % 2 == 0;
    })) . PHP_EOL;
?>

<!-- Bài 4 -->
<?php
$arr4 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr4[] = intval(readline());
}
echo "Các phần tử là số lẻ: " . implode(", ", array_filter($arr4, function ($value) {
        return $value % 2 != 0;
    })) . PHP_EOL;
?>

<!-- Bài 5 -->
<?php
$arr5 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr5[] = intval(readline());
}
echo "Các phần tử chia hết cho 3 và 5: " . implode(", ", array_filter($arr5, function ($value) {
        return $value % 3 == 0 && $value % 5 == 0;
    })) . PHP_EOL;
?>

<!-- Bài 6 -->
<?php
$arr6 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr6[] = intval(readline());
}
echo "Tổng các phần tử trong mảng: " . array_sum($arr6) . PHP_EOL;
?>

<!-- Bài 7 -->
<?php
$arr7 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr7[] = intval(readline());
}
echo "Tổng các phần tử trong mảng: " . array_sum($arr7) . PHP_EOL;
?>

<!-- Bài 8 -->
<?php
$arr8 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr8[] = intval(readline());
}
echo "Tích các phần tử trong mảng: " . array_product($arr8) . PHP_EOL;
?>

<!-- Bài 9 -->
<?php
$arr9 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr9[] = intval(readline());
}
echo "Trung bình cộng các phần tử trong mảng: " . array_sum($arr9) / count($arr9) . PHP_EOL;
?>

<!-- Bài 10 -->
<?php
$arr10 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr10[] = intval(readline());
}
echo "Phần tử lớn nhất trong mảng: " . max($arr10) . PHP_EOL;
?>

<!-- Bài 11 -->
<?php
$arr11 = array();
for ($i = 0; $i < 10; $i++) {
    echo "Nhập phần tử thứ " . ($i + 1) . ": ";
    $arr11[] = intval(readline());
}
echo "Phần tử nhỏ nhất trong mảng: " . min($arr11) . PHP_EOL;
?>

<?php

// Bài 12
function bai12_advanced() {
    echo "Nhập số phần tử của mảng: ";
    $n = intval(fgets(STDIN));

    $arr12 = array();
    for ($i = 0; $i < $n; $i++) {
        echo "Nhập phần tử thứ " . ($i + 1) . ": ";
        $arr12[] = intval(fgets(STDIN));
    }

    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr12);

    echo "Mảng sau khi sắp xếp giảm dần: " . implode(", ", $arr12) . PHP_EOL;
}

// Bài 13
function bai13_advanced() {
    echo "Nhập số phần tử của mảng: ";
    $n = intval(fgets(STDIN));

    $arr13 = array();
    for ($i = 0; $i < $n; $i++) {
        echo "Nhập phần tử thứ " . ($i + 1) . ": ";
        $arr13[] = intval(fgets(STDIN));
    }

    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($arr13);

    echo "Mảng sau khi sắp xếp giảm dần: " . implode(", ", $arr13) . PHP_EOL;
}

// Bài 14
function bai14_advanced() {
    echo "Nhập số phần tử của mảng: ";
    $n = intval(fgets(STDIN));

    $arr14 = array();
    for ($i = 0; $i < $n; $i++) {
        echo "Nhập phần tử thứ " . ($i + 1) . ": ";
        $arr14[] = intval(fgets(STDIN));
    }

    echo "Nhập vào phần tử cần tìm: ";
    $searchValue = intval(fgets(STDIN));

    // Tìm vị trí của phần tử trong mảng
    $position = array_search($searchValue, $arr14);
    if ($position !== false) {
        echo "Vị trí của phần tử $searchValue trong mảng: $position" . PHP_EOL;
    } else {
        echo "Không tìm thấy phần tử $searchValue trong mảng." . PHP_EOL;
    }
}

// Bài 15
function bai15_advanced() {
    echo "Nhập số phần tử của mảng: ";
    $n = intval(fgets(STDIN));

    $arr15 = array();
    for ($i = 0; $i < $n; $i++) {
        echo "Nhập phần tử thứ " . ($i + 1) . ": ";
        $arr15[] = intval(fgets(STDIN));
    }

    echo "Nhập vào phần tử cần xóa: ";
    $deleteValue = intval(fgets(STDIN));

    // Xóa phần tử khỏi mảng
    $index = array_search($deleteValue, $arr15);
    if ($index !== false) {
        array_splice($arr15, $index, 1);
        echo "Phần tử $deleteValue đã được xóa khỏi mảng." . PHP_EOL;
    } else {
        echo "Không tìm thấy phần tử $deleteValue trong mảng." . PHP_EOL;
    }

    echo "Mảng sau khi xóa: " . implode(", ", $arr15) . PHP_EOL;
}


?>
