<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список задач</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="libs/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="vendor/CreateTask.php" method="post">
            <h1>Список дел</h1>
            <input type="text" id="header-task" name="header-task" placeholder="Заголовок" class="form-control">
            <input type="text" id="task" name="task" placeholder="Задание" class="form-control">
            <button type="submit" name="AddTask" class="btn btn-success">Отправить</button>
        </form>

        <?php
            // подключаю базу
            require 'vendor/db.php';

            // получаю данные из таблицы
            echo '<ul>';
            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY id DESC ');

            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>'.$row->header. '<br>' .$row->body.'</b></li>';
            }
            echo '</ul>';
        ?>
    </div>
</body>
</html>