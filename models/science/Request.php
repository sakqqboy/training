<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property string $requestId
 * @property string $userId
 * @property string $date
 * @property string $dateApp
 * @property string $dateFinish
 * @property string $approver
 * @property string $status
 * @property string $reason
 * @property string $reasonManager
 * @property string $forwork
 * @property string $major
 * @property string $subject
 * @property string $dateUse
 * @property string $year
 * @property string $term
 * @property string $number
 * @property string $numberReinvoice
 * @property string $numberRebuy
 * @property string $numberInvoice
 * @property string $numberComein
 */
class Request extends \yii\db\ActiveRecord {

    public $searchText;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['userId', 'date', 'dateApp', 'dateFinish', 'approver', 'status', 'reason', 'reasonManager', 'forwork', 'major', 'subject', 'dateUse', 'year', 'term', 'number', 'numberReinvoice', 'numberRebuy', 'numberInvoice', 'numberComein'], 'required'],
            [['date', 'dateApp', 'dateFinish', 'reason', 'reasonManager', 'dateUse'], 'string'],
            [['userId', 'approver', 'status'], 'string', 'max' => 20],
            [['forwork'], 'string', 'max' => 40],
            [['major'], 'string', 'max' => 50],
            [['subject', 'number', 'numberRebuy', 'numberInvoice', 'numberComein'], 'string', 'max' => 10],
            [['year'], 'string', 'max' => 5],
            [['term'], 'string', 'max' => 2],
            [['numberReinvoice'], 'string', 'max' => 15],
            [['searchText'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'requestId' => 'Request ID',
            'userId' => 'User ID',
            'date' => 'Date',
            'dateApp' => 'Date App',
            'dateFinish' => 'Date Finish',
            'approver' => 'Approver',
            'status' => 'Status',
            'reason' => 'Reason',
            'reasonManager' => 'Reason Manager',
            'forwork' => 'Forwork',
            'major' => 'Major',
            'subject' => 'Subject',
            'dateUse' => 'Date Use',
            'year' => 'Year',
            'term' => 'Term',
            'number' => 'Number',
            'numberReinvoice' => 'Number Reinvoice',
            'numberRebuy' => 'Number Rebuy',
            'numberInvoice' => 'Number Invoice',
            'numberComein' => 'Number Comein',
        ];
    }

}
