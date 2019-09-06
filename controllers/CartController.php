<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Form;
use app\models\Orders;
use app\models\SqlRequests;
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
        $requests = new SqlRequests();
        $areas = $requests->showAreas();
        $model = $requests->showCart($gender, $id);
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $contactForm = new Orders();
        $cart->addToCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session, 'model' => $contactForm, 'areas' => $areas,]);
    }

    public function actionChange()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $gender = (int)Yii::$app->request->get('gender');
        $count = !$count ? 1 : $count;
        $requests = new SqlRequests();
        $model = $requests->showCart($gender, $id);
        $areas = $requests->showAreas();
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $contactForm = new Orders();
        $cart->changeInCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session, 'model' => $contactForm, 'areas' => $areas,]);
    }

    public function actionRemove()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $gender = (int)Yii::$app->request->get('gender');
        $count = !$count ? 1 : $count;
        $requests = new SqlRequests();
        $areas = $requests->showAreas();
        $model = $requests->showCart($gender, $id);
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $contactForm = new Orders();
        $cart->removeFromCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session, 'model' => $contactForm, 'areas' => $areas, 'cities' => '']);
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.count');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionArea()
    {
        $areasRef = (string)Yii::$app->request->get('value');
        $requests = new SqlRequests();
        $city = $requests->showCities($areasRef);
        $areas = $requests->showAreas();
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session, 'areas' => $areas, 'model' => $contactForm, 'cities' => $city]);
    }

    public function actionCity()
    {
        $areasRef = (string)Yii::$app->request->get('value');
        $cityRef = (string)Yii::$app->request->get('city');
        $requests = new SqlRequests();
        $city = $requests->showCities($areasRef);
        $warehouse = $requests->showWarehouses($cityRef);
        $areas = $requests->showAreas();
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session, 'areas' => $areas, 'model' => $contactForm, 'cities' => $city, 'warehouse' => $warehouse,]);
    }

    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        $contactForm = new Orders();
        $requests = new SqlRequests();
        $areas = $requests->showAreas();
        return $this->render('cart-modal', ['session' => $session, 'model' => $contactForm, 'areas' => $areas]);
    }

    public function actionDelete()
    {
        $id = (int)Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $model = new Cart();
        $contactForm = new Orders();
        $requests = new SqlRequests();
        $model->recalc($id);
        $this->layout = false;
        $areas = $requests->showAreas();
        return $this->render('cart-modal', ['session' => $session, 'areas' => $areas, 'model' => $contactForm]);
    }

    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        $contactForm->name = Yii::$app->request->post('name');
        $contactForm->phone = Yii::$app->request->post('phone');
        $contactForm->email = Yii::$app->request->post('mail');
        $contactForm->area = Yii::$app->request->post('area');
        $contactForm->city = Yii::$app->request->post('city');
        $contactForm->warehouse = Yii::$app->request->post('warehouse');
        $contactForm->count = $session['cart.count'];
        $contactForm->sum = $session['cart.sum'];
        if ($contactForm->save()) {
            $saveItems = new OrderItems();
            $saveItems->saveOrderItems($session['cart'], $contactForm->id);
            Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
            $session->remove('cart');
            $session->remove('cart.count');
            $session->remove('cart.sum');
        } else {
            Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
        }
        $this->layout = false;
        return $this->render('cart-modal');
    }
}