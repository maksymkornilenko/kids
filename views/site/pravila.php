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