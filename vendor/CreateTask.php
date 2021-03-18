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

    // создаю SQL запрос на добавление данных в столбцы таблицы
    $sql = 'INSERT INTO tasks(header, body) VALUES(:header, :task)';

    //"подготавливаю" sql запрос
    $make_request = $pdo->prepare($sql);

    // вместо :header и :task записываю переменные
    $make_request->execute([
        'header' => $header,
        'task' => $task
    ]);

    header('Location: /');
?>
