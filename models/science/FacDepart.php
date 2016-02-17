<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "fac_depart".
 *
 * @property string $fac_depart_id
 * @property string $fac_id
 * @property string $appen_id
 */
class FacDepart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fac_depart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fac_id', 'appen_id'], 'required'],
            [['fac_id', 'appen_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fac_depart_id' => 'Fac Depart ID',
            'fac_id' => 'Fac ID',
            'appen_id' => 'Appen ID',
        ];
    }
}
