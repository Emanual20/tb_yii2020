<?php
/**
*  Team: TB2020, NKU
*  Coding by Jiang-tian Zhai 1812326, 20200611
*/
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dxyarea */

$this->title = 'Update Dxyarea: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dxyareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dxyarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
