<?php
    /*$reg = '/[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
    $email1='fadfa@mail.ru';
    $email2='abc@mail.ru';
    echo preg_match($reg,$email1).'<br>';
    echo preg_match($reg,$email2).'<br>';

    $text = "Пишите мне на e-mail abc@abc.abc.ru Буду рад всех слышать. Так же мой запасной e-mail mail@mail.ru";
    //$text = preg_replace($reg, 'СТОП e-mail', $text);
    $text=preg_replace($reg,'Стоп email', $text);
    echo $text.'<br>';

    echo $date="12.07.2017".'<br>';
    $reg1='/(\d{2})\.(\d{2})\.(\d{4})/';
    echo preg_replace($reg1, '$2.$1.$3', $date)*/
echo $text="Текст <a href='page1.html'>ссылка</a> и снова <a hREF \n =\"page2.html\" title=''>ссылка</a> конец".'<br>';
$reg="/<[Aa][\s]{1}[^>]*[Hh][Rr][Ee][Ff][^=]*=[ '\"\s]*([^ \"'>\s#]+)[^>]*>/"; //'<[Aa] [Hh][Rr][Ee][Ff]=.[a-z0-9].>';
$text=preg_replace($reg,'',$text);
echo $text;
?>
