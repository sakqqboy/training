<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "right".
 *
 * @property string $right_id
 * @property string $right_name
 */
class Right extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'right';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['right_id', 'right_name'], 'required'],
            [['right_id'], 'string', 'max' => 4],
            [['right_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'right_id' => 'Right ID',
            'right_name' => 'Right Name',
        ];
    }
}
