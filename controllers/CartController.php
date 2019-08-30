<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Form;
use Yii;
use yii\base\Controller;

class CartController extends Controller
{
    public function actionAdd()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $gender = (int)Yii::$app->request->get('gender');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT system_products_genders.id, system_products_genders.gender_id, system_products_genders.system_products_id, gender.name, system_products.body,system_products.price FROM `system_products_genders` LEFT JOIN gender on system_products_genders.gender_id=gender.id LEFT JOIN system_products on system_products_genders.system_products_id=system_products.id WHERE gender_id=$gender AND system_products_id=$id")->queryAll();
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $contactForm = new Form();
        $cart->addToCart($model[0], $count, $gender);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
    public function actionChange()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT system_products_genders.id, system_products_genders.gender_id, system_products_genders.system_products_id, gender.name, system_products.body,system_products.price FROM `system_products_genders` LEFT JOIN gender on system_products_genders.gender_id=gender.id LEFT JOIN system_products on system_products_genders.system_products_id=system_products.id WHERE gender_id=$gender AND system_products_id=$id")->queryAll();
        if (empty($model)) return false;

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $contactForm = new Form();
        $cart->changeInCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
    public function actionRemove()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $count = !$count ? 1 : $count;
        $model = Yii::$app->db->createCommand("SELECT * FROM `system_products` where `id`=$id")->queryAll();
        if (empty($model)) return false;
        $contactForm = new Form();
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->removeFromCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
    public function actionClear(){
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.count');
        $session->remove('cart.sum');
        $contactForm = new Form();
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
    public function actionShow(){
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Form();
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
    public function actionDelete(){
        $id = (int)Yii::$app->request->get('id');
        $session=Yii::$app->session;
        $session->open();
        $model= new Cart();
        $contactForm = new Form();
        $model->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
    }
}