<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property string $id
 * @property int $created_at
 * @property int $updated_at
 * @property int $count
 * @property double $sum
 * @property string $client_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $area
 * @property string $city
 * @property string $warehouse
 *
 * @property OrderItems[] $orderItems
 * @property Clients $client
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
            [['created_at', 'updated_at', 'count', 'sum', 'client_id', 'name', 'email', 'phone', 'area', 'city', 'warehouse'], 'required'],
            [['created_at', 'updated_at', 'count', 'client_id'], 'integer'],
            [['sum'], 'number'],
            [['name', 'email', 'phone', 'area', 'city', 'warehouse'], 'string', 'max' => 255],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clients::className(), 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'count' => 'Count',
            'sum' => 'Sum',
            'client_id' => 'Client ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'area' => 'Area',
            'city' => 'City',
            'warehouse' => 'Warehouse',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
