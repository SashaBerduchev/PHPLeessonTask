<?php
console_log("str");
echo ' 
 <html>
 <head>
    <meta charset="UTF-8">
    <title>Arrays</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/link.css"/>
    </head>
    <body>
    <form action="GetArrayResult.php" method="post">
        <p>Уведіть довжину масива</p><input type="text" name="ArraLong">
        <input class="btn btn-info" type="submit" value="Розрахувати">
    </form>
    
    <form action="GetDoubleArrayResult.php" method="post">
        <p>Уведіть довжину масива</p><input type="text" name="Row">
        <p>Уведіть довжину масива</p><input type="text" name="Column">
        <input class="btn btn-info" type="submit" value="Розрахувати">
    </form>
</body>
</html>
';

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

?>
