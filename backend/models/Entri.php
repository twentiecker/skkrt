<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "entri".
 *
 * @property int $id
 * @property string $b1r1
 * @property string $b1r2
 * @property string $b1r3
 * @property string $b1r4
 * @property int $b1r5
 * @property string $b1r6
 * @property string $b1r7
 * @property string $b2r1
 * @property int $b2r2
 * @property int $b2r3
 * @property int $b2r4a
 * @property int $b2r4b
 * @property int $b2r4c
 * @property int $b2r4d
 * @property float $b2r5a
 * @property int $b2r5b
 * @property float $b3ar1sumk2
 * @property float $b3ar1ak2
 * @property float $b3ar1bk2
 * @property float $b3ar1ck2
 * @property float $b3ar1dk2
 * @property float $b3ar1ek2
 * @property float $b3ar1fk2
 * @property float $b3ar1gk2
 * @property float $b3ar1sumk3
 * @property float $b3ar1ak3
 * @property float $b3ar1bk3
 * @property float $b3ar1ck3
 * @property float $b3ar1dk3
 * @property float $b3ar1ek3
 * @property float $b3ar1fk3
 * @property float $b3ar1gk3
 * @property int $b3ar1ak4
 * @property int $b3ar1bk4
 * @property int $b3ar1ck4
 * @property int $b3ar1dk4
 * @property int $b3ar1ek4
 * @property int $b3ar1fk4
 * @property int $b3ar1gk4
 * @property float $b3ar1sumk5
 * @property float $b3ar1ak5
 * @property float $b3ar1bk5
 * @property float $b3ar1ck5
 * @property float $b3ar1dk5
 * @property float $b3ar1ek5
 * @property float $b3ar1fk5
 * @property float $b3ar1gk5
 * @property int $b3ar1ak6
 * @property int $b3ar1bk6
 * @property int $b3ar1ck6
 * @property int $b3ar1dk6
 * @property int $b3ar1ek6
 * @property int $b3ar1fk6
 * @property float $b3ar1ak7
 * @property float $b3ar1bk7
 * @property float $b3ar1ck7
 * @property float $b3ar1dk7
 * @property float $b3ar1ek7
 * @property float $b3ar1fk7
 * @property float $b3ar2k2
 * @property float $b3ar2k3
 * @property int $b3ar2k4
 * @property float $b3ar2k5
 * @property int $b3ar2k6
 * @property float $b3ar2k7
 * @property float $b3asumk2
 * @property float $b3asumk3
 * @property float $b3asumk5
 * @property float $b3br3k2
 * @property float $b3br3k3
 * @property int $b3br3k4
 * @property float $b3br3k5
 * @property float $b3br4sumk2
 * @property float $b3br4ak2
 * @property float $b3br4bk2
 * @property float $b3br4ck2
 * @property float $b3br4dk2
 * @property float $b3br4ek2
 * @property float $b3br4sumk3
 * @property float $b3br4ak3
 * @property float $b3br4bk3
 * @property float $b3br4ck3
 * @property float $b3br4dk3
 * @property float $b3br4ek3
 * @property int $b3br4bk4
 * @property int $b3br4ck4
 * @property int $b3br4dk4
 * @property float $b3br4sumk5
 * @property float $b3br4bk5
 * @property float $b3br4ck5
 * @property float $b3br4dk5
 * @property int $b3br4dk6
 * @property int $b3br4ek6
 * @property float $b3br4dk7
 * @property float $b3br4ek7
 * @property float $b3br5sumk2
 * @property float $b3br5ak2
 * @property float $b3br5bk2
 * @property float $b3br5ck2
 * @property float $b3br5sumk3
 * @property float $b3br5ak3
 * @property float $b3br5bk3
 * @property float $b3br5ck3
 * @property int $b3br5ak4
 * @property int $b3br5bk4
 * @property float $b3br5sumk5
 * @property float $b3br5ak5
 * @property float $b3br5bk5
 * @property int $b3br5bk6
 * @property float $b3br5bk7
 * @property float $b3br6sumk2
 * @property float $b3br6ak2
 * @property float $b3br6bk2
 * @property float $b3br6ck2
 * @property float $b3br6sumk3
 * @property float $b3br6ak3
 * @property float $b3br6bk3
 * @property float $b3br6ck3
 * @property int $b3br6ak4
 * @property int $b3br6ck4
 * @property float $b3br6sumk5
 * @property float $b3br6ak5
 * @property float $b3br6ck5
 * @property int $b3br6ak6
 * @property float $b3br6ak7
 * @property float $b3br7sumk2
 * @property float $b3br7ak2
 * @property float $b3br7bk2
 * @property float $b3br7ck2
 * @property float $b3br7dk2
 * @property float $b3br7sumk3
 * @property float $b3br7ak3
 * @property float $b3br7bk3
 * @property float $b3br7ck3
 * @property float $b3br7dk3
 * @property int $b3br7ak4
 * @property int $b3br7ck4
 * @property float $b3br7sumk5
 * @property float $b3br7ak5
 * @property float $b3br7ck5
 * @property float $b3br8sumk2
 * @property float $b3br8ak2
 * @property float $b3br8bk2
 * @property float $b3br8sumk3
 * @property float $b3br8ak3
 * @property float $b3br8bk3
 * @property int $b3br8ak4
 * @property int $b3br8bk4
 * @property float $b3br8sumk5
 * @property float $b3br8ak5
 * @property float $b3br8bk5
 * @property float $b3br9k2
 * @property float $b3br9k3
 * @property int $b3br9k4
 * @property float $b3br9k5
 * @property float $b3br10k2
 * @property float $b3br10k3
 * @property int $b3br10k4
 * @property float $b3br10k5
 * @property float $b3br11k2
 * @property float $b3br11k3
 * @property int $b3br11k4
 * @property float $b3br11k5
 * @property float $b3br12sumk2
 * @property float $b3br12ak2
 * @property float $b3br12bk2
 * @property float $b3br12sumk3
 * @property float $b3br12ak3
 * @property float $b3br12bk3
 * @property int $b3br12ak4
 * @property int $b3br12bk4
 * @property float $b3br12sumk5
 * @property float $b3br12ak5
 * @property float $b3br12bk5
 * @property int $b3br12ak6
 * @property float $b3br12ak7
 * @property float $b3bsumk2
 * @property float $b3bsumk3
 * @property float $b3bsumk5
 * @property float $b3sumk3
 * @property float $b3sumk5
 * @property int $b4r1a
 * @property float $b4r1b
 * @property int $b4r2a
 * @property int $b4r2b
 * @property int $b4r2c
 * @property int $b4r2d
 * @property int $b4r2e
 * @property int $b4r2f
 * @property int $b4r2g
 * @property int $b4r2h
 * @property int $b4r2i
 * @property int $b4r3
 * @property int $b4r4
 * @property float $b5r1
 * @property float $b5r2
 * @property float $b5r3
 * @property float $b5r4
 * @property float $b5sum
 * @property string $b6r1a
 * @property string $b6r1b
 * @property int $b6r2
 * @property string $b6r3
 * @property string $b6r4a
 * @property string $b6r4b
 * @property int $b6r5
 * @property string $b6r6
 * @property string $b7cat
 * @property string $created_at
 */
