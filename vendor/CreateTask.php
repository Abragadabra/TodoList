<?php
    $header = $_POST['header-task'];
    $task = $_POST['task'];

    // проверяем на пустоту поля
    if ($header == '' && $task == '') {
        echo 'Вы не ввели текст!';
        exit();
    }

    require 'db.php';

    // создаю SQL запрос на добавление данных в столбцы таблицы
    $sql = 'INSERT INTO tasks(header, body) VALUES(:header, :task)';

    //"подготавливаю" sql запрос
    $query = $pdo->prepare($sql);

    // вместо :header и :task записываю переменные
    $query->execute([
        'header' => $header,
        'task' => $task
    ]);

    header('Location: /');
?>
