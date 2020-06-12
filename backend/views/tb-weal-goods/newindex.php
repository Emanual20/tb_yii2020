<?php
/**
* Coding by Sakura, 20200612
*/
use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

use \common\tool;
/* @var $this yii\web\View */
/* @var $common\models\TbWealGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Weal Goods';
$this->params['breadcrumbs'][] = $this->title;
?>

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">数据库</h4>
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
								<a href="#">富裕数据表</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">富裕库信息</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>UserID</th>
													<th>WealID</th>
													<th>WealType</th>
													<th>Num</th>
													<th>Price</th>
													<th>Detail</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>UserID</th>
													<th>WealID</th>
													<th>WealType</th>
													<th>Num</th>
													<th>Price</th>
													<th>Detail</th>
												</tr>
											</tfoot>
											<tbody>
                                                <?php 
                                                    $array1 = $searchModel::find()->all();
                                                ?>
                                                <?php common\tool\tool4::echoAllRecords($array1);?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Row</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											添加
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														New</span> 
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
													<p class="small">管理员权限：直接插入数据</p>
													<form action = "/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-weal-goods%2Fadd" method="post" name="addform">
                                                        <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
                                                        <div class="row">
															<div class="col-sm-6">
																<div class="form-group form-group-default">
																	<label>用户号码</label>
																	<input id="addUid" type="text" name = "UserID" class="form-control" placeholder="填写账号">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>富裕类型</label>
																	<input id="addtype" type="text" name = "WType" class="form-control" placeholder="填写需求类型">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>富裕数量</label>
																	<input id="addnum" type="text" name = "WNum" class="form-control" placeholder="填写需求数量">
																</div>
                                                            </div>
                                                            <div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>期望价格</label>
																	<input id="addprice" type="text" name = "WPrice" class="form-control" placeholder="填写报价">
																</div>
                                                            </div>
                                                            <div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>详细描述</label>
																	<input id="adddetail" type="text" name = "WDetail" class="form-control" placeholder="可以进行详细描述">
																</div>
                                                            </div>
                                                            <div class="col-md-12">
																<div class="form-group form-group-default">
																	<label>地址</label>
																	<input id="addaddr" type="text" name = "WAddress" class="form-control" placeholder="详细地址">
																</div>
															</div>
														</div>
													</form>
												</div>
												<div class="modal-footer no-bd">
													<input type="button" id="addRowButton" value="Add" class="btn btn-primary" onclick="javascript:fsubmit(document.addform);"></input>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
                                                <th>UserID</th>
													<th style="width: 10%">WealID</th>
													<th style="width: 10%">WealType</th>
													<th style="width: 10%">Num</th>
													<th style="width: 10%">Price</th>
                                                    <th>Detail</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th>UserID</th>
													<th>WealID</th>
													<th>Weal
													Type</th>
													<th>Num</th>
													<th>Price</th>
                                                    <th>Detail</th>
                                                    <th>Action</th>
												</tr>
											</tfoot>
											<tbody>
                                                <?php 
                                                    $array1 = $searchModel::find()->all();
                                                ?>
                                                <?php common\tool\tool4::echoAllRecordsWithEdit($array1, Yii::$app->request);?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
