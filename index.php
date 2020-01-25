<?php

$menu=array( 'Home'=>'home.php',
    'About'=>'about.php',
    'Contacts'=>'contacts.php');


?>

<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
</head>

<body>
<?php

foreach ($menu as $key=>$value){
    echo "<a href='$value'>$key</a><br>";
}

?>
</body>

</html>
