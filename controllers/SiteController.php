<?php

namespace app\controllers;

use app\models\Areas;
use app\models\Callback;
use app\models\ClientsSec;
use app\models\Form;
use app\models\ListDb;
use app\models\Orders;
use app\models\SqlRequests;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\LiqPay;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Orders();
        $client= new ClientsSec();
        $list= new ListDb();
        $session=Yii::$app->session;
        $session->open();
        $callback= new Callback();
        $areas=Areas::find()->all();

//        if($model->load(Yii::$app->request->post())&&$model->validate()){
//            Yii::$app->session->setFlash('sendForm','success');
//
//        }
        return $this->render('index', ['model'=>$model,
            'list'=>$list->getList(),
            'session'=>$session,
            'areas'=>$areas,
            'callback'=>$callback,
            'client'=>$client,
            'liqpay'=>$html,
            ]);
    }
    public function actionOfficial()
    {
        $list= new ListDb();
        $session=Yii::$app->session;
        $session->open();
        return $this->render('official',['list'=>$list->getList(),
            'session'=>$session]);
    }
    public function actionOferta()
    {
        $list= new ListDb();
        $session=Yii::$app->session;
        $session->open();
        return $this->render('oferta',['list'=>$list->getList(),
            'session'=>$session]);
    }
    public function actionPravila()
    {
        $list= new ListDb();
        $session=Yii::$app->session;
        $session->open();
        return $this->render('pravila',['list'=>$list->getList(),
            'session'=>$session]);
    }
    /**
     * 3213
     */
    public function actionCheck() {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $answer = ['success' => 0];
        if (Yii::$app->request->isAjax) {
            $model= new Form();
            $model->load(Yii::$app->request->post());
            // обработка и валидациЯ
            if ($model->validate()) {
                $answer['success'] = 1;
            }

        }

        return $answer;
        //echo Json::encode($answer);
        //die;
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionCallback(){
        $callbackForm = new Callback();
        $callbackForm->name = Yii::$app->request->post('name');
        $callbackForm->phone = Yii::$app->request->post('phone');
        if ($callbackForm->save()) {
            Yii::$app->session->setFlash('successAnswer', "Спасибо, скоро мы с вами свяжемся");
        }else{
            Yii::$app->session->setFlash('errorAnswer', "Ошибка");
        }
        $this->layout = false;
        return $this->render('answer-callback');
    }
}
