<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\select2\Select2;

?>

<!--allrecords-->
<div id="allrecords"><!--header-->
    <!--/header-->
    <div id="main-container1">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <?php if (!empty($session['cart.count'])): ?>
                    <div class="t706__carticon t706__carticon_showed shopping-cart">
                        <div class="t706__carticon-text t-name t-name_xs">=&nbsp;<?php echo $session['cart.sum'] ?>
                            &nbsp;грн
                        </div>
                        <div class="t706__carticon-wrapper">
                            <div class="t706__carticon-imgwrap">
                                <img class="cart-icon" src="/img/cart.png"/>
                            </div>
                            <div class="t706__carticon-counter t706__carticon-imgwrap"
                                 style="background-color:#f86d0c;"><?php echo $session['cart.count'] ?></div>
                        </div>
                    </div>
                <?php else : ?>
                    <a id="button"><img src="/img/arrow-up-solid.svg"></a>
                    <div class="t706__carticon t706__carticon_showed shopping-cart">
                        <div class="t706__carticon-text t-name t-name_xs">Ваша корзина пуста</div>
                        <div class="t706__carticon-wrapper">
                            <div class="t706__carticon-imgwrap">
                                <img class="cart-icon" src="/img/cart.png"/>
                            </div>
                            <div class="t706__carticon-counter t706__carticon-imgwrap"
                                 style="background-color:#f86d0c;">0
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class='main-inform-container__elem tn-elem' elem-id='1563999965486'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur3.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564000031057'>
                    <div class='tn-atom'>
                        <img class="tn-atom__img t-img loaded" src="/img/__.png">
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564000058158'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur4.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564000076968'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur4.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564000161300'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/HealthMeal.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564001894745'>
                    <div class='tn-atom' field='tn_text_1564001894745'>ДЛЯ АКТИВНОГО РЕБЕНКА ОТ DISNEY Kitchen</div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564001954966'>
                    <div class='tn-atom' field='tn_text_1564001954966'>
                        С любимыми героями Disney
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem ' elem-id='1564002048659'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/happykids.png'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-container2" class="r t-rec">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210011265'>
                    <div class='tn-atom'>
                        Продукты DISNEY Kitchen отвечают <br>всем европейским и международным нормам питания для детей
                        дошкольного <br>и школьного возраста
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564002562443'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/sticks.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564002597820'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/SpiderMan.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564002638555'>
                    <div class='tn-atom t-bgimg' id="t-bgimg1" src="/img/orangeblock.png">

                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564002808502'>
                    <div class='tn-atom'>
                        9 батончиков<br>+ 1 упак. вафель
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564002925381'>
                    <a id="order300uah" class='tn-atom open-order' data-product="300">300грн</a>
                </div>

                <div class='main-inform-container__elem tn-elem' elem-id='1564002969763'>

                </div>

                <div class='main-inform-container__elem tn-elem' elem-id='1564003025781'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/manystickswaffles.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003055699'>
                    <div class='tn-atom t-bgimg' id="t-bgimg3" src="/img/orangeblock.png">
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003055707'>
                    <div class='tn-atom'>
                        18 батончиков<br>+ 2 упак. вафель
                    </div>
                </div>
                <div class="t396__elem tn-elem" data-elem-id="1564003055711">
                    <div class='main-inform-container__elem tn-elem' elem-id='1564003055718'>
                        <a class='tn-atom open-order' id="order500uah" data-product="500">500грн</a>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003055722'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/manystickswaffles.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003092931'>
                    <div class='tn-atom t-bgimg' id="t-bgimg5" src="/img/orangeblock.png">
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003092940'>
                    <div class='tn-atom'>
                        27 батончиков<br>+ 3 упак. вафель
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003092944'>
                    <a class='tn-atom open-order' id="order600uah" data-product="600">600грн</a>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003092955'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/manystickswaffles.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003136562'>
                    <div class='tn-atom t-bgimg' id="t-bgimg7" src="/img/orangeblock.png">
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003136568'>
                    <div class='tn-atom'>
                        54 батончика<br>+ 6 упак. вафель <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003136573'>
                    <a class='tn-atom open-order' id="order900uah" data-product="900">900грн</a>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003136584'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/manystickswaffles.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003205180'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/rapunzel.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003233740'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/verybigorangeblur.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003254227'>
                    <a class='tn-atom open-order' data-product="300"'>ПОПРОБОВАТЬ</a>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564003647323'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/ironman.png'>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-container3" class="r t-rec">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470233923389'>
                    <div class='tn-atom'>
                        Батончики и вафли Disney любят и мамы, и дети!
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088349090'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/rapunzellong.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088380779'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088478342'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088537338'>
                    <div class='tn-atom'>
                        Интересно
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088635074'>
                    <div class='tn-atom'>
                        Любимые персонажи на упаковке позволят ребенку почувствовать себя настоящим супергероем
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088682667'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088682673'>
                    <div class='tn-atom'>
                        Вкусно
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088682678'>
                    <div class='tn-atom'>
                        Батончики обладают насыщенным фруктовым вкусом - малыш <br>будет в восторге
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088719876'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088719883'>
                    <div class='tn-atom'>
                        Полезно
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088719887'>
                    <div class='tn-atom'>
                        Сложные углеводы наполняют энергией и стимулируют умственную деятельность
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088783638'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/smallblur.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088873336'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/rapunzelstick.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564088952506'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur7.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564089183204'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/ironmanstick.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-inform-container -->
    </div>
    <div id="href-to-polezno" class="r t-rec">
        <a name="profits">

        </a>
    </div>
    <div id="main-container4" class="r t-rec t-rec_pt_0">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210033144'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blur.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564089901023'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/daffyduck.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564089942025'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564089978892'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/verybigorangeblur.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090035300'>
                    <div class='tn-atom'>
                        Почему здоровый перекус <br>так важен?
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090074002'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090110217'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090254265'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">В течении дня надо </span>поддерживать стабильный уровень
                        энергии в растущем организме и не делать больших перерывов между приемами пищи.
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090304375'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/1.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090322320'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/2.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090365565'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Школа, внеклассные занятия, прогулка...</span> полноценно поесть
                        вовремя активному ребенку удается далеко не всегда.
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090402039'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090402047'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Шоколадки, чипсы и сладкие батончики</span> с транс жирами не
                        подходят для растущего организма. Такой перекус только вредит малышу.
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564090402052'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/3.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117132486'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117132496'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Результат: падает успеваемость</span>, ребенок становится вялым
                        и капризным. Не хочет идти на занятия в кружках и секциях. С ним сложно договориться.
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117132501'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/4.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117210509'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117210519'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Фрукты и сухофрукты</span> спасают ситуацию, но пачкают руки и
                        одежду. Такой перекус надоедает и ребенку хочется чего-то модного. <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117210523'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/5.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117262553'>
                    <div class='tn-atom'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117262560'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Домашние бутерброды </span>перебивают аппетит - после них
                        ребенок не захочет полноценно обедать или ужинать.
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117262565'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564117399646'>
                    <a class='tn-atom open-order' data-product="300">ЕСТЬ РЕШЕНИЕ</a>
                </div>
            </div>
        </div>
        <!-- /main-inform-container -->
    </div>
    <div id="main-container5" class="r t-rec t-rec_pt_0">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210011265'>
                    <div class='tn-atom'>
                        Батончики и вафли Disney Kitchen отличный перекус, который<br>можно взять с собой!<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210033144'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/aladdin.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139442354'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur2.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139467150'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur1.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139534978'>
                    <div class='tn-atom'>
                        Вкусно и удобно <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139559380'>
                    <div class='tn-atom'>
                        Вафли Disney Kitchen не пачкают руки и ими весело хрустеть. А сладкий фруктовый батончик можно
                        есть прямо из упаковки.<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139605200'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur1.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139605207'>
                    <div class='tn-atom'>
                        Идеальная порция<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139605211'>
                    <div class='tn-atom'>
                        Малыш не откажется от обеда - порция рассчитана как раз чтобы утолить голод и насытить энергией
                        до основного приема пищи. <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139685625'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur4.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139685632'>
                    <div class='tn-atom'>
                        Модно <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139685636'>
                    <div class='tn-atom'>
                        Дети любят делиться и повторять друг за другом. Здоровый перекус для принцесс, героев мультиков
                        и комиксов сделает вашего ребенка самым модным! <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139748410'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur3.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139748417'>
                    <div class='tn-atom'>
                        Полезный состав <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139748421'>
                    <div class='tn-atom'>
                        Без трансжиров, с минимальным содержанием соли и сахара. В составе только то, что дает энергию
                        на длительный срок.<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139841213'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139841222'>
                    <div class='tn-atom'>
                        Привлекательный дизайн <br> <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564139841227'>
                    <div class='tn-atom'>
                        Вредные сладости в ярких упаковках больше не интересны, когда есть батончики с любимыми героями
                        Disney и Marvel.<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564142163343'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/blueblur5.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564142163353'>
                    <div class='tn-atom'>
                        Подходящий размер <br> <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564142163356'>
                    <div class='tn-atom'>
                        Не займет много места в рюкзаке и поместится в карман, когда ребенок идет гулять. В другой
                        карман положите батончик для друзей.<br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564142253265'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564142307674'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur6.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-inform-container -->
    </div>
    <div id="main-container6" class="r t-rec">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210033144'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/bigblank.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564143789930'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/SpiderManlittle.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564143811725'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur6.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564143881017'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/verybigorangeblur.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564143904798'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/cup.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564143930214'>
                    <div class='tn-atom'>
                        Новые достижения вашего ребенка
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144027787'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">В школе - отличные оценки </span><br>Высокое содержание сложных
                        углеводов стимулирует умственную активность. Малыш останется сосредоточенным на всех уроках и
                        порадует вас своей успеваемостью. <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144046881'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/big1.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144072922'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">На тренировке - большие успехи </span><br>Перекусив перед
                        тренировкой батончиками и вафлями Disney, ребенок будет активным до конца занятия. Так
                        результаты достигаются быстрее - не удивляйтесь, что скоро вы станете мамой чемпиона! <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144078246'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/big2.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144092172'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/disney-infinity-iron.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144166964'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">Учиться новому - веселее и проще</span> <br> Музыка, рисование,
                        английский - все занятия даются ребенку легко, ведь полезный перекус зарядил энергией. Вам
                        больше не придется уговаривать пойти на урок - ведь у него достаточно сил и тяги к новому. <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144189599'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/big3.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144233083'>
                    <div class='tn-atom'>
                        <span style="font-weight: 700;">На прогулке </span><br>Сегодня я - Капитан Америка, а ты -
                        Железный человек. Батончиками Disney Kitchen легко угостить друга и собрать настоящую команду
                        Мстителей. Вперед, спасать Вселенную! <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564144248452'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/big4.png'>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-inform-container -->
    </div>
    <div id="href-to-about" class="r t-rec">
        <a name="about" style="font-size:0;"></a>
    </div>
    <div id="main-container7" class="r t-rec">
        <!-- main-inform-container -->
        <div class='main-inform-container'>
            <div class="main-inform-container__artboard">
                <div class="main-inform-container__carrier">

                </div>
                <div class="main-inform-container__filter">

                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210033144'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/purple.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564145516221'>
                    <div class='tn-atom'>
                        Вам не все равно, чем питается ребенок? <br> DISNEY Kitchen - это гарантия безопасности здоровья
                        вашего малыша! <br>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564145549919'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/orangeblur2.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1564145587130'>
                    <div class='tn-atom'>
                        <img class='tn-atom__img t-img' src='/img/gin.png'>
                    </div>
                </div>
                <div class='main-inform-container__elem tn-elem' elem-id='1470210011265'>
                    <div class='tn-atom'>
                        DISNEY - крупный международный бренд, которому можно доверять <br>Продукты DISNEY Kitchen
                        отвечают всем европейским <br>и международным нормам питания для детей <br>дошкольного и
                        школьного возраста<br>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main-inform-container -->
    </div>
    <div id="href-to-contacts" class="r t-rec">
        <a name="contacts" style="font-size:0;"></a>
    </div>
