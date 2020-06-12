<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dxyarea */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '疫情数据展示', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dxyarea-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'locationId',
            'continentName',
            'continentEnglishName',
            'countryName',
            'countryEnglishName',
            'countryFullName',
            'provinceName',
            'provinceEnglishName',
            'provinceShortName',
            'currentConfirmedCount',
            'confirmedCount',
            'suspectedCount',
            'curedCount',
            'deadCount',
            'comment',
            'cities',
            'updateTime',
        ],
    ]) ?>

</div>
