<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<div class="site-index">
    <div class="jumbotron">
        <div class="orangeblur3">
            <img src="img/orangeblur3.png">
        </div>
        <div><img src="img/HealthMeal.png"></div>
        <div class="textprod"> <b>ДЛЯ АКТИВНОГО РЕБЕНКА ОТ DISNEY Kitchen</b></div>
        <div class="textprod"><b>С любимыми героями Disney</b></div>
        <div id="kids">
            <img src="img/happykids.png">
        </div>
        <div>
            <div class="textprod"><b>
                    Продукты DISNEY Kitchen отвечают
                    всем европейским и международным нормам питания для детей дошкольного
                    и школьного возраста
                </b>
            </div>
        </div>
        <div class="flexbox1">
            <img src="img/SpiderMan.png">
            <img src="img/sticks.png">
        </div>
        <div class="flexbox2">
            <div>
                <div><img src="img/manystickswaffles.png"></div>
                <div>
                    <div class="waffles">
                        <p>
                            9 батончиков +<br> 1 упак. вафель
                        </p>
                    </div>
                    <div class="waffles">
                        <a>
                            <p>
                                300грн
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="white">

            </div>
            <div>
                <div><img src="img/manystickswaffles.png"></div>
                <div>
                    <div class="waffles">
                        <p>
                            18 батончиков<br>
                            + 2 упак. вафель
                        </p>
                    </div>
                    <div class="waffles">
                        <a>
                            <p>
                                500грн
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="white">

            </div>
            <div>
                <div><img src="img/manystickswaffles.png"></div>
                <div>
                    <div class="waffles">
                        <p>
                            27 батончиков<br>
                            + 3 упак. вафель
                        </p>
                    </div>
                    <div class="waffles">
                        <a>
                            <p>
                                600грн
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="white">

            </div>
            <div>
                <div><img src="img/manystickswaffles.png"></div>
                <div>
                    <div class="waffles">
                        <p>
                            54 батончика<br>
                            + 6 упак. вафель
                        </p>
                    </div>
                    <div class="waffles">
                        <a>
                            <p>
                                900грн
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flexbox3">
        <div><img src="img/ironman.png"></div>
        <div>
            <?php
            Modal::begin([
                'header' => '<h2>Набор продукции DISNEY Kitchen</h2>',
                'toggleButton' => [
                    'label' => 'ПОПРОБОВАТЬ',
                    'tag' => 'button',
                    'class' => 'btn btn-success',
                    'id'=>'modalMain'
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

            <?= $form->field($model, 'tel'  ) ?>

            <?= $form->field($model, 'city') ->dropDownList([
                "Пусто"=>"",
                "Киев"=>"Киев",
                "Харьков"=>"Харьков",
                "Одесса"=>"Одесса",
                "Днепр"=>"Днепр",
                "Донецк"=>"Донецк",
                "Запорожье"=>"Запорожье",
                "Львов"=>"Львов",
                "Кривой Рог"=>"Кривой Рог",
                "Николаев"=>"Николаев",
                "Севастополь"=>"Севастополь",
                "Мариуполь"=>"Мариуполь",
                "Луганск"=>"Луганск",
                "Винница"=>"Винница",
                "Макеевка"=>"Макеевка",
                "Симферополь"=>"Симферополь",
                "Херсон"=>"Херсон",
                "Полтава"=>"Полтава",
                "Чернигов"=>"Чернигов",
                "Черкассы"=>"Черкассы",
                "Хмельницкий"=>"Хмельницкий",
                "Черновцы"=>"Черновцы",
                "Житомир"=>"Житомир",
                "Сумы"=>"Сумы",
                "Ровно"=>"Ровно",
                "Горловка"=>"Горловка",
                "Ивано-Франковск"=>"Ивано-Франковск",
                "Каменское"=>"Каменское",
                "Кропивницкий"=>"Кропивницкий",
                "Тернополь"=>"Тернополь",
                "Кременчуг"=>"Кременчуг",
                "Луцк"=>"Луцк",
                "Белая Церковь"=>"Белая Церковь",
                "Краматорск"=>"Краматорск",
                "Мелитополь"=>"Мелитополь",
                "Керчь"=>"Керчь",
                "Ужгород"=>"Ужгород",
                "Славянск"=>"Славянск",
                "Никополь"=>"Никополь",
                "Бердянск"=>"Бердянск",
                "Алчевск"=>"Алчевск",
                "Евпатория"=>"Евпатория",
                "Бровары"=>"Бровары",
                "Павлоград"=>"Павлоград",
                "Северодонецк"=>"Северодонецк",
            ]); ?>
            <div class="form-group">
                <span class="btn btn-primary" id="nextmodal">Купить</span>
<!--                --><?//= Html::submitButton('Купить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'id'=>"nextmodal"]) ?>
            </div>
            <?php ActiveForm::end(); ?>
            <?php Modal::end(); ?>
        </div>
        <div><img src="img/rapunzel.png"></div>
    </div>
    <div class="textprod"><b>Батончики и вафли Disney<br> любят и мамы, и дети!</b></div>

    <div class="flexbox4">
        <div>
            <img src="img/rapunzellong.png"
        </div>
        <div class="content-rapunz">
            <div>
                <div>Интересно</div>
                <div>Любимые персонажи на упаковке позволят ребенку почувствовать себя настоящим супергероем</div>
            </div>
            <div>
                <div>Вкусно</div>
                <div>Батончики обладают насыщенным фруктовым вкусом - малыш
                    будет в восторге</div>
            </div>
            <div>
                <div>Полезно</div>
                <div>Сложные углеводы наполняют энергией и стимулируют умственную деятельность</div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <?php
        Modal::begin([
            'header' => '<h2>Набор продукции DISNEY Kitchen</h2>',
            'options'=>['id'=>'myModal',
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
            <button type="button"  class="btn btn-secondary" data-dismiss="modal"  data-toggle="modal" data-target="#exampleModal">Close</button>
        </div>
        <?php Modal::end();?>
    <!--footer-->
</div>