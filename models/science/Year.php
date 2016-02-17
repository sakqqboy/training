<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "year".
 *
 * @property string $year
 * @property string $term
 * @property string $dateup
 */
class Year extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year', 'term', 'dateup'], 'required'],
            [['dateup'], 'safe'],
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
            'year' => 'Year',
            'term' => 'Term',
            'dateup' => 'Dateup',
        ];
    }
}