</div>
<div class="modals-for-site">
    <div>
        <?php
        Modal::begin([
            'header' => '<div class="modalimg">
            <img src="/img/Modalpicture.png"/>
        </div>',
            'options' => ['id' => 'form-modal'],
            'footer' => '<div class="t766__bottom-wrapper">
                <div class="t766__price-wrapper">
                    <div class="t766__price t766__price-item t-name t-name_xl" style="color:#ff5805;">
                        <div class="t766__price-value price-value" field="price" data-redactor-toolbar="no" data-product-price-def="300" data-product-price-def-str="300">300</div>
                        <div class="t766__price-currency">грн</div>
                    </div>
                </div>
                <div class="t766__btn-wrapper t766__btn-bottom">
                    <span target="" class="t766__btn t-btn t-btn_sm add-to-cart" style="color:#ffffff;background-color:#ff8800;border-radius:15px; -moz-border-radius:15px; -webkit-border-radius:15px;font-family:HelveticaNeueCyr;font-weight:400;text-transform:uppercase;box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);">
                        <table style="width:100%; height:100%;">
                            <tbody>
                            <tr>
                                <td>Купить</td>
                            </tr>
                            </tbody>
                        </table>
                    </span>
                </div>
            </div>',
        ]);
        ?>
        <div class="t766__wrapper t-align_left">
            <div class="t766__title-wrapper">
                <div class="t766__title t-heading t-heading_lg js-product-name"
                     style="color:#621dd1;font-size:20px;font-weight:600;font-family:'HelveticaNeueCyr';text-transform:uppercase;">
                    Набор продукции DISNEY Kitchen
                </div>
                <div class="t766__title_small t-descr t-descr_sm js-product-sku" style="color:#621dd1;">
                    Батончики и вафли Disney Kitchen - отличный перекус, который можно взять с собой
                </div>
            </div>
            <div class="t766__options-wrapper">
                <div class="t-product__option js-product-option">
                    <div class="t-product__option-title t-descr t-descr_xxs js-product-option-name"
                         style="color:#31007a;">
                        Выберите для кого этот набор
                    </div>
                    <div class="t-product__option-variants">
                        <select class="t-product__option-select t-descr t-descr_xxs gender">
                            <option value="мальчик" data-id="1">мальчик</option>
                            <option value="девочка" data-id="2">девочка</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <div class="t-product__option js-product-option">
                    <div class="t-product__option-title t-descr t-descr_xxs js-product-option-name"
                         style="color:#31007a;">Набор
                    </div>
                    <div class="t-product__option-variants">
                        <select class="t-product__option-select t-descr t-descr_xxs js-product-option-variants dropdown-list">
                            <?php foreach ($list as $droplist) : ?>
                                <option data-id="<?php echo $droplist['id'] ?>" data-count=1
                                        data-product="<?= $droplist['price'] ?>"
                                        value="<?= $droplist['price'] ?>"><?= $droplist['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php Modal::end(); ?>
        <?php Modal::begin([
            'id' => 'cart',
            'size' => 'model-lg',
            'options' => [
                'tabindex' => false
            ]]); ?>
        <div class="modal-body2">
            <h3>
                <p>Корзина пуста</p>
            </h3>
        </div>
        <div class="t706__cartwin-bottom">
            <div class="t706__cartwin-prodamount-wrap t-descr t-descr_sm">
                <?php $form = ActiveForm::begin(['id' => '1contact-form', 'options' => ['name' => 'calculator1']]); ?>
                <?= $form->field($model, 'name') ?>
                <p class="error-name"></p>
                <?= $form->field($model, 'phone') ?>
                <p class="error-phone"></p>
                <?= $form->field($model, 'email') ?>
                <p class="error-email"></p>
                <?= $form->field($model, 'area')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($areas, 'ref', 'description_ru'),
                    'options' => ['placeholder' => 'Выберите область ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
                <?= $form->field($model, 'city')->widget(Select2::classname(), [
                    'data' => [],
                    'options' => ['placeholder' => 'Выберите  город ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
                <?= $form->field($model, 'warehouse')->widget(Select2::classname(), [
                    'data' => [],
                    'options' => ['placeholder' => 'Выберите  отделение Новой почты ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
                <?php ActiveForm::end() ?>

                <div class="t706__form-bottom-text t-text t-text_xs">Нажимая кнопку отправить, я соглашаюсь с
                    <a href="/site/official" style="">политикой конфиденциальности.</a>
                </div>
                <div class="error-send"></div>
                <a href="/cart/view" class="btn btn-success sendOrder">Оформить заказ</a>
                <button type="button" class="btn btn-danger clearCart">Очистить корзину</button>
            </div>
        </div>
        <?php Modal::end();
        ?>
    </div>
</div>

