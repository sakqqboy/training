<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "subject_detail".
 *
 * @property string $sub_id
 * @property string $year
 * @property string $term
 */
class SubjectDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_id', 'year', 'term'], 'required'],
            [['sub_id'], 'string', 'max' => 10],
            [['year'], 'string', 'max' => 5],
            [['term'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'year' => 'Year',
            'term' => 'Term',
        ];
    }
}
