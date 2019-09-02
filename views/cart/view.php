<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?php
if(Yii::$app->session->hasFlash('success')):
?>
<?php echo Yii::$app->session->getFlash('success');?>
<?php endif;?>

<?php
if(Yii::$app->session->hasFlash('error')):
?>
<?php echo Yii::$app->session->getFlash('error');?>
<?php endif;?>

<div class="container" id="order">
    <?php if (!empty($session['cart'])): ?>
    <div class="t706__cartwin-products">
        <?php foreach ($session['cart'] as $id => $item): ?>
            <div class="t706__product">
                <div class="t706__product-thumb">
                    <div class="t706__product-imgdiv" style="background-image:url(https://static.tildacdn.com/tild6237-6563-4463-a234-383537663339/photo.png);">

                    </div>
                </div>
                <div class="t706__product-title t-descr t-descr_sm">Набор продукции DISNEY Kitchen
                    <div style="opacity:0.7;font-size:12px;font-weight:400;">
                        <div></div>
                        <div><?= $item['name'] ?></div>

                    </div>
                    <div style="opacity:0.7;font-size:12px;font-weight:400;">
                        Батончики и вафли Disney Kitchen - отличный перекус, который можно взять с собой
                    </div>

                </div>
                <div class="t706__product-plusminus t-descr t-descr_sm">
                    <span class="t706__product-minus">
                        <img src="/img/arrows_circle_minus.svg" style="width:16px;height:16px;border:0;" data-id="<?= $item['system_products_id'] ?>" data-gender="<?= $item['gender_id'] ?>" data-count="1" id="minus-cart">
                    </span>
                    <span class="t706__product-quantity cart-count" data-id="<?= $id ?>"><?= $item['count'] ?></span>
                    <span class="t706__product-plus">
                        <img src="/img/arrows_circle_plus.svg" data-id="<?= $item['system_products_id'] ?>" data-gender="<?= $item['gender_id'] ?>" data-count="1" id="plus-cart" style="width:16px;height:16px;border:0;">
                    </span>
                </div>
                <div class="t706__product-amount t-descr t-descr_sm"><?= $item['count'] * $item['price'] ?>&nbsp;грн</div>
                <div class="t706__product-del">
                    <img src="https://static.tildacdn.com/lib/linea/1bec3cd7-e9d1-2879-5880-19b597ef9f1a/arrows_circle_remove.svg" class="del-item" data-id="<?= $id ?>" style="width:20px;height:20px;border:0;">
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php endif;?>

    <div class="t706__cartwin-bottom">
        <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm" style="display: block;">
            <span class="t706__cartwin-prodamount-label">Сумма:&nbsp;</span>
            <span class="t706__cartwin-prodamount"><?= $session['cart.sum'] ?>&nbsp;грн</span>
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['name' => 'calculator']]); ?>
            <?= $form->field($model, 'name') ?>

            <?= $form->field($model, 'phone') ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'city', ['options' => ['placefolder' => 'Выберите город']])->dropDownList([
                "" => "Выберите город",
                "Киев" => "Киев",
                "Харьков" => "Харьков",
                "Одесса" => "Одесса",
                "Днепр" => "Днепр",
                "Донецк" => "Донецк",
                "Запорожье" => "Запорожье",
                "Львов" => "Львов",
                "Кривой Рог" => "Кривой Рог",
                "Николаев" => "Николаев",
                "Севастополь" => "Севастополь",
                "Мариуполь" => "Мариуполь",
                "Луганск" => "Луганск",
                "Винница" => "Винница",
                "Макеевка" => "Макеевка",
                "Симферополь" => "Симферополь",
                "Херсон" => "Херсон",
                "Полтава" => "Полтава",
                "Чернигов" => "Чернигов",
                "Черкассы" => "Черкассы",
                "Хмельницкий" => "Хмельницкий",
                "Черновцы" => "Черновцы",
                "Житомир" => "Житомир",
                "Сумы" => "Сумы",
                "Ровно" => "Ровно",
                "Горловка" => "Горловка",
                "Ивано-Франковск" => "Ивано-Франковск",
                "Каменское" => "Каменское",
                "Кропивницкий" => "Кропивницкий",
                "Тернополь" => "Тернополь",
                "Кременчуг" => "Кременчуг",
                "Луцк" => "Луцк",
                "Белая Церковь" => "Белая Церковь",
                "Краматорск" => "Краматорск",
                "Мелитополь" => "Мелитополь",
                "Керчь" => "Керчь",
                "Ужгород" => "Ужгород",
                "Славянск" => "Славянск",
                "Никополь" => "Никополь",
                "Бердянск" => "Бердянск",
                "Алчевск" => "Алчевск",
                "Евпатория" => "Евпатория",
                "Бровары" => "Бровары",
                "Павлоград" => "Павлоград",
                "Северодонецк" => "Северодонецк",
            ]); ?>
            <input type="submit" class="btn btn-success" value="send">
            <?php ActiveForm::end() ?>
            <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
                <a href="/official" style="">политикой конфиденциальности.</a>
            </div>
        </div>
    </div>
</div>
