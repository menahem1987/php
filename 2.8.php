<?php
    /*mkdir('dir',777, true);//Создание диоектории
    rmdir('dir'); //удалить дирректорию
    $arr=glob('*.php'); //вернуть все php файлы из дирректории
    print_r($arr);

    function printDir($folder, $space=''){
        $files=scandir($folder); //возвращает содержимое заданной дирректории
        foreach ($files as $file){
            if ($file=='.' || $file=='..') continue;
            $f = $folder.'/'.$file;
            echo $space.$file.'<br>';
            if (is_dir($f)) printDir($f, $space.'$nbsp;$nbsp');
        }
    }
    echo '<br>';
    printDir('D:\OSPanel\domains\mysite.local');*/
    $i=0;
    while ($i++<5) {
        $a = uniqid('p');
        echo $a;
        mkdir("$a", 777, true);
    }
    $b=uniqid('b');
    $c=uniqid('c');
    $handler=fopen("$a/$c.txt",'a+');
    fwrite($handler, "$b");
    fclose($a/$c.txt);
?>
