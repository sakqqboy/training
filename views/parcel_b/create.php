<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\ParcelB */

$this->title = 'Create Parcel B';
$this->params['breadcrumbs'][] = ['label' => 'Parcel Bs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parcel-b-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
