<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Form;
use Yii;
use yii\base\Controller;

class CartController extends Controller
{
    public function actionIndex()
    {
        $model = new Form();
        return $this->render('index', ['model'=>$model,
            ]);
    }
    public function actionAdd()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT * FROM `system_products` where `id`=$id")->queryAll();
        if (empty($model)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionChange()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT * FROM `system_products` where `id`=$id")->queryAll();
        if (empty($model)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->changeInCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionRemove()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT * FROM `system_products` where `id`=$id")->queryAll();
        if (empty($model)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->removeFromCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.count');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionDelete(){
        $id = (int)Yii::$app->request->get('id');
        $session=Yii::$app->session;
        $session->open();
        $model= new Cart();
        $model->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
}