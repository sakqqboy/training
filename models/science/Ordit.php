<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "ordit".
 *
 * @property string $or_id
 * @property string $par_id
 * @property integer $year
 * @property integer $term
 * @property integer $par_total
 * @property integer $or_total
 * @property string $or_date
 * @property string $or_remark
 */
class Ordit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['par_id', 'year', 'term', 'par_total', 'or_total', 'or_date', 'or_remark'], 'required'],
            [['year', 'term', 'par_total', 'or_total'], 'integer'],
            [['or_date'], 'safe'],
            [['par_id'], 'string', 'max' => 7],
            [['or_remark'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'or_id' => 'Or ID',
            'par_id' => 'Par ID',
            'year' => 'Year',
            'term' => 'Term',
            'par_total' => 'Par Total',
            'or_total' => 'Or Total',
            'or_date' => 'Or Date',
            'or_remark' => 'Or Remark',
        ];
    }
}
