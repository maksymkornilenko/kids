<?php


namespace app\controllers;


use app\models\Cart;
use app\models\ClientsSec;
use app\models\LiqPay;
use app\models\Orders;
use app\models\SqlRequests;
use Yii;
use yii\base\Controller;
use app\models\OrderItems;
use yii\helpers\Json;
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
        $model = $requests->showCart($gender, $id);
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionChange()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $gender = (int)Yii::$app->request->get('gender');
        $count = !$count ? 1 : $count;
        $requests = new SqlRequests();
        $model = $requests->showCart($gender, $id);
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->changeInCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionRemove()
    {
        $id = (int)Yii::$app->request->get('id');
        $count = (int)Yii::$app->request->get('count');
        $gender = (int)Yii::$app->request->get('gender');
        $count = !$count ? 1 : $count;
        $requests = new SqlRequests();
        $model = $requests->showCart($gender, $id);
        if (empty($model)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->removeFromCart($model[0], $count);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
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

        foreach ($city as $cities) {
            $answer[] = '<option value="' . $cities['ref'] . '">' . $cities['description_ru'] . '</option>';
        }
        return Json::encode($answer);


    }

    public function actionCity()
    {
        $cityRef = (string)Yii::$app->request->get('city');
        $requests = new SqlRequests();
        $warehouse = $requests->showWarehouses($cityRef);
        foreach ($warehouse as $warehouses) {
            $answer[] = '<option value="' . $warehouses['ref'] . '">' . $warehouses['description_ru'] . '</option>';
        }
        return Json::encode($answer);
    }

    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session,]);
    }

    public function actionDelete()
    {
        $id = (int)Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $model = new Cart();
        $model->recalc($id);
        $this->layout = false;
        return $this->render('cart-modal', ['session' => $session]);
    }

    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $contactForm = new Orders();
        $clientForm = new ClientsSec();
        $requests = new SqlRequests();
        $cart=new Cart();
        $clientForm->name = Yii::$app->request->post('name');
        $clientForm->phone = Yii::$app->request->post('phone');
        $clientForm->phone_raw = preg_replace('/[^0-9]/', '', $clientForm->phone);
        $clientForm->email = Yii::$app->request->post('mail');
        $contactForm->area = Yii::$app->request->post('area');
        $contactForm->city = Yii::$app->request->post('city');
        $contactForm->warehouse = Yii::$app->request->post('warehouse');
        $contactForm->count = $session['cart.count'];
        $contactForm->sum = $session['cart.sum'];
        $contactForm->pay = Yii::$app->request->post('pay');
        if ($contactForm->pay == 'cash'){
            $contactForm->status_payment ='По получению';
        }elseif ($contactForm->pay == 'liqpay'){
            $contactForm->status_payment ='Не оплачен';
        }
        $sqlclients = $requests->showClient($clientForm->phone_raw);
//        var_dump($sqlclients);
//        die();
        if (empty($sqlclients)) {
            if ($clientForm->save()) {
                $contactForm->client_id = $clientForm->id;
                if ($contactForm->save()) {
                    if ($contactForm->pay == 'liqpay') {
                        $liqpay = new LiqPay('sandbox_i33464885106', 'sandbox_1nQJFsmet0SdrTosYnmrantM9ntnUWWKr62F71B9');
                        if (empty($session['cart'])) {
                            $html = $liqpay->cnb_form(array(
                                'action' => 'pay',
                                'amount' => '0',
                                'currency' => 'UAH',
                                'description' => 'empty',
                                'order_id' => $contactForm->id,
                                'version' => '3',
                                'server_url'=>'http://kids/',
                                'result_url'=>'http://kids/',
                            ));
                        } else {
                            $html = $liqpay->cnb_form(array(
                                'action' => 'pay',
                                'amount' => $session['cart.sum'],
                                'currency' => 'UAH',
                                'description' => 'Оплата по заказу №' . $contactForm->id,
                                'order_id' => $contactForm->id,
                                'version' => '3',
                                'server_url'=>'http://kids/',
                                'result_url'=>'http://kids/',
                            ));
                        }
                        $cart->saveOrder($contactForm->id);
                    }
                    $saveItems = new OrderItems();
                    $saveItems->saveOrderItems($session['cart'], $contactForm->id);
                    Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                    $session->remove('cart');
                    $session->remove('cart.count');
                    $session->remove('cart.sum');
                } else {
                    Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
                }
            }
        } else if (!empty($sqlclients)) {
            $contactForm->client_id = $sqlclients['0']['id'];
            if ($contactForm->save()) {
                if ($contactForm->pay == 'liqpay') {
                    $liqpay = new LiqPay('sandbox_i33464885106', 'sandbox_1nQJFsmet0SdrTosYnmrantM9ntnUWWKr62F71B9');
                    if (empty($session['cart'])) {
                        $html = $liqpay->cnb_form(array(
                            'action' => 'pay',
                            'amount' => '0',
                            'currency' => 'UAH',
                            'description' => 'empty',
                            'order_id' => $contactForm->id,
                            'version' => '3',
                            'server_url'=>'http://kids/',
                            'result_url'=>'http://kids/',
                        ));
                    } else {
                        $html = $liqpay->cnb_form(array(
                            'action' => 'pay',
                            'amount' => $session['cart.sum'],
                            'currency' => 'UAH',
                            'description' => 'Оплата по заказу №' . $contactForm->id,
                            'order_id' => $contactForm->id,
                            'version' => '3',
                            'server_url'=>'http://kids/',
                            'result_url'=>'http://kids/',
                        ));
                    }
                    $cart->saveOrder($contactForm->id);
                }
                $saveItems = new OrderItems();
                $saveItems->saveOrderItems($session['cart'], $contactForm->id);
                Yii::$app->session->setFlash('success', "Ваш заказ номер №$contactForm->id получен, менеджер в ближайшее время с вами свяжется");
                $session->remove('cart');
                $session->remove('cart.count');
                $session->remove('cart.sum');
            } else {
                Yii::$app->session->setFlash('error', 'Ваш заказ не получен');
            }
        }
        $this->layout = false;
        return $this->render('cart-modal', ['liqpay' => $html,]);
    }
    public function actionStatus(){
    }
    public function actionRedirect()
    {
        return Yii::$app->response->redirect(Url::to('/'));
    }


