<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
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
                    'id'=>'максимкин гавно код'
                ],
                'options'=>['id'=>'test1'],
                'footer' => 'Низ окна',
            ]);
        ?>
        <p>
            Батончики и вафли Disney Kitchen - отличный перекус, который можно взять с собой
        </p>

        <?php $form = ActiveForm::begin(['id' => 'contact-form','options'=>['name'=>'calculator']]); ?>
        <?=$form->field($model,'list')->dropDownList(
                ['300'=>'9 батончиков + 1 упак. вафель',
            "500"=>'18 батончиков + 2 упак. вафель',
            "600"=>'27 батончиков + 3 упак. вафель',
            '700'=>'54 батончика + 6 упак. вафель'])?>
        <?= $form->field($model,'price')->textInput(['value'=>0,
            'readonly'=> true])?>
        <table>
            <td>
                <div class="form-group">
                    <?= Html::button('-', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'id'=>'minus','onclick'=>'calculate()']) ?>
                </div>
            </td>
            <td>
                <?= $form->field($model, 'count')->textInput(['value'=>1,"max"=>250])?>
            </td>
            <td>
                <div class="form-group">
                    <?= Html::button('+', ['class' => 'btn btn-primary', 'name' => 'contact-button','id'=>'plus','onclick'=>'calculate()']) ?>
                </div>
            </td>
        </table>
        <?= $form->field($model, 'sum')->textInput(['readonly'=> true])?>
        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'tel') ?>

        <?= $form->field($model, 'city') ->dropDownList([
                0=>"",
                1=>"Киев",
                2=>"Харьков",
                3=>"Одесса",
                4=>"Днепр",
                5=>"Донецк",
                6=>"Запорожье",
                7=>"Львов",
                8=>"Кривой Рог",
                9=>"Николаев",
                10=>"Севастополь",
                11=>"Мариуполь",
                12=>"Луганск",
                13=>"Винница",
                14=>"Макеевка",
                15=>"Симферополь",
                16=>"Херсон",
                17=>"Полтава",
                18=>"Чернигов",
                19=>"Черкассы",
                20=>"Хмельницкий",
                21=>"Черновцы",
                22=>"Житомир",
                23=>"Сумы",
                24=>"Ровно",
                25=>"Горловка",
                26=>"Ивано-Франковск",
                27=>"Каменское",
                28=>"Кропивницкий",
                29=>"Тернополь",
                30=>"Кременчуг",
                31=>"Луцк",
                32=>"Белая Церковь",
                33=>"Краматорск",
                34=>"Мелитополь",
                35=>"Керчь",
                36=>"Ужгород",
                37=>"Славянск",
                38=>"Никополь",
                39=>"Бердянск",
                40=>"Алчевск",
                41=>"Евпатория",
                42=>"Бровары",
                43=>"Павлоград",
                44=>"Северодонецк",
            ]); ?>
        <div class="form-group">
            <?= Html::submitButton('Купить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'id'=>"nextmodal", "data-dismiss"=>"modal", "data-toggle"=>"modal", "data-target"=>"#exampleModal2",]) ?>
        </div>
        <?php ActiveForm::end(); ?>
            <?php Modal::end(); ?>
        <!-- Modal 2 -->
        <?php
        Modal::begin([
            'header' => '<h2>Набор продукции DISNEY Kitchen</h2>',
            'options'=>['id'=>'exampleModal2',
                'class'=>"modal fade",
                'tabindex'=>"-1",
                'role'=>"dialog",
                'aria-labelledby'=>"exampleModalLabel",
                'aria-hidden'=>"true"],
            'footer' => 'Низ окна',
        ]);
        ?>
        <div class="modal-body">
            <p>Ваш заказ принят</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"  data-toggle="modal" data-target="#exampleModal">Close</button>
        </div>
        <?php Modal::end();?>
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
<?php var_dump($model->name);?>
</div>
