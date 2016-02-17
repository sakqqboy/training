<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "returns_detail".
 *
 * @property integer $borrow_id
 * @property string $re_remark
 * @property string $re_date
 */
class ReturnsDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'returns_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['borrow_id', 're_remark', 're_date'], 'required'],
            [['borrow_id'], 'integer'],
            [['re_date'], 'safe'],
            [['re_remark'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'borrow_id' => 'Borrow ID',
            're_remark' => 'Re Remark',
            're_date' => 'Re Date',
        ];
    }
}
