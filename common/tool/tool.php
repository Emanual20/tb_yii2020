<?php
    namespace common\tool;
    use Yii;
    use common\models\TbDemandGoods;
    use common\models\TbDemandGoodsSearch;
    use yii\web\Controller;
    use yii\web\NotFoundHttpException;
    use yii\helpers\ArrayHelper;
    use yii\filters\VerbFilter;
    class tool{
        /*
        * return all records in TbDemandGoods
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
                        <form action="/tb_yii2020/tb_yii2020/backend/web/index.php?r=site%2Fdelete" method="post">
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
                $uid = ArrayHelper::getValue($thearray,'tb_dgUser', $default = true);
                $did = ArrayHelper::getValue($thearray,'tb_dgId', $default = true);
                $dType = ArrayHelper::getValue($thearray,'tb_dgType', $default = true);
                $dPrice = ArrayHelper::getValue($thearray,'tb_dgPrice', $default = true);
                $dNum = ArrayHelper::getValue($thearray,'tb_dgNum', $default = true);
                $dRemark= ArrayHelper::getValue($thearray,'tb_dgRemark', $default = true);
                echo tool::getAllRecords($uid, $did, $dType, $dNum, $dPrice, $dRemark);
            }
        }

        public static function echoAllRecordsWithEdit($array, $request){
            $totalnum = count($array);
            for ($i=0; $i < $totalnum; $i++) { 
                $thearray = $array[$i];
                $uid = ArrayHelper::getValue($thearray,'tb_dgUser', $default = true);
                $did = ArrayHelper::getValue($thearray,'tb_dgId', $default = true);
                $dType = ArrayHelper::getValue($thearray,'tb_dgType', $default = true);
                $dPrice = ArrayHelper::getValue($thearray,'tb_dgPrice', $default = true);
                $dNum = ArrayHelper::getValue($thearray,'tb_dgNum', $default = true);
                $dRemark= ArrayHelper::getValue($thearray,'tb_dgRemark', $default = true);
                echo tool::getAllRecordsWithEdit($request, $uid, $did, $dType, $dNum, $dPrice, $dRemark);
            }
        }
    }
?>