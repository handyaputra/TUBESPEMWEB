<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelurahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelurahan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelurahan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelurahan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kel',
            'nama_kel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
