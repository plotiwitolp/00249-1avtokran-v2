<?php require_once './header.php'; ?>

<!-- START "Хлебные крошки" -->
<?php require_once './templates/breadcrumbs.php'; ?>
<!-- END "Хлебные крошки" -->

<!-- START TOP -->
<?php require_once './templates/top.php'; ?>
<!-- END TOP -->

<!-- START "Наши преимущества" -->
<?php require_once './templates/advantages.php'; ?>
<!-- END "Наши преимущества" -->

<!-- START "Нам доверяют" -->
<?php require_once './templates/trustus.php'; ?>
<!-- END "Нам доверяют" -->

<!-- START "Какие автокраны есть в наличии" -->
<div class="kindofcranes">
    <div class="container">
        <div class="kindofcranes__inner">
            <h2>Какие автокраны есть в наличии</h2>
            <h5 class="kindofcranes__subtitle">Выберите критерий для подбора автокранов</h5>

            <div class="kindofcranes__filter">
                <div class="kindofcranes__filter-item active">
                    <div class="kindofcranes__filter-item-img">
                        <img src="./assets/img/kindofcranes_icon-big1.svg" alt="Грузоподъемность">
                    </div>
                    <div class="kindofcranes__filter-item-text">Грузоподъемность</div>
                </div>
                <div class="kindofcranes__filter-item">
                    <div class="kindofcranes__filter-item-img">
                        <img src="./assets/img/kindofcranes_icon-big2.svg" alt="Длина стрелы">
                    </div>
                    <div class="kindofcranes__filter-item-text">Длина стрелы</div>
                </div>
                <div class="kindofcranes__filter-item">
                    <div class="kindofcranes__filter-item-img">
                        <img src="./assets/img/kindofcranes_icon-big3.svg" alt="Марки">
                    </div>
                    <div class="kindofcranes__filter-item-text">Марки</div>
                </div>
            </div>


            <div class="kindofcranes__slider">
                <div class="kindofcranes__list">

                    <div class="kindofcranes__item">
                        <div class="kindofcranes__item-body">
                            <h4 class="kindofcranes__item-title">Автокран 14 тонн</h4>
                            <div class="kindofcranes__item-img">
                                <img decoding="async" loading="lazy" src="./assets/img/catalogchar_img_11zon.webp" alt="Автокраны">
                            </div>
                            <div class="kindofcranes__item-offer-btn-wrap">
                                <a href="#">
                                    <div class="btn">Выбрать кран</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="kindofcranes__item">
                        <div class="kindofcranes__item-body">
                            <h4 class="kindofcranes__item-title">Автокран 14 тонн</h4>
                            <div class="kindofcranes__item-img">
                                <img decoding="async" loading="lazy" src="./assets/img/catalogchar_img_11zon.webp" alt="Автокраны">
                            </div>
                            <div class="kindofcranes__item-offer-btn-wrap">
                                <a href="#">
                                    <div class="btn">Выбрать кран</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="kindofcranes__item">
                        <div class="kindofcranes__item-body">
                            <h4 class="kindofcranes__item-title">Автокран 14 тонн</h4>
                            <div class="kindofcranes__item-img">
                                <img decoding="async" loading="lazy" src="./assets/img/catalogchar_img_11zon.webp" alt="Автокраны">
                            </div>
                            <div class="kindofcranes__item-offer-btn-wrap">
                                <a href="#">
                                    <div class="btn">Выбрать кран</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="kindofcranes__item">
                        <div class="kindofcranes__item-body">
                            <h4 class="kindofcranes__item-title">Автокран 14 тонн</h4>
                            <div class="kindofcranes__item-img">
                                <img decoding="async" loading="lazy" src="./assets/img/catalogchar_img_11zon.webp" alt="Автокраны">
                            </div>
                            <div class="kindofcranes__item-offer-btn-wrap">
                                <a href="#">
                                    <div class="btn">Выбрать кран</div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="kindofcranes__slider-prev"></div>
                <div class="kindofcranes__slider-next"></div>
            </div>

            <div class="kindofcranes__btn-wrap">
                <a href="#">
                    <div class="btn">Полный каталог автокранов</div>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- END "Какие автокраны есть в наличии" -->

<!-- START "Какие услуги мы оказываем" -->
<?php require_once './templates/service.php'; ?>
<!-- END "Какие услуги мы оказываем" -->

<!-- START "ЭКСКЛЮЗИВНАЯ АКЦИЯ!" -->
<?php require_once './templates/exprom.php'; ?>
<!-- END "ЭКСКЛЮЗИВНАЯ АКЦИЯ!" -->

<!-- START "Цены на аренду техники" -->
<?php require_once './templates/prices.php'; ?>
<!-- END "Цены на аренду техники" -->

<!-- START "Города и районы в которых мы работаем" -->
<?php require_once './templates/cities.php'; ?>
<!-- END "Города и районы в которых мы работаем" -->

<!-- START "Не нашли подходящую технику?" -->
<?php require_once './templates/formnotfound.php'; ?>
<!-- END "Не нашли подходящую технику?" -->

<!-- START "О компании" -->
<?php require_once './templates/about.php'; ?>
<!-- END "О компании" -->

<!-- START "Наша техника в работе" -->
<?php require_once './templates/ourtech.php'; ?>
<!-- END "Наша техника в работе" -->

<?php require_once './footer.php'; ?>