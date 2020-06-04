<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Ремонт генераторов, стартеров и шиномонтаж в Жуковском. Новые и востановленные агрегаты, стартеры,
    генераторы. Ремонт стартера, стартеров, генератора, генераторов, в Жуковском, Раменском районе, Московская область,
    продажа востановленных агрегатов, ремонт в тот же день, день в день, качество, гарантия, низкая стоимость,
    шиномонтаж, балансировка, ремонт порезов проколов, стартеры и генераторы, для иномарок, Жуковский Раменское
    Кратово, Люберцы, Малаховка, Томилино, Дзержинский, Красково, Лыткарино, Котельники, автомобильный, автомобильные">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Генераторы и стартеры. Ремонт стартеров и генераторов в Жуковском. Ремонт генераторов, стартеров и шиномонтаж в Жуковском. Новые и востановленные агрегаты, стартеры,
        генераторы. Ремонт стартера, стартеров, генератора, генераторов, в Жуковском, Раменском районе, Московская область,
        продажа востановленных агрегатов, ремонт в тот же день, день в день, качество, гарантия, низкая стоимость,
        шиномонтаж, балансировка, ремонт порезов проколов, стартеры и генераторы, для иномарок, Жуковский Раменское
        Кратово, Люберцы, Малаховка, Томилино, Дзержинский, Красково, Лыткарино, Котельники, автомобильный, автомобильные</title>
    <meta name="description" content="Продажа, ремонт и техническое обслуживание стартеров и генераторов для любого вида техники.
Мы знаем о стартерах и генераторах всё. Восстановим работоспособность и расскажем, как избежать неполадок в будущем!">

</head>
<body background="img/bg.jpg" class="bg">
<?php require "blocks/header.php" ?>
<body>
<div class="container mt-5">
    <div class="d-flex flex-wrap">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal"> Новые и восстановленные генераторы и стартеры</h4>
        </div>
        </div>
        <div class="card mb-4 shadow-sm">

            <div class="card-header"> <h3>Генераторы</h3></div>
            <div class="dist row" style="margin:2rem 2rem 2rem 2rem">
                <?php
                $path = 'img_gen'; // название папки в той же директории, что и файл
                $dir = opendir ("$path"); // открываем директорию
                $f = 0; // создаём переменную для цикла
                while (false !== ($file = readdir($dir))) {

// ниже указываем расширение файла. Вместо jpg выбираете нужный
                    if (strpos($file, '.jpg',1) ) {
                        $f++;
                    }
                }
                $f=$f+1;
                for ($i=1;$i<$f;$i++):
                ?>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="col">
                    <img class="img" src="img_gen/gen<?php echo $i?>.jpg"
                         alt="" class="img-thumbnail">

                    <?php if ($i==1): ?>
                        <div >
                            <div >
                                <p > <a style="font-size: 25px">Opel:</a>  Astra H, Vectra C, Zafira B, Meriva B</p >
                            </div >
                        </div >
                    <? endif; ?>
                        <?php if ($i==2): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Range Rover, Land Rover</a></p >
                                </div >
                            </div >
                        <? endif; ?>
                        <?php if ($i==3): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Audi A6</a></p >
                                </div >
                            </div >
                        <? endif; ?>
                        <?php if ($i==4): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Hyundai, Kia:</a>  Solaris, Rio</p >
                                </div >
                            </div >
                        <? endif; ?>
                        <?php if ($i==5): ?>
                        <div >
                            <div >
                                <p > <a style="font-size: 25px">Ford:</a>  Focus 2, 1.8, 2.0</p >
                            </div >
                        </div >
                    <? endif; ?>
                        <?php if ($i==6): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Mazda3</a></p >
                                </div >
                            </div >
                        <? endif; ?>
                        <?php if ($i==7): ?>
                        <div >
                            <div >
                                <p > <a style="font-size: 25px">Hyundai:</a>  Santa Fe, <b>Kia</b> SportAge</p >
                            </div >
                        </div >
                    <? endif; ?>
                        <?php if ($i==8): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Dewoo:</a>  Nexia</p >
                                </div >
                            </div >
                        <? endif; ?>
                    <?php if ($i==9): ?>
                        <div >
                            <div >
                                <p > <a style="font-size: 25px">Ford:</a>  Focus 2, 1.6, 1.4</p >
                            </div >
                        </div >
                    <? endif; ?>
                        <?php if ($i==10): ?>
                            <div >
                                <div >
                                    <p > <a style="font-size: 25px">Ssang Yong:</a>  Rexton, Action, Cairon</p >
                                </div >
                            </div >
                        <? endif; ?>
                    </div>
                </div >


                <?php endfor;?>
            </div>
            <div class="dist card-body">
            </div>
        </div>
        <div class="card mb-4 shadow-sm">

            <div class="card-header"> <h3>Стартеры</h3></div>
            <div class="dist row" style="margin:2rem 2rem 2rem 2rem">
                <?php
                $path = 'img_start'; // название папки в той же директории, что и файл
                $dir = opendir ("$path"); // открываем директорию
                $f = 0; // создаём переменную для цикла
                while (false !== ($file = readdir($dir))) {

// ниже указываем расширение файла. Вместо jpg выбираете нужный
                    if (strpos($file, '.jpg',1) ) {
                        $f++;
                    }
                }
                $f=$f+1;
                for ($i=1;$i<11;$i++):
                    ?>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="col">
                            <img class="img" src="img_start/start<?php echo $i?>.jpg"
                                 alt="" class="img-thumbnail">

                            <?php if ($i==1): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Ford:</a>  Focus 2, S-Max, C-Max</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==10): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Range Rover, Land Rover</a></p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==9): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Land Cruiser:</a>  200</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==8): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Hyundai:</a>  Porter</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==7): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Nissan</a> X-Trail, Teana, Note</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==2): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Toyota</a></p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==6): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Reno:</a> Megan, Lada Largus, Logon</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==5): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Fiat:</a> Ducato</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==3): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Mitsubishi:</a>  Lanser 10, Outlander, Jeep Compas</p >
                                    </div >
                                </div >
                            <? endif; ?>
                            <?php if ($i==4): ?>
                                <div >
                                    <div >
                                        <p > <a style="font-size: 25px">Honda:</a>  Civic</p >
                                    </div >
                                </div >
                            <? endif; ?>
                        </div>
                    </div >


                <?php endfor;?>
            </div>

            <div class="dist card-body">

            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="dist" style="text-align: center">
                <h3>Звоните!</h3>
                <p>Проконсультируем о наличии агрегатов для вашего авто.</p>
                <a class="btn btn-outline-primary" href="tel:79261514577"><big>8(926)151-45-77</big></a>
            </div>
        </div>

    </div>
</div>

<?php require "blocks/footer.php" ?>
</body>
</html>
