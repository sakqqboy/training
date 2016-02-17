<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "parcel_type".
 *
 * @property string $type_id
 * @property string $type_name
 * @property string $type_first
 */
class ParcelType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parcel_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name', 'type_first'], 'required'],
            [['type_name'], 'string', 'max' => 20],
            [['type_first'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type_name' => 'Type Name',
            'type_first' => 'Type First',
        ];
    }
}
