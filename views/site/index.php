<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Здоровый перекус</h1>

        <p class="lead"> ДЛЯ АКТИВНОГО РЕБЕНКА ОТ DISNEY Kitchen
            С любимыми героями Disney
        </p>
        <?php
            Modal::begin([
                'header' => '<h2>Набор продукции DISNEY Kitchen</h2>',
                'toggleButton' => [
                    'label' => 'ПОПРОБОВАТЬ',
                    'tag' => 'button',
                    'class' => 'btn btn-success',
                ],
                'footer' => 'Низ окна',
            ]);
        ?>
        <p>
            Батончики и вафли Disney Kitchen - отличный перекус, который можно взять с собой
        </p>
        <select id="change" onchange="myFunction()" onload="myFunction()">
            <option value="300">9 батончиков + 1 упак. вафель </option>
            <option value="500">18 батончиков + 2 упак. вафель </option>
            <option value="600">27 батончиков + 3 упак. вафель </option>
            <option value="700">54 батончика + 6 упак. вафель  </option>
        </select>
        <button class='minus'>-</button>
        <input class='singleInfo__price' value='1'>
        <button class='plus'>+</button>
        <p id="demo">300</p>
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'tel') ?>

        <?= $form->field($model, 'city') ?>
        <div class="form-group">
            <?= Html::submitButton('Купить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
            <?php Modal::end(); ?>
        <?php
            Modal::begin([
                'header' => '<h2>Набор продукции DISNEY Kitchen</h2>',
                'toggleButton' => [
                    'label' => 'закрыты',
                    'tag' => 'button',
                    'class' => 'btn btn-success',
                ],
                'footer' => 'Низ окна',
            ]);
        ?>
        <?php Modal::end()?>
    </div>
<!--footer-->
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
    <!--footer-->

</div>
