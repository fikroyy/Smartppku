<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'NIM') ?>

    <?= $form->field($model, 'Ttl') ?>

    <?= $form->field($model, 'IPK') ?>

    <?= $form->field($model, 'Pilihan_Matkul') ?>

    <?php echo $form->field($model, 'Kelas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
