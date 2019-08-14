<?php


namespace app\models;
use Yii;
use yii\base\Model;

class Form extends Model
{
    public $name;
    public $tel;
    public $city;
    public $list;
    public $count;
    public $sum;
    public $price;

    public function rules()
    {
        return [
            // username and password are both required
            [['name', 'tel','city','list','count','sum','price'], 'required'],
            [['list','count','sum','price'], 'required'],
            // tel must be a telephone value
            ['tel', 'match', 'pattern' => '/^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/', 'message' => 'Телефон, должно быть в формате 8(XXX)XXX-XX-XX'],
            // tel must be a int
            ['count','match','pattern' => "/(?<![-.])\b[0-9]+\b(?!\.[0-9])/",'message' => 'Только положительные целые числа'],
        ];
    }
}