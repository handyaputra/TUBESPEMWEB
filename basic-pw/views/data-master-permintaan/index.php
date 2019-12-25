<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Master Permintaan Bantuan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data_master_permintaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_permintaan',
            //'mpid_wilayah',
            'tanggal_permintaan',
            //'mpid_operator',
            'tanggal_approve',
            //'tanggal_input',
            'nama_prov',
            'nama_operator'

        ],
    ]); ?>


</div>
