<?php

$students = [
    ["name" => "Ali", "grades" => [12, 14, 16, 18]],
    ["name" => "Sara", "grades" => [18, 20, 19, 17]],
    ["name" => "Reza", "grades" => [10, 11, 9, 8]],
    ["name" => "Neda", "grades" => [15, 17, 14, 16]]
];

// نمایش اطلاعات دانش‌آموزان
function showStd($students){
    foreach ($students as $value) {
        var_dump($value);
        echo "<br>";
    }
}

// محاسبه میانگین نمرات و ایجاد آرایه جدید
function avgStd($students){
    $newListStudent = [];
    foreach ($students as $student) {
        $sum = 0;
        $count = 0;
        foreach ($student["grades"] as $value) {
            $sum += $value;
            $count++;
        };
        $avg = $sum / $count;
        $creat = ["name" => $student["name"], "avg" => $avg];
        array_push($newListStudent, $creat);

        echo "میانگین نمرات " . $student["name"] . " : " . $avg . "<br>";
    }
    return $newListStudent;
}

// مرتب‌سازی نزولی بر اساس میانگین نمرات
function sortAvg($newListStudent){
    // استفاده از usort برای مرتب‌سازی نزولی
    usort($newListStudent, function($a, $b) {
        return $b['avg'] <=> $a['avg']; // مقایسه نزولی
    });

    // نمایش لیست مرتب‌شده
    echo "<h3>لیست مرتب‌شده دانش‌آموزان بر اساس میانگین نمرات (نزولی):</h3>";
    foreach ($newListStudent as $student) {
        echo "نام: " . $student["name"] . "، میانگین: " . $student["avg"] . "<br>";
    }
}

// اجرای توابع
showStd($students);
$newListStudent = avgStd($students);
sortAvg($newListStudent);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>