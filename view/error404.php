<?php
// Включение буферизации вывода
ob_start();
?>

<h2>404 error</h2>
<article>
    <p>
        не найдено
    </p>
</article>

<?php
// Получение содержимого текущего буфера и его удаление
$content = ob_get_clean();
?>

<?php
include 'view/templates/layout.php';
?>