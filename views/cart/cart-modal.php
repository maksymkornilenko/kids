<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Orders;

?>
<?php if (!empty($session['cart'])): ?>
    <!--версия 2.0-->
    <div class="t706__cartwin-heading t-name t-name_xl">Оставьте данные для оформления заказа</div>
    <div class="t706__cartwin-products">
        <?php foreach ($session['cart'] as $id => $item): ?>
            <div class="t706__product">
                <div class="t706__product-thumb">
                    <div class="t706__product-imgdiv"
                         style="background-image:url(/img/photo.png);">

                    </div>
                </div>
                <div class="t706__product-title t-descr t-descr_sm">Набор продукции DISNEY Kitchen
                    <div style="opacity:0.7;font-size:12px;font-weight:400;">
                        <div><?= $item['gender'] ?></div>
                        <div><?= $item['name'] ?></div>

                    </div>
                    <div style="opacity:0.7;font-size:12px;font-weight:400;">
                        Батончики и вафли Disney Kitchen - отличный перекус, который можно взять с собой
                    </div>

                </div>
                <div class="t706__product-plusminus t-descr t-descr_sm">
                    <span class="t706__product-minus">
                        <img src="/img/arrows_circle_minus.svg" style="width:16px;height:16px;border:0;"
                             data-id="<?= $item['system_products_id'] ?>" data-gender="<?= $item['gender_id'] ?>"
                             data-count="1" id="minus-cart">
                    </span>
                    <span class="t706__product-quantity cart-count" id='message' data-gender="<?= $item['gender_id'] ?>" data-id="<?= $item['system_products_id'] ?>"><?= $item['count'] ?></span>
                    <span class="t706__product-plus">
                        <img src="/img/arrows_circle_plus.svg" data-id="<?= $item['system_products_id'] ?>"
                             data-gender="<?= $item['gender_id'] ?>" data-count="1" id="plus-cart"
                             style="width:16px;height:16px;border:0;">
                    </span>
                </div>
                <div class="t706__product-amount t-descr t-descr_sm"><?= $item['count'] * $item['price'] ?>&nbsp;грн
                </div>
                <div class="t706__product-del">
                    <img src="https://static.tildacdn.com/lib/linea/1bec3cd7-e9d1-2879-5880-19b597ef9f1a/arrows_circle_remove.svg"
                         class="del-item" data-id="<?= $id ?>" style="width:20px;height:20px;border:0;">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="cartwin-prodamount-wrap t-descr t-descr_sm" style="display: block;">
        <span class="t706__cartwin-prodamount-label">Сумма:&nbsp;</span>
        <span class="t706__cartwin-prodamount"><?= $session['cart.sum'] ?>&nbsp;грн</span>
        <span class="t706__cartwin-count"><?= $session['cart.count'] ?></span>
    </div>
    <div class="t706__cartwin-bottom">
        <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm" style="display: block;">
            <?php $form = ActiveForm::begin(['id' => '1contact-form', 'options' => ['name' => 'calculator1']]); ?>
            <?= $form->field($model, 'name') ?>
            <p class="error-name"></p>
            <?= $form->field($model, 'phone') ?>
            <p class="error-phone"></p>
            <?= $form->field($model, 'email') ?>
            <p class="error-email"></p>
            <?= $form->field($model, 'area')->dropDownList(ArrayHelper::map($areas, 'ref', 'description_ru'),[
                'prompt' => 'Выберите область...'
            ]); ?>
            <p class="error-area"></p>
            <?php if (!empty($cities)): ?>
                <?= $form->field($model, 'city')->dropDownList(ArrayHelper::map($cities, 'ref', 'description_ru'),['prompt' => 'Выберите город...']); ?>
                <p class="error-city"></p>
            <?php elseif (!empty($areas) && empty($cities)): ?>
                <?= $form->field($model, 'city')->dropDownList(['' => 'Выберите сначала область']); ?>
                <p class="error-city"></p>
            <?php endif; ?>
            <?php if (!empty($warehouse)): ?>
                <?= $form->field($model, 'warehouse')->dropDownList(ArrayHelper::map($warehouse, 'ref', 'description_ru'),['prompt' => 'Выберите отделение Новой почты...']); ?>
                <p class="error-warehouse"></p>
            <?php else: ?>
                <?= $form->field($model, 'warehouse')->dropDownList(['' => 'Введите сначала город']); ?>
                <p class="error-warehouse"></p>
            <?php endif; ?>
            <?php ActiveForm::end() ?>
            <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
                <a href="site/official" style="">политикой конфиденциальности.</a>
            </div>
            <a href="/cart/view" class="btn btn-success sendOrder">Оформить заказ</a>
            <button type="button" class="btn btn-danger clearCart">Очистить корзину</button>
        </div>
    </div>
<?php elseif (Yii::$app->session->hasFlash('success')): ?>
    <div>
        <h3>
            <p><?php echo Yii::$app->session->getFlash('success'); ?></p>
        </h3>
    </div>
<?php elseif (Yii::$app->session->hasFlash('error')): ?>
    <div>
        <h3>
            <p><?php echo Yii::$app->session->getFlash('error'); ?></p>
        </h3>
    </div>
<?php else: ?>
    <div style="text-align: center">
        <h2>
            <p>Корзина пуста</p>
        </h2>
    </div>
<?php endif; ?>



