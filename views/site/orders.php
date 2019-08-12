<?php
use yii\helpers\Html;
?>
<p>Ваш заказ:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>tel</label>: <?= Html::encode($model->tel) ?></li>
    <li><label>city</label>: <?= Html::encode($model->city) ?></li>
    <li><label>list</label>: <?= Html::encode($model->list) ?></li>
    <li><label>count</label>: <?= Html::encode($model->count) ?></li>
    <li><label>sum</label>: <?= Html::encode($model->sum) ?></li>
    <li><label>price</label>: <?= Html::encode($model->price) ?></li>
</ul>
