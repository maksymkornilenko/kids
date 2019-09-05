<?php


namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($model, $count = 1)
    {

        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['count'] += $count;
        } else {
            $_SESSION['cart'][$model['id']] = [
                'count' => $count,
                'name' => $model['body'],
                'price' => $model['price'],
                'gender' => $model['name'],
                'gender_id' => $model['gender_id'],
                'system_products_id' => $model['system_products_id'],
            ];
        }
        $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $count : $count;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $count * $model['price'] : $count * $model['price'];
    }
    public function changeInCart($model, $count = 1)
    {

        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['countchange'] = $count-$_SESSION['cart'][$model['id']]['count'];
            $_SESSION['cart'][$model['id']]['count']=$count;
        } else {
            $_SESSION['cart'][$model['id']] = [
                'countchange' => $count,
                'name' => $model['body'],
                'price' => $model['price'],
                'gender' => $model['name'],
                'gender_id' => $model['gender_id'],
                'system_products_id' => $model['system_products_id'],
            ];
        }
        $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] + $_SESSION['cart'][$model['id']]['countchange'] : $count;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $_SESSION['cart'][$model['id']]['countchange']* $model['price'] : $count * $model['price'];
    }
    public function removeFromCart($model, $count = 1)
    {

        if (isset($_SESSION['cart'][$model['id']])) {
            $_SESSION['cart'][$model['id']]['count'] -= $count;
        }
        if ($_SESSION['cart'][$model['id']]['count']==0){
            $this->recalc($model['id']);
        }
        $_SESSION['cart.count'] = isset($_SESSION['cart.count']) ? $_SESSION['cart.count'] - $count : $count;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] - $count * $model['price'] : $count * $model['price'];
    }

    public function recalc($id)
    {
        if (!isset($_SESSION['cart'][$id])) return false;
        $countMinus = $_SESSION['cart'][$id]['count'];
        $sumMinus = $_SESSION['cart'][$id]['count'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.count'] -= $countMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
    }
}