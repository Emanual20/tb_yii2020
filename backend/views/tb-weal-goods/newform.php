<?php

use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

use \common\tool;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TbWealGoodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Weal Goods';
$this->params['breadcrumbs'][] = $this->title;
?>
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">表单提交</h4>
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
								<a href="#">订单</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">富裕订单</a>
							</li>
						</ul>
                    </div>
                
                <form action = "/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-weal-goods%2Fadd" method="post" name="addform">
                    <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
					<div class="row">
                        <script language="javascript">
                            function fsubmit(obj){
                                obj.submit();
                            }
                        </script>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">填写富裕物资相关信息</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-9 col-lg-6">
											<div class="form-check">
												<label>自动成交</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
													<span class="form-radio-sign">自动达成订单</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">手动同意订单</span>
												</label>
											</div>
											<div class="form-group">
												<label for="exampleFormControlSelect1">选择物资类型</label>
												<select name="WType" class="form-control" id="WTypeSelect">
													<option></option>
													<?php \common\tool\tool::echoAllDmTypes()?>
												</select>
											</div>
											<div class="form-group">
												<label for="exampleFormControlFile1">照片描述</label>
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">同意并知悉通知书</span>
												</label>
                                            </div>
											<div class="form-group">
												<label for="basic-url">提交人</label>
												<div class="input-group mb-3">
                                                    <div class="input-icon">
													    <span class="input-icon-addon">
														    <i class="fa fa-user"></i>
													    </span>
													    <input name = "UserID" type="text" class="form-control" placeholder="<?= Yii::$app->user->identity->username?>">
												    </div>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">价格（单价）￥</span>
													</div>
													<input name = "WPrice" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
													<div class="input-group-append">
														<span class="input-group-text">.00</span>
													</div>
                                                </div>
                                                <div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">数量</span>
													</div>
													<input name = "WNum" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
													<div class="input-group-append">
														<span class="input-group-text">个</span>
													</div>
												</div>
											</div>
										
										</div>
										<div class="col-md-9 col-lg-6">
                                            <label class="mb-3"><b>Form Group Default</b></label>
                                            <div class="form-group">
												<label for="comment">详细描述</label>
												<textarea name = "WDetail" class="form-control" id="detial" rows="5">

												</textarea>
                                            </div>
                                            <div class="form-group">
												<label for="address">地点信息</label>
												<textarea name = "WAddress" class="form-control" id="address" rows="3">

												</textarea>
											</div>								
											<div class="form-group">
												<label for="smallInput">特殊需求（人工审核）</label>
												<input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
                                    <input type="button" id="addRowButton" value="Submit" class="btn btn-success" onclick="javascript:fsubmit(document.addform);"></input>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</div>
						</div>
                    </div>
                </form>
				</div>
            </div>
