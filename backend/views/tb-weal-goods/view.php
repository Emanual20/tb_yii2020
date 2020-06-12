<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbWealGoods */

$this->title = $model->tb_wgId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Weal Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-weal-goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tb_wgId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tb_wgId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tb_wgId',
            'tb_wgUser',
            'tb_wgType',
            'tb_wgNum',
            'tb_wgPrice',
            'tb_wgRemark:ntext',
            'tb_wgAddress',
        ],
    ]) ?>

</div>
