<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii;
use yii\base\Model;

//class User extends \yii\base\Object implements \yii\web\IdentityInterface {
class User extends ActiveRecord implements \yii\web\IdentityInterface {

    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    /* private static $users = [
      '100' => [
      'id' => '100',
      'username' => 'admin',
      'password' => 'admin',
      'authKey' => 'test100key',
      'accessToken' => '100-token',
      ],
      '101' => [
      'id' => '101',
      'username' => 'demo',
      'password' => 'demo',
      'authKey' => 'test101key',
      'accessToken' => '101-token',
      ],
      ]; */

    /**
     * @inheritdoc */
    public static function tableName() {
        return 'user';
    }

    /* public function rules() {
      return [
      [['user_id', 'user_name', 'user_lastname', 'user_pass', 'user_rank', 'user_appendage', 'user_department', 'user_tel', 'user_email', 'right_id', 'user_status', 'user_ser', 'user_datein', 'user_dateup'], 'required'],
      [['user_datein', 'user_dateup', 'authKey', 'accessToken'], 'safe'],
      [['user_id', 'user_name', 'user_lastname', 'user_tel'], 'string', 'max' => 20],
      [['user_pass'], 'string', 'max' => 15],
      [['user_rank', 'user_appendage', 'user_department'], 'string', 'max' => 50],
      [['user_email'], 'string', 'max' => 30],
      [['right_id', 'user_ser'], 'string', 'max' => 10],
      [['user_status'], 'string', 'max' => 5],
      ];
      } */

    /**
     * @inheritdoc
     */
    /* public function attributeLabels() {
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
      } */

    public static function findIdentity($id) {
        $user = User::find()->where(["user_id" => $id])->one();
        if (!count($user)) {
            return null;
        }
        return new static($user);
        /* $user = User::model()->findByAttributes(array('user_id' => $username));
          return isset(User::$user[$id]) ? new static(self::$user[$id]) : null; */
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        foreach (User::$user as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username) {
        $user = User::find()->where(["user_id" => $username])->one();
        if (!count($user)) {
            return null;
        }
        return new static($user);
        /* foreach (User::$user as $user) {
          if (strcasecmp($user['username'], $username) === 0) {
          return new static($user);
          }
          } */

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId() {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey() {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey) {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
        return $this->user_pass === $password;
    }

    public static function model($className = __CLASS__) {///////////////////
        return parent::model($className);
    }

}
