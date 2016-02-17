<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "major".
 *
 * @property string $maj_id
 * @property string $fac_id
 * @property string $maj_name
 */
class Major extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'major';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fac_id', 'maj_name'], 'required'],
            [['fac_id'], 'integer'],
            [['maj_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'maj_id' => 'Maj ID',
            'fac_id' => 'Fac ID',
            'maj_name' => 'Maj Name',
        ];
    }
}
