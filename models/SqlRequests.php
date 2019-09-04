<?php


namespace app\models;


use Yii;
use yii\base\Model;

class SqlRequests extends Model
{
    public function showAreas(){
        return Yii::$app->db->createCommand("SELECT * from areas")->queryAll();
    }
    public function showCities($areasRef){
        $sqlCity = "SELECT * from cities where area_ref='" . $areasRef . "'ORDER BY `cities`.`description_ru` ASC";
        return Yii::$app->db->createCommand($sqlCity)->queryAll();
    }
    public function showWarehouses($cityRef){
        $sqlWarehouse = "SELECT * from warehouses where city_ref='" . $cityRef . "'ORDER BY `warehouses`.`description_ru` ASC";
        return Yii::$app->db->createCommand($sqlWarehouse)->queryAll();
    }
    public function showCart($gender, $id){
        return Yii::$app->db->createCommand("SELECT system_products_genders.id, system_products_genders.gender_id, system_products_genders.system_products_id, gender.name, system_products.body,system_products.price FROM `system_products_genders` LEFT JOIN gender on system_products_genders.gender_id=gender.id LEFT JOIN system_products on system_products_genders.system_products_id=system_products.id WHERE gender_id=$gender AND system_products_id=$id")->queryAll();
    }
}