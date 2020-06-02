<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\TbDemandGoods;
use common\models\TbDemandGoodsSearch;
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
                        'actions' => ['logout', 'index','demand', 'add', 'delete', 'form'],
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

    public function actionAdd()
    {
        $addrow = new TbDemandGoods();
        $request = \Yii::$app->request;
        $addrow->tb_dgUser = $request->post('UserID', null);
        $addrow->tb_dgType = $request->post('DType', null);
        $addrow->tb_dgNum = $request->post('DNum', null);
        $addrow->tb_dgPrice = $request->post('DPrice', null);
        $addrow->tb_dgRemark = $request->post('DDetail', null);
        $addrow->tb_dgAddress = $request->post('DAddress', null);
        if($addrow->validate()){
            $addrow->save();
        }else{
            echo "<script>alert('failed add')</script>";
        }
        return $this->redirect(['demand']);
    }

    public function actionDelete()
    {
        $id = \Yii::$app->request->post('pid', null);
        $delrow = TbDemandGoods::findOne($id);
        if($delrow->validate()){
            $delrow->delete();
            echo "<script>alert('del success')</script>";
        }else{
            echo "<script>alert('del fail')</script>";
        }
        return $this->redirect(['demand']);
    }
}
