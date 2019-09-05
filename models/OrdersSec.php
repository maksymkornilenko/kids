<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property string $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $count
 * @property double $sum
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $area
 * @property string $city
 * @property string $warehouse
 *
 * @property OrderItems[] $orderItems
 */
class OrdersSec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'count', 'sum', 'name', 'email', 'phone', 'area', 'city', 'warehouse'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['count'], 'integer'],
            ['phone', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должно быть в формате 8(XXX)XXX-XX-XX'],
            [['sum'], 'number'],
            [['name', 'email', 'phone', 'area', 'city', 'warehouse'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Полное имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'area' => 'Область',
            'city' => 'Город',
            'warehouse' => 'Отделение Новой почты',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }
}
