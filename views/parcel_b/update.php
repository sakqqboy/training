<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\science\ParcelB */

$this->title = 'Update Parcel B: ' . ' ' . $model->par_id;
$this->params['breadcrumbs'][] = ['label' => 'Parcel Bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->par_id, 'url' => ['view', 'id' => $model->par_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parcel-b-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
