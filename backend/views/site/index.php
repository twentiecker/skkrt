<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use backend\models\Entri;
use backend\models\Wilayah;

$q = substr(Yii::$app->user->identity->username, 0, 2);
$w = substr(Yii::$app->user->identity->username, 2, 2);
$this->title = Yii::$app->name.date('Y');
?>
<div class="site-index">

    <div class="jumbotron">

        <h1>Program Entri SKKRT | 2020</h1>

        <p class="lead">Survei Khusus Konsumsi Rumah Tangga Triwulanan.</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to(['/entri/index'])?>">Sample</a></p>
    </div>

    <div id="container"></div>

    <br>
    <br>
    <br>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4" align="center">
                <?php 

                $query_kab = Entri::find()
                ->where(['and', ['=', 'b1r1', $q], ['=', 'b1r2', $w], ['>', 'created_at', '0000-00-00 00:00:00']])
                ->count();

                if($w == '00' || Yii::$app->user->identity->username == 'superadmin'){
                    $p_kab = 'N/A';
                } else {
                    $p_kab = round($query_kab/30*100,2).' %';
                }

                ?>
                <h4>Progres<br>Kabupaten</h4>

                <h1><b><?=$p_kab; ?></b></h1>

                <?php
                if ($w != '00') {
                    if (Yii::$app->user->identity->username != 'superadmin'){
                        echo Html::a('Selengkapnya &raquo;', ['entri/index'], ['class' => 'btn btn-default']);    
                    }
                }
                ?>

            </div>
            <div class="col-lg-4" align="center">
                <?php 

                $query_prov = Entri::find()
                ->where(['and', ['=', 'b1r1', $q], ['>', 'created_at', '0000-00-00 00:00:00']])
                ->count();

                $query_all_kab = Wilayah::find()
                ->where(['prov' => $q])
                ->count();

                if($query_all_kab == 0){
                    $p_prov = 'N/A';
                } else {                
                    $tgt_prov = $query_all_kab*30;
                    $p_prov = round($query_prov/$tgt_prov*100,2).' %';
                }

                ?>
                <h4>Progres<br>Propinsi</h4>

                <h1><b><?=$p_prov; ?></b></h1>

                <?php
                if (Yii::$app->user->identity->username != 'superadmin' || $q == '00') {
                    echo Html::a('Selengkapnya &raquo;', ['site/monitor'], ['class' => 'btn btn-default']); 
                }
                ?>

            </div>
            <div class="col-lg-4" align="center">
                <?php 

                $query_nas = Entri::find()
                ->where(['>', 'created_at', '0000-00-00 00:00:00'])
                ->count();

                $query_all_prov = Wilayah::find()
                ->count();

                $tgt_nas = $query_all_prov*30;
                $p_nas = round($query_nas/$tgt_nas*100,2).' %';

                ?>
                <h4>Progres<br>Nasional</h4>

                <h1><b><?=$p_nas; ?></b></h1>

                <?php
                if (Yii::$app->user->identity->username == 'superadmin') {
                    echo Html::a('Selengkapnya &raquo;', ['site/monitor'], ['class' => 'btn btn-default']); 
                }
                ?>
            </div>
        </div>

    </div>
</div>

<?php 
// Rincian propinsi seluruh indonesia
// ================================================================================================
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

    $progress = round($query_prop/($query_all_kab*30)*100,2);
    $progress_arr[] = $progress;
}
?>

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<script type="text/javascript">
// Prepare demo data
// Data is joined to map using value of 'hc-key' property by default.
// See API docs for 'joinBy' for more info on linking data and map.
var data = [
['id-3700', 0],
['id-ac',  <?= json_encode($progress_arr[0]); ?>],
['id-jt',  <?= json_encode($progress_arr[12]); ?>],
['id-be',  <?= json_encode($progress_arr[6]); ?>],
['id-bt',  <?= json_encode($progress_arr[15]); ?>],
['id-kb',  <?= json_encode($progress_arr[19]); ?>],
['id-bb',  <?= json_encode($progress_arr[8]); ?>],
['id-ba',  <?= json_encode($progress_arr[16]); ?>],
['id-ji',  <?= json_encode($progress_arr[14]); ?>],
['id-ks',  <?= json_encode($progress_arr[21]); ?>],
['id-nt',  <?= json_encode($progress_arr[18]); ?>],
['id-se',  <?= json_encode($progress_arr[26]); ?>],
['id-kr',  <?= json_encode($progress_arr[9]); ?>],
['id-ib',  <?= json_encode($progress_arr[32]); ?>],
['id-su',  <?= json_encode($progress_arr[1]); ?>],
['id-ri',  <?= json_encode($progress_arr[3]); ?>],
['id-sw',  <?= json_encode($progress_arr[24]); ?>],
['id-ku',  <?= json_encode($progress_arr[23]); ?>],
['id-la',  <?= json_encode($progress_arr[31]); ?>],
['id-sb',  <?= json_encode($progress_arr[2]); ?>],
['id-ma',  <?= json_encode($progress_arr[30]); ?>],
['id-nb',  <?= json_encode($progress_arr[17]); ?>],
['id-sg',  <?= json_encode($progress_arr[27]); ?>],
['id-st',  <?= json_encode($progress_arr[25]); ?>],
['id-pa',  <?= json_encode($progress_arr[33]); ?>],
['id-jr',  <?= json_encode($progress_arr[11]); ?>],
['id-ki',  <?= json_encode($progress_arr[22]); ?>],
['id-1024',  <?= json_encode($progress_arr[7]); ?>],
['id-jk',  <?= json_encode($progress_arr[10]); ?>],
['id-go',  <?= json_encode($progress_arr[28]); ?>],
['id-yo',  <?= json_encode($progress_arr[13]); ?>],
['id-sl',  <?= json_encode($progress_arr[5]); ?>],
['id-sr',  <?= json_encode($progress_arr[29]); ?>],
['id-ja',  <?= json_encode($progress_arr[4]); ?>],
['id-kt',  <?= json_encode($progress_arr[20]); ?>],
];

// Create the chart
Highcharts.mapChart('container', {
    chart: {
        map: 'countries/id/id-all'
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    legend: {
        layout: 'vertical',
        align: 'left',
        floating: true,
        backgroundColor: ( // theme
            Highcharts.defaultOptions &&
            Highcharts.defaultOptions.legend &&
            Highcharts.defaultOptions.legend.backgroundColor
            ) || 'rgba(255, 255, 255, 0.85)'
    },

    mapNavigation: {
        enabled: false,
        buttonOptions: {
            verticalAlign: 'bottom'
        }
    },

    colorAxis: {
        min: 0,
        max: 100,
        labels: {
            format: '{value} %'
        }
    },

    series: [{
        data: data,
        name: 'Progres Entri',
        tooltip: {
            valueSuffix: ' %'
        },
        states: {
            hover: {
                color: '#BADA55'
            }
        },
        dataLabels: {
            enabled: true,
            format: '{point.name}'
        }
    }]
});

</script>
