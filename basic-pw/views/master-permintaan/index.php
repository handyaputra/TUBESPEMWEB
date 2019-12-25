<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterPermintaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Permintaan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-permintaan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Permintaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_permintaan',
            'mpid_wilayah',
            'tanggal_permintaan',
            'mpid_operator',
            'tanggal_approve',
            //'tanggal_input',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
