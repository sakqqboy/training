<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "parcel".
 *
 * @property string $par_id
 * @property string $par_name
 * @property string $type_id
 * @property string $par_size
 * @property string $par_unit
 * @property string $par_price
 * @property string $par_total
 * @property string $par_totalin
 * @property string $par_totalout
 * @property string $par_seller
 * @property string $color
 * @property string $cas_no
 * @property string $chem_name
 * @property string $par_date
 * @property string $par_quot
 * @property string $par_request
 * @property string $par_inspec
 * @property string $par_purch
 * @property string $par_invoice
 */
class Parcel extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'parcel';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['par_id', 'par_name', 'type_id', 'par_total'], 'required'],
            [['par_total'], 'integer'],
            [['par_date'], 'safe'],
            [['par_id', 'par_totalout'], 'string', 'max' => 7],
            [['par_name'], 'string', 'max' => 50],
            [['type_id', 'par_totalin'], 'string', 'max' => 4],
            [['par_size', 'cas_no'], 'string', 'max' => 15],
            [['par_unit', 'par_quot', 'par_request', 'par_inspec', 'par_purch', 'par_invoice'], 'string', 'max' => 10],
            [['par_price'], 'string', 'max' => 5],
            [['par_seller'], 'string', 'max' => 30],
            [['color'], 'string', 'max' => 3],
            [['chem_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'par_id' => 'Par ID',
            'par_name' => 'Par Name',
            'type_id' => 'Type ID',
            'par_size' => 'Par Size',
            'par_unit' => 'Par Unit',
            'par_price' => 'Par Price',
            'par_total' => 'Par Total',
            'par_totalin' => 'Par Totalin',
            'par_totalout' => 'Par Totalout',
            'par_seller' => 'Par Seller',
            'color' => 'Color',
            'cas_no' => 'Cas No',
            'chem_name' => 'Chem Name',
            'par_date' => 'Par Date',
            'par_quot' => 'Par Quot',
            'par_request' => 'Par Request',
            'par_inspec' => 'Par Inspec',
            'par_purch' => 'Par Purch',
            'par_invoice' => 'Par Invoice',
        ];
    }

}
