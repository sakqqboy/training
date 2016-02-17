<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "buying".
 *
 * @property string $buy_id
 * @property string $user_id
 * @property string $date
 * @property string $date_app
 * @property string $date_finish
 * @property string $approver
 * @property string $status
 * @property string $reason
 * @property string $reason_manager
 * @property string $for_work
 * @property string $major
 * @property string $subject
 * @property string $date_use
 * @property string $year
 * @property string $term
 * @property string $number
 * @property string $number_reinvoice
 * @property string $number_rebuy
 * @property string $number_invoice
 * @property string $number_comein
 */
class BuyingDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buying';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date', 'date_app', 'date_finish', 'approver', 'status', 'reason', 'reason_manager', 'for_work', 'major', 'subject', 'date_use', 'year', 'term', 'number', 'number_reinvoice', 'number_rebuy', 'number_invoice', 'number_comein'], 'required'],
            [['date', 'date_app', 'date_finish', 'reason', 'reason_manager', 'date_use'], 'string'],
            [['user_id', 'approver', 'status'], 'string', 'max' => 20],
            [['for_work'], 'string', 'max' => 40],
            [['major'], 'string', 'max' => 50],
            [['subject', 'number', 'number_rebuy', 'number_invoice', 'number_comein'], 'string', 'max' => 10],
            [['year'], 'string', 'max' => 5],
            [['term'], 'string', 'max' => 2],
            [['number_reinvoice'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'buy_id' => 'Buy ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'date_app' => 'Date App',
            'date_finish' => 'Date Finish',
            'approver' => 'Approver',
            'status' => 'Status',
            'reason' => 'Reason',
            'reason_manager' => 'Reason Manager',
            'for_work' => 'For Work',
            'major' => 'Major',
            'subject' => 'Subject',
            'date_use' => 'Date Use',
            'year' => 'Year',
            'term' => 'Term',
            'number' => 'Number',
            'number_reinvoice' => 'Number Reinvoice',
            'number_rebuy' => 'Number Rebuy',
            'number_invoice' => 'Number Invoice',
            'number_comein' => 'Number Comein',
        ];
    }
}
