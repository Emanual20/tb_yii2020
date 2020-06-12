<?php
/**
*  Coding by Sakura, 20200611
*/
    namespace common\tool;
    use Yii;
    use backend\models\TbOrders;
    use backend\models\TbOrdersSearch;
	use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\helpers\ArrayHelper;
    use yii\filters\VerbFilter;
    class tool2{
        /*
        * return all records in TbOrders
        */
        public static function getAllRecords($oID, $oSellID, $oBuyID, $ostatus){
            $ret =<<<EOF
            <tr>
                <td>$oID</td>
                <td>$oSellID</td>
                <td>$oBuyID</td>
                <td>$ostatus</td>
            </tr>
            EOF;
            return $ret;
        }
        
        public static function echoAllRecords($array){
            $totalnum = count($array);
            for ($i=0; $i < $totalnum; $i++) { 
                $thearray = $array[$i];
                $oID = ArrayHelper::getValue($thearray,'tb_oId', $default = true);
                $oSellID = ArrayHelper::getValue($thearray,'tb_oSellId');
                $oBuyID = ArrayHelper::getValue($thearray,'tb_oBuyId');
				$ostatus = ArrayHelper::getValue($thearray,'tb_ostatus');

				$sql="SELECT tb_osRemark FROM tb_order_status WHERE tb_osId=";
				$sql=$sql.$ostatus;
				$ostatus_remark=Yii::$app->db->createCommand($sql)->queryAll()[0]['tb_osRemark'];

                echo tool2::getAllRecords($oID, $oSellID, $oBuyID, $ostatus_remark);
            }
        }
    }

?>