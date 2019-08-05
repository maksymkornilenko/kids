<?php


namespace app\models;
use Yii;
use yii\base\Model;

class Form extends Model
{
    public $name;
    public $tel;
    public $city;

    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'tel','city'], 'required'],
            // tel must be a telephone value
            ['tel', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефона, должно быть в формате 8(XXX)XXX-XX-XX'],
        ];
    }
}