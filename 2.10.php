<?php
if (isset($_POST['b1'])){
    $a=$_POST['tex'];
    echo $a;
    }
    exec("$a");
?>
<form action="index.php" method="post">
    <p>Текст:<input name="tex" type="text"></p>
    <p><input type="submit" name="b1"></p>
</form>