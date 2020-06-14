
<?php
/**
*  Team: TB2020, NKU
*  Coding by Han-zhang Lu 1811398, 0200614
*/
/* @var $this yii\web\View */

use frontend\assets;
use frontend\assets\AppAsset;

$this->title = '红十字接受物资情况';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php
    $json_string = file_get_contents('..\..\json\news.json');
    $data = json_decode($json_string, true); 
    //var_dump($data);
?>

<div class="site-contact">
    <h1>红十字接受物资情况</h1>
    <br/>
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>日期</th>
            <th>总计社会捐赠款物：万元</th>
            <th>接受资金：万元</th>
            <th>物资价值：万元</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $v) :?>
        <tr>
            <td><?=$v['date']?></td>
            <td><?=$v['total']?></td>
            <td><?=$v['cash']?></td>
            <td><?=$v['equip']?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>