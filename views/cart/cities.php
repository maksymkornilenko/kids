<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
$form=\yii\bootstrap\ActiveForm::begin();
$form->field($model, 'city')->widget(Select2::classname(), [
    'data' => ArrayHelper::map($cities, 'ref', 'description_ru'),
    'options' => ['placeholder' => 'Выберите город...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);?>