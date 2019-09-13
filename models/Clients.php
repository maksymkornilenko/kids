<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $phone_raw
 *
 * @property Orders[] $orders
 */
class ClientsSec extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'phone_raw'], 'required'],
            [['phone_raw'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['phone'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'phone_raw' => 'Phone Raw',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['client_id' => 'id']);
    }
}