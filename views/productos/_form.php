<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Categorias;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productos-form">

    <?php $form = ActiveForm::begin(); ?>

  	<?php $categorias=Categorias::find()->all();
    $datos=ArrayHelper::map($categorias,'id','nombre');
    echo $form->field($model, 'idc')->dropDownList($datos,['prompt'=>'Seleccione']);
    ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        <?= Html::submitButton('Cancelar', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
