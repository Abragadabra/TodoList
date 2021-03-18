<?php
    $header = $_POST['header-task'];
    $task = $_POST['task'];

    // проверяем на пустоту поля
    if ($header == '' && $task == '') {
        echo 'Вы не ввели текст!';
        exit();
    }

    // подключаюсь к базе через класс PDO
    $connect = 'mysql:host=localhost;dbname=task';
    $pdo = new PDO($connect, 'root', 'root');
?>
