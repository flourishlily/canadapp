<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "loan".
 *
 * @property int $id
 * @property string $loan_type
 * @property int $userid
 * @property string $realname
 * @property string $idcard
 * @property int $phone
 * @property int $amount
 * @property string $username
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class Loan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['loan_type', 'realname', 'idcard', 'phone', 'amount', 'username', 'created_at', 'updated_at'], 'required'],
            [['userid', 'phone', 'amount', 'created_at', 'updated_at'], 'integer'],
            [['loan_type'], 'string', 'max' => 32],
            [['realname', 'idcard', 'username'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'loan_type' => 'Loan Type',
            'userid' => 'Userid',
            'realname' => 'Realname',
            'idcard' => 'Idcard',
            'phone' => 'Phone',
            'amount' => 'Amount',
            'username' => 'Username',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }
}
