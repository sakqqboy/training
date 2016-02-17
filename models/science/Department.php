<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property string $dep_id
 * @property string $appen_id
 * @property string $dep_name
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['appen_id', 'dep_name'], 'required'],
            [['appen_id'], 'integer'],
            [['dep_name'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dep_id' => 'Dep ID',
            'appen_id' => 'Appen ID',
            'dep_name' => 'Dep Name',
        ];
    }
}
