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
        <h1><img src="img/HealthMeal.png"></h1>
        <div class="lead"> ДЛЯ АКТИВНОГО РЕБЕНКА ОТ DISNEY Kitchen</div>
        <div>С любимыми героями Disney</div>
        </div>
        <div><img src="img/happykids.png"> </div>
    <div>
        <div>
            Продукты DISNEY Kitchen отвечают
            <br>
            всем европейским и международным нормам питания для детей дошкольного
            <br>
            и школьного возраста
        </div>
    </div>
    <div>
        <img src="img/SpiderMan.png">
        <img src="img/sticks.png">
    </div>
    <div>
        <div>
            <div><img src="img/manystickswaffles.png"></div>
            <div>
                <div>
                    <p>
                        9 батончиков + 1 упак. вафель
                    </p>
                </div>
                <div>
                    <a>
                        <p>
                            300грн
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div><img src="img/manystickswaffles.png"></div>
            <div>
                <div>
                    <p>
                        18 батончиков
                        + 2 упак. вафель
                    </p>
                </div>
                <div>
                    <a>
                        <p>
                            500грн
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div><img src="img/manystickswaffles.png"></div>
            <div>
                <div>
                    <p>
                        27 батончиков
                        + 3 упак. вафель
                    </p>
                </div>
                <div>
                    <a>
                        <p>
                            600грн
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <div><img src="img/manystickswaffles.png"></div>
            <div>
                <div>
                    <p>
                        54 батончика
                        + 6 упак. вафель
                    </p>
                </div>
                <div>
                    <a>
                        <p>
                            900грн
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div>
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
                <?= Html::submitButton('Купить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'id'=>"nextmodal"]) ?>
            </div>
            <?php ActiveForm::end(); ?>
            <?php Modal::end(); ?>
        </div>
        <div><img src="img/rapunzel.png"></div>
    </div>
    <div>Батончики и вафли Disney любят и мамы, и дети!</div>
    <div>
        <div>
            <img src="img/rapunzellong.png"
        </div>
    </div>
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
    <div>
        <img src="img/rapunzelstick.png">
    </div>
    <div>
        <img src="img/ironmanstick.png">
    </div>
    <div>
        <img src="img/daffyduck.png">
    </div>
    <div>
        <div>
            Почему здоровый перекус<br>
            так важен?
        </div>
        <div><img src="img/blur.png"></div>
        <div>
            <div>
                <img src="img/1.png">
            </div>
            <div>
                <span style="font-weight: 700;">В течении дня надо</span>
                поддерживать стабильный уровень энергии в растущем организме и не делать больших перерывов между приемами пищи.
            </div>
        </div>
        <div>
            <div>
                <img src="img/2.png">
            </div>
            <div>
                <span style="font-weight: 700;">Школа, внеклассные занятия, прогулка... </span>
                полноценно поесть вовремя активному ребенку удается далеко не всегда.
            </div>
        </div>
        <div>
            <div>
                <img src="img/3.png">
            </div>
            <div>
                <span style="font-weight: 700;">Шоколадки, чипсы и сладкие батончики</span>
                с транс жирами не подходят для растущего организма. Такой перекус только вредит малышу
            </div>
        </div><div>
            <div>
                <img src="img/4.png">
            </div>
            <div>
                <span style="font-weight: 700;">Результат: падает успеваемость, </span>
                ребенок становится вялым и капризным. Не хочет идти на занятия в кружках и секциях. С ним сложно договориться.
            </div>
        </div><div>
            <div>
                <img src="img/5.png">
            </div>
            <div>
                <span style="font-weight: 700;">Фрукты и сухофрукты </span>
                спасают ситуацию, но пачкают руки и одежду. Такой перекус надоедает и ребенку хочется чего-то модного.
            </div>
        </div>
        <div>
            <div>
                <img src="img/6.png">
            </div>
            <div>
                <span style="font-weight: 700;">Домашние бутерброды </span>
                перебивают аппетит - после них ребенок не захочет полноценно обедать или ужинать.
            </div>
        </div>
        <div>
<!--            todo кнопка заказа-->
        </div>
    </div>
    <div>
        <div>
            Батончики и вафли Disney Kitchen отличный перекус, который
            <br>
            можно взять с собой!
            <br>
        </div>
    </div>
    <div>
        <div>
            <img src="img/aladdin.png">
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur1.png">
        </div>
        <div>
            Идеальная порция<br>
        </div>
        <div>
            Малыш не откажется от обеда - порция рассчитана как раз чтобы утолить голод и насытить энергией до основного приема пищи.
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur2.png">
        </div>
        <div>
            Вкусно и удобно <br>
        </div>
        <div>
            Вафли Disney Kitchen не пачкают руки и ими весело хрустеть. А сладкий фруктовый батончик можно есть прямо из упаковки.
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur3.png">
        </div>
        <div>
            Полезный состав<br>
        </div>
        <div>
            Без трансжиров, с минимальным содержанием соли и сахара. В составе только то, что дает энергию на длительный срок.
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur4.png">
        </div>
        <div>
            Модно<br>
        </div>
        <div>
            Дети любят делиться и повторять друг за другом. Здоровый перекус для принцесс, героев мультиков и комиксов сделает вашего ребенка самым модным!
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur5.png">
        </div>
        <div>
            Подходящий размер<br>
        </div>
        <div>

            Не займет много места в рюкзаке и поместится в карман, когда ребенок идет гулять. В другой карман положите батончик для друзей.
        </div>
    </div>
    <div>
        <div>
            <img src="img/blueblur6.png">
        </div>
        <div>
            Привлекательный дизайн <br>
        </div>
        <div>
            Вредные сладости в ярких упаковках больше не интересны, когда есть батончики с любимыми героями Disney и Marvel.
        </div>
    </div>
    <div>
        <div><img src="img/SpiderManlittle.png" </div>
        <div><img src="img/cup.png" </div>
        <div><img src="img/bigblank.png" </div>
        <div>
            <div><img src="img/big1.png"></div>
            <div><span>В школе - отличные оценки</span></div>
            <div>
                Высокое содержание сложных углеводов стимулирует умственную активность. Малыш останется сосредоточенным на всех уроках и порадует вас своей успеваемостью.
            </div>
        </div>
        <div>
            <div><img src="img/big2.png"></div>
            <div><span>На тренировке - большие успехи</span></div>
            <div>
                Перекусив перед тренировкой батончиками и вафлями Disney, ребенок будет активным до конца занятия. Так результаты достигаются быстрее - не удивляйтесь, что скоро вы станете мамой чемпиона!
            </div>
        </div>
        <div>
            <div><img src="img/big3.png"></div>
            <div><span>Учиться новому - веселее и проще</span></div>
            <div>
                Музыка, рисование, английский - все занятия даются ребенку легко, ведь полезный перекус зарядил энергией. Вам больше не придется уговаривать пойти на урок - ведь у него достаточно сил и тяги к новому.
            </div>
        </div>
        <div>
            <div><img src="img/big4.png"></div>
            <div><span>На прогулке</span></div>
            <div>
                Сегодня я - Капитан Америка, а ты - Железный человек. Батончиками Disney Kitchen легко угостить друга и собрать настоящую команду Мстителей. Вперед, спасать Вселенную!
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal"  data-toggle="modal" data-target="#exampleModal">Close</button>
        </div>
        <?php Modal::end();?>
        <?php if(Yii::$app->session->hasFlash('sendForm') && Yii::$app->session->getFlash('sendForm')=='success'){
            ?>
            <script>
                <?php
                $this->registerJs(
                    "$('#myModal').modal('show');"
                );
                ?>
            </script>
        <?php } ?>
    <!--footer-->
</div>
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1512102" data-tilda-page-id="6683655" data-tilda-formskey="1d4ea27a866eee81264047165332dad0" style="overflow: hidden;">
    <div id="rec118067737" class="r t-rec" data-animationappear="off" data-record-type="396">
        <div class="t396">
            <div class="t396__artboard rendered" data-artboard-recid="118067737"></div>
        </div>
    </div>
    <div id="rec118072628" class="r t-rec" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118409153" class="r t-rec t-rec_pt_0" style="padding-top: 0px; opacity: 1;" data-animationappear="off" data-record-type="766">
        <div class="t766"></div>
        <div></div>
    </div>
    <div id="rec118281239" class="r t-rec" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118400508" class="r t-rec r_hidden r_anim" data-record-type="215">
        <a name="polezno" style="font-size:0;">
    </div>
    <div id="rec118283685" class="r t-rec t-rec_pt_0" style="padding-top:0px;" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118358563" class="r t-rec t-rec_pt_0" style="padding-top:0px;" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118386186" class="r t-rec" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118400166" class="r t-rec r_hidden r_anim" data-record-type="215">
        <a name="about" style="font-size:0;">
    </div>
    <div id="rec118392163" class="r t-rec" data-animationappear="off" data-record-type="396">
        <div class="t396"></div>
        <div></div>
    </div>
    <div id="rec118400691" class="r t-rec r_hidden r_anim" data-record-type="215">
        <a name="contacts" style="font-size:0;">
    </div>
</div>