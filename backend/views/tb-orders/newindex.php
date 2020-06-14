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
						<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
						<script src="../assets/js/core/bootstrap.min.js"></script>
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
								<!-- Modal -->
								<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														change</span> 
														<span class="fw-light">
															Row
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
                                                </div>
                                                <script language="javascript">
                                                    function fsubmit(obj){
                                                    	obj.submit();
                                                    }
												</script>
												<div class="modal-body">
													<p class="small">管理员权限：订单状态修改</p>
													<form action = "/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-orders%2Fchange" method="post" name="addform">
                                                        <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
                                                        <div class="row">
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>orderid</label>
																	<input id="oid" type="text" name = "id" class="form-control" placeholder="">
																</div>
															</div>
															<!-- <div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>status</label>
																	<input id="changetype" type="text" name = "status" class="form-control" placeholder="填写需求类型">
																</div>
															</div> -->
															<div class="col-md-6 pr-0">
																<div class="form-group">
																	<label for="exampleFormControlSelect1">修正状态</label>
																	<select name = "status" class="form-control" id="changetype">
																	<option></option>
																	<?php \common\tool\tool::echoAllOTypes()?>
																</select>
															</div>
														</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<input type="button" id="addRowButton" value="change" class="btn btn-primary" onclick="javascript:fsubmit(document.addform);"></input>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
									<script language="javascript">
										$('#addRowModal').on('show.bs.modal', function(e){											
											$('#oid').val($(e.relatedTarget).data("oid"));
										})
									</script>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>订单编号</th>
													<th>富裕物资号</th>
													<th>需求订单号</th>
													<th>订单状态</th>
													<th>action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>订单编号</th>
													<th>赋予物资号</th>
													<th>需求订单号</th>
													<th>订单状态</th>
													<th>action</th>
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

