<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--metatextblock--><title>DISNEY Kitchen </title>
        <?php $this->registerCsrfMetaTags() ?>
        <?php $this->head() ?>
    </head>
    <body class="t-body">
    <?php
    NavBar::begin([
        'brandLabel' => '<img src="/img/Disney.png";>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Заказать', 'options' => ['class' => 'open-order nav-label', 'data-product' => "300"]],
            ['label' => 'О нас', 'url' => ['/#about'],'options'=>['class'=>'nav-label']],
            ['label' => 'Польза', 'url' => ['/#profits'],'options'=>['class'=>'nav-label']],
            ['label' => 'Контакты', 'url' => ['/#contacts'],'options'=>['class'=>'nav-label']],
            ['label' => '+38 067 245-20-10', 'options' => ['class' => 'tel-1'], 'url' => 'https://wa.me/380672452010','linkOptions' => ['target'=>'_blank'], 'template' => '<a class="href-tel-1" href="{url}">{label}</a>'],
            ['label' => '+38 067 404-66-01','options' => ['class' => 'tel-2'], 'url' => 'https://wa.me/380674046601', 'linkOptions' => ['target'=>'_blank'], 'template' => '<a class="href-tel-2" href="{url}">{label}</a>'],
            //['label' => 'Корзина', 'options' => ['class' => 'shopping-cart cart-nav']],

        ],
        'encodeLabels' => false,
    ]); ?>
    <a href="https://t.me/maldivesdreams" class="icon-nav" target="_blank"><img src="/img/telegram.png"/></a>
    <a href="https://wa.me/380672452010" class="icon-nav" target="_blank"><img src="/img/whatsapp.png"/></a>
    <a href="viber://chat?number=+38 067 245-20-10" class="icon-nav" target="_blank"><img src="/img/viber.png"/></a>
    <?php
    NavBar::end();
    ?>
    <?php $this->beginBody() ?>
    <?= Alert::widget() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    <!--/footer-->
    <div id="t-footer" class="t-records">
        <div id="rec118417775" class="r t-rec">
            <!-- main-inform-container -->
            <div class='main-inform-container'>
                <div class="main-inform-container__artboard">
                    <div class="main-inform-container__carrier"></div>
                    <div class="main-inform-container__filter"></div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148014957'>
                        <a class='tn-atom' href="https://t.me/maldivesdreams" target="_blank">
                            <img class='tn-atom__img t-img' src='/img/telegram.png'>
                        </a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148014969'>
                        <a class='tn-atom' href="viber://chat?number=380672452010" target="_blank">
                            <img class='tn-atom__img t-img' src='/img/viber.png'>
                        </a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148026022'>
                        <a class='tn-atom' href="https://wa.me/380672452010" target="_blank">
                            <img class='tn-atom__img t-img' src='/img/whatsapp.png' imgfield='tn_img_1564148026022'>
                        </a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148123704'>
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img' src='/img/visa.png' imgfield='tn_img_1564148123704'>
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148141593'>
                        <div class='tn-atom'>
                            <img class='tn-atom__img t-img' src='/img/mastercard.png' imgfield='tn_img_1564148141593'>
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148165275'>
                        <div class='tn-atom' field='tn_text_1564148165275'>
                            Disney Kitchen 2019 Все права защищены
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148225993'>
                        <div class='tn-atom' field='tn_text_1564148225993'>
                            КУПИТЬ
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148277932'>
                        <a class='tn-atom' href="tel:+380672452010" target="_blank">+38 067 245-20-10</a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148296760'>
                        <a class='tn-atom' href="mailto:disneykitchen.for.kids@gmail.com" target="_blank">disneykitchen.for.kids@gmail.com</a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148333920'>
                        <div class='tn-atom' field='tn_text_1564148333920'>
                            О НАС <br>
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148355697'>
                        <div class='tn-atom' field='tn_text_1564148355697'>
                            ТОВ "УНФ Трюфф Роял" вул. Будiвельникiв, 34, м. Днiпро, 49055, Україна<br>
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148408652'>
                        <div class='tn-atom' field='tn_text_1564148408652'>ДОКУМЕНТАЦИЯ <br>
                        </div>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148426747'>
                        <a class='tn-atom' href="/site/oferta">
                            Договор публичной оферты
                        </a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148446454'>
                        <a class='tn-atom' href="/site/official">
                            Политика конфиденциальности
                        </a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564148453195'>
                        <a class='tn-atom' href="/site/pravila">Правила оплаты, доставки, возврата</a>
                    </div>
                    <div class='main-inform-container__elem tn-elem' elem-id='1564732440140'>
                        <a class='tn-atom' href="tel:+380674046601">+38 067 404 66 01<br></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/footer-->
    </body>
    </html>
<?php $this->endPage() ?>