<?php

class Controller
{
    // Вывод главной страницы сайта
    public static function StartSite()
    {
        include 'view/main.php';
    }

    // Вывод страницы со списком всех книг
    public static function BookList()
    {
        $bookList = Model::getBookList();
        include 'view/bookList.php';
    }

    // Вывод страницы с информацией об одной книги по названию
    public static function bookOne($title)
    {
        $test = Model::getBook($title);
        if ($test[0] == true) {
            $book = $test[1];
            include 'view/bookOne.php';
        } else {
            include 'view/error404.php';
        }
    }
    // Вывод страницы с ошибкой
    public static function error404()
    {
        include 'view/error404.php';
    }
}
