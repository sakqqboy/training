<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property string $sub_id
 * @property string $sub_name
 * @property string $fac_id
 * @property integer $year
 * @property integer $term
 * @property string $maj_id
 * @property string $datein
 * @property string $dateup
 * @property string $dep_id
 * @property string $appen_id
 * @property string $user_id
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_id', 'sub_name', 'fac_id', 'year', 'term', 'maj_id', 'datein', 'dateup', 'dep_id', 'appen_id', 'user_id'], 'required'],
            [['fac_id', 'year', 'term', 'maj_id', 'dep_id', 'appen_id'], 'integer'],
            [['datein', 'dateup'], 'safe'],
            [['sub_id'], 'string', 'max' => 10],
            [['sub_name'], 'string', 'max' => 50],
            [['user_id'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'sub_name' => 'Sub Name',
            'fac_id' => 'Fac ID',
            'year' => 'Year',
            'term' => 'Term',
            'maj_id' => 'Maj ID',
            'datein' => 'Datein',
            'dateup' => 'Dateup',
            'dep_id' => 'Dep ID',
            'appen_id' => 'Appen ID',
            'user_id' => 'User ID',
        ];
    }
}
