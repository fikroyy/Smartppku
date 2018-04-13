<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ttl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IPK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pilihan_Matkul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
