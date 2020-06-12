<?php

use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

use \common\tool;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TbOrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title">操作订单</h4>
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
				<a href="#">操作订单</a>
			</li>
		</ul>
    </div>
                
<form action = "/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-orders%2Fadd" method="post" name="addform">
    <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
	<div class="row">
        <script language="javascript">
            function fsubmit(obj){
                obj.submit();
            }
        </script>
		<script language="javascript">
			function fetchelement(obj){
				if(obj.value==1){//"食品"
					document.getElementById('hiddenele1').style.display = "inline";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==2){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "inline";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==3){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "inline";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==4){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "inline";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==5){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "inline";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==6){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "inline";
					document.getElementById('hiddenele7').style.display = "none";
				}
				else if(obj.value==7){
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "inline";
				}
				else{
					document.getElementById('hiddenele1').style.display = "none";
					document.getElementById('hiddenele2').style.display = "none";
					document.getElementById('hiddenele3').style.display = "none";
					document.getElementById('hiddenele4').style.display = "none";
					document.getElementById('hiddenele5').style.display = "none";
					document.getElementById('hiddenele6').style.display = "none";
					document.getElementById('hiddenele7').style.display = "none";
				}
			}
		</script>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						
							<div class="form-group">
								<label for="exampleFormControlSelect1">请先选择物资类型</label>
								<select name="DType" class="form-control" id="DTypeSelect" onchange="fetchelement(this)">
									<option></option>
									<?php \common\tool\tool::echoAllDmTypes()?>
								</select>
							</div>

							<div id="hiddenele1"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=1";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=1";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele2"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=2";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=2";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele3"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=3";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=3";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele4"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=4";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=4";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele5"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=5";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=5";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele6"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=6";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=6";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div id="hiddenele7"style="display:none">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的需求库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>DemandID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_demand_goods WHERE tb_dgType=7";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
														

															foreach($array as $value){
																$var1=$value["tb_dgUser"];
																$var2=$value["tb_dgId"];
																$var4=$value["tb_dgPrice"];
																$var5=$value["tb_dgNum"];
																$var6=$value["tb_dgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">对应类型的富裕库信息</h4>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="basic-datatables" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>UserID</th>
															<th>WealID</th>
															<th>Num</th>
															<th>Price</th>
															<th>Detail</th>
														</tr>
													</tfoot>
													<tbody>
														<?php 
															$sql="SELECT * FROM tb_weal_goods WHERE tb_wgType=7";
															$array=Yii::$app->db->createCommand($sql)->queryAll();
													
															foreach($array as $value){
																$var1=$value["tb_wgUser"];
																$var2=$value["tb_wgId"];
																$var4=$value["tb_wgPrice"];
																$var5=$value["tb_wgNum"];
																$var6=$value["tb_wgRemark"];

																$ret =<<<EOF
																<tr>
																	<td>$var1</td>
																	<td>$var2</td>
																	<td>$var4</td>
																	<td>$var5</td>
																	<td>$var6</td>
																</tr>
																EOF;
																echo $ret;
															}
														?>
                                                
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>

				<div class="form-group">
					<label for="basic-url">请填写需求物资号</label>
					<div class="input-group mb-3">
						<div class="input-icon">
							<span class="input-icon-addon">
								<i class="fa fa-user"></i>
							</span>
							<input name = "BuyID" type="text" class="form-control" placeholder="从上表中获取需求物资号">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="basic-url">请填写富裕物资号</label>
					<div class="input-group mb-3">
						<div class="input-icon">
							<span class="input-icon-addon">
								<i class="fa fa-user"></i>
							</span>
							<input name = "SellID" type="text" class="form-control" placeholder="从上表中获取富裕物资号">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">请选择订单状态</label>
					<select name="oStatus" class="form-control" id="oStatusSelect">
						<option></option>
						<?php \common\tool\tool3::echoAllOTypes()?>
					</select>
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
      