<?php
    namespace common\tool;
    use Yii;
    use common\models\TbWealGoods;
    use common\models\TbWealGoodsSearch;
	use common\models\TbGoodsType;
	use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\helpers\ArrayHelper;
    use yii\filters\VerbFilter;
    class tool4{
        /*
        * return all records in TbWealGoods
        */
        public static function getAllRecords($uid, $did, $dType, $dNum, $dPrice, $dRemark){
            $ret =<<<EOF
            <tr>
                <td>$uid</td>
                <td>$did</td>
                <td>$dType</td>
                <td>$dPrice</td>
                <td>$dNum</td>
                <td>$dRemark</td>
            </tr>
            EOF;
            return $ret;
        }
        public static function getAllRecordsWithEdit($request, $uid, $did, $dType, $dNum, $dPrice, $dRemark){
            $ret =<<<EOF
            <tr>
                <td>$uid</td>
                <td>$did</td>
                <td>$dType</td>
                <td>$dPrice</td>
                <td>$dNum</td>
                <td>$dRemark</td>
                <td>
                    <div class="form-button-action">
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                            <i class="fa fa-edit"></i>
                        </button>
                        <form action="/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-weal-goods%2Fdelete" method="post">
                            <input type="hidden" name="_csrf-backend" value="<?=$request->csrfToken ?>">
                            <button name="pid" value=$did type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            
            EOF;
            return $ret;
        }
        
        public static function echoAllRecords($array){
            $totalnum = count($array);
            for ($i=0; $i < $totalnum; $i++) { 
                $thearray = $array[$i];
                $uid = ArrayHelper::getValue($thearray,'tb_wgUser', $default = true);
                $did = ArrayHelper::getValue($thearray,'tb_wgId', $default = true);
                $dTypeid = ArrayHelper::getValue($thearray,'tb_wgType', $default = true);
                $dTypeArr = TbGoodsType::findOne($dTypeid);
                $dType = ArrayHelper::getValue($dTypeArr,'tb_gtName', $default = true);
                $dPrice = ArrayHelper::getValue($thearray,'tb_wgPrice', $default = true);
                $dNum = ArrayHelper::getValue($thearray,'tb_wgNum', $default = true);
                $dRemark= ArrayHelper::getValue($thearray,'tb_wgRemark', $default = true);
                echo tool::getAllRecords($uid, $did, $dType, $dNum, $dPrice, $dRemark);
            }
        }

        public static function echoAllRecordsWithEdit($array, $request){
            $totalnum = count($array);
            for ($i=0; $i < $totalnum; $i++) { 
                $thearray = $array[$i];
                $uid = ArrayHelper::getValue($thearray,'tb_wgUser', $default = true);
                $did = ArrayHelper::getValue($thearray,'tb_wgId', $default = true);
                $dTypeid = ArrayHelper::getValue($thearray,'tb_wgType', $default = true);
                $dTypeArr = TbGoodsType::findOne($dTypeid);
                $dType = ArrayHelper::getValue($dTypeArr,'tb_gtName', $default = true);
                $dPrice = ArrayHelper::getValue($thearray,'tb_wgPrice', $default = true);
                $dNum = ArrayHelper::getValue($thearray,'tb_wgNum', $default = true);
                $dRemark= ArrayHelper::getValue($thearray,'tb_wgRemark', $default = true);
                echo tool::getAllRecordsWithEdit($request, $uid, $did, $dType, $dNum, $dPrice, $dRemark);
            }
        }
        public static function echoAllDmTypes(){
            $dTypeArr = TbGoodsType::find()->all();
            $total = count($dTypeArr);
            $dTypes = ArrayHelper::getColumn($dTypeArr,'tb_gtName', $keepKeys = false);
            $dTypeids = ArrayHelper::getColumn($dTypeArr,'tb_gtId', $keepKeys = false);
            for ($i=0; $i < $total; $i++){
                $type1 = $dTypes[$i];
                echo("<option value = $dTypeids[$i]>$type1</option>");
            } 
        }
    }

?>