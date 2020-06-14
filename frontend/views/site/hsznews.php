<?php
/**
*  Team: TB2020, NKU
*  Coding by Ke-yuan Chang 1811338, 20200611
*/
/* @var $this yii\web\View */

use frontend\assets;
use frontend\assets\AppAsset;

$this->title = 'Welcome';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php
    echo "测试";
    $json_string = file_get_contents('C:\xampp\htdocs\tb_yii2020\tb_yii2020\json\news.json');
    $data = json_decode($json_string, true); 
    // var_dump($json_string);
    var_dump($data);
?>