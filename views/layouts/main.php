<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
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
            ['label' => 'Заказать','options' => ['class' => 'dropdown']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Польза', 'url' => ['/site/profits']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            ['label' => '+38 067 245-20-10', 'url' => ['tel:+38 067 245-20-10']],
            ['label' => '+38 067 404 66 01', 'url' => ['tel:+38 067 404 66 01']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <table>
        <tr>
            <td>Buy</td>
        </tr>
        <tr>
            <td><a href="tel:+38 067 245-20-10">+38 067 245-20-10</a></td>
            <td></td>
        </tr>
        <tr>
            <td><a href="tel:+38 067 245-20-10">+38 067 245-20-10</a></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
