<?php

// Модуль Объекты данных PHP (PDO)
try {
    // Переменные для подключения к базе данных
    $host = '127.0.0.1';
    $db = 'book_shop';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";  // Передача переменных для подключения к БД
    $opt = [  // Массив параметров драйвера
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Определение параметров обработки ошибок
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Определение варианта выгрузки данных в массив
        PDO::ATTR_EMULATE_PREPARES => false,  // Без подготовленных запросов 
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);  // Передача подключения, пользователя, пароля и опций

    $result = $pdo->query('SELECT * FROM books');  // Выполнение запроса
    $books = $result->fetchAll();  // Возвращение массива, содержащего все строки результирующего набора
} catch (PDOException $e) {  // Обработка ошибок подключения
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

// $books = array(
//     array(
//         "bookname" => "HTML and CSS",
//         "author" => "Jon Duckett",
//         "price" => "17.19$",
//         "description" => "Every day, more and more people want to learn some HTML and CSS.",
//         "image" => "HTMLandCSS_Duckett.jpg"
//     ),
//     array(
//         "bookname" => "HTML5",
//         "author" => "Matthew MacDonald",
//         "price" => "27.65$",
//         "description" => "HTML5 is more than a markup language - it's a collection of several independent web standards.",
//         "image" => "HTML5TheMissing_MacDonald.jpg"
//     ),
//     array(
//         "bookname" => "Head First HTML5 Programming",
//         "author" => "Eric Freeman, Elisabeth Robson",
//         "price" => "35.35$",
//         "description" => "HTML has been on a wild ride. Sure, HTML started as a mere markup language, but more recently HTML's put on some major muscle.",
//         "image" => "HeadFirstHTML5.jpg"
//     ),
//     array(
//         "bookname" => "Head First JavaScript Programming",
//         "author" => "Eric Freeman, Elisabeth Robson",
//         "price" => "37.60$",
//         "description" => "This brain-friendly quide teaches you everything from JavaScript language fundamentals to advanced topics, including objects, functions, and the browser's document object model.",
//         "image" => "HeadFirstJavaScript.jpg"
//     ),
//     array(
//         "bookname" => "jQuery in Action",
//         "author" => "Bear Bibeault, Yehuda Katz",
//         "price" => "32.12$",
//         "description" => "A really good web development framework anticipates your needs. jQuery does more - it practically reads your mind.",
//         "image" => "JQueryInAction.jpg"
//     )
// );
