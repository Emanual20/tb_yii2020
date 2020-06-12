<?php

namespace backend\controllers;

use Yii;
use backend\models\TbWealGoods;
use backend\models\TbWealGoodsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\TbGoodsType;
use yii\helpers\ArrayHelper;
/**
 * TbWealGoodsController implements the CRUD actions for TbWealGoods model.
 */
class TbWealGoodsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
			'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [ 'index', 'add', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
					'add' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TbWealGoods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TbWealGoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbWealGoods model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TbWealGoods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TbWealGoods();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_wgId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbWealGoods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_wgId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbWealGoods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TbWealGoods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbWealGoods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbWealGoods::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

	public function actionAdd()
    {
        echo "<script>alert(124)</script>";
        $addrow = new TbWealGoods();
        $request = \Yii::$app->request;
        $uid = $request->post('UserID', null);
        if ($uid == "" or $uid == null){
            $addrow->tb_wgUser = Yii::$app->user->identity->id;
        }else{
            $addrow->tb_wgUser = $request->post('UserID', null);
        }
        $addrow->tb_wgType = $request->post('WType', null);
        if (!is_int($addrow->tb_wgType)){
            $arr = TbGoodsType::find()->all();
            $cnt = count($arr);
            for($i = 0; $i < $cnt; $i++){
                $tmp = ArrayHelper::getValue($arr[$i],'tb_gtName', $default = true);
                if ($tmp ==$addrow->tb_wgType ){
                    $addrow->tb_wgType = ArrayHelper::getValue($arr[$i],'tb_gtId', $default = true);
                    break;
                }
            }
        }
        $addrow->tb_wgNum = $request->post('WNum', null);
        $addrow->tb_wgPrice = $request->post('WPrice', null);
        $addrow->tb_wgRemark = $request->post('WDetail', null);
        $addrow->tb_wgAddress = $request->post('WAddress', null);
        if($addrow->validate()){
            echo "<script>alert('success')</script>";
            $addrow->save();
        }else{
            echo "<script>alert($addrow->tb_wgType)</script>";
        }
        return $this->redirect(['site/weal']);
    }
}
