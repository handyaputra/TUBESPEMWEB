<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StokLogistikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stok Logistik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stok-logistik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stok Logistik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_stok',
            'sid_brg',
            'sid_kab',
            'jumlah',
            'satuan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
