<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBantuan */

$this->title = 'Update Master Bantuan: ' . $model->id_bantuan;
$this->params['breadcrumbs'][] = ['label' => 'Master Bantuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bantuan, 'url' => ['view', 'id' => $model->id_bantuan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-bantuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
