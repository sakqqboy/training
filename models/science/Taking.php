<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "taking".
 *
 * @property string $take_id
 * @property string $user_id
 * @property string $date
 * @property string $date_app
 * @property string $date_finish
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
class Taking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date', 'date_app', 'date_finish', 'approver', 'status', 'reason', 'for_work', 'major', 'subject', 'year', 'term', 'number'], 'required'],
            [['date', 'date_app', 'date_finish', 'reason'], 'string'],
            [['user_id', 'approver'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 10],
            [['for_work'], 'string', 'max' => 40],
            [['major', 'subject'], 'string', 'max' => 50],
            [['year'], 'string', 'max' => 5],
            [['term'], 'string', 'max' => 2],
            [['number'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'take_id' => 'Take ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'date_app' => 'Date App',
            'date_finish' => 'Date Finish',
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
