<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="1512102"
     data-tilda-page-id="6707587" data-tilda-page-alias="official"
     data-tilda-formskey="1d4ea27a866eee81264047165332dad0" style="overflow: hidden;">
    <div id="rec118407609" class="r t-rec t-rec_pt_210 t-rec_pb_15 r_showed r_anim"><!-- T017 -->
        <div class="t017">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t017__title t-title t-title_xxs" field="title" style="color:#501bb3;">Правила оплаты и доставки
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec118407610" class="r t-rec t-rec_pt_15 t-rec_pb_60 r_showed r_anim"><!-- T004 -->
        <div class="t004">
            <div class="t-container ">
                <div class="t-col t-col_10 t-prefix_1">
                    <div field="text" class="t-text t-text_md "
                         style="color:#220061;font-weight:100;font-family:'HelveticaNeueCyr';">
                        <div class="t396__elem tn-elem tn-elem__1184079341564148770389" data-elem-id="1564148770389">
                            <div class="tn-atom" field="tn_text_1564148770389">
                                Мы обрабатываем ваши заказы с понедельника по пятницу, с 9:00 до 18:00 и в субботу с 9:00 до 12:00.<br><br>
                                Отправляем как вам будет удобно, наложенным платежом или по полной предоплате. Отправка производиться курьерской компанией Новая почта.
                                Доставку оплачивает получатель согласно тарифам компании перевозчика.<br><br>
                                Если заказ сделан до 12:00 в рабочий день, то мы отправим его в этот же день, если после 12:00, то отправим на следующий рабочий день.<br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modals-for-site">
    <div>
        <?php

        use yii\bootstrap\Modal;

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
                                <option data-id="<?php echo $droplist['id'] ?>" data-count=1 data-product="<?= $droplist['price'] ?>"
                                        value="<?= $droplist['price'] ?>"><?= $droplist['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php Modal::end(); ?>
    </div>
</div>