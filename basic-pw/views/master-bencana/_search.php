<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBencanaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-bencana-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_master_bencana') ?>

    <?= $form->field($model, 'mid_bencana') ?>

    <?= $form->field($model, 'mid_kab') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'tanggal_bencana') ?>

    <?php // echo $form->field($model, 'jml_kor_luka') ?>

    <?php // echo $form->field($model, 'jml_kor_meninggal') ?>

    <?php // echo $form->field($model, 'jml_kor_hilang') ?>

    <?php // echo $form->field($model, 'jml_kor_evakuasi') ?>

    <?php // echo $form->field($model, 'jml_rmh_rusak') ?>

    <?php // echo $form->field($model, 'jml_rmh_hancur') ?>

    <?php // echo $form->field($model, 'status_komunikasi') ?>

    <?php // echo $form->field($model, 'status_transportasi') ?>

    <?php // echo $form->field($model, 'status_tpt_kesehatan') ?>

    <?php // echo $form->field($model, 'status_pra_pendidikan') ?>

    <?php // echo $form->field($model, 'status_listrik') ?>

    <?php // echo $form->field($model, 'status_air_bersih') ?>

    <?php // echo $form->field($model, 'mid_operator') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
