<?php

namespace app\models\science;

use Yii;

/**
 * This is the model class for table "couse_detail".
 *
 * @property string $sub_id
 * @property string $par_id
 * @property string $maj_id
 * @property string $datein
 * @property string $dateup
 * @property string $user_id
 * @property string $dep_id
 * @property string $status
 * @property string $boss
 */
class CouseDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'couse_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_id', 'par_id', 'maj_id', 'datein', 'dateup', 'user_id', 'dep_id', 'status', 'boss'], 'required'],
            [['maj_id', 'dep_id'], 'integer'],
            [['datein', 'dateup'], 'safe'],
            [['sub_id', 'par_id', 'status'], 'string', 'max' => 10],
            [['user_id', 'boss'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sub_id' => 'Sub ID',
            'par_id' => 'Par ID',
            'maj_id' => 'Maj ID',
            'datein' => 'Datein',
            'dateup' => 'Dateup',
            'user_id' => 'User ID',
            'dep_id' => 'Dep ID',
            'status' => 'Status',
            'boss' => 'Boss',
        ];
    }
}
