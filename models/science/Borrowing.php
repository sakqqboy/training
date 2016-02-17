<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "borrowing".
 *
 * @property string $borrow_id
 * @property string $user_id
 * @property string $date
 * @property string $date_app
 * @property string $date_finish
 * @property string $date_return
 * @property string $approver
 * @property string $status
 * @property string $reason
 * @property string $for_work
 * @property string $major
 * @property string $subject
 * @property string $year
 * @property string $term
 * @property string $number
 */
class Borrowing extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'borrowing';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date', 'date_app', 'date_finish', 'date_return', 'approver', 'status', 'reason', 'for_work', 'major', 'subject', 'year', 'term', 'number'], 'required'],
            [['date', 'date_app', 'date_finish', 'date_return', 'reason'], 'string'],
            [['user_id', 'approver'], 'string', 'max' => 20],
            [['status', 'subject'], 'string', 'max' => 10],
            [['for_work'], 'string', 'max' => 40],
            [['major'], 'string', 'max' => 50],
            [['year'], 'string', 'max' => 5],
            [['term'], 'string', 'max' => 2],
            [['number'], 'string', 'max' => 7],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'borrow_id' => 'Borrow ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'date_app' => 'Date App',
            'date_finish' => 'Date Finish',
            'date_return' => 'Date Return',
            'approver' => 'Approver',
            'status' => 'Status',
            'reason' => 'Reason',
            'for_work' => 'For Work',
            'major' => 'Major',
            'subject' => 'Subject',
            'year' => 'Year',
            'term' => 'Term',
            'number' => 'Number',
        ];
    }
}
