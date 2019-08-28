<?php

use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

?>
<?php if (!empty($session['cart'])): ?>
    <div>
        <table>
            <thead>
            <tr>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Сумма</th>
                <th><span class="glyphicon glyphicon-remove"></span></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($session['cart'] as $id => $item): ?>
                <tr>
                    <td class="cart_info"><a
                                href="<?= Url::to(['site/index', 'productId' => $id]) ?>"><?= $item['name'] ?></a></td>
                    <td class="cart_info">
                        <div class="form-group-minus">
                            <img src="/img/arrows_circle_minus.svg" data-id="<?= $id ?>" data-count="1" id="minus-cart">
                        </div>
                    </td>
                    <td class="cart_info"><input type="number" class="cart-count" data-id="<?= $id ?>"
                                                 value="<?= $item['count'] ?>"></td>
                    <td class="cart_info">
                        <div class="form-group-plus">
                            <img src="/img/arrows_circle_plus.svg" data-id="<?= $id ?>" data-count="1" id="plus-cart">
                        </div>
                    </td>
                    <td class="cart_info"><?= $item['price'] ?></td>
                    <td class="cart_info"><?= $item['count'] * $item['price'] ?></td>
                    <td class="cart_info"><span class="glyphicon glyphicon-remove text-danger del-item"
                                                data-id="<?= $id ?>" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td class="cart_info">Итого:</td>
                <td colspan="4"></td>
                <td class="cart_info"><?= $session['cart.count'] ?></td>
            </tr>
            <tr>
                <td class="cart_info">На сумму:</td>
                <td colspan="4"></td>
                <td class="cart_info"><?= $session['cart.sum'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options' => ['name' => 'calculator']]); ?>

    <?php ActiveForm::end()?>
<?php else: ?>
    <div>
        <h3>
            <p>Корзина пуста</p>
        </h3>
    </div>
<?php endif; ?>
