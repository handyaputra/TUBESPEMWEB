<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KelurahanImbasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kelurahan Imbas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelurahan-imbas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kelurahan Imbas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_imbas',
            'kid_kel',
            'jml_kor_laki',
            'jml_kor_perempuan',
            //'jml_hil_laki',
            //'jml_hil_perempuan',
            //'jml_eva_laki',
            //'jml_eva_perempuan',
            //'jml_meninggal_laki',
            //'jml_meninggal_perempuan',
            'pjg_jln_imbas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
