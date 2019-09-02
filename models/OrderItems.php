<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $system_product_id
 * @property string $name
 * @property double $price
 * @property int $count_item
 * @property double $sum_item
 *
 * @property Orders $order
 * @property SystemProducts $systemProduct
 */
class OrderItems extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'system_product_id', 'name', 'price', 'count_item', 'sum_item'], 'required'],
            [['order_id', 'system_product_id', 'count_item'], 'integer'],
            [['price', 'sum_item'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['system_product_id'], 'exist', 'skipOnError' => true, 'targetClass' => SystemProducts::className(), 'targetAttribute' => ['system_product_id' => 'id']],
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSystemProduct()
    {
        return $this->hasOne(SystemProducts::className(), ['id' => 'system_product_id']);
    }
}