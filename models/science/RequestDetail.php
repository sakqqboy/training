<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "request_detail".
 *
 * @property string $requestDetailId
 * @property string $requestId
 * @property string $parcelId
 * @property string $parcelName
 * @property string $typeID
 * @property string $parSize
 * @property string $parUnit
 * @property string $parBrand
 * @property string $parModel
 * @property string $parPrice
 * @property string $parTotal
 * @property string $status
 * @property string $subId
 * @property string $number
 * @property string $numberReinvoice
 * @property string $numberRebuy
 * @property string $numberInvoice
 * @property string $numberComein
 * @property string $requestTypeId
 */
class RequestDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requestId', 'parcelId', 'parcelName', 'typeID', 'parSize', 'parUnit', 'parBrand', 'parModel', 'parPrice', 'parTotal', 'status', 'subId', 'number', 'numberReinvoice', 'numberRebuy', 'numberInvoice', 'numberComein', 'requestTypeId'], 'required'],
            [['requestId', 'requestTypeId'], 'integer'],
            [['parcelId'], 'string', 'max' => 7],
            [['parcelName'], 'string', 'max' => 200],
            [['typeID', 'parUnit', 'subId', 'number', 'numberRebuy', 'numberInvoice', 'numberComein'], 'string', 'max' => 10],
            [['parSize', 'numberReinvoice'], 'string', 'max' => 15],
            [['parBrand'], 'string', 'max' => 40],
            [['parModel', 'status'], 'string', 'max' => 20],
            [['parPrice'], 'string', 'max' => 8],
            [['parTotal'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'requestDetailId' => 'Request Detail ID',
            'requestId' => 'Request ID',
            'parcelId' => 'Parcel ID',
            'parcelName' => 'Parcel Name',
            'typeID' => 'Type ID',
            'parSize' => 'Par Size',
            'parUnit' => 'Par Unit',
            'parBrand' => 'Par Brand',
            'parModel' => 'Par Model',
            'parPrice' => 'Par Price',
            'parTotal' => 'Par Total',
            'status' => 'Status',
            'subId' => 'Sub ID',
            'number' => 'Number',
            'numberReinvoice' => 'Number Reinvoice',
            'numberRebuy' => 'Number Rebuy',
            'numberInvoice' => 'Number Invoice',
            'numberComein' => 'Number Comein',
            'requestTypeId' => 'Request Type ID',
        ];
    }
}
