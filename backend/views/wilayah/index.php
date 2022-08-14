<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WilayahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wilayahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'prov',
            'kab',
            'id',
            'nama',
            'versi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>