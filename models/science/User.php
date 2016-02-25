<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $user_id
 * @property string $user_name
 * @property string $user_lastname
 * @property string $user_pass
 * @property string $user_rank
 * @property string $user_appendage
 * @property string $user_department
 * @property string $user_tel
 * @property string $user_email
 * @property string $right_id
 * @property string $user_status
 * @property string $user_ser
 * @property string $user_datein
 * @property string $user_dateup
 */
class User extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user';
    }

    public function relations() {
        return array('ProfileUser' => array(self::HAS_ONE, 'ProfileUser', 'user_id'),);
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'user_name', 'user_lastname', 'user_pass', 'user_rank', 'user_appendage', 'user_department', 'user_tel', 'user_email', 'right_id', 'user_status', 'user_ser', 'user_datein', 'user_dateup'], 'required'],
            [['user_datein', 'user_dateup'], 'safe'],
            [['user_id', 'user_name', 'user_lastname', 'user_tel'], 'string', 'max' => 20],
            [['user_pass'], 'string', 'max' => 15],
            [['user_rank', 'user_appendage', 'user_department'], 'string', 'max' => 50],
            [['user_email'], 'string', 'max' => 30],
            [['right_id', 'user_ser'], 'string', 'max' => 10],
            [['user_status'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_lastname' => 'User Lastname',
            'user_pass' => 'User Pass',
            'user_rank' => 'User Rank',
            'user_appendage' => 'User Appendage',
            'user_department' => 'User Department',
            'user_tel' => 'User Tel',
            'user_email' => 'User Email',
            'right_id' => 'Right ID',
            'user_status' => 'User Status',
            'user_ser' => 'User Ser',
            'user_datein' => 'User Datein',
            'user_dateup' => 'User Dateup',
        ];
    }

}
