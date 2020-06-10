<?php

namespace  backend\controllers;

use Yii;
use common\models\TbDemandGoods;
use common\models\TbDemandGoodsSearch;
use Exception;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use common\models\TbGoodsType;
/**
 * TbDemandGoodsController implements the CRUD actions for TbDemandGoods model.
 */
class TbDemandGoodsController extends Controller
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
     * Lists all TbDemandGoods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TbDemandGoodsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbDemandGoods model.
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
     * Creates a new TbDemandGoods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TbDemandGoods();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_dgId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbDemandGoods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_dgId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbDemandGoods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the TbDemandGoods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbDemandGoods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbDemandGoods::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionAdd()
    {
        echo "<script>alert(124)</script>";
        $addrow = new TbDemandGoods();
        $request = \Yii::$app->request;
        $uid = $request->post('UserID', null);
        if ($uid == "" or $uid == null){
            $addrow->tb_dgUser = Yii::$app->user->identity->id;
        }else{
            $addrow->tb_dgUser = $request->post('UserID', null);
        }
        $addrow->tb_dgType = $request->post('DType', null);
        if (!is_int($addrow->tb_dgType)){
            $arr = TbGoodsType::find()->all();
            $cnt = count($arr);
            for($i = 0; $i < $cnt; $i++){
                $tmp = ArrayHelper::getValue($arr[$i],'tb_gtName', $default = true);
                if ($tmp ==$addrow->tb_dgType ){
                    $addrow->tb_dgType = ArrayHelper::getValue($arr[$i],'tb_gtId', $default = true);
                    break;
                }
            }
        }
        $addrow->tb_dgNum = $request->post('DNum', null);
        $addrow->tb_dgPrice = $request->post('DPrice', null);
        $addrow->tb_dgRemark = $request->post('DDetail', null);
        $addrow->tb_dgAddress = $request->post('DAddress', null);
        if($addrow->validate()){
            echo "<script>alert('success')</script>";
            $addrow->save();
        }else{
            echo "<script>alert($addrow->tb_dgType)</script>";
        }
        return $this->redirect(['site/demand']);
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
        return $this->redirect(['site/demand']);
    }
}
