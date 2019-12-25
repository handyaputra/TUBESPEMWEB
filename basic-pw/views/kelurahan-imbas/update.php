<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KelurahanImbas */

$this->title = 'Update Kelurahan Imbas: ' . $model->id_imbas;
$this->params['breadcrumbs'][] = ['label' => 'Kelurahan Imbas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imbas, 'url' => ['view', 'id' => $model->id_imbas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelurahan-imbas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
