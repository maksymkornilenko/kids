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
<body class="t-body" style="margin:0;">
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
<div id="t-footer" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1512102" data-tilda-page-id="6708230" data-tilda-page-alias="footer" data-tilda-formskey="1d4ea27a866eee81264047165332dad0" >
    <div id="rec118417775" class="r t-rec" style=" " data-animationappear="off" data-record-type="396" >
        <!-- T396 -->
        <div class='t396'>
            <div class="t396__artboard" data-artboard-recid="118417775"	data-artboard-height="190"	data-artboard-height-res-960="160"	data-artboard-height-res-640="250"	data-artboard-height-res-480="360"	data-artboard-height-res-320="450"	data-artboard-height_vh=""	data-artboard-valign="center"	data-artboard-ovrflw=""	>
                <div class="t396__carrier" data-artboard-recid="118417775"></div>
                <div class="t396__filter" data-artboard-recid="118417775"></div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148014957' data-elem-id='1564148014957' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="30"	data-field-top-res-320-value="20"	data-field-left-value="20"	data-field-left-res-960-value="10"	data-field-left-res-640-value="50"	data-field-left-res-480-value="50"	data-field-left-res-320-value="10"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="https://tlgg.ru/maldivesdreams" >
                        <img class='tn-atom__img t-img' src='img/telegram.png' imgfield='tn_img_1564148014957'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148014969' data-elem-id='1564148014969' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="28"	data-field-top-res-320-value="20"	data-field-left-value="100"	data-field-left-res-960-value="90"	data-field-left-res-640-value="10"	data-field-left-res-480-value="10"	data-field-left-res-320-value="90"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="viber://chat?number=+38 067 245-20-10" >
                        <img class='tn-atom__img t-img' src='img/viber.png' imgfield='tn_img_1564148014969'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148026022' data-elem-id='1564148026022' data-elem-type='image'	data-field-top-value="40"	data-field-top-res-960-value="35"	data-field-top-res-640-value="28"	data-field-top-res-480-value="30"	data-field-top-res-320-value="20"	data-field-left-value="60"	data-field-left-res-960-value="50"	data-field-left-res-640-value="90"	data-field-left-res-480-value="90"	data-field-left-res-320-value="50"	data-field-width-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <a class='tn-atom' href="https://wa.me/38 067 245-20-10" >
                        <img class='tn-atom__img t-img' src='img/whatsapp.png' imgfield='tn_img_1564148026022'>
                    </a>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148123704' data-elem-id='1564148123704' data-elem-type='image'	data-field-top-value="103"	data-field-top-res-960-value="90"	data-field-top-res-640-value="150"	data-field-top-res-480-value="300"	data-field-top-res-320-value="385"	data-field-left-value="20"	data-field-left-res-960-value="10"	data-field-left-res-640-value="10"	data-field-left-res-480-value="10"	data-field-left-res-320-value="10"	data-field-width-value="68"	data-field-width-res-960-value="48"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' >
                        <img class='tn-atom__img t-img' src='img/visa.png' imgfield='tn_img_1564148123704'>
                    </div>
                </div>
                <div class='t396__elem tn-elem tn-elem__1184177751564148141593' data-elem-id='1564148141593' data-elem-type='image'	data-field-top-value="98"	data-field-top-res-960-value="85"	data-field-top-res-640-value="145"	data-field-top-res-480-value="295"	data-field-top-res-320-value="380"	data-field-left-value="110"	data-field-left-res-960-value="70"	data-field-left-res-640-value="70"	data-field-left-res-480-value="70"	data-field-left-res-320-value="90"	data-field-width-value="48"	data-field-width-res-960-value="38"	data-field-width-res-640-value="38"	data-field-axisy-value="top"	data-field-axisx-value="left"	data-field-container-value="grid"	data-field-topunits-value=""	data-field-leftunits-value=""	data-field-heightunits-value=""	data-field-widthunits-value="" >
                    <div class='tn-atom' >
                        <img class='tn-atom__img t-img' src='img/mastercard.png' imgfield='tn_img_1564148141593'>
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
        <!-- /T396 -->
    </div>
</div>
<!--/footer-->
</body>
 </html>
 <?php $this->endPage() ?>