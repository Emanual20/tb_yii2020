<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBulletinboard */

$this->title = 'Update Tb Bulletinboard: ' . $model->tb_bId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bulletinboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tb_bId, 'url' => ['view', 'id' => $model->tb_bId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bulletinboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
