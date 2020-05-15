<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TbDemandGoods */

$this->title = $model->tb_dgId;
$this->params['breadcrumbs'][] = ['label' => 'Tb Demand Goods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-demand-goods-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tb_dgId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tb_dgId], [
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
            'tb_dgId',
            'tb_dgUser',
            'tb_dgType',
            'tb_dgNum',
            'tb_dgPrice',
            'tb_dgRemark:ntext',
            'tb_dgAddress',
        ],
    ]) ?>

</div>
