<?php
    namespace common\tool;
    use Yii;
    use backend\models\TbOrderStatus;
    use backend\models\TbOrderStatusSearch;
	use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\helpers\ArrayHelper;
    use yii\filters\VerbFilter;
    class tool3{
        /*
        * return all types in TbOrderStatus
        */
        public static function echoAllOTypes(){
            $dTypeArr = TbOrderStatus::find()->all();
            $total = count($dTypeArr);
            $dTypes = ArrayHelper::getColumn($dTypeArr,'tb_osRemark', $keepKeys = false);
            $dTypeids = ArrayHelper::getColumn($dTypeArr,'tb_osId', $keepKeys = false);
            for ($i=0; $i < $total; $i++){
                $type1 = $dTypes[$i];
                echo("<option value = $dTypeids[$i]>$type1</option>");
            } 
        }
    }

?>