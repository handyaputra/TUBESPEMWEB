<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Barang */

$this->title = $model->id_master_bencana;
$this->params['breadcrumbs'][] = ['label' => 'Data Master Bencana', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data_master_bencana-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_master_bencana], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_master_bencana], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_bencana',
            'mid_bencana',
            'mid_kab',
            'latitude',
            'longitude',
            'tanggal_bencana',
            'jml_kor_luka',
            'jml_kor_meninggal',
            'jml_kor_hilang',
            'jml_kor_evakuasi',
            'jml_rmh_rusak',
            'jml_rmh_hancur',
            'status_komunikasi',
            'status_transportasi',
            'status_tpt_kesehatan',
            'status_pra_pendidikan',
            'status_listrik',
            'status_air_bersih',
            'mid_operator',
            'jenis_bencana',
            'nama_kab'
        ],
    ]) ?>

</div>
