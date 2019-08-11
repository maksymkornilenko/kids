 <?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--metatextblock--><title>DISNEY Kitchen </title>
    <meta property="og:url" content="http://kidsua.com" />
    <meta property="og:title" content="DISNEY Kitchen " />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://static.tildacdn.com/tild3537-6464-4463-b734-623036386266/photo.png" />
    <link rel="canonical" href="http://kidsua.com/"><!--/metatextblock--><meta property="fb:app_id" content="257953674358265" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">
    <!--<link rel="shortcut icon" href="https://static.tildacdn.com/img/tildafavicon.ico" type="image/x-icon" />-->
    <!-- Assets --><link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-grid-3.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://tilda.ws/project1512102/tilda-blocks-2.12.css?t=1564769682" type="text/css" media="all" />
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-animation-1.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-slds-1.4.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-zoom-2.0.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-popup-1.1.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://static.tildacdn.com/css/tilda-menusub-1.0.min.css" type="text/css" media="all" />
    <script src="https://static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
    <script src="https://static.tildacdn.com/js/tilda-scripts-2.8.min.js"></script>
    <script src="https://tilda.ws/project1512102/tilda-blocks-2.7.js?t=1564769682"></script>
    <script src="https://static.tildacdn.com/js/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-slds-1.4.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/hammer.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-zoom-2.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-products-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-menusub-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-forms-1.0.min.js" charset="utf-8"></script>
    <script src="https://static.tildacdn.com/js/tilda-cart-1.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <script type="text/javascript">
        if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
            var style = document.createElement('style');
            style.type = 'text/css';
            style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
            document.getElementsByTagName('head')[0].appendChild(style);
            $(document).ready(function () {
                $('.t-records').addClass('t-records_animated');
                setTimeout(function () {
                    $('.t-records').addClass('t-records_visible');
                    sessionStorage.setItem('visited', 'y');
                }, 400);
            });
        }
    </script>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Заказать', 'options' => ['class' => 'dropdown']],
        ['label' => 'О нас', 'url' => ['/#about']],
        ['label' => 'Польза', 'url' => ['/#polezno']],
        ['label' => 'Контакты', 'url' => ['/#contacts']],
        ['label' => '+38 067 245-20-10', 'url' => ['tel:+38 067 245-20-10']],
        ['label' => '+38 067 404 66 01', 'url' => ['tel:+38 067 404 66 01']],
    ],
]);
NavBar::end();
?>
<?php $this->beginBody() ?>
<?=
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>
<?= Alert::widget() ?>
<?= $content ?>
<?php $this->endBody() ?>
<!--footer-->
<div id="t-footer" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1512102" data-tilda-page-id="6708230" data-tilda-page-alias="footer" data-tilda-formskey="1d4ea27a866eee81264047165332dad0" >
    <div id="rec118417775" class="r t-rec" style=" " data-animationappear="off" data-record-type="396" >
        <!-- T396 -->
        <style>
            #rec118417775 .t396__artboard{
                height: 190px;background-color: #ffffff;}
            #rec118417775 .t396__filter{
                height: 190px;
                background-image: -webkit-gradient( linear, left top, left bottom, from(rgba(106,17,203,1)), to(rgba(37,117,252,0.6)) );
                background-image: -webkit-linear-gradient(top, rgba(106,17,203,1), rgba(37,117,252,0.6));
                background-image: linear-gradient(to bottom, rgba(106,17,203,1), rgba(37,117,252,0.6));
            }
            #rec118417775 .t396__carrier{
                height: 190px;background-position: center center;
                background-attachment: scroll;
                background-size:cover;
                background-repeat:no-repeat;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .t396__artboard{
                    height: 160px;
                }
                #rec118417775 .t396__filter{
                    height: 160px;
                }
                #rec118417775 .t396__carrier{
                    height: 160px;
                    background-attachment:scroll;
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .t396__artboard{
                    height: 250px;
                    background-color: #ffffff;
                }
                #rec118417775 .t396__filter{
                    height: 250px;
                    background-image: -webkit-gradient( linear, left top, left bottom, from(rgba(106,17,203,1)), to(rgba(37,117,252,0.6)) );
                    background-image: -webkit-linear-gradient(top, rgba(106,17,203,1), rgba(37,117,252,0.6));
                    background-image: linear-gradient(to bottom, rgba(106,17,203,1), rgba(37,117,252,0.6));
                }
                #rec118417775 .t396__carrier{
                    height: 250px;
                    background-position: center center;
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .t396__artboard{
                    height: 360px;
                }
                #rec118417775 .t396__filter{
                    height: 360px;
                }
                #rec118417775 .t396__carrier{
                    height: 360px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .t396__artboard{
                    height: 450px;}
                #rec118417775 .t396__filter{
                    height: 450px;}
                #rec118417775 .t396__carrier{
                    height: 450px;}}
            #rec118417775 .tn-elem[data-elem-id="1564148014957"]{
                z-index:5;
                top: 40px;
                left: calc(50% - 600px + 20px);
                width:38px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148014957"] .tn-atom{
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148014957"]{
                    top: 35px;
                    left: calc(50% - 480px + 10px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148014957"]{
                    top: 28px;
                    left: calc(50% - 320px + 50px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148014957"]{
                    top: 30px;
                    left: calc(50% - 240px + 50px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148014957"]{
                    top: 20px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148014969"]{
                z-index:7;
                top: 40px;
                left: calc(50% - 600px + 100px);
                width:38px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148014969"] .tn-atom{
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148014969"]{
                    top: 35px;
                    left: calc(50% - 480px + 90px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148014969"]{
                    top: 28px;
                    left: calc(50% - 320px + 10px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148014969"]{
                    top: 28px;
                    left: calc(50% - 240px + 10px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148014969"]{
                    top: 20px;
                    left: calc(50% - 160px + 90px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148026022"]{
                z-index:18;
                top: 40px;
                left: calc(50% - 600px + 60px);
                width:38px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148026022"] .tn-atom{
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148026022"]{
                    top: 35px;
                    left: calc(50% - 480px + 50px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148026022"]{
                    top: 28px;
                    left: calc(50% - 320px + 90px);}}
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148026022"]{
                    top: 30px;left: calc(50% - 240px + 90px);}}
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148026022"]{
                    top: 20px;left: calc(50% - 160px + 50px);}}
            #rec118417775 .tn-elem[data-elem-id="1564148123704"]{
                z-index:24;top: 103px;left: calc(50% - 600px + 20px);width:68px;}
            #rec118417775 .tn-elem[data-elem-id="1564148123704"] .tn-atom{
                background-position:center center;border-color:transparent;border-style:solid;}
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148123704"]{
                    top: 90px;left: calc(50% - 480px + 10px);width:48px;}}
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148123704"]{
                    top: 150px;left: calc(50% - 320px + 10px);}}
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148123704"]{
                    top: 300px;left: calc(50% - 240px + 10px);}}
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148123704"]{
                    top: 385px;left: calc(50% - 160px + 10px);}}
            #rec118417775 .tn-elem[data-elem-id="1564148141593"]{
                z-index:25;top: 98px;
                left: calc(50% - 600px + 110px);width:48px;}
            #rec118417775 .tn-elem[data-elem-id="1564148141593"] .tn-atom{
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148141593"]{
                    top: 85px;
                    left: calc(50% - 480px + 70px);
                    width:38px;
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148141593"]{
                    top: 145px;
                    left: calc(50% - 320px + 70px);
                    width:38px;}}
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148141593"]{
                    top: 295px;
                    left: calc(50% - 240px + 70px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148141593"]{
                    top: 380px;
                    left: calc(50% - 160px + 90px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148165275"]{
                color:#ffffff;
                z-index:26;
                top: 138px;
                left: calc(50% - 600px + 20px);
                width:300px;}
            #rec118417775 .tn-elem[data-elem-id="1564148165275"] .tn-atom{
                color:#ffffff;
                font-size:13px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;}
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148165275"]{
                    top: 110px;left: calc(50% - 480px + 10px);width:140px;
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148165275"]{
                    top: 180px;
                    left: calc(50% - 320px + 10px);width:110px;}
                #rec118417775 .tn-elem[data-elem-id="1564148165275"] .tn-atom{
                    font-size:10px;
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148165275"]{
                    top: 330px;
                    left: calc(50% - 240px + 10px);
                    width:270px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148165275"]{
                    top: 415px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148225993"]{
                color:#ffffff;
                z-index:27;
                top: 35px;
                left: calc(50% - 600px + 320px);
                width:80px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148225993"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:400;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148225993"]{
                    top: 28px;
                    left: calc(50% - 480px + 190px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148225993"]{
                    top: 25px;
                    left: calc(50% - 320px + 150px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148225993"]{
                    top: 75px;
                    left: calc(50% - 240px + 10px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148225993"]{
                    top: 75px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148277932"]{
                color:#ffffff;
                z-index:28;
                top: 62px;
                left: calc(50% - 600px + 320px);
                width:160px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148277932"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148277932"]{
                    top: 59px;
                    left: calc(50% - 480px + 190px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148277932"]{
                    top: 50px;
                    left: calc(50% - 320px + 150px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148277932"]{
                    top: 100px;
                    left: calc(50% - 240px + 10px);
                }
                #rec118417775 .tn-elem[data-elem-id="1564148277932"] .tn-atom{
                    font-size:14px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148277932"]{
                    top: 100px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148296760"]{
                color:#ffffff;
                z-index:29;
                top: 110px;
                left: calc(50% - 600px + 320px);
                width:255px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148296760"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148296760"]{
                    top: 105px;
                    left: calc(50% - 480px + 190px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148296760"]{
                    top: 100px;
                    left: calc(50% - 320px + 150px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148296760"]{
                    top: 155px;
                    left: calc(50% - 240px + 10px);
                }
                #rec118417775 .tn-elem[data-elem-id="1564148296760"] .tn-atom{
                    font-size:14px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148296760"]{
                    top: 150px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148333920"]{
                color:#ffffff;
                z-index:30;
                top: 35px;
                left: calc(50% - 600px + 620px);
                width:80px;}
            #rec118417775 .tn-elem[data-elem-id="1564148333920"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:400;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148333920"]{
                    top: 30px;left: calc(50% - 480px + 460px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148333920"]{
                    top: 125px;
                    left: calc(50% - 320px + 150px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148333920"]{
                    top: 190px;
                    left: calc(50% - 240px + 10px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148333920"]{
                    top: 175px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148355697"]{
                color:#ffffff;
                z-index:31;
                top: 62px;
                left: calc(50% - 600px + 620px);
                width:190px;}
            #rec118417775 .tn-elem[data-elem-id="1564148355697"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148355697"]{
                    top: 61px;
                    left: calc(50% - 480px + 460px);
                }
                #rec118417775 .tn-elem[data-elem-id="1564148355697"] .tn-atom{
                    line-height:1.55;}}
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148355697"]{
                    top: 150px;
                    left: calc(50% - 320px + 150px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148355697"]{
                    top: 215px;
                    left: calc(50% - 240px + 10px);
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148355697"]{
                    top: 200px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148408652"]{
                color:#ffffff;
                z-index:32;
                top: 35px;
                left: calc(50% - 600px + 880px);
                width:80px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148408652"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:400;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148408652"]{
                    top: 30px;
                    left: calc(50% - 480px + 680px);}}
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148408652"]{
                    top: 25px;
                    left: calc(50% - 320px + 390px);}}
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148408652"]{
                    top: 75px;
                    left: calc(50% - 240px + 250px);}}
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148408652"]{
                    top: 275px;
                    left: calc(50% - 160px + 10px);}}
            #rec118417775 .tn-elem[data-elem-id="1564148426747"]{
                color:#ffffff;
                z-index:33;
                top: 62px;
                left: calc(50% - 600px + 880px);
                width:230px;}
            #rec118417775 .tn-elem[data-elem-id="1564148426747"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148426747"]{
                    top: 60px;
                    left: calc(50% - 480px + 680px);}}
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148426747"]{
                    top: 49px;
                    left: calc(50% - 320px + 390px);}}
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148426747"]{
                    top: 130px;
                    left: calc(50% - 240px + 250px);}
                #rec118417775 .tn-elem[data-elem-id="1564148426747"] .tn-atom{
                    font-size:14px;
                    opacity:1;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148426747"]{
                    top: 325px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148446454"]{
                color:#ffffff;
                z-index:34;
                top: 87px;
                left: calc(50% - 600px + 880px);
                width:230px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148446454"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148446454"]{
                    top: 84px;
                    left: calc(50% - 480px + 680px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148446454"]{
                    top: 75px;
                    left: calc(50% - 320px + 390px);
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148446454"]{
                    top: 100px;
                    left: calc(50% - 240px + 250px);
                }
                #rec118417775 .tn-elem[data-elem-id="1564148446454"] .tn-atom{
                    font-size:14px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148446454"]{
                    top: 300px;
                    left: calc(50% - 160px + 10px);
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564148453195"]{
                color:#ffffff;
                z-index:35;
                top: 112px;
                left: calc(50% - 600px + 880px);
                width:280px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564148453195"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564148453195"]{
                    top: 107px;
                    left: calc(50% - 480px + 680px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564148453195"]{
                    top: 100px;
                    left: calc(50% - 320px + 390px);
                    width:210px;
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564148453195"]{
                    top: 155px;
                    left: calc(50% - 240px + 250px);
                    width:210px;
                }
                #rec118417775 .tn-elem[data-elem-id="1564148453195"] .tn-atom{
                    font-size:14px;
                    line-height:1.4;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564148453195"]{
                    top: 350px;
                    left: calc(50% - 160px + 10px);
                    width:270px;
                }
            }
            #rec118417775 .tn-elem[data-elem-id="1564732440140"]{
                color:#ffffff;
                z-index:36;
                top: 85px;
                left: calc(50% - 600px + 320px);
                width:160px;
            }
            #rec118417775 .tn-elem[data-elem-id="1564732440140"] .tn-atom{
                color:#ffffff;
                font-size:15px;
                font-family:'HelveticaNeueCyr',Arial,sans-serif;
                line-height:1.55;
                font-weight:100;
                background-position:center center;
                border-color:transparent;
                border-style:solid;
            }
            @media screen and (max-width: 1199px){
                #rec118417775 .tn-elem[data-elem-id="1564732440140"]{
                    top: 83px;
                    left: calc(50% - 480px + 190px);
                }
            }
            @media screen and (max-width: 959px){
                #rec118417775 .tn-elem[data-elem-id="1564732440140"]{
                    top: 75px;
                    left: calc(50% - 320px + 150px);
                    width:160px;
                }
            }
            @media screen and (max-width: 639px){
                #rec118417775 .tn-elem[data-elem-id="1564732440140"]{
                    top: 130px;
                    left: calc(50% - 240px + 10px);
                }
                #rec118417775 .tn-elem[data-elem-id="1564732440140"] .tn-atom{
                    font-size:14px;
                }
            }
            @media screen and (max-width: 479px){
                #rec118417775 .tn-elem[data-elem-id="1564732440140"]{
                    top: 125px;
                    left: calc(50% - 160px + 10px);
                }
            }
        </style>
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="118417775"	data-artboard-height="190"	data-artboard-height-res-960="160"	data-artboard-height-res-640="250"	data-artboard-height-res-480="360"	data-artboard-height-res-320="450"	data-artboard-height_vh=""	data-artboard-valign="center"	data-artboard-ovrflw=""	>
                <div class="t396__carrier" data-artboard-recid="118417775"></div>
                <div class="t396__filter" data-artboard-recid="118417775"></div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148014957' data-elem-id='1564148014957' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="30"	data-field-top-res-320-value="20"	data-field-left-value="20"	data-field-left-res-960-value="10"	data-field-left-res-640-value="50"	data-field-left-res-480-value="50"	data-field-left-res-320-value="10"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="https://tlgg.ru/maldivesdreams" >
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild6132-3534-4731-b265-633865303262/002-telegram.png' imgfield='tn_img_1564148014957'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148014969' data-elem-id='1564148014969' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="28"	data-field-top-res-320-value="20"	data-field-left-value="100"	data-field-left-res-960-value="90"	data-field-left-res-640-value="10"	data-field-left-res-480-value="10"	data-field-left-res-320-value="90"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="viber://chat?number=+38 067 245-20-10" >
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3964-3966-4161-b031-356632356230/001-viber.png' imgfield='tn_img_1564148014969'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148026022' data-elem-id='1564148026022' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="30"	data-field-top-res-320-value="20"	data-field-left-value="60"	data-field-left-res-960-value="50"	data-field-left-res-640-value="90"	data-field-left-res-480-value="90"	data-field-left-res-320-value="50"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="https://wa.me/38 067 245-20-10" >
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3963-6363-4561-a437-373537306235/005-whatsapp.png' imgfield='tn_img_1564148026022'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148123704' data-elem-id='1564148123704' data-elem-type='image'	data-field-top-value="103"	data-field-top-res-960-value="90"	data-field-top-res-640-value="150"	data-field-top-res-480-value="300"	data-field-top-res-320-value="385"	data-field-left-value="20"	data-field-left-res-960-value="10"	data-field-left-res-640-value="10"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="68"	data-field-width-res-960-value="48"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' >
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3339-3833-4764-b737-353239346264/_1.png' imgfield='tn_img_1564148123704'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148141593' data-elem-id='1564148141593' data-elem-type='image'	data-field-top-value="98"	data-field-top-res-960-value="85"	data-field-top-res-640-value="145"	data-field-top-res-480-value="295"	data-field-top-res-320-value="380"	data-field-left-value="110"	data-field-left-res-960-value="70"	data-field-left-res-640-value="70"	data-field-left-res-480-value="70"	data-field-left-res-320-value="90"	data-field-width-value="48"	data-field-width-res-960-value="38"	data-field-width-res-640-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' >
                        <img class='tn-atom__img t-img' data-original='https://static.tildacdn.com/tild3838-6532-4933-b039-303861643238/_3.png' imgfield='tn_img_1564148141593'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148165275' data-elem-id='1564148165275' data-elem-type='text'	data-field-top-value="138"	data-field-top-res-960-value="110"	data-field-top-res-640-value="180"	data-field-top-res-480-value="330"	data-field-top-res-320-value="415"	data-field-left-value="20"	data-field-left-res-960-value="10"	data-field-left-res-640-value="10"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="300"	data-field-width-res-960-value="140"	data-field-width-res-640-value="110"	data-field-width-res-480-value="270"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' field='tn_text_1564148165275' >
                        Disney Kitchen 2019 Все права защищены
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148225993' data-elem-id='1564148225993' data-elem-type='text'	data-field-top-value="35"	data-field-top-res-960-value="28"	data-field-top-res-640-value="25"	data-field-top-res-480-value="75"	data-field-top-res-320-value="75"	data-field-left-value="320"	data-field-left-res-960-value="190"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="80"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' field='tn_text_1564148225993' >
                        КУПИТЬ
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148277932' data-elem-id='1564148277932' data-elem-type='text'	data-field-top-value="62"	data-field-top-res-960-value="59"	data-field-top-res-640-value="50"	data-field-top-res-480-value="100"	data-field-top-res-320-value="100"	data-field-left-value="320"	data-field-left-res-960-value="190"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="160"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="tel:+38 067 245-20-10" >+38 067 245-20-10</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148296760' data-elem-id='1564148296760' data-elem-type='text'	data-field-top-value="110"	data-field-top-res-960-value="105"	data-field-top-res-640-value="100"	data-field-top-res-480-value="155"	data-field-top-res-320-value="150"	data-field-left-value="320"	data-field-left-res-960-value="190"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="255"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="mailto:disneykitchen.for.kids@gmail.com" >disneykitchen.for.kids@gmail.com</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148333920' data-elem-id='1564148333920' data-elem-type='text'	data-field-top-value="35"	data-field-top-res-960-value="30"	data-field-top-res-640-value="125"	data-field-top-res-480-value="190"	data-field-top-res-320-value="175"	data-field-left-value="620"	data-field-left-res-960-value="460"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="80"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' field='tn_text_1564148333920' >
                        О НАС <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148355697' data-elem-id='1564148355697' data-elem-type='text'	data-field-top-value="62"	data-field-top-res-960-value="61"	data-field-top-res-640-value="150"	data-field-top-res-480-value="215"	data-field-top-res-320-value="200"	data-field-left-value="620"	data-field-left-res-960-value="460"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="190"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' field='tn_text_1564148355697' >
                        ТОВ "УНФ Трюфф Роял" вул. Будiвельникiв, 34, м. Днiпро, 49055, Україна<br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148408652' data-elem-id='1564148408652' data-elem-type='text'	data-field-top-value="35"	data-field-top-res-960-value="30"	data-field-top-res-640-value="25"	data-field-top-res-480-value="75"	data-field-top-res-320-value="275"	data-field-left-value="880"	data-field-left-res-960-value="680"	data-field-left-res-640-value="390"	data-field-left-res-480-value="250"	data-field-left-res-320-value="10"	data-field-width-value="80"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' field='tn_text_1564148408652' >ДОКУМЕНТАЦИЯ <br>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148426747' data-elem-id='1564148426747' data-elem-type='text'	data-field-top-value="62"	data-field-top-res-960-value="60"	data-field-top-res-640-value="49"	data-field-top-res-480-value="130"	data-field-top-res-320-value="325"	data-field-left-value="880"	data-field-left-res-960-value="680"	data-field-left-res-640-value="390"	data-field-left-res-480-value="250"	data-field-left-res-320-value="10"	data-field-width-value="230"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="/oferta" >
                        Договор публичной оферты
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148446454' data-elem-id='1564148446454' data-elem-type='text'	data-field-top-value="87"	data-field-top-res-960-value="84"	data-field-top-res-640-value="75"	data-field-top-res-480-value="100"	data-field-top-res-320-value="300"	data-field-left-value="880"	data-field-left-res-960-value="680"	data-field-left-res-640-value="390"	data-field-left-res-480-value="250"	data-field-left-res-320-value="10"	data-field-width-value="230"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="/official" >
                        Политика конфиденциальности
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148453195' data-elem-id='1564148453195' data-elem-type='text'	data-field-top-value="112"	data-field-top-res-960-value="107"	data-field-top-res-640-value="100"	data-field-top-res-480-value="155"	data-field-top-res-320-value="350"	data-field-left-value="880"	data-field-left-res-960-value="680"	data-field-left-res-640-value="390"	data-field-left-res-480-value="250"	data-field-left-res-320-value="10"	data-field-width-value="280"	data-field-width-res-640-value="210"	data-field-width-res-480-value="210"	data-field-width-res-320-value="270"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="/pravila" >Правила оплаты, доставки, возврата</a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564732440140' data-elem-id='1564732440140' data-elem-type='text'	data-field-top-value="85"	data-field-top-res-960-value="83"	data-field-top-res-640-value="75"	data-field-top-res-480-value="130"	data-field-top-res-320-value="125"	data-field-left-value="320"	data-field-left-res-960-value="190"	data-field-left-res-640-value="150"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="160"	data-field-width-res-640-value="160"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="tel:+38 067 404 66 01" >+38 067 404 66 01<br></a>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                t396_init('118417775');
            });
        </script>
        <!-- /T396 -->
    </div>
</div>
<!--/footer-->
</body>
</html>
<?php $this->endPage() ?>
