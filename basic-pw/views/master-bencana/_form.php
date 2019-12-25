<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBencana */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="master-bencana-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_master_bencana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mid_bencana')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mid_kab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'tanggal_bencana')->textInput() ?>

    <?= $form->field($model, 'jml_kor_luka')->textInput() ?>

    <?= $form->field($model, 'jml_kor_meninggal')->textInput() ?>

    <?= $form->field($model, 'jml_kor_hilang')->textInput() ?>

    <?= $form->field($model, 'jml_kor_evakuasi')->textInput() ?>

    <?= $form->field($model, 'jml_rmh_rusak')->textInput() ?>

    <?= $form->field($model, 'jml_rmh_hancur')->textInput() ?>

    <?= $form->field($model, 'status_komunikasi')->dropDownList([ 'Lancar' => 'Lancar', 'Terputus' => 'Terputus', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_transportasi')->dropDownList([ 'Lancar' => 'Lancar', 'Macet' => 'Macet', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_tpt_kesehatan')->dropDownList([ 'Layak' => 'Layak', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_pra_pendidikan')->dropDownList([ 'Ada' => 'Ada', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_listrik')->dropDownList([ 'Ada' => 'Ada', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_air_bersih')->dropDownList([ 'Layak' => 'Layak', 'Tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mid_operator')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
