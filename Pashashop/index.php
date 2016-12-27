<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Главная Страница</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo1">
            <img src="images/logo.svg" class="contactIcon">
        </div>
        <div id="companyName">Название Магазина</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">

<?php
        $goods = [
        [
            'id' => 1,
            'name' => 'Продукт1',
            'desc' => 'Описание Для Товара',
            'img' => '/images/goods/iphone2.jpg',
            'price' => '2000 $'
        ],
        [
            'id' => 2,
            'name' => 'Продукт2',
            'desc' => 'Описание Для Товара',
            'img' => '/images/goods/htc2.jpg',
            'price' => '1200 $'
        ],
        [ 
            'id' => 3,
            'name' => 'Продукт3',
            'desc' => 'Описание Для Товара',
            'img' => '/images/goods/samsung2.jpg',
            'price' => '1400 $'
        ]
    ];

    $page = $_GET['page'];
    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'shop') {
        require('templates/shop.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    }  

?>

</div> 
 
<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                Электронная почта магазина
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                Телефон Отдела продаж
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Адрес Компании
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Коннов</div>
    </div>
</footer>

</body>
</html>
