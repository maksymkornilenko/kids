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
        ['label' => '+38 067 245-20-10', 'url' => ['https://wa.me/38 067 245-20-10']],
        ['label' => '+38 067 404 66 01', 'url' => ['https://wa.me/38 067 404 66 01']],
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