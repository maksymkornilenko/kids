<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Orders;
use kartik\select2\Select2;
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
                        <div>Выберите для кого этот набор:<br><?= $item['gender'] ?></div>
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
                    <span class="t706__product-quantity cart-count" data-gender="<?= $item['gender_id'] ?>" data-id="<?= $item['system_products_id'] ?>"><?= $item['count'] ?></span>
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
<?php elseif (Yii::$app->session->hasFlash('success')): ?>
    <div>
        <h3>
            <div class="js-successbox t-form__successbox t-text t-text_md" style=""><?php echo Yii::$app->session->getFlash('success'); ?></div>
        </h3>
    </div>
<?php elseif (Yii::$app->session->hasFlash('error')): ?>
    <div>
        <h3>
            <div class="js-successbox t-form__errorbox t-text t-text_md" style=""><?php echo Yii::$app->session->getFlash('error'); ?></div>
        </h3>
    </div>
<?php else: ?>
    <div style="text-align: center">
        <h2>
            <p>Корзина пуста</p>
        </h2>
    </div>
<?php endif; ?>



