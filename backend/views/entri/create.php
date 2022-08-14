<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Entri */

$this->title = 'New Entri';
$this->params['breadcrumbs'][] = ['label' => 'Sample', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entri-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?= $this->render('_form', [
		'model' => $model,
	]) ?>

</div>
