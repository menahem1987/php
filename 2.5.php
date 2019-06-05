<?php
    /*$handler=fopen("a.txt",'a+');
    $count=1;
    $atr='';
    while (!feof($handler)){
        $atr .=fread($handler, $count);
    }
    echo $atr, '<br>';
    fseek($handler, 0);
    echo fread($handler, filesize('a.txt')),'<br>';
    fseek($handler, 0);
    echo fread($handler,5);
    fwrite($handler, "\n new string");

    fclose($handler);
    echo '<br>';
    $atr = file_get_contents('a.txt');
    echo $atr.'<br>';
    file_put_contents('a.txt',"Привет");
    copy('a.txt', 'b.txt');
    unlink('b.txt');*/
if( isset( $_POST['b1'] ) )
{
    $name = $_POST['name'];
    echo 'Сохранение прошло успешно'."<br />";
    $handler=fopen("a.txt",'a+');
    fwrite($handler, "$name");
    copy('a.txt', 'b.txt');
    unlink('b.txt');
    fclose($handler);
}
if( isset( $_POST['b2'] ) )
{   $handler=fopen("a.txt",'a+');
    $count=1;
    $atr='';
    while (!feof($handler)){
        $atr .=fread($handler, $count);
    }
    $_POST['name']=$atr;
    echo $atr, '<br>';
}
if( isset( $_POST['b3'] ) ){
    unlink('a.txt');
    echo 'Удаление прошло успешно'."<br />";
}
?>

<form action="2.5.php" method="post">
    <p>Текст:<input name="name" type="text"></p>
    <p><input type='submit' name="b1" value='Сохранить'></p>
    <p><input type='submit' name="b2" value='Загрузить'></p>
    <p><input type='submit' name="b3" value='Удалить'></p>

</form>