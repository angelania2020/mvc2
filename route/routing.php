<?php
// Разбивка URI, который был предоставлен для доступа к этой странице, с помощью разделителя '?'
// Получение первого элемента (хоста)
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
// Возврат числа вхождений подстроки '/'
$num = substr_count($host, '/');
// Разбивка хоста с помощью разделителя / и возврат пути
$way = explode('/', $host)[$num];

if ($way == '' || $way == 'index.php') {
    $response = Controller::StartSite();
} elseif ($way == 'books') {
    $response = Controller::BookList();
} elseif ($way = 'book') {
    if (isset($_GET['title'])) {
        $title = $_GET['title'];
        $response = Controller::BookOne($title);
    }
    $response = Controller::error404();
} else {
    $response = Controller::error404();
}
