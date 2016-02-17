<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "taking_detail".
 *
 * @property string $take_id
 * @property string $par_id
 * @property integer $total
 * @property string $status
 * @property string $sub_id
 */
class TakingDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taking_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['take_id', 'par_id', 'total', 'status', 'sub_id'], 'required'],
            [['total'], 'integer'],
            [['take_id'], 'string', 'max' => 4],
            [['par_id'], 'string', 'max' => 7],
            [['status', 'sub_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'take_id' => 'Take ID',
            'par_id' => 'Par ID',
            'total' => 'Total',
            'status' => 'Status',
            'sub_id' => 'Sub ID',
        ];
    }
}
