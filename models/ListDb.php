<?php


namespace app\models;


use Yii;
use yii\base\Model;

class ListDb extends Model
{
    public $id;
    public $name;
    public $price;

    public function getList()
    {
        $list = Yii::$app->db->createCommand('SELECT * FROM `system_products`')->queryAll();
        return $list;
    }
}