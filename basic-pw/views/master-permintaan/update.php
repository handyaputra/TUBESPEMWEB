<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterPermintaan */

$this->title = 'Update Master Permintaan: ' . $model->id_permintaan;
$this->params['breadcrumbs'][] = ['label' => 'Master Permintaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_permintaan, 'url' => ['view', 'id' => $model->id_permintaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-permintaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
