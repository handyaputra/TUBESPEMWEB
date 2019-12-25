<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Master Pemberian Bantuan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data_master_bantuan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bantuan',
            //'mbid_wilayah',
            'tanggal_bantuan',
            //'mbid_operator',
            //'tanggal_input',
            'nama_prov',
            'nama_operator'

        ],
    ]); ?>


</div>
