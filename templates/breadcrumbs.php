<div class="breadcrumbs">
    <div class="container">

        <?php if ($_SERVER['REQUEST_URI'] === $_PARENT_URL . '/catalogtech.php') { ?>
            <a href="./">Главная</a> » Каталог техники
        <?php } ?>

        <?php if ($_SERVER['REQUEST_URI'] === $_PARENT_URL . '/catalogtech2.php') { ?>
            <a href="./">Главная</a> » Каталог техники 2
        <?php } ?>

        <?php if ($_SERVER['REQUEST_URI'] === $_PARENT_URL . '/autocrane.php') { ?>
            <a href="./">Главная</a> » <a href="./catalogtech.php">Каталог техники</a> » Аренда автокран Ивановец 14 тонн 14 метров
        <?php } ?>

        <?php if ($_SERVER['REQUEST_URI'] === $_PARENT_URL . '/uslugi.php') { ?>
            <a href="./">Главная</a> » Услуги
        <?php } ?>

        <?php if ($_SERVER['REQUEST_URI'] === $_PARENT_URL . '/usluga.php') { ?>
            <a href="./">Главная</a> » <a href="./uslugi.php">Услуги</a> » Разгрузка и погрузка стройматериалов в Москве и области!
        <?php } ?>

    </div>
</div>