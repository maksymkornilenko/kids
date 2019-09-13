<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property string $id
 * @property string $phone
 * @property string $name
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'name'], 'required'],
            [['phone'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 255],
            ['phone', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должно быть в формате 8(XXX)XXX-XX-XX'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phone' => 'Телефон',
            'name' => 'Имя',
        ];
    }
}
