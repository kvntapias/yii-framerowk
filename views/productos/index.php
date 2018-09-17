<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar Productos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'idc',
            'nombre',
            'stock',
            'precio',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
