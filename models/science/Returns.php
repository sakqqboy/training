<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "returns".
 *
 * @property string $borrow_id
 * @property string $par_id
 * @property string $re_date
 * @property integer $re_check
 * @property string $re_status
 */
class Returns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'returns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['par_id', 're_date', 're_check', 're_status'], 'required'],
            [['re_date'], 'safe'],
            [['re_check'], 'integer'],
            [['par_id'], 'string', 'max' => 7],
            [['re_status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'borrow_id' => 'Borrow ID',
            'par_id' => 'Par ID',
            're_date' => 'Re Date',
            're_check' => 'Re Check',
            're_status' => 'Re Status',
        ];
    }
}
