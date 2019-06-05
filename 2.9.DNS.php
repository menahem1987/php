<?php
    $ip_adress=gethostbyname('gotika2.ru');
    echo $ip_adress.'<br>';

    $hostname=gethostbyaddr($ip_adress);
    echo $hostname;
?>
