<?php

/**
* Coding by Sakura, 20200609
**/

namespace backend\controllers;

use Yii;
use backend\models\TbBulletinboard;
use backend\models\TbBulletinboardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * TbBulletinboardController implements the CRUD actions for TbBulletinboard model.
 */
class TbBulletinboardController extends Controller
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
                        'actions' => ['sss'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
					'sss' => ['POST'], 
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TbBulletinboard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TbBulletinboardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbBulletinboard model.
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
     * Creates a new TbBulletinboard model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TbBulletinboard();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_bId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbBulletinboard model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tb_bId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbBulletinboard model.
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
     * Finds the TbBulletinboard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbBulletinboard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbBulletinboard::findOne($id)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

	public function actionSss(){
        $addrow = new TbBulletinboard();
        $request = \Yii::$app->request;
        $addrow->tb_bUserid=$request->post("UserID",null);
		$addrow->tb_bContent=$request->post("Content",null);
		$nowtime=Yii::$app->db->createCommand('SELECT SYSDATE() AS nowtime')->queryAll();
		$addrow->tb_bPosttime=$nowtime[0]['nowtime'];
        if($addrow->validate()){
            $addrow->save();
        }else{
            echo "<script>alert('failed add')</script>";
        }
        return $this->redirect(['site/show']);
	}
}
