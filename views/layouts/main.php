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
    <link rel="dns-prefetch" href="https://tilda.ws">
    <link rel="dns-prefetch" href="https://static.tildacdn.com">
    <link rel="shortcut icon" href="https://static.tildacdn.com/img/tildafavicon.ico" type="image/x-icon" />
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

<!--/footer-->
</body>
 </html>
 <?php $this->endPage() ?>