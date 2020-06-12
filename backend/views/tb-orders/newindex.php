<?php

use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

use \common\tool2;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TbDemandGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">现有订单</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">订单详情</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">现有订单</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">现有订单库信息</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>订单编号</th>
													<th>富裕物资号</th>
													<th>需求订单号</th>
													<th>订单状态</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>订单编号</th>
													<th>赋予物资号</th>
													<th>需求订单号</th>
													<th>订单状态</th>
												</tr>
											</tfoot>
											<tbody>
                                                <?php 
                                                    $array1 = $searchModel::find()->all();
                                                ?>
                                                <?php common\tool\tool2::echoAllRecords($array1);?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
