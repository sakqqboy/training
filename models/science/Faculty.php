<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property string $fac_id
 * @property string $fac_name
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fac_name'], 'required'],
            [['fac_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fac_id' => 'Fac ID',
            'fac_name' => 'Fac Name',
        ];
    }
}
