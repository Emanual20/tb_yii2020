<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;
class HomeController extends Controller{
    public function init(){
        $this->enableCsrfValidation = false;
    }
    public function actionIndex(){
        $request = Yii::$app->request;
        if($request ->isPost){
            $username = $request ->post("username");
            $user = [
                "username" => $username,
            ];
            $article = [
                "title" => "例文",
            ];
            $data = [
                "username" => $username,
                "article" => $article
            ];
            //return $this->renderPartial("index", ["data" => $data]);
            return $this->renderPartial("index", compact('username', 'article'));
        }
        
    }

}