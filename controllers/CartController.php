<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Form;
use app\models\Orders;
use http\Header;
use Yii;
use yii\base\Controller;
use app\models\OrderItems;
use yii\helpers\Url;

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
        $contactForm = new Orders();
        $cart->addToCart($model[0], $count);
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
        $cart->changeInCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionRemove()
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
        $contactForm = new Orders();
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
        $this->layout = false;
        return $this->render('cart-modal',['session'=>$session]);
    }
    public function actionShow(){
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        $contactForm = new Orders();
        return $this->render('cart-modal',['session'=>$session,'model'=>$contactForm]);
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
//    public function actionSave(){
//        $name = Yii::$app->request->get('name');
//        $phone = Yii::$app->request->get('phone');
//        $mail = Yii::$app->request->get('mail');
//        $city = Yii::$app->request->get('city');
//        $session=Yii::$app->session;
//        $session->open();
//        $this->layout = false;
//        $contactForm = new Orders();
//        $contactForm->count=$session['cart.count'];
//        $contactForm->sum=$session['cart.sum'];
//        $model= new Cart();
//        $model->addToOrder($contactForm->count,$contactForm->sum,$name,$mail,$city);
//        $this->layout = false;
//        return $this->render('view',['session'=>$session,'model'=>$contactForm]);
//    }
    public function actionView(){
        $session=Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        if($contactForm->load(Yii::$app->request->post())){
            $contactForm->count=$session['cart.count'];
            $contactForm->sum=$session['cart.sum'];

            if($contactForm->save()){
                $this->saveOrderItems($session['cart'], $contactForm->id);
                Yii::$app->session->setFlash('success','Your order success');
                $session->remove('cart');
                $session->remove('cart.count');
                $session->remove('cart.sum');

            }else{
                Yii::$app->session->setFlash('error','Your order error');
            }
        }
        $model= new Cart();
        $this->layout = false;
        return $this->render('view',['session'=>$session,'model'=>$contactForm]);
        header('Location: http://kids/');
    }
    protected function saveOrderItems($items, $order_id){
        foreach ($items as $id=>$item){
            $order_items= new OrderItems();
            $order_items->order_id=$order_id;
            $order_items->system_product_id=$item['system_products_id'];
            $order_items->name=$item['name'];
            $order_items->price=$item['price'];
            $order_items->count_item=$item['count'];
            $order_items->sum_item=$item['count']*$item['price'];
            $order_items->save();
            header('Location: http://kids/');
        }

    }
}