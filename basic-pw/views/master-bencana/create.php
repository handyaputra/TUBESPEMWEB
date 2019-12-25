<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterBencana */

$this->title = 'Create Master Bencana';
$this->params['breadcrumbs'][] = ['label' => 'Master Bencanas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-bencana-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
