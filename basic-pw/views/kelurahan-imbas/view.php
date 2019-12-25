<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KelurahanImbas */

$this->title = $model->id_imbas;
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan Imbas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kelurahan-imbas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_imbas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_imbas], [
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
            'id_imbas',
            'kid_kel',
            'jml_kor_laki',
            'jml_kor_perempuan',
            'jml_hil_laki',
            'jml_hil_perempuan',
            'jml_eva_laki',
            'jml_eva_perempuan',
            'jml_meninggal_laki',
            'jml_meninggal_perempuan',
            'pjg_jln_imbas',
        ],
    ]) ?>

</div>
