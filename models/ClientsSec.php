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
            [['name'], 'required', 'message'=>'Введите пожалуйста ваше полное имя'],
            [['email'], 'required', 'message'=>'Введите пожалуйста ваш E-mail'],
            [['phone'], 'required', 'message'=>'Введите пожалуйста ваш телефон'],
            [['email'], 'email', 'message'=>'Введите пожалуйста корректный E-mail'],
            [['phone_raw'], 'required'],
            [['phone_raw'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            ['phone', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должно быть в формате 8(XXX)XXX-XX-XX'],
            [['phone'], 'unique'],
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
