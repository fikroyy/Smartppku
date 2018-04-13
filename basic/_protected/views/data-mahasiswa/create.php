<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = 'Biodata Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