class Entri extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entri';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['b1r1', 'b1r2', 'b1r3', 'b1r4', 'b1r5', 'b1r6', 'b1r7', 'b2r1', 'b2r2', 'b2r3', 'b2r4a', 'b2r4b', 'b2r4c', 'b2r4d', 'b2r5a', 'b2r5b', 'b3ar1sumk2', 'b3ar1ak2', 'b3ar1bk2', 'b3ar1ck2', 'b3ar1dk2', 'b3ar1ek2', 'b3ar1fk2', 'b3ar1gk2', 'b3ar1sumk3', 'b3ar1ak3', 'b3ar1bk3', 'b3ar1ck3', 'b3ar1dk3', 'b3ar1ek3', 'b3ar1fk3', 'b3ar1gk3', 'b3ar1ak4', 'b3ar1bk4', 'b3ar1ck4', 'b3ar1dk4', 'b3ar1ek4', 'b3ar1fk4', 'b3ar1gk4', 'b3ar1sumk5', 'b3ar1ak5', 'b3ar1bk5', 'b3ar1ck5', 'b3ar1dk5', 'b3ar1ek5', 'b3ar1fk5', 'b3ar1gk5', 'b3ar1ak6', 'b3ar1bk6', 'b3ar1ck6', 'b3ar1dk6', 'b3ar1ek6', 'b3ar1fk6', 'b3ar1ak7', 'b3ar1bk7', 'b3ar1ck7', 'b3ar1dk7', 'b3ar1ek7', 'b3ar1fk7', 'b3ar2k2', 'b3ar2k3', 'b3ar2k4', 'b3ar2k5', 'b3ar2k6', 'b3ar2k7', 'b3asumk2', 'b3asumk3', 'b3asumk5', 'b3br3k2', 'b3br3k3', 'b3br3k4', 'b3br3k5', 'b3br4sumk2', 'b3br4ak2', 'b3br4bk2', 'b3br4ck2', 'b3br4dk2', 'b3br4ek2', 'b3br4sumk3', 'b3br4ak3', 'b3br4bk3', 'b3br4ck3', 'b3br4dk3', 'b3br4ek3', 'b3br4bk4', 'b3br4ck4', 'b3br4dk4', 'b3br4sumk5', 'b3br4bk5', 'b3br4ck5', 'b3br4dk5', 'b3br4dk6', 'b3br4ek6', 'b3br4dk7', 'b3br4ek7', 'b3br5sumk2', 'b3br5ak2', 'b3br5bk2', 'b3br5ck2', 'b3br5sumk3', 'b3br5ak3', 'b3br5bk3', 'b3br5ck3', 'b3br5ak4', 'b3br5bk4', 'b3br5sumk5', 'b3br5ak5', 'b3br5bk5', 'b3br5bk6', 'b3br5bk7', 'b3br6sumk2', 'b3br6ak2', 'b3br6bk2', 'b3br6ck2', 'b3br6sumk3', 'b3br6ak3', 'b3br6bk3', 'b3br6ck3', 'b3br6ak4', 'b3br6ck4', 'b3br6sumk5', 'b3br6ak5', 'b3br6ck5', 'b3br6ak6', 'b3br6ak7', 'b3br7sumk2', 'b3br7ak2', 'b3br7bk2', 'b3br7ck2', 'b3br7dk2', 'b3br7sumk3', 'b3br7ak3', 'b3br7bk3', 'b3br7ck3', 'b3br7dk3', 'b3br7ak4', 'b3br7ck4', 'b3br7sumk5', 'b3br7ak5', 'b3br7ck5', 'b3br8sumk2', 'b3br8ak2', 'b3br8bk2', 'b3br8sumk3', 'b3br8ak3', 'b3br8bk3', 'b3br8ak4', 'b3br8bk4', 'b3br8sumk5', 'b3br8ak5', 'b3br8bk5', 'b3br9k2', 'b3br9k3', 'b3br9k4', 'b3br9k5', 'b3br10k2', 'b3br10k3', 'b3br10k4', 'b3br10k5', 'b3br11k2', 'b3br11k3', 'b3br11k4', 'b3br11k5', 'b3br12sumk2', 'b3br12ak2', 'b3br12bk2', 'b3br12sumk3', 'b3br12ak3', 'b3br12bk3', 'b3br12ak4', 'b3br12bk4', 'b3br12sumk5', 'b3br12ak5', 'b3br12bk5', 'b3br12ak6', 'b3br12ak7', 'b3bsumk2', 'b3bsumk3', 'b3bsumk5', 'b3sumk3', 'b3sumk5', 'b4r1a', 'b4r1b', 'b4r2a', 'b4r2b', 'b4r2c', 'b4r2d', 'b4r2e', 'b4r2f', 'b4r2g', 'b4r2h', 'b4r2i', 'b4r3', 'b4r4', 'b5r1', 'b5r2', 'b5r3', 'b5r4', 'b5sum', 'b6r1a', 'b6r1b', 'b6r2', 'b6r3', 'b6r4a', 'b6r4b', 'b6r5', 'b6r6'], 'required', 'message' => 'Isian tidak boleh kosong'],
            [['b1r5', 'b2r2', 'b2r3', 'b2r4a', 'b2r4b', 'b2r4c', 'b2r4d', 'b2r5b', 'b3ar1ak4', 'b3ar1bk4', 'b3ar1ck4', 'b3ar1dk4', 'b3ar1ek4', 'b3ar1fk4', 'b3ar1gk4', 'b3ar1ak6', 'b3ar1bk6', 'b3ar1ck6', 'b3ar1dk6', 'b3ar1ek6', 'b3ar1fk6', 'b3ar2k4', 'b3ar2k6', 'b3br3k4', 'b3br4bk4', 'b3br4ck4', 'b3br4dk4', 'b3br4dk6', 'b3br4ek6', 'b3br5ak4', 'b3br5bk4', 'b3br5bk6', 'b3br6ak4', 'b3br6ck4', 'b3br6ak6', 'b3br7ak4', 'b3br7ck4', 'b3br8ak4', 'b3br8bk4', 'b3br9k4', 'b3br10k4', 'b3br11k4', 'b3br12ak4', 'b3br12bk4', 'b3br12ak6', 'b4r1a', 'b4r2a', 'b4r2b', 'b4r2c', 'b4r2d', 'b4r2e', 'b4r2f', 'b4r2g', 'b4r2h', 'b4r2i', 'b4r3', 'b4r4', 'b6r2', 'b6r5'], 'integer', 'message' => 'Isian harus bilangan bulat'],
            [['b2r5a', 'b3ar1sumk2', 'b3ar1ak2', 'b3ar1bk2', 'b3ar1ck2', 'b3ar1dk2', 'b3ar1ek2', 'b3ar1fk2', 'b3ar1gk2', 'b3ar1sumk3', 'b3ar1ak3', 'b3ar1bk3', 'b3ar1ck3', 'b3ar1dk3', 'b3ar1ek3', 'b3ar1fk3', 'b3ar1gk3', 'b3ar1sumk5', 'b3ar1ak5', 'b3ar1bk5', 'b3ar1ck5', 'b3ar1dk5', 'b3ar1ek5', 'b3ar1fk5', 'b3ar1gk5', 'b3ar1ak7', 'b3ar1bk7', 'b3ar1ck7', 'b3ar1dk7', 'b3ar1ek7', 'b3ar1fk7', 'b3ar2k2', 'b3ar2k3', 'b3ar2k5', 'b3ar2k7', 'b3asumk2', 'b3asumk3', 'b3asumk5', 'b3br3k2', 'b3br3k3', 'b3br3k5', 'b3br4sumk2', 'b3br4ak2', 'b3br4bk2', 'b3br4ck2', 'b3br4dk2', 'b3br4ek2', 'b3br4sumk3', 'b3br4ak3', 'b3br4bk3', 'b3br4ck3', 'b3br4dk3', 'b3br4ek3', 'b3br4sumk5', 'b3br4bk5', 'b3br4ck5', 'b3br4dk5', 'b3br4dk7', 'b3br4ek7', 'b3br5sumk2', 'b3br5ak2', 'b3br5bk2', 'b3br5ck2', 'b3br5sumk3', 'b3br5ak3', 'b3br5bk3', 'b3br5ck3', 'b3br5sumk5', 'b3br5ak5', 'b3br5bk5', 'b3br5bk7', 'b3br6sumk2', 'b3br6ak2', 'b3br6bk2', 'b3br6ck2', 'b3br6sumk3', 'b3br6ak3', 'b3br6bk3', 'b3br6ck3', 'b3br6sumk5', 'b3br6ak5', 'b3br6ck5', 'b3br6ak7', 'b3br7sumk2', 'b3br7ak2', 'b3br7bk2', 'b3br7ck2', 'b3br7dk2', 'b3br7sumk3', 'b3br7ak3', 'b3br7bk3', 'b3br7ck3', 'b3br7dk3', 'b3br7sumk5', 'b3br7ak5', 'b3br7ck5', 'b3br8sumk2', 'b3br8ak2', 'b3br8bk2', 'b3br8sumk3', 'b3br8ak3', 'b3br8bk3', 'b3br8sumk5', 'b3br8ak5', 'b3br8bk5', 'b3br9k2', 'b3br9k3', 'b3br9k5', 'b3br10k2', 'b3br10k3', 'b3br10k5', 'b3br11k2', 'b3br11k3', 'b3br11k5', 'b3br12sumk2', 'b3br12ak2', 'b3br12bk2', 'b3br12sumk3', 'b3br12ak3', 'b3br12bk3', 'b3br12sumk5', 'b3br12ak5', 'b3br12bk5', 'b3br12ak7', 'b3bsumk2', 'b3bsumk3', 'b3bsumk5', 'b3sumk3', 'b3sumk5', 'b4r1b', 'b5r1', 'b5r2', 'b5r3', 'b5r4', 'b5sum'], 'number', 'message' => 'Isian harus angka'],
            [['b6r3', 'b6r6', 'created_at'], 'safe'],
            [['b7cat'], 'string'],
            [['b1r1', 'b1r2', 'b1r6'], 'string', 'max' => 2],
            [['b1r3', 'b1r4'], 'string', 'max' => 3],
            [['b2r1', 'b6r1a', 'b6r4a'], 'string', 'max' => 50],
            [['b6r1b', 'b6r4b'], 'string', 'max' => 5],

            // Tambahan rule validasi  
            // BLOK I
            [['b1r1', 'b1r2', 'b1r6'], 'c_2char'],
            [['b1r3', 'b1r4'], 'c_3char'],
            [['b1r1', 'b1r2', 'b1r3', 'b1r4'], 'c_angka'],
            [['b1r5'], 'c_min12'],
            [['b1r6'], 'c_angka'],
            [['b1r7'], 'c_b1r7'],
            
            // BLOK II
            [['b2r1'], 'c_huruf'],
            [['b2r1'], 'c_2char'],
            [['b2r2'], 'c_b2r2'],
            [['b2r3'], 'c_b2r3'],
            [['b2r5a'], 'c_min0'],
            [['b2r5b'], 'c_b2r5b'],

            // BLOK III
            // ==================================================================
            // R1
            [['b3ar1sumk2'], 'c_b3ar1sumk2'],
            [['b3ar1ak2', 'b3ar1bk2', 'b3ar1ck2', 'b3ar1dk2', 'b3ar1ek2', 'b3ar1fk2', 'b3ar1gk2'], 'c_min0'],
            [['b3ar1sumk3'], 'c_b3ar1sumk3'],
            [['b3ar1ak3', 'b3ar1bk3', 'b3ar1ck3', 'b3ar1dk3', 'b3ar1ek3', 'b3ar1fk3', 'b3ar1gk3'], 'c_min0'],
            [['b3ar1ak3'], 'c_b3ar1ak3'],
            [['b3ar1bk3'], 'c_b3ar1bk3'],
            [['b3ar1ck3'], 'c_b3ar1ck3'],
            [['b3ar1dk3'], 'c_b3ar1dk3'],
            [['b3ar1ek3'], 'c_b3ar1ek3'],
            [['b3ar1fk3'], 'c_b3ar1fk3'],
            [['b3ar1gk3'], 'c_b3ar1gk3'],
            [['b3ar1ak4', 'b3ar1bk4', 'b3ar1ck4', 'b3ar1dk4', 'b3ar1ek4', 'b3ar1fk4', 'b3ar1gk4'], 'c_min03'],
            [['b3ar1ak5', 'b3ar1bk5', 'b3ar1ck5', 'b3ar1dk5', 'b3ar1ek5', 'b3ar1fk5', 'b3ar1gk5'], 'c_min0'],
            [['b3ar1ak5'], 'c_b3ar1ak5'],
            [['b3ar1bk5'], 'c_b3ar1bk5'],
            [['b3ar1ck5'], 'c_b3ar1ck5'],
            [['b3ar1dk5'], 'c_b3ar1dk5'],
            [['b3ar1ek5'], 'c_b3ar1ek5'],
            [['b3ar1fk5'], 'c_b3ar1fk5'],
            [['b3ar1gk5'], 'c_b3ar1gk5'],
            [['b3ar1ak5'], 'c1_b3ar1ak5'],
            [['b3ar1bk5'], 'c1_b3ar1bk5'],
            [['b3ar1ck5'], 'c1_b3ar1ck5'],
            [['b3ar1dk5'], 'c1_b3ar1dk5'],
            [['b3ar1ek5'], 'c1_b3ar1ek5'],
            [['b3ar1fk5'], 'c1_b3ar1fk5'],
            [['b3ar1gk5'], 'c1_b3ar1gk5'],
            [['b3ar1sumk5'], 'c_b3ar1sumk5'],
            [['b3ar1ak6', 'b3ar1bk6', 'b3ar1ck6', 'b3ar1dk6', 'b3ar1ek6', 'b3ar1fk6'], 'c_min12'],            
            [['b3ar1ak7', 'b3ar1bk7', 'b3ar1ck7', 'b3ar1dk7', 'b3ar1ek7', 'b3ar1fk7'], 'c_min0'],            
            [['b3ar1ak7'], 'c_b3ar1ak7'],
            [['b3ar1bk7'], 'c_b3ar1bk7'],
            [['b3ar1ck7'], 'c_b3ar1ck7'],
            [['b3ar1dk7'], 'c_b3ar1dk7'],
            [['b3ar1ek7'], 'c_b3ar1ek7'],
            [['b3ar1fk7'], 'c_b3ar1fk7'],
            // ==================================================================
            // R2
            [['b3ar2k2'], 'c_min0'],
            [['b3ar2k3'], 'c_min0'],
            [['b3ar2k3'], 'c_b3ar2k3'],
            [['b3ar2k4'], 'c_min03'],
            [['b3ar2k5'], 'c_min0'],
            [['b3ar2k5'], 'c_b3ar2k5'],            
            [['b3ar2k5'], 'c1_b3ar2k5'],            
            [['b3ar2k6'], 'c_min12'],            
            [['b3ar2k7'], 'c_min0'],            
            [['b3ar2k7'], 'c_b3ar2k7'],
            // ==================================================================
            // R3
            [['b3br3k2'], 'c_min0'],
            [['b3br3k3'], 'c_min0'],
            [['b3br3k3'], 'c_b3br3k3'],
            [['b3br3k4'], 'c_min03'],
            [['b3br3k5'], 'c_min0'],
            [['b3br3k5'], 'c_b3br3k5'],            
            [['b3br3k5'], 'c1_b3br3k5'],  
            // ==================================================================
            // R4
            [['b3br4sumk2'], 'c_b3br4sumk2'],
            [['b3br4ak2', 'b3br4bk2', 'b3br4ck2', 'b3br4dk2', 'b3br4ek2'], 'c_min0'],
            [['b3br4sumk3'], 'c_b3br4sumk3'],
            [['b3br4ak3', 'b3br4bk3', 'b3br4ck3', 'b3br4dk3', 'b3br4ek3'], 'c_min0'],
            [['b3br4ak3'], 'c_b3br4ak3'],
            [['b3br4bk3'], 'c_b3br4bk3'],
            [['b3br4ck3'], 'c_b3br4ck3'],
            [['b3br4dk3'], 'c_b3br4dk3'],
            [['b3br4ek3'], 'c_b3br4ek3'],
            [['b3br4bk4', 'b3br4ck4', 'b3br4dk4'], 'c_min03'],
            [['b3br4bk5', 'b3br4ck5', 'b3br4dk5'], 'c_min0'],
            [['b3br4bk5'], 'c_b3br4bk5'],
            [['b3br4ck5'], 'c_b3br4ck5'],
            [['b3br4dk5'], 'c_b3br4dk5'],
            [['b3br4bk5'], 'c1_b3br4bk5'],
            [['b3br4ck5'], 'c1_b3br4ck5'],
            [['b3br4dk5'], 'c1_b3br4dk5'],
            [['b3br4sumk5'], 'c_b3br4sumk5'],
            [['b3br4dk6', 'b3br4ek6'], 'c_min12'],            
            [['b3br4dk7', 'b3br4ek7'], 'c_min0'],            
            [['b3br4dk7'], 'c_b3br4dk7'],
            [['b3br4ek7'], 'c_b3br4ek7'],
            // ==================================================================
            // R5
            [['b3br5sumk2'], 'c_b3br5sumk2'],
            [['b3br5ak2', 'b3br5bk2', 'b3br5ck2'], 'c_min0'],
            [['b3br5sumk3'], 'c_b3br5sumk3'],
            [['b3br5ak3', 'b3br5bk3', 'b3br5ck3'], 'c_min0'],
            [['b3br5ak3'], 'c_b3br5ak3'],
            [['b3br5bk3'], 'c_b3br5bk3'],
            [['b3br5ck3'], 'c_b3br5ck3'],
            [['b3br5ak4', 'b3br5bk4'], 'c_min03'],
            [['b3br5ak5', 'b3br5bk5'], 'c_min0'],
            [['b3br5ak5'], 'c_b3br5ak5'],
            [['b3br5bk5'], 'c_b3br5bk5'],
            [['b3br5ak5'], 'c1_b3br5ak5'],
            [['b3br5bk5'], 'c1_b3br5bk5'],
            [['b3br5sumk5'], 'c_b3br5sumk5'],
            [['b3br5bk6'], 'c_min12'],            
            [['b3br5bk7'], 'c_min0'],            
            [['b3br5bk7'], 'c_b3br5bk7'],
            // ==================================================================
            // R6
            [['b3br6sumk2'], 'c_b3br6sumk2'],
            [['b3br6ak2', 'b3br6bk2', 'b3br6ck2'], 'c_min0'],
            [['b3br6sumk3'], 'c_b3br6sumk3'],
            [['b3br6ak3', 'b3br6bk3', 'b3br6ck3'], 'c_min0'],
            [['b3br6ak3'], 'c_b3br6ak3'],
            [['b3br6bk3'], 'c_b3br6bk3'],
            [['b3br6ck3'], 'c_b3br6ck3'],
            [['b3br6ak4', 'b3br6ck4'], 'c_min03'],
            [['b3br6ak5', 'b3br6ck5'], 'c_min0'],
            [['b3br6ak5'], 'c_b3br6ak5'],
            [['b3br6ck5'], 'c_b3br6ck5'],
            [['b3br6ak5'], 'c1_b3br6ak5'],
            [['b3br6ck5'], 'c1_b3br6ck5'],
            [['b3br6sumk5'], 'c_b3br6sumk5'],
            [['b3br6ak6'], 'c_min12'],            
            [['b3br6ak7'], 'c_min0'],            
            [['b3br6ak7'], 'c_b3br6ak7'],
            // ==================================================================
            // R7
            [['b3br7sumk2'], 'c_b3br7sumk2'],
            [['b3br7ak2', 'b3br7bk2', 'b3br7ck2', 'b3br7dk2'], 'c_min0'],
            [['b3br7sumk3'], 'c_b3br7sumk3'],
            [['b3br7ak3', 'b3br7bk3', 'b3br7ck3', 'b3br7dk3'], 'c_min0'],
            [['b3br7ak3'], 'c_b3br7ak3'],
            [['b3br7bk3'], 'c_b3br7bk3'],
            [['b3br7ck3'], 'c_b3br7ck3'],
            [['b3br7dk3'], 'c_b3br7dk3'],
            [['b3br7ak4', 'b3br7ck4'], 'c_min03'],
            [['b3br7ak5', 'b3br7ck5'], 'c_min0'],
            [['b3br7ak5'], 'c_b3br7ak5'],
            [['b3br7ck5'], 'c_b3br7ck5'],
            [['b3br7ak5'], 'c1_b3br7ak5'],
            [['b3br7ck5'], 'c1_b3br7ck5'],
            [['b3br7sumk5'], 'c_b3br7sumk5'],
            // ==================================================================
            // R8
            [['b3br8sumk2'], 'c_b3br8sumk2'],
            [['b3br8ak2', 'b3br8bk2'], 'c_min0'],
            [['b3br8sumk3'], 'c_b3br8sumk3'],
            [['b3br8ak3', 'b3br8bk3'], 'c_min0'],
            [['b3br8ak3'], 'c_b3br8ak3'],
            [['b3br8bk3'], 'c_b3br8bk3'],
            [['b3br8ak4', 'b3br8bk4'], 'c_min03'],
            [['b3br8ak5', 'b3br8bk5'], 'c_min0'],
            [['b3br8ak5'], 'c_b3br8ak5'],
            [['b3br8bk5'], 'c_b3br8bk5'],
            [['b3br8ak5'], 'c1_b3br8ak5'],
            [['b3br8bk5'], 'c1_b3br8bk5'],
            [['b3br8sumk5'], 'c_b3br8sumk5'],
            // ==================================================================
            // R9
            [['b3br9k2'], 'c_min0'],
            [['b3br9k3'], 'c_min0'],
            [['b3br9k3'], 'c_b3br9k3'],
            [['b3br9k4'], 'c_min03'],
            [['b3br9k5'], 'c_min0'],
            [['b3br9k5'], 'c_b3br9k5'],
            [['b3br9k5'], 'c1_b3br9k5'],
            // ==================================================================
            // R10
            [['b3br10k2'], 'c_min0'],
            [['b3br10k3'], 'c_min0'],
            [['b3br10k3'], 'c_b3br10k3'],
            [['b3br10k4'], 'c_min03'],
            [['b3br10k5'], 'c_min0'],
            [['b3br10k5'], 'c_b3br10k5'],
            [['b3br10k5'], 'c1_b3br10k5'],
            // ==================================================================
            // R11
            [['b3br11k2'], 'c_min0'],
            [['b3br11k3'], 'c_min0'],
            [['b3br11k3'], 'c_b3br11k3'],
            [['b3br11k4'], 'c_min03'],
            [['b3br11k5'], 'c_min0'],
            [['b3br11k5'], 'c_b3br11k5'],
            [['b3br11k5'], 'c1_b3br11k5'],
            // ==================================================================
            // R12
            [['b3br12sumk2'], 'c_b3br12sumk2'],
            [['b3br12ak2', 'b3br12bk2'], 'c_min0'],
            [['b3br12sumk3'], 'c_b3br12sumk3'],
            [['b3br12ak3', 'b3br12bk3'], 'c_min0'],
            [['b3br12ak3'], 'c_b3br12ak3'],
            [['b3br12bk3'], 'c_b3br12bk3'],
            [['b3br12ak4', 'b3br12bk4'], 'c_min03'],
            [['b3br12ak5', 'b3br12bk5'], 'c_min0'],
            [['b3br12ak5'], 'c_b3br12ak5'],
            [['b3br12bk5'], 'c_b3br12bk5'],
            [['b3br12ak5'], 'c1_b3br12ak5'],
            [['b3br12bk5'], 'c1_b3br12bk5'],
            [['b3br12sumk5'], 'c_b3br12sumk5'],
            [['b3br12ak6'], 'c_min12'],            
            [['b3br12ak7'], 'c_min0'],            
            [['b3br12ak7'], 'c_b3br12ak7'],
            // ==================================================================
            // TOTAL
            [['b3asumk2'], 'c_b3asumk2'],
            [['b3asumk3'], 'c_b3asumk3'],
            [['b3asumk5'], 'c_b3asumk5'],
            [['b3bsumk2'], 'c_b3bsumk2'],
            [['b3bsumk3'], 'c_b3bsumk3'],
            [['b3bsumk5'], 'c_b3bsumk5'],
            [['b3sumk3'], 'c_b3sumk3'],
            [['b3sumk5'], 'c_b3sumk5'],
            
            // BLOK IV
            [['b4r1a', 'b4r4'], 'c_min13'],
            [['b4r2a', 'b4r2b', 'b4r2c', 'b4r2d', 'b4r2e', 'b4r2f', 'b4r2g', 'b4r2h', 'b4r2i', 'b4r3'], 'c_min03'],
            [['b4r1b'], 'c_b4r1b'],

            // BLOK V
            [['b5sum'], 'c_b5sum'],

            // BLOK VI 
            [['b6r1a', 'b6r4a'], 'c_huruf'],
            [['b6r1b', 'b6r4b'], 'c_angka'],
            [['b6r4b'], 'c_b6r4b'],
            [['b6r1b', 'b6r4b'], 'c_5char'],
            [['b6r2'], 'c_min13'],
            [['b6r5'], 'c_min12'],
            [['b6r6'], 'c_b6r6'],
        ];
    }

    // ==================================================================
    // GLOBAL
    public function c_huruf($attribute)
    {
        if (!preg_match('/^[a-zA-Z.,-]+(?:\s[a-zA-Z.,-]+)*$/', $this->$attribute)) {
            $this->addError($attribute, 'Isian harus berupa huruf');
        }
    }

    public function c_angka($attribute)
    {
        if (!preg_match('/^[0-9]+$/', $this->$attribute)) {
            $this->addError($attribute, 'Isian harus angka');
        }
    }

    public function c_2char($attribute)
    {   
        if(strlen($this->$attribute) < 2)
        {
            $this->addError($attribute, 'Isian minimal 2 karakter');
        }
    }

    public function c_3char($attribute)
    {   
        if(strlen($this->$attribute) < 3)
        {
            $this->addError($attribute, 'Isian minimal 3 karakter');
        }
    }

    public function c_5char($attribute)
    {   
        if(strlen($this->$attribute) < 5)
        {
            $this->addError($attribute, 'Isian minimal 5 karakter');
        }
    }

    public function c_min0($attribute)
    {
        if($this->$attribute < 0)
        {
            $this->addError($attribute, 'Isian minimal 0');
        }
    }

    public function c_min03($attribute)
    {
        if($this->$attribute < 0 || $this->$attribute > 3)
        {
            $this->addError($attribute, 'Range isian antara 0 sampai 3');
        }
    }

    public function c_min12($attribute)
    {
        if($this->$attribute < 1 || $this->$attribute > 2)
        {
            $this->addError($attribute, 'Isian hanya boleh 1 atau 2');
        }
    }

    public function c_min13($attribute)
    {
        if($this->$attribute < 1 || $this->$attribute > 3)
        {
            $this->addError($attribute, 'Range isian antara 1 sampai 3');
        }
    }

    // ==================================================================
    // BLOK I
    public function c_b1r7($attribute)
    {   
        if(strlen($this->$attribute) < 10)
        {
            $this->addError($attribute, 'Isian minimal 10 karakter');
        }
    }

    // ==================================================================
    // BLOK II
    public function c_b2r2($attribute)
    {   
        if($this->$attribute < 1 || $this->$attribute > 7)
        {
            $this->addError($attribute, 'Range isian antara 1 sampai 7');
        }
    }

    public function c_b2r3($attribute)
    {   
        if($this->$attribute < 0 || $this->$attribute > 21)
        {
            $this->addError($attribute, 'Range isian antara 0 sampai 21');
        }
    }

    public function c_b2r5b($attribute)
    {
        $cek = $this->b2r5a;
        if($this->$attribute != 1 && $cek < 4000)
        {
            $this->addError($attribute, 'Isian kode harusnya 1');
        } else if($this->$attribute !=2 && $cek >= 4000 && $cek <6000)
        {
            $this->addError($attribute, 'Isian kode harusnya 2');
        } else if($this->$attribute !=3 && $cek >= 6000 && $cek <= 8000)
        {
            $this->addError($attribute, 'Isian kode harusnya 3');
        } else if($this->$attribute !=4 && $cek > 8000)
        {
            $this->addError($attribute, 'Isian kode harusnya 4');
        }
    }

    // ==================================================================
    // BLOK III
    // ==================================================================
    // R1
    // ==================================================================
    public function c_b3ar1sumk2($attribute)
    {
        $r1 = $this->b3ar1ak2;
        $r2 = $this->b3ar1bk2;
        $r3 = $this->b3ar1ck2;
        $r4 = $this->b3ar1dk2;
        $r5 = $this->b3ar1ek2;
        $r6 = $this->b3ar1fk2;
        $r7 = $this->b3ar1gk2;
        $sum = $r1+$r2+$r3+$r4+$r5+$r6+$r7; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3ar1sumk3($attribute)
    {
        $r1 = $this->b3ar1ak3;
        $r2 = $this->b3ar1bk3;
        $r3 = $this->b3ar1ck3;
        $r4 = $this->b3ar1dk3;
        $r5 = $this->b3ar1ek3;
        $r6 = $this->b3ar1fk3;
        $r7 = $this->b3ar1gk3;
        $sum = $r1+$r2+$r3+$r4+$r5+$r6+$r7; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3ar1ak3($attribute)
    {
        $cek = $this->b3ar1ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1bk3($attribute)
    {
        $cek = $this->b3ar1bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1ck3($attribute)
    {
        $cek = $this->b3ar1ck2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1dk3($attribute)
    {
        $cek = $this->b3ar1dk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1ek3($attribute)
    {
        $cek = $this->b3ar1ek2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1fk3($attribute)
    {
        $cek = $this->b3ar1fk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1gk3($attribute)
    {
        $cek = $this->b3ar1gk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3ar1sumk5 ($attribute)
    {
        $r1 = $this->b3ar1ak5;
        $r2 = $this->b3ar1bk5;
        $r3 = $this->b3ar1ck5;
        $r4 = $this->b3ar1dk5;
        $r5 = $this->b3ar1ek5;
        $r6 = $this->b3ar1fk5;
        $r7 = $this->b3ar1gk5;
        $sum = $r1+$r2+$r3+$r4+$r5+$r6+$r7; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3ar1ak5($attribute)
    {
        $cek = $this->b3ar1ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1bk5($attribute)
    {
        $cek = $this->b3ar1bk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1ck5($attribute)
    {
        $cek = $this->b3ar1ck4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1dk5($attribute)
    {
        $cek = $this->b3ar1dk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1ek5($attribute)
    {
        $cek = $this->b3ar1ek4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1fk5($attribute)
    {
        $cek = $this->b3ar1fk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1gk5($attribute)
    {
        $cek = $this->b3ar1gk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c1_b3ar1ak5($attribute)
    {
        $cek = $this->b3ar1ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1bk5($attribute)
    {
        $cek = $this->b3ar1bk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1ck5($attribute)
    {
        $cek = $this->b3ar1ck3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1dk5($attribute)
    {
        $cek = $this->b3ar1dk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1ek5($attribute)
    {
        $cek = $this->b3ar1ek3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1fk5($attribute)
    {
        $cek = $this->b3ar1fk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3ar1gk5($attribute)
    {
        $cek = $this->b3ar1gk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3ar1ak7($attribute)
    {
        $cek = $this->b3ar1ak6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1bk7($attribute)
    {
        $cek = $this->b3ar1bk6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1ck7($attribute)
    {
        $cek = $this->b3ar1ck6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1dk7($attribute)
    {
        $cek = $this->b3ar1dk6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1ek7($attribute)
    {
        $cek = $this->b3ar1ek6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3ar1fk7($attribute)
    {
        $cek = $this->b3ar1fk6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    // ==================================================================
    // R2
    // ==================================================================
    public function c_b3ar2k3($attribute)
    {
        $cek = $this->b3ar2k2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }    

    public function c_b3ar2k5($attribute)
    {
        $cek = $this->b3ar2k4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3ar2k5($attribute)
    {
        $cek = $this->b3ar2k3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3ar2k7($attribute)
    {
        $cek = $this->b3ar2k6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    // ==================================================================
    // R3
    // ==================================================================
    public function c_b3br3k3($attribute)
    {
        $cek = $this->b3br3k2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }    

    public function c_b3br3k5($attribute)
    {
        $cek = $this->b3br3k4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c1_b3br3k5($attribute)
    {
        $cek = $this->b3br3k3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R4
    // ==================================================================
    public function c_b3br4sumk2($attribute)
    {
        $r1 = $this->b3br4ak2;
        $r2 = $this->b3br4bk2;
        $r3 = $this->b3br4ck2;
        $r4 = $this->b3br4dk2;
        $r5 = $this->b3br4ek2;
        $sum = $r1+$r2+$r3+$r4+$r5; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br4sumk3($attribute)
    {
        $r1 = $this->b3br4ak3;
        $r2 = $this->b3br4bk3;
        $r3 = $this->b3br4ck3;
        $r4 = $this->b3br4dk3;
        $r5 = $this->b3br4ek3;
        $sum = $r1+$r2+$r3+$r4+$r5; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br4ak3($attribute)
    {
        $cek = $this->b3br4ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br4bk3($attribute)
    {
        $cek = $this->b3br4bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br4ck3($attribute)
    {
        $cek = $this->b3br4ck2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br4dk3($attribute)
    {
        $cek = $this->b3br4dk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br4ek3($attribute)
    {
        $cek = $this->b3br4ek2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br4sumk5 ($attribute)
    {
        $r2 = $this->b3br4bk5;
        $r3 = $this->b3br4ck5;
        $r4 = $this->b3br4dk5;
        $sum = $r2+$r3+$r4; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }
    
    public function c_b3br4bk5($attribute)
    {
        $cek = $this->b3br4bk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3br4ck5($attribute)
    {
        $cek = $this->b3br4ck4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3br4dk5($attribute)
    {
        $cek = $this->b3br4dk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br4bk5($attribute)
    {
        $cek = $this->b3br4bk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br4ck5($attribute)
    {
        $cek = $this->b3br4ck3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br4dk5($attribute)
    {
        $cek = $this->b3br4dk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3br4dk7($attribute)
    {
        $cek = $this->b3br4dk6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3br4ek7($attribute)
    {
        $cek = $this->b3br4ek6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    // ==================================================================
    // R5
    // ==================================================================
    public function c_b3br5sumk2($attribute)
    {
        $r1 = $this->b3br5ak2;
        $r2 = $this->b3br5bk2;
        $r3 = $this->b3br5ck2;
        $sum = $r1+$r2+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br5sumk3($attribute)
    {
        $r1 = $this->b3br5ak3;
        $r2 = $this->b3br5bk3;
        $r3 = $this->b3br5ck3;
        $sum = $r1+$r2+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br5ak3($attribute)
    {
        $cek = $this->b3br5ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br5bk3($attribute)
    {
        $cek = $this->b3br5bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br5ck3($attribute)
    {
        $cek = $this->b3br5ck2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }
    
    public function c_b3br5sumk5 ($attribute)
    {
        $r1 = $this->b3br5ak5;
        $r2 = $this->b3br5bk5;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br5ak5($attribute)
    {
        $cek = $this->b3br5ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }
    
    public function c_b3br5bk5($attribute)
    {
        $cek = $this->b3br5bk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br5ak5($attribute)
    {
        $cek = $this->b3br5ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br5bk5($attribute)
    {
        $cek = $this->b3br5bk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3br5bk7($attribute)
    {
        $cek = $this->b3br5bk6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    // ==================================================================
    // R6
    // ==================================================================
    public function c_b3br6sumk2($attribute)
    {
        $r1 = $this->b3br6ak2;
        $r2 = $this->b3br6bk2;
        $r3 = $this->b3br6ck2;
        $sum = $r1+$r2+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br6sumk3($attribute)
    {
        $r1 = $this->b3br6ak3;
        $r2 = $this->b3br6bk3;
        $r3 = $this->b3br6ck3;
        $sum = $r1+$r2+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br6ak3($attribute)
    {
        $cek = $this->b3br6ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br6bk3($attribute)
    {
        $cek = $this->b3br6bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br6ck3($attribute)
    {
        $cek = $this->b3br6ck2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }
    
    public function c_b3br6sumk5 ($attribute)
    {
        $r1 = $this->b3br6ak5;
        $r3 = $this->b3br6ck5;
        $sum = $r1+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br6ak5($attribute)
    {
        $cek = $this->b3br6ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }
    
    public function c_b3br6ck5($attribute)
    {
        $cek = $this->b3br6ck4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br6ak5($attribute)
    {
        $cek = $this->b3br6ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br6ck5($attribute)
    {
        $cek = $this->b3br6ck3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3br6ak7($attribute)
    {
        $cek = $this->b3br6ak6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    // ==================================================================
    // R7
    // ==================================================================
    public function c_b3br7sumk2($attribute)
    {
        $r1 = $this->b3br7ak2;
        $r2 = $this->b3br7bk2;
        $r3 = $this->b3br7ck2;
        $r4 = $this->b3br7dk2;
        $sum = $r1+$r2+$r3+$r4; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br7sumk3($attribute)
    {
        $r1 = $this->b3br7ak3;
        $r2 = $this->b3br7bk3;
        $r3 = $this->b3br7ck3;
        $r4 = $this->b3br7dk3;
        $sum = $r1+$r2+$r3+$r4; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br7ak3($attribute)
    {
        $cek = $this->b3br7ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br7bk3($attribute)
    {
        $cek = $this->b3br7bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br7ck3($attribute)
    {
        $cek = $this->b3br7ck2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br7dk3($attribute)
    {
        $cek = $this->b3br7dk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }
    
    public function c_b3br7sumk5 ($attribute)
    {
        $r1 = $this->b3br7ak5;
        $r3 = $this->b3br7ck5;
        $sum = $r1+$r3; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br7ak5($attribute)
    {
        $cek = $this->b3br7ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }
    
    public function c_b3br7ck5($attribute)
    {
        $cek = $this->b3br7ck4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br7ak5($attribute)
    {
        $cek = $this->b3br7ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br7ck5($attribute)
    {
        $cek = $this->b3br7ck3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R8
    // ==================================================================
    public function c_b3br8sumk2($attribute)
    {
        $r1 = $this->b3br8ak2;
        $r2 = $this->b3br8bk2;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br8sumk3($attribute)
    {
        $r1 = $this->b3br8ak3;
        $r2 = $this->b3br8bk3;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br8ak3($attribute)
    {
        $cek = $this->b3br8ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br8bk3($attribute)
    {
        $cek = $this->b3br8bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    } 
    
    public function c_b3br8sumk5 ($attribute)
    {
        $r1 = $this->b3br8ak5;
        $r2 = $this->b3br8bk5;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br8ak5($attribute)
    {
        $cek = $this->b3br8ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }
    
    public function c_b3br8bk5($attribute)
    {
        $cek = $this->b3br8bk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br8ak5($attribute)
    {
        $cek = $this->b3br8ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br8bk5($attribute)
    {
        $cek = $this->b3br8bk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R9
    // ==================================================================
    public function c_b3br9k3($attribute)
    {
        $cek = $this->b3br9k2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }    

    public function c_b3br9k5($attribute)
    {
        $cek = $this->b3br9k4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }        

    public function c1_b3br9k5($attribute)
    {
        $cek = $this->b3br9k3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R10
    // ==================================================================
    public function c_b3br10k3($attribute)
    {
        $cek = $this->b3br10k2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }    

    public function c_b3br10k5($attribute)
    {
        $cek = $this->b3br10k4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }        

    public function c1_b3br10k5($attribute)
    {
        $cek = $this->b3br10k3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R11
    // ==================================================================
    public function c_b3br11k3($attribute)
    {
        $cek = $this->b3br11k2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }    

    public function c_b3br11k5($attribute)
    {
        $cek = $this->b3br11k4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }        

    public function c1_b3br11k5($attribute)
    {
        $cek = $this->b3br11k3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    // ==================================================================
    // R12
    // ==================================================================
    public function c_b3br12sumk2($attribute)
    {
        $r1 = $this->b3br12ak2;
        $r2 = $this->b3br12bk2;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br12sumk3($attribute)
    {
        $r1 = $this->b3br12ak3;
        $r2 = $this->b3br12bk3;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br12ak3($attribute)
    {
        $cek = $this->b3br12ak2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    }

    public function c_b3br12bk3($attribute)
    {
        $cek = $this->b3br12bk2;
        if($this->$attribute < $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih kecil daripada seminggu yang lalu');
        }
    } 
    
    public function c_b3br12sumk5 ($attribute)
    {
        $r1 = $this->b3br12ak5;
        $r2 = $this->b3br12bk5;
        $sum = $r1+$r2; 
        if ($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Total rincian seharusnya '.$sum);
        }
    }

    public function c_b3br12ak5($attribute)
    {
        $cek = $this->b3br12ak4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }
    
    public function c_b3br12bk5($attribute)
    {
        $cek = $this->b3br12bk4;
        if($this->$attribute != 0 && $cek == 0)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek > 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }    

    public function c1_b3br12ak5($attribute)
    {
        $cek = $this->b3br12ak3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c1_b3br12bk5($attribute)
    {
        $cek = $this->b3br12bk3;
        if($this->$attribute > $cek)
        {
            $this->addError($attribute, 'Isian tidak boleh lebih besar daripada total konsumsi April-Juni');
        } 
    }

    public function c_b3br12ak7($attribute)
    {
        $cek = $this->b3br12ak6;
        if($this->$attribute != 0 && $cek == 2)
        {
            $this->addError($attribute, 'Isian seharusnya 0');
        } else if($this->$attribute == 0 && $cek == 1)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        }
    }

    public function c_b3asumk2($attribute)
    {
        $B3ar1ak2 = $this->b3ar1ak2;
        $B3ar1bk2 = $this->b3ar1bk2;
        $B3ar1ck2 = $this->b3ar1ck2;
        $B3ar1dk2 = $this->b3ar1dk2;
        $B3ar1ek2 = $this->b3ar1ek2;
        $B3ar1fk2 = $this->b3ar1fk2;
        $B3ar1gk2 = $this->b3ar1gk2;
        $B3ar2k2 = $this->b3ar2k2;
        $sum = $B3ar1ak2+$B3ar1bk2+$B3ar1ck2+$B3ar1dk2+$B3ar1ek2+$B3ar1fk2+$B3ar1gk2+$B3ar2k2;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3asumk3($attribute)
    {
        $B3ar1ak3 = $this->b3ar1ak3;
        $B3ar1bk3 = $this->b3ar1bk3;
        $B3ar1ck3 = $this->b3ar1ck3;
        $B3ar1dk3 = $this->b3ar1dk3;
        $B3ar1ek3 = $this->b3ar1ek3;
        $B3ar1fk3 = $this->b3ar1fk3;
        $B3ar1gk3 = $this->b3ar1gk3;
        $B3ar2k3 = $this->b3ar2k3;
        $sum = $B3ar1ak3+$B3ar1bk3+$B3ar1ck3+$B3ar1dk3+$B3ar1ek3+$B3ar1fk3+$B3ar1gk3+$B3ar2k3;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3asumk5($attribute)
    {
        $B3ar1ak5 = $this->b3ar1ak5;
        $B3ar1bk5 = $this->b3ar1bk5;
        $B3ar1ck5 = $this->b3ar1ck5;
        $B3ar1dk5 = $this->b3ar1dk5;
        $B3ar1ek5 = $this->b3ar1ek5;
        $B3ar1fk5 = $this->b3ar1fk5;
        $B3ar1gk5 = $this->b3ar1gk5;
        $B3ar2k5 = $this->b3ar2k5;
        $sum = $B3ar1ak5+$B3ar1bk5+$B3ar1ck5+$B3ar1dk5+$B3ar1ek5+$B3ar1fk5+$B3ar1gk5+$B3ar2k5;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3bsumk2($attribute)
    {
        $B3br3k2 = $this->b3br3k2;
        $B3br4ak2 = $this->b3br4ak2;
        $B3br4bk2 = $this->b3br4bk2;
        $B3br4ck2 = $this->b3br4ck2;
        $B3br4dk2 = $this->b3br4dk2;
        $B3br4ek2 = $this->b3br4ek2;
        $B3br5ak2 = $this->b3br5ak2;
        $B3br5bk2 = $this->b3br5bk2;
        $B3br5ck2 = $this->b3br5ck2;
        $B3br6ak2 = $this->b3br6ak2;
        $B3br6bk2 = $this->b3br6bk2;
        $B3br6ck2 = $this->b3br6ck2;
        $B3br7ak2 = $this->b3br7ak2;
        $B3br7bk2 = $this->b3br7bk2;
        $B3br7ck2 = $this->b3br7ck2;
        $B3br7dk2 = $this->b3br7dk2;
        $B3br8ak2 = $this->b3br8ak2;
        $B3br8bk2 = $this->b3br8bk2;
        $B3br9k2 = $this->b3br9k2;
        $B3br10k2 = $this->b3br10k2;
        $B3br11k2 = $this->b3br11k2;
        $B3br12ak2 = $this->b3br12ak2;
        $B3br12bk2 = $this->b3br12bk2;
        $sum = $B3br3k2+$B3br4ak2+$B3br4bk2+$B3br4ck2+$B3br4dk2+$B3br4ek2+$B3br5ak2+$B3br5bk2+$B3br5ck2+$B3br6ak2+$B3br6bk2+$B3br6ck2+$B3br7ak2+$B3br7bk2+$B3br7ck2+$B3br7dk2+$B3br8ak2+$B3br8bk2+$B3br9k2+$B3br10k2+$B3br11k2+$B3br12ak2+$B3br12bk2;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3bsumk3($attribute)
    {
        $B3br3k3 = $this->b3br3k3;
        $B3br4ak3 = $this->b3br4ak3;
        $B3br4bk3 = $this->b3br4bk3;
        $B3br4ck3 = $this->b3br4ck3;
        $B3br4dk3 = $this->b3br4dk3;
        $B3br4ek3 = $this->b3br4ek3;
        $B3br5ak3 = $this->b3br5ak3;
        $B3br5bk3 = $this->b3br5bk3;
        $B3br5ck3 = $this->b3br5ck3;
        $B3br6ak3 = $this->b3br6ak3;
        $B3br6bk3 = $this->b3br6bk3;
        $B3br6ck3 = $this->b3br6ck3;
        $B3br7ak3 = $this->b3br7ak3;
        $B3br7bk3 = $this->b3br7bk3;
        $B3br7ck3 = $this->b3br7ck3;
        $B3br7dk3 = $this->b3br7dk3;
        $B3br8ak3 = $this->b3br8ak3;
        $B3br8bk3 = $this->b3br8bk3;
        $B3br9k3 = $this->b3br9k3;
        $B3br10k3 = $this->b3br10k3;
        $B3br11k3 = $this->b3br11k3;
        $B3br12ak3 = $this->b3br12ak3;
        $B3br12bk3 = $this->b3br12bk3;
        $sum = $B3br3k3+$B3br4ak3+$B3br4bk3+$B3br4ck3+$B3br4dk3+$B3br4ek3+$B3br5ak3+$B3br5bk3+$B3br5ck3+$B3br6ak3+$B3br6bk3+$B3br6ck3+$B3br7ak3+$B3br7bk3+$B3br7ck3+$B3br7dk3+$B3br8ak3+$B3br8bk3+$B3br9k3+$B3br10k3+$B3br11k3+$B3br12ak3+$B3br12bk3;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3bsumk5($attribute)
    {
        $B3br3k5 = $this->b3br3k5;
        $B3br4bk5 = $this->b3br4bk5;
        $B3br4ck5 = $this->b3br4ck5;
        $B3br4dk5 = $this->b3br4dk5;
        $B3br5ak5 = $this->b3br5ak5;
        $B3br5bk5 = $this->b3br5bk5;
        $B3br6ak5 = $this->b3br6ak5;
        $B3br6ck5 = $this->b3br6ck5;
        $B3br7ak5 = $this->b3br7ak5;
        $B3br7ck5 = $this->b3br7ck5;
        $B3br8ak5 = $this->b3br8ak5;
        $B3br8bk5 = $this->b3br8bk5;
        $B3br9k5 = $this->b3br9k5;
        $B3br10k5 = $this->b3br10k5;
        $B3br11k5 = $this->b3br11k5;
        $B3br12ak5 = $this->b3br12ak5;
        $B3br12bk5 = $this->b3br12bk5;
        $sum = $B3br3k5+$B3br4bk5+$B3br4ck5+$B3br4dk5+$B3br5ak5+$B3br5bk5+$B3br6ak5+$B3br6ck5+$B3br7ak5+$B3br7ck5+$B3br8ak5+$B3br8bk5+$B3br9k5+$B3br10k5+$B3br11k5+$B3br12ak5+$B3br12bk5;

        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3sumk3($attribute)
    {
        $B3ar1ak3 = $this->b3ar1ak3;
        $B3ar1bk3 = $this->b3ar1bk3;
        $B3ar1ck3 = $this->b3ar1ck3;
        $B3ar1dk3 = $this->b3ar1dk3;
        $B3ar1ek3 = $this->b3ar1ek3;
        $B3ar1fk3 = $this->b3ar1fk3;
        $B3ar1gk3 = $this->b3ar1gk3;
        $B3ar2k3 = $this->b3ar2k3;
        $sum3a = $B3ar1ak3+$B3ar1bk3+$B3ar1ck3+$B3ar1dk3+$B3ar1ek3+$B3ar1fk3+$B3ar1gk3+$B3ar2k3;

        $B3br3k3 = $this->b3br3k3;
        $B3br4ak3 = $this->b3br4ak3;
        $B3br4bk3 = $this->b3br4bk3;
        $B3br4ck3 = $this->b3br4ck3;
        $B3br4dk3 = $this->b3br4dk3;
        $B3br4ek3 = $this->b3br4ek3;
        $B3br5ak3 = $this->b3br5ak3;
        $B3br5bk3 = $this->b3br5bk3;
        $B3br5ck3 = $this->b3br5ck3;
        $B3br6ak3 = $this->b3br6ak3;
        $B3br6bk3 = $this->b3br6bk3;
        $B3br6ck3 = $this->b3br6ck3;
        $B3br7ak3 = $this->b3br7ak3;
        $B3br7bk3 = $this->b3br7bk3;
        $B3br7ck3 = $this->b3br7ck3;
        $B3br7dk3 = $this->b3br7dk3;
        $B3br8ak3 = $this->b3br8ak3;
        $B3br8bk3 = $this->b3br8bk3;
        $B3br9k3 = $this->b3br9k3;
        $B3br10k3 = $this->b3br10k3;
        $B3br11k3 = $this->b3br11k3;
        $B3br12ak3 = $this->b3br12ak3;
        $B3br12bk3 = $this->b3br12bk3;
        $sum3b = $B3br3k3+$B3br4ak3+$B3br4bk3+$B3br4ck3+$B3br4dk3+$B3br4ek3+$B3br5ak3+$B3br5bk3+$B3br5ck3+$B3br6ak3+$B3br6bk3+$B3br6ck3+$B3br7ak3+$B3br7bk3+$B3br7ck3+$B3br7dk3+$B3br8ak3+$B3br8bk3+$B3br9k3+$B3br10k3+$B3br11k3+$B3br12ak3+$B3br12bk3;

        $sum = $sum3a + $sum3b;
        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }

    public function c_b3sumk5($attribute)
    {
        $B3ar1ak5 = $this->b3ar1ak5;
        $B3ar1bk5 = $this->b3ar1bk5;
        $B3ar1ck5 = $this->b3ar1ck5;
        $B3ar1dk5 = $this->b3ar1dk5;
        $B3ar1ek5 = $this->b3ar1ek5;
        $B3ar1fk5 = $this->b3ar1fk5;
        $B3ar1gk5 = $this->b3ar1gk5;
        $B3ar2k5 = $this->b3ar2k5;
        $sum3a = $B3ar1ak5+$B3ar1bk5+$B3ar1ck5+$B3ar1dk5+$B3ar1ek5+$B3ar1fk5+$B3ar1gk5+$B3ar2k5;

        $B3br3k5 = $this->b3br3k5;
        $B3br4bk5 = $this->b3br4bk5;
        $B3br4ck5 = $this->b3br4ck5;
        $B3br4dk5 = $this->b3br4dk5;
        $B3br5ak5 = $this->b3br5ak5;
        $B3br5bk5 = $this->b3br5bk5;
        $B3br6ak5 = $this->b3br6ak5;
        $B3br6ck5 = $this->b3br6ck5;
        $B3br7ak5 = $this->b3br7ak5;
        $B3br7ck5 = $this->b3br7ck5;
        $B3br8ak5 = $this->b3br8ak5;
        $B3br8bk5 = $this->b3br8bk5;
        $B3br9k5 = $this->b3br9k5;
        $B3br10k5 = $this->b3br10k5;
        $B3br11k5 = $this->b3br11k5;
        $B3br12ak5 = $this->b3br12ak5;
        $B3br12bk5 = $this->b3br12bk5;
        $sum3b = $B3br3k5+$B3br4bk5+$B3br4ck5+$B3br4dk5+$B3br5ak5+$B3br5bk5+$B3br6ak5+$B3br6ck5+$B3br7ak5+$B3br7ck5+$B3br8ak5+$B3br8bk5+$B3br9k5+$B3br10k5+$B3br11k5+$B3br12ak5+$B3br12bk5;

        $sum = $sum3a + $sum3b;
        if($this->$attribute != $sum)
        {
            $this->addError($attribute, 'Isian seharusnya '.$sum);
        } 
    }
    // ==================================================================
    // BLOK IV
    public function c_b4r1b($attribute)
    {
        $cek = $this->b4r1a;
        if ($cek == 2 && $this->$attribute != 0)
        {
            $this->addError($attribute, 'Isian harus 0');
        } else if ($cek != 2 && $this->$attribute == 0)
        {
            $this->addError($attribute, 'Isian seharusnya lebih dari 0');
        } else if ($this->$attribute < 0 || $this->$attribute > 100)
        {
            $this->addError($attribute, 'Range isian antara 0 sampai 100');            
        }
    }

    // ==================================================================
    // BLOK V
    public function c_b5sum($attribute)
    {
        $r1 = $this->b5r1;
        $r2 = $this->b5r2;
        $r3 = $this->b5r3;
        $r4 = $this->b5r4;
        $sum = $r1+$r2+$r3+$r4;

        if ($sum != $this->$attribute)
        {
            $this->addError($attribute, 'Total pendapatan seharusnya '.$sum);
        }
    }

    // ==================================================================
    // BLOK VI
    public function c_b6r4b($attribute)
    {
        $cek = $this->b6r1b;
        if($this->$attribute == $cek)
        {
            $this->addError($attribute, 'NIP pemeriksa tidak boleh sama dengan pencacah');
        }
    }

    public function c_b6r6($attribute)
    {
        $tgl = date($this->b6r3);
        if($this->$attribute < $tgl)
        {
            $this->addError($attribute, 'Tanggal pemeriksaan tidak boleh mendahului pencacahan');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'b1r1' => 'Propinsi',
            'b1r2' => 'Kabupaten/Kota',
            'b1r3' => 'Kecamatan',
            'b1r4' => 'Desa/Kelurahan',
            'b1r5' => 'Klasifikasi Desa/Kelurahan (1) Perkotaan , (2) Perdesaan',
            'b1r6' => 'NUS Ruta',
            'b1r7' => 'Alamat',
            'b2r1' => 'Nama KRT',
            'b2r2' => 'Pendidikan Terakhir KRT',
            'b2r3' => 'Lapangan Usaha KRT',
            'b2r4a' => 'Jumlah Anggota Rumah Tangga',
            'b2r4b' => 'ART yang Bekerja/Berusaha',
            'b2r4c' => 'ART yang Bersekolah',
            'b2r4d' => 'ART yang Bekerja/Berusaha di rumah karena dampak COVID-19',
            'b2r5a' => 'Pendapatan RUTIN Rumah Tangga per Bulan',
            'b2r5b' => 'Kategori Pendapatan',
            'b3ar1sumk2' => 'B3ar1sumk2',
            'b3ar1ak2' => 'B3ar1ak2',
            'b3ar1bk2' => 'B3ar1bk2',
            'b3ar1ck2' => 'B3ar1ck2',
            'b3ar1dk2' => 'B3ar1dk2',
            'b3ar1ek2' => 'B3ar1ek2',
            'b3ar1fk2' => 'B3ar1fk2',
            'b3ar1gk2' => 'B3ar1gk2',
            'b3ar1sumk3' => 'B3ar1sumk3',
            'b3ar1ak3' => 'B3ar1ak3',
            'b3ar1bk3' => 'B3ar1bk3',
            'b3ar1ck3' => 'B3ar1ck3',
            'b3ar1dk3' => 'B3ar1dk3',
            'b3ar1ek3' => 'B3ar1ek3',
            'b3ar1fk3' => 'B3ar1fk3',
            'b3ar1gk3' => 'B3ar1gk3',
            'b3ar1ak4' => 'B3ar1ak4',
            'b3ar1bk4' => 'B3ar1bk4',
            'b3ar1ck4' => 'B3ar1ck4',
            'b3ar1dk4' => 'B3ar1dk4',
            'b3ar1ek4' => 'B3ar1ek4',
            'b3ar1fk4' => 'B3ar1fk4',
            'b3ar1gk4' => 'B3ar1gk4',
            'b3ar1sumk5' => 'B3ar1sumk5',
            'b3ar1ak5' => 'B3ar1ak5',
            'b3ar1bk5' => 'B3ar1bk5',
            'b3ar1ck5' => 'B3ar1ck5',
            'b3ar1dk5' => 'B3ar1dk5',
            'b3ar1ek5' => 'B3ar1ek5',
            'b3ar1fk5' => 'B3ar1fk5',
            'b3ar1gk5' => 'B3ar1gk5',
            'b3ar1ak6' => 'B3ar1ak6',
            'b3ar1bk6' => 'B3ar1bk6',
            'b3ar1ck6' => 'B3ar1ck6',
            'b3ar1dk6' => 'B3ar1dk6',
            'b3ar1ek6' => 'B3ar1ek6',
            'b3ar1fk6' => 'B3ar1fk6',
            'b3ar1ak7' => 'B3ar1ak7',
            'b3ar1bk7' => 'B3ar1bk7',
            'b3ar1ck7' => 'B3ar1ck7',
            'b3ar1dk7' => 'B3ar1dk7',
            'b3ar1ek7' => 'B3ar1ek7',
            'b3ar1fk7' => 'B3ar1fk7',
            'b3ar2k2' => 'B3ar2k2',
            'b3ar2k3' => 'B3ar2k3',
            'b3ar2k4' => 'B3ar2k4',
            'b3ar2k5' => 'B3ar2k5',
            'b3ar2k6' => 'B3ar2k6',
            'b3ar2k7' => 'B3ar2k7',
            'b3asumk2' => 'B3asumk2',
            'b3asumk3' => 'B3asumk3',
            'b3asumk5' => 'B3asumk5',
            'b3br3k2' => 'B3br3k2',
            'b3br3k3' => 'B3br3k3',
            'b3br3k4' => 'B3br3k4',
            'b3br3k5' => 'B3br3k5',
            'b3br4sumk2' => 'B3br4sumk2',
            'b3br4ak2' => 'B3br4ak2',
            'b3br4bk2' => 'B3br4bk2',
            'b3br4ck2' => 'B3br4ck2',
            'b3br4dk2' => 'B3br4dk2',
            'b3br4ek2' => 'B3br4ek2',
            'b3br4sumk3' => 'B3br4sumk3',
            'b3br4ak3' => 'B3br4ak3',
            'b3br4bk3' => 'B3br4bk3',
            'b3br4ck3' => 'B3br4ck3',
            'b3br4dk3' => 'B3br4dk3',
            'b3br4ek3' => 'B3br4ek3',
            'b3br4bk4' => 'B3br4bk4',
            'b3br4ck4' => 'B3br4ck4',
            'b3br4dk4' => 'B3br4dk4',
            'b3br4sumk5' => 'B3br4sumk5',
            'b3br4bk5' => 'B3br4bk5',
            'b3br4ck5' => 'B3br4ck5',
            'b3br4dk5' => 'B3br4dk5',
            'b3br4dk6' => 'B3br4dk6',
            'b3br4ek6' => 'B3br4ek6',
            'b3br4dk7' => 'B3br4dk7',
            'b3br4ek7' => 'B3br4ek7',
            'b3br5sumk2' => 'B3br5sumk2',
            'b3br5ak2' => 'B3br5ak2',
            'b3br5bk2' => 'B3br5bk2',
            'b3br5ck2' => 'B3br5ck2',
            'b3br5sumk3' => 'B3br5sumk3',
            'b3br5ak3' => 'B3br5ak3',
            'b3br5bk3' => 'B3br5bk3',
            'b3br5ck3' => 'B3br5ck3',
            'b3br5ak4' => 'B3br5ak4',
            'b3br5bk4' => 'B3br5bk4',
            'b3br5sumk5' => 'B3br5sumk5',
            'b3br5ak5' => 'B3br5ak5',
            'b3br5bk5' => 'B3br5bk5',
            'b3br5bk6' => 'B3br5bk6',
            'b3br5bk7' => 'B3br5bk7',
            'b3br6sumk2' => 'B3br6sumk2',
            'b3br6ak2' => 'B3br6ak2',
            'b3br6bk2' => 'B3br6bk2',
            'b3br6ck2' => 'B3br6ck2',
            'b3br6sumk3' => 'B3br6sumk3',
            'b3br6ak3' => 'B3br6ak3',
            'b3br6bk3' => 'B3br6bk3',
            'b3br6ck3' => 'B3br6ck3',
            'b3br6ak4' => 'B3br6ak4',
            'b3br6ck4' => 'B3br6ck4',
            'b3br6sumk5' => 'B3br6sumk5',
            'b3br6ak5' => 'B3br6ak5',
            'b3br6ck5' => 'B3br6ck5',
            'b3br6ak6' => 'B3br6ak6',
            'b3br6ak7' => 'B3br6ak7',
            'b3br7sumk2' => 'B3br7sumk2',
            'b3br7ak2' => 'B3br7ak2',
            'b3br7bk2' => 'B3br7bk2',
            'b3br7ck2' => 'B3br7ck2',
            'b3br7dk2' => 'B3br7dk2',
            'b3br7sumk3' => 'B3br7sumk3',
            'b3br7ak3' => 'B3br7ak3',
            'b3br7bk3' => 'B3br7bk3',
            'b3br7ck3' => 'B3br7ck3',
            'b3br7dk3' => 'B3br7dk3',
            'b3br7ak4' => 'B3br7ak4',
            'b3br7ck4' => 'B3br7ck4',
            'b3br7sumk5' => 'B3br7sumk5',
            'b3br7ak5' => 'B3br7ak5',
            'b3br7ck5' => 'B3br7ck5',
            'b3br8sumk2' => 'B3br8sumk2',
            'b3br8ak2' => 'B3br8ak2',
            'b3br8bk2' => 'B3br8bk2',
            'b3br8sumk3' => 'B3br8sumk3',
            'b3br8ak3' => 'B3br8ak3',
            'b3br8bk3' => 'B3br8bk3',
            'b3br8ak4' => 'B3br8ak4',
            'b3br8bk4' => 'B3br8bk4',
            'b3br8sumk5' => 'B3br8sumk5',
            'b3br8ak5' => 'B3br8ak5',
            'b3br8bk5' => 'B3br8bk5',
            'b3br9k2' => 'B3br9k2',
            'b3br9k3' => 'B3br9k3',
            'b3br9k4' => 'B3br9k4',
            'b3br9k5' => 'B3br9k5',
            'b3br10k2' => 'B3br10k2',
            'b3br10k3' => 'B3br10k3',
            'b3br10k4' => 'B3br10k4',
            'b3br10k5' => 'B3br10k5',
            'b3br11k2' => 'B3br11k2',
            'b3br11k3' => 'B3br11k3',
            'b3br11k4' => 'B3br11k4',
            'b3br11k5' => 'B3br11k5',
            'b3br12sumk2' => 'B3br12sumk2',
            'b3br12ak2' => 'B3br12ak2',
            'b3br12bk2' => 'B3br12bk2',
            'b3br12sumk3' => 'B3br12sumk3',
            'b3br12ak3' => 'B3br12ak3',
            'b3br12bk3' => 'B3br12bk3',
            'b3br12ak4' => 'B3br12ak4',
            'b3br12bk4' => 'B3br12bk4',
            'b3br12sumk5' => 'B3br12sumk5',
            'b3br12ak5' => 'B3br12ak5',
            'b3br12bk5' => 'B3br12bk5',
            'b3br12ak6' => 'B3br12ak6',
            'b3br12ak7' => 'B3br12ak7',
            'b3bsumk2' => 'B3bsumk2',
            'b3bsumk3' => 'B3bsumk3',
            'b3bsumk5' => 'B3bsumk5',
            'b3sumk3' => 'B3sumk3',
            'b3sumk5' => 'B3sumk5',
            'b4r1a' => 'B4r1a',
            'b4r1b' => 'B4r1b',
            'b4r2a' => 'B4r2a',
            'b4r2b' => 'B4r2b',
            'b4r2c' => 'B4r2c',
            'b4r2d' => 'B4r2d',
            'b4r2e' => 'B4r2e',
            'b4r2f' => 'B4r2f',
            'b4r2g' => 'B4r2g',
            'b4r2h' => 'B4r2h',
            'b4r2i' => 'B4r2i',
            'b4r3' => 'B4r3',
            'b4r4' => 'B4r4',
            'b5r1' => 'B5r1',
            'b5r2' => 'B5r2',
            'b5r3' => 'B5r3',
            'b5r4' => 'B5r4',
            'b5sum' => 'B5sum',
            'b6r1a' => 'B6r1a',
            'b6r1b' => 'B6r1b',
            'b6r2' => 'B6r2',
            'b6r3' => 'B6r3',
            'b6r4a' => 'B6r4a',
            'b6r4b' => 'B6r4b',
            'b6r5' => 'B6r5',
            'b6r6' => 'B6r6',
            'b7cat' => 'B7cat',
            'created_at' => 'Created At',
        ];
    }
}
