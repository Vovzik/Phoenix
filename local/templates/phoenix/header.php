<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    use Bitrix\Main\Page\Asset;

    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/libs/jquery-3.4.1.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/libs/jquery.mCustomScrollbar.concat.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/libs/swiper-bundle.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');
    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/scss/main.css');
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>
<?
$APPLICATION->ShowPanel();
?>
<div class="wrapper">
    <header class="header">
        <div class="header__content <?php echo CSite::InDir('/constructor') ? 'header__constructor' : '' ?> header-content-js">
            <div class="container">
                <div class="header__inner">
                    <a class="header__logo" href="/">
                        <img class="header__logo-icon" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/header/1.svg" alt="Logo">
                    </a>
                    <div class="header__column">
                        <nav class="header__nav header-nav-open-js">
                            <ul class="header__list">
                                <li><a href="#">О компании</a></li>
                                <li><a href="#">Продукты</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </nav>
                        <a class="header__phone" href="tel:+79000000000">+7 900 000 00 00</a>
                        <div class='header__burger js__header-burgerclick'>
                            <div class='header__burger-item js__header-burger header__burger--top'></div>
                            <div class='header__burger-item js__header-burger header__burger--middle'></div>
                            <div class='header__burger-item js__header-burger header__burger--bottom'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

