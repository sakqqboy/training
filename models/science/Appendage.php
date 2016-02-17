<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "appendage".
 *
 * @property string $appen_id
 * @property string $appen_name
 * @property string $appen_boss
 */
class Appendage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appendage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['appen_id', 'appen_name', 'appen_boss'], 'required'],
            [['appen_id'], 'integer'],
            [['appen_name', 'appen_boss'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'appen_id' => 'Appen ID',
            'appen_name' => 'Appen Name',
            'appen_boss' => 'Appen Boss',
        ];
    }
}
