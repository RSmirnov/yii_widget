<?php

namespace app\models;

use Yii;
use \yii\base\Object;
use \yii\web\IdentityInterface;

class User extends Object implements IdentityInterface
{
    public $userid;
    public $username;
    public $password;
    public $accesslevel;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'userid' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'accesslevel' => '32767',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
    ];

    /**
     * @inheritdoc
     */
    public static function findIdentity($userid)
    {
        return isset(self::$users[$userid]) ? new static(self::$users[$userid]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
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
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->userid;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
