<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\science\Appendage */

$this->title = 'Create Appendage';
$this->params['breadcrumbs'][] = ['label' => 'Appendages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="appendage-create">

    <h1><?php echo  Html::encode($this->title) ?></h1>

    <?php echo  $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
