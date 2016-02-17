<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "borrowing_detail".
 *
 * @property string $borrow_id
 * @property string $par_id
 * @property integer $total
 * @property integer $par_price
 * @property string $status
 * @property string $sub_id
 * @property string $date_late
 * @property string $date_return
 * @property string $return_status
 */
class BorrowingDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'borrowing_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['borrow_id', 'par_id', 'total', 'par_price', 'status', 'sub_id', 'date_late', 'date_return', 'return_status'], 'required'],
            [['total', 'par_price'], 'integer'],
            [['date_late', 'date_return'], 'string'],
            [['borrow_id'], 'string', 'max' => 4],
            [['par_id'], 'string', 'max' => 7],
            [['status', 'sub_id'], 'string', 'max' => 10],
            [['return_status'], 'string', 'max' => 20],
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
            'total' => 'Total',
            'par_price' => 'Par Price',
            'status' => 'Status',
            'sub_id' => 'Sub ID',
            'date_late' => 'Date Late',
            'date_return' => 'Date Return',
            'return_status' => 'Return Status',
        ];
    }
}
