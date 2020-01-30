<!DOCTYPE html>
    <html>
    <head>
        <title>Title of the document</title>
    </head>

    <body>


<?php

$text=$_POST['text'];

$handle=fopen("files/".$text,'r');

$stroka=fgets($handle);

fclose($handle);

?>
    <form action="edit1.php" method="post">
        <textarea name="fulltext" id="fulltext" cols="30" rows="10"><?php echo $stroka ?></textarea><br>
        <input type="hidden" name="text" value="<?php echo $text ?>">
        <input type="submit" value="Сохранить">
    </form>



    </body>

</html>