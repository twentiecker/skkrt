<?php

use yii\helpers\Html;
use backend\models\Entri;
use backend\models\Wilayah;

$this->title = 'Monitoring';
$this->params['breadcrumbs'][] = $this->title;

// echo var_dump($posts);
if (Yii::$app->user->identity->username == 'superadmin'){
	$daerah = 'Propinsi';
	// Rincian propinsi seluruh indonesia
	// =====================================================================================================================
	$posts = Yii::$app->db->createCommand('SELECT DISTINCT prov FROM wilayah')
	->queryAll();

	$posts_arr = array();
	for ($i=0;$i<count($posts);$i++){
		$posts_arr[] = $posts[$i]['prov'];
	}

	$progress_arr = array();
	for ($i=0;$i<count($posts);$i++){
		$query_prop = Entri::find()
		->where(['and', ['=', 'b1r1', $posts[$i]['prov']], ['>', 'created_at', '0000-00-00 00:00:00']])
		->count();

		$query_all_kab = Wilayah::find()
		->where(['prov' => $posts[$i]['prov']])
		->count();

		$progress = round($query_prop/($query_all_kab*30)*100,1);
		$progress_arr[] = $progress;
	}

	// Rincian kabupaten kota seluruh indonesia
	// =====================================================================================================================
	// $posts = Yii::$app->db->createCommand('SELECT * FROM wilayah WHERE 1')
	// ->queryAll();

	// for ($i=0;$i<count($posts);$i++){
	// 	$query_prop = Entri::find()
	// 	->where(['and', ['=', 'b1r1', $posts[$i]['prov']], ['=', 'b1r2', $posts[$i]['kab']], ['>', 'created_at', '0000-00-00 00:00:00']])
	// 	->count();
	// 	$progress = round($query_prop/30*100,1);
	// 	echo $posts[$i]['prov'].$posts[$i]['kab']." => ".$progress;
	// 	echo "<br>";
	// }

} else {
	$daerah = 'Kabupaten/Kota';
	$q = substr(Yii::$app->user->identity->username, 0, 2);
	$posts = Yii::$app->db->createCommand('SELECT * FROM wilayah WHERE prov='.$q)
	->queryAll();

	$posts_arr = array();
	for ($i=0;$i<count($posts);$i++){
		$posts_arr[] = $posts[$i]['kab'];
	}

	for ($i=0;$i<count($posts);$i++){
		$query_prop = Entri::find()
		->where(['and', ['=', 'b1r1', $q], ['=', 'b1r2', $posts[$i]['kab']], ['>', 'created_at', '0000-00-00 00:00:00']])
		->count();
		$progress = round($query_prop/30*100,1);		
		$progress_arr[] = $progress;
	}

}

?>
<h1><?= Html::encode($this->title) ?></h1>
<br>

<figure class="highcharts-figure">
	<div id="container"></div>
</figure>

<script src="../js/highcharts.js"></script>
<script src="../js/exporting.js"></script>
<script src="../js/export-data.js"></script>
<script src="../js/accessibility.js"></script>

<script type="text/javascript">
	Highcharts.chart('container', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Progres Entri SKKRT'
		},
		xAxis: {
			categories: <?= json_encode($posts_arr); ?>,
			title: {
				text: <?= json_encode($daerah); ?>
			}
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Persentase'
			},
			stackLabels: {
				enabled: true,
				style: {
					fontWeight: 'bold',
                color: ( // theme
                	Highcharts.defaultOptions.title.style &&
                	Highcharts.defaultOptions.title.style.color
                	) || 'gray'
            }
        }
    },
    legend: {
    	align: 'right',
    	x: -30,
    	verticalAlign: 'top',
    	y: 25,
    	floating: true,
    	backgroundColor:
    	Highcharts.defaultOptions.legend.backgroundColor || 'white',
    	borderColor: '#CCC',
    	borderWidth: 1,
    	shadow: false
    },
    tooltip: {
    	headerFormat: '<b>{point.x}</b><br/>',
    	pointFormat: '{series.name}: {point.y}<br/>Total: 100'
    },
    plotOptions: {
    	column: {
    		stacking: 'normal',
    		dataLabels: {
    			enabled: false
    		}
    	}
    },
    series: [{
    	name: 'Clean',
    	data: <?= json_encode($progress_arr); ?>
    }]
});
</script>

