<?php
/**
* Code by Sakura, 20200610
*/
use yii\db\Query;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TbBulletinboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '公告板';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- TimeLine -->
<h2 class="page-title">公告板</h2>
<div class="row">
	<div class="col-md-12">
							
		<ul class="timeline">
			<li>
				<div class="timeline-badge"><i class="flaticon-message"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">
						Latest announcement
						</h4>
						<p><small class="text-muted"><i class="flaticon-message"></i> 
						
						<?php
						echo "posted  ";
						$posts = Yii::$app->db->createCommand(
						'SELECT timediff(SYSDATE(),tb_bPosttime) AS DIFF,tb_bUserid FROM tb_bulletinboard ORDER BY DIFF ASC limit 0,1'
						)->queryAll();
						if($posts[0]["DIFF"]<"838:59:59") echo $posts[0]["DIFF"];
						else echo "long long";
						echo "   ago by ";
						echo $posts[0]["tb_bUserid"];
						?>

						</small></p>
					</div>
					<div class="timeline-body">
						<?php 
						$posts = Yii::$app->db->createCommand(
						'SELECT tb_bContent FROM tb_bulletinboard ORDER BY tb_bPosttime DESC limit 0,1'
						)->queryAll();
						echo $posts[0]["tb_bContent"];
						?>
	
					</div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-badge warning"><i class="flaticon-alarm-1"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h3 class="timeline-title">
						Latest announcement
						</h3>
					</div>

					<p><small class="text-muted"><i class="flaticon-message"></i> 
						
						<?php
						echo "posted  ";
						$posts = Yii::$app->db->createCommand(
						'SELECT timediff(SYSDATE(),tb_bPosttime) AS DIFF,tb_bUserid FROM tb_bulletinboard ORDER BY DIFF ASC limit 1,1'
						)->queryAll();
						if($posts[0]["DIFF"]<"838:59:59") echo $posts[0]["DIFF"];
						else echo "long long";
						echo "   ago by ";
						echo $posts[0]["tb_bUserid"];
						?>

					</small></p>

					<div class="timeline-body">
						<?php 
						$posts = Yii::$app->db->createCommand(
						'SELECT tb_bContent FROM tb_bulletinboard ORDER BY tb_bPosttime DESC limit 1,1'
						)->queryAll();
						echo $posts[0]["tb_bContent"]; 
						?>
					</div>
				</div>
			</li>
			<li>
				<div class="timeline-badge danger"><i class="flaticon-error"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">
						Latest announcement
						</h4>
					</div>
					<p><small class="text-muted"><i class="flaticon-message"></i> 
						<?php
						echo "posted  ";
						$posts = Yii::$app->db->createCommand(
						'SELECT timediff(SYSDATE(),tb_bPosttime) AS DIFF,tb_bUserid FROM tb_bulletinboard ORDER BY DIFF ASC limit 2,1'
						)->queryAll();
						if($posts[0]["DIFF"]<"838:59:59") echo $posts[0]["DIFF"];
						else echo "long long";
						echo "   ago by ";
						echo $posts[0]["tb_bUserid"];
						?>
					</small></p>
					<div class="timeline-body">
						<?php 
						$posts = Yii::$app->db->createCommand(
						'SELECT tb_bContent FROM tb_bulletinboard ORDER BY tb_bPosttime DESC limit 2,1'
						)->queryAll();
						echo $posts[0]["tb_bContent"]; 
						?>
					</div>
				</div>
			</li>
			<li class="timeline-inverted">
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">
						Latest announcement
						</h4>
					</div>
					<p><small class="text-muted"><i class="flaticon-message"></i> 
						<?php
						echo "posted  ";
						$posts = Yii::$app->db->createCommand(
						'SELECT timediff(SYSDATE(),tb_bPosttime) AS DIFF,tb_bUserid FROM tb_bulletinboard ORDER BY DIFF ASC limit 3,1'
						)->queryAll();
						if($posts[0]["DIFF"]<"838:59:59") echo $posts[0]["DIFF"];
						else echo "long long";
						echo "   ago by ";
						echo $posts[0]["tb_bUserid"];
						?>
					</small></p>
					<div class="timeline-body">
						<?php 
						$posts = Yii::$app->db->createCommand(
						'SELECT tb_bContent FROM tb_bulletinboard ORDER BY tb_bPosttime DESC limit 3,1'
						)->queryAll();
						echo $posts[0]["tb_bContent"]; 
						?>
					</div>
				</div>
			</li>
			<li>
				<div class="timeline-badge info"><i class="flaticon-price-tag"></i></div>
				<div class="timeline-panel">
					<div class="timeline-heading">
						<h4 class="timeline-title">
						Latest announcement
						</h4>
					</div>
					<p><small class="text-muted"><i class="flaticon-message"></i> 
						<?php
						echo "posted  ";
						$posts = Yii::$app->db->createCommand(
						'SELECT timediff(SYSDATE(),tb_bPosttime) AS DIFF,tb_bUserid FROM tb_bulletinboard ORDER BY DIFF ASC limit 4,1'
						)->queryAll();
						if($posts[0]["DIFF"]<"838:59:59") echo $posts[0]["DIFF"];
						else echo "long long";
						echo "   ago by ";
						echo $posts[0]["tb_bUserid"];
						?>
					</small></p>
					<div class="timeline-body">
						<?php 
						$posts = Yii::$app->db->createCommand(
						'SELECT tb_bContent FROM tb_bulletinboard ORDER BY tb_bPosttime DESC limit 4,1'
						)->queryAll();
						echo $posts[0]["tb_bContent"]; 
						?>
					</div>
				</div>
			</li>

			
		</ul>
	</div>
</div>