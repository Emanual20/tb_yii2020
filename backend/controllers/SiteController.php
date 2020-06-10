<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\TbDemandGoods;
use common\models\TbDemandGoodsSearch;
use backend\models\TbBulletinboard;
use backend\models\TbBulletinboardSearch;
use yii\bootstrap\Alert;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public $layout = "newlayout";

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'demand', 'add', 'delete', 'form', 'show', 'newb'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'add' => ['post'],
                    'delete' => ['post'],
                    'show' => ['post','get'],
					'newb' => ['post'],
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
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = "main";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /*
    *Jump to demands management 
    *
    * @return string
    */
    public function actionDemand()
    {
        $searchModel = new TbDemandGoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('/tb-demand-goods/newindex', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionForm()
    {
        return $this->render('/tb-demand-goods/newform', [
        ]);
    }

    public function actionShow(){
		$searchModel=new TbBulletinboardSearch();
		$dataProvider=$searchModel->search(Yii::$app->request->queryParams);

		return $this->render('/TbBulletinboard/newindex', [
			'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
		]);
	}

	public function actionNewb(){
		return $this->render('/TbBulletinboard/newform', [
        ]);
	}
}
