<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewTable */

$this->title = 'Create New Table';
$this->params['breadcrumbs'][] = ['label' => 'New Tables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="new-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
