<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterBencanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Bencana';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-bencana-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Bencana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_master_bencana',
            'mid_bencana',
            'mid_kab',
            'latitude',
            'longitude',
            //'tanggal_bencana',
            //'jml_kor_luka',
            //'jml_kor_meninggal',
            //'jml_kor_hilang',
            //'jml_kor_evakuasi',
            //'jml_rmh_rusak',
            //'jml_rmh_hancur',
            //'status_komunikasi',
            //'status_transportasi',
            //'status_tpt_kesehatan',
            //'status_pra_pendidikan',
            //'status_listrik',
            //'status_air_bersih',
            //'mid_operator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
