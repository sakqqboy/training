<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Right */

$this->title = 'Create Right';
$this->params['breadcrumbs'][] = ['label' => 'Rights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="right-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
