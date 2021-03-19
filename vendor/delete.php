<?php

//подключаю базу
    require 'db.php';

    // получаю из ссылки id
    $id = $_GET['id'];

    // пишу sql запрос
    $sql_delete = 'DELETE FROM `tasks` WHERE id = ?';

    // подготавливаю запрос
    $query = $pdo->prepare($sql_delete);

    // выполняю sql запрос
    $query->execute([$id]);

    // возвращаем пользователя на главную страницу
    header('Location: /');
