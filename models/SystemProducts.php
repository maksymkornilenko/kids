<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "system_products".
 *
 * @property string $id
 * @property string $name
 * @property string $body
 * @property string $price
 *
 * @property OrderItems[] $orderItems
 * @property SystemProductsGenders[] $systemProductsGenders
 */
class SystemProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'system_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'body', 'price'], 'required'],
            [['price'], 'integer'],
            [['name', 'body'], 'string', 'max' => 255],
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['system_product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSystemProductsGenders()
    {
        return $this->hasMany(SystemProductsGenders::className(), ['system_products_id' => 'id']);
    }
}
