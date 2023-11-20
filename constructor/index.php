<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Конструктор");
?>

<?php if (CSite::InDir('/constructor')){ ?>
<?php } ?>

    <main class="main <?php echo CSite::InDir('/constructor') ? 'main-constructor' : '' ?>">
        <section class="constructor">
            <div class="constructor__content section-single">
                <div class="container">
                        <div class="constructor__desctop tabs-items">
                            <div class="constructor__box">
                                <img class="constructor__img constructor-img-js" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/1.jpg" alt="alt">
                            </div>
                            <div class="constructor__floors">
                                <div class="constructor__floors-box">
                                    <h2 class="constructor__title active tabs-item">
                                        Палубная укладка
                                    </h2>
                                    <div class="constructor__items select__scroll tabs-body open">
                                        <div class="constructor__item constructor-item-js active">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/2.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 1
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/3.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 2
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 3
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 4
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 5
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="constructor__floors-box">
                                    <h2 class="constructor__title tabs-item">
                                        Французская ёлка
                                    </h2>
                                    <div class="constructor__items select__scroll tabs-body">
                                        <div class="constructor__item constructor-item-js active">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/2.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 1
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/3.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 2
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 3
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 4
                                            </h3>
                                        </div>
                                        <div class="constructor__item constructor-item-js">
                                            <div class="constructor__item-box">
                                                <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                            </div>
                                            <h3 class="constructor__subtitle">
                                                Цветной Цвет 5
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="constructor__mobail tabs-items">
                            <div class="constructor__mobail-items">
                                <div class="constructor__mobail-item tabs-item active">
                                    Палубная укладка
                                </div>
                                <div class="constructor__mobail-item tabs-item">
                                    Французская ёлка
                                </div>
                                <div class="constructor__mobail-item tabs-item">
                                    Английская ёлка
                                </div>
                                <div class="constructor__mobail-item tabs-item">
                                    Диагональная укладка
                                </div>
                                <div class="constructor__mobail-item tabs-item">
                                    Укладка квадратом
                                </div>
                                <div class="constructor__mobail-item tabs-item">
                                    Ёлка с фризом
                                </div>
                            </div>
                            <div class="constructor__box">
                                <img class="constructor__img constructor-img-js" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/1.jpg" alt="alt">
                            </div>
                            <div class="constructor__items select__scroll tabs-body open">
                                <div class="constructor__item constructor-item-js active">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/2.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 1
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/3.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 2
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 3
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 4
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 5
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 3
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 4
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 5
                                    </h3>
                                </div>
                            </div>
                            <div class="constructor__items select__scroll tabs-body">
                                <div class="constructor__item constructor-item-js active">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/2.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 1
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/3.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 2
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 3
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 4
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 5
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/4.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 3
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/5.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 4
                                    </h3>
                                </div>
                                <div class="constructor__item constructor-item-js">
                                    <div class="constructor__item-box">
                                        <img class="constructor__item-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/constructor/6.jpg" alt="alt">
                                    </div>
                                    <h3 class="constructor__subtitle">
                                        Цветной Цвет 5
                                    </h3>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>