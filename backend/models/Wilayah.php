<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property string $prov
 * @property string $kab
 * @property string $id
 * @property string $nama
 * @property int $versi
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prov', 'kab', 'id', 'nama', 'versi'], 'required'],
            [['versi'], 'integer'],
            [['prov', 'kab'], 'string', 'max' => 2],
            [['id'], 'string', 'max' => 4],
            [['nama'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prov' => 'Prov',
            'kab' => 'Kab',
            'id' => 'ID',
            'nama' => 'Nama',
            'versi' => 'Versi',
        ];
    }
}
