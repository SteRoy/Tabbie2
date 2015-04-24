<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TournamentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tournaments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tournament-index">

	<div class="row">
		<div class="col-xs-12">
			<h1><?= Html::encode($this->title) ?></h1>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-10">
			<?php echo $this->render('_search', ['model' => $searchModel]); ?>
		</div>
		<div class="col-xs-2">
			<?php echo Html::a(Yii::t("app", "Archive"), ["tournament/archive"], ["class" => "btn btn-default btn-block"]) ?>
		</div>
	</div>

	<div class="tournaments">
		<?= ListView::widget([
			'dataProvider' => $dataProvider,
			'itemView' => '_item',
		]) ?>
	</div>
</div>
