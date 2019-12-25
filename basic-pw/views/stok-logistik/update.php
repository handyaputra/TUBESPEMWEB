<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StokLogistik */

$this->title = 'Update Stok Logistik: ' . $model->id_stok;
$this->params['breadcrumbs'][] = ['label' => 'Stok Logistiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_stok, 'url' => ['view', 'id' => $model->id_stok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stok-logistik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
