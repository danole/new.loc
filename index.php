<?php
$dir="files";
$files = scandir($dir);
array_shift($files);
array_shift($files);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

foreach ($files as $key => $value) {
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/files/'.$value.'">'.$value.'</a>
    <form action="edit.php" method="post">
        <input type="hidden" name="text" value="'.$value.'">
        <input type="submit" value="Редактировать">
    </form>
    <form action="save.php" method="post">
        <input type="hidden" name="text" value="'.$value.'">
        <input type="submit" value="Скачать">
    </form>
    <br/>';
}

?>
</body>

</html>
