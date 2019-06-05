<?php
    /*$reg='/a . b/';
    $str='a b b';
    echo preg_match($reg, $str).'<br>';//returne true false

$reg='/ab/';
$str='a b b';
echo preg_match($reg, $str).'<br>';*/

    $data=date("Y.m.d H:i:s");
    echo date("Y.m.d H:i:s").'<br>';

$chars = preg_split('/ /', $data, -1, PREG_SPLIT_OFFSET_CAPTURE);
$chars1 =preg_split('/\./', $chars[0][0], -1, PREG_SPLIT_OFFSET_CAPTURE);
$chars2 = preg_split('/:/', $chars[1][0], -1, PREG_SPLIT_OFFSET_CAPTURE);
print_r($chars); echo '<br>';
print_r($chars1);echo '<br>';
print_r($chars2);echo '<br>';
echo '<br>';echo '<br>';
$d=array([$chars1],' ',[$chars2]);
print_r($d);echo '<br>';echo '<br>';
echo $d[0][0][0][0],' ',$d[0][0][1][0];
?>
