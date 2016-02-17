<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Taking */

$this->title = 'Create Taking';
$this->params['breadcrumbs'][] = ['label' => 'Takings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
