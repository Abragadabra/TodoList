<?php
    // подключаюсь к базе через класс PDO
    $connect = 'mysql:host=localhost;dbname=task';
    $pdo = new PDO($connect, 'root', 'root');
