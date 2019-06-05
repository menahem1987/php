<?php
    /*$reg='/a \dM/';
    $str='a 8M';
    echo preg_match($reg, $str, $matches);//returne true false
    print_r($matches);

    $reg='#a \d b#';
    $str='afdg 8 bgfdg';
    echo preg_match($reg, $str);

$reg='#a \D b#';
$str='afdg 8 bgfdg';
echo preg_match($reg, $str);*/
    $rec1='/A889c/';
    $rec2='/57abc/';
    $rec3='/a7cdc/';
    $a='57abc';
    if (preg_match($rec1, $a)==true){
    echo 'rec1='.preg_match($rec1, $a).'<br>';}
    if (preg_match($rec2, $a)==true)echo 'rec2='.preg_match('/57abc/', $a).'<br>';
    if (preg_match($rec3, $a)==true)echo 'rec3='.preg_match('/a7cdc/', $a).'<br>';
    
?>