//    public function actionGetSelectOption($deliveryId, $type, $code = '', $orderId = 0)
//    {
//        Yii::$app->response->format = Response::FORMAT_JSON;
//        $answer = ['options' => [], 'success' => false];
//        if ($orderId != 0) {
//            $order = CRMOrder::find()->select(['delivery_region_title', 'delivery_city', 'delivery_department_id', 'delivery_region_code', 'delivery_city_code', 'delivery_department_code'])->where(['id' => $orderId])->one();
//        }
//        if ($deliveryId == CRMDelivery::NOVAPOSHTA) {
//            switch ($type) {
//                case CRMNovaposhta::TYPE_AREA:
//                    $regionSelected = false;
//                    $isSelected = false;
//                    $data = NPAreas::find()->select(['ref', 'description_ru'])->orderBy('description_ru')->all();
//                    if ($order->delivery_region_title == '') {
//                        $dataCity = NPCities::find()->select(['area_ref'])->where(['description_ru' => $order->delivery_city])->one();
//                        $dataArea = NPAreas::find()->select(['ref', 'description_ru'])->where(['ref' => $dataCity->area_ref])->one();
//                        $order->delivery_region_title = $dataArea->description_ru;
//                    }
//                    if ($data) {
//                        $answer['success'] = true;
//                        $answer['options'][] = '<option value="" selected>Пусто</option>';
//                        foreach ($data as $value) {
//                            if ($order && $order->delivery_region_title == $value['description_ru'] || $order->delivery_region_code == $value['ref'] || $order->delivery_region_code == $value['description_ru']) {
//                                $regionSelected = true;
//                                $isSelected = true;
//                            }
//                            $answer['options'][] =  '<option value="' . $value['description_ru'] . '" ' . ($regionSelected ? 'selected' : '') . '>' . $value['description_ru'] . '</option>';
//                            $regionSelected = false;
//                        }
//                        if ($isSelected == false) {
//                            $answer['options'][] =  '<option value="' . $order->delivery_region_title . '" selected>' . $order->delivery_region_title . ' (Нет в базе)</option>';
//                        }
//                    }
//                    break;
//                case CRMNovaposhta::TYPE_CITY:
//                    if ($code) {
//                        $npRegion = NPAreas::find()->select(['ref', 'description_ru'])->where(['description_ru' => $code])->one();
//                        $data = NPCities::find()->select(['ref', 'description_ru'])->where(['area_ref' => $npRegion->ref])->orderBy('description_ru')->all();
//                    }
//
//                    if ($order->delivery_city && !$data) {
//                        $data = NPCities::find()->select(['ref', 'description_ru'])->where(['description_ru' => $order->delivery_city])->orderBy('description_ru')->all();
//                    }
//
//                    if ($data) {
//                        $answer['success'] = true;
//                        $answer['options'][] = '<option value="">Пусто</option>';
//                        foreach ($data as $value) {
//                            if ($order && $order->delivery_city == $value['description_ru'] || $order->delivery_city_code == $value['ref']) {
//                                $citySelected = true;
//                                $isSelected = true;
//                            }
//                            $answer['options'][] =  '<option value="' . $value['description_ru'] . '" ' . ($citySelected ? 'selected' : '') . '>' . $value['description_ru'] . '</option>';
//                            $citySelected = false;
//                        }
//                        if ($isSelected == false) {
//                            $answer['options'][] =  '<option value="' . $order->delivery_city . '" selected>' . $order->delivery_city . ' (Нет в базе)</option>';
//                        }
//                    } else {
//                        $answer['options'][] =  '<option value="' . $order->delivery_city . '" selected>' . $order->delivery_city . ' (Нет в базе)</option>';
//                    }
//                    break;
//                case CRMNovaposhta::TYPE_WAREHOUSE:
//                    $warehouseSelected = false;
//                    $isSelected = false;
//                    $npCity = NPCities::find()->select(['ref', 'description_ru'])->where(['description_ru' => $code])->one();
//                    $data = NPWarehouses::find()->select(['ref', 'description_ru', 'number'])->where(['city_ref' => $npCity->ref])->orWhere(['description_ru' => $code])->orderBy('number')->all();
//                    if ($data) {
//                        $answer['success'] = true;
//                        $answer['options'][] = '<option value="">Пусто</option>';
//                        foreach ($data as $value) {
//                            if ($order && ($order->delivery_department_code == $value['ref']) || $order->delivery_department_id == $value['number']) {
//                                $warehouseSelected = true;
//                                $isSelected = true;
//                            }
//                            $answer['options'][] =  '<option value="' . $value['number'] . '" ' . ($warehouseSelected ? 'selected' : '') . '>' . $value['description_ru'] . '</option>';
//                            $warehouseSelected = false;
//                        }
//                        if ($isSelected == false) {
//                            $answer['options'][] =  '<option value="' . $order->delivery_department_id . '" selected>' . $order->delivery_department_id . ' (Нет в базе)</option>';
//                        }
//                    }
//                    break;
//            }
//        }
//        return $answer;
//    }
}

//============================================================================================
