<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BencanaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bencana';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bencana-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bencana', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bencana',
            'jenis_bencana',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
