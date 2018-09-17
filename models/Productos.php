<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property int $idc
 * @property string $nombre
 * @property int $stock
 * @property int $precio
 *
 * @property Categoria $c
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idc', 'nombre', 'stock', 'precio'], 'required'],
            [['idc', 'stock', 'precio'], 'integer'],
            [['nombre'], 'string', 'max' => 45],
            [['nombre'], 'unique'],
            [['idc'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['idc' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idc' => 'Categoria',
            'nombre' => 'Nombre',
            'stock' => 'Stock',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'idc']);
    }
}
