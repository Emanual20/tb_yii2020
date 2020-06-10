<?php

use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbBulletinboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bulletin Board';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
	<div class="page-inner">
		<div class="page-header">
			<h4 class="page-title">发布公告</h4>
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
					<a href="#">公告详情</a>
				</li>
				<li class="separator">
					<i class="flaticon-right-arrow"></i>
				</li>
				<li class="nav-item">
					<a href="#">发布公告</a>
				</li>
			</ul>
        </div>
                
    <form action = "/tb_yii2020/tb_yii2020/backend/web/index.php?r=tb-bulletinboard%2Fsss" method="post" name="addbulletin">
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
						<div class="card-title">填写发布公告信息</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-9 col-lg-6">
								<div class="form-group">
									<label for="basic-url">发布人 (请填写id) </label>
									<div class="input-group mb-3">
                                        <div class="input-icon">
											<span class="input-icon-addon">
												<i class="fa fa-user"></i>
											</span>
											<input name = "UserID" type="text" class="form-control" placeholder="Userid">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-9 col-lg-6">
                                <div class="form-group">
									<label for="comment">公告内容 (不多于200字)</label>
									<textarea name = "Content" class="form-control" id="Content" rows="8">

									</textarea>
							</div>
						</div>
					</div>
					<div class="card-action">
                        <input type="button" id="addRowButton" value="Submit" class="btn btn-success" onclick="javascript:fsubmit(document.addbulletin);"></input>
					</div>
				</div>
			</div>
        </div>
    </form>
	</div>
</div>
