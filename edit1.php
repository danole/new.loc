<?php

$text=$_POST['text'];
$fulltext=$_POST['fulltext'];


if (isset($fulltext)) {
    file_put_contents("files/" . $text,$fulltext);
    echo "Файл успешно изменен<br><a href='index.php'>На главную</a>";
}
else{
    echo "Ошибка";
}