<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "invest".
 *
 * @property int $id
 * @property string $invest_type
 * @property int $user_id
 * @property string $real_name
 * @property string $ident_card_id
 * @property int $phone
 * @property int $amount
 * @property int $create_time
 */
class Invest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invest_type', 'real_name', 'ident_card_id', 'phone', 'amount', 'create_time'], 'required'],
            [['user_id', 'phone', 'amount', 'create_time'], 'integer'],
            [['invest_type'], 'string', 'max' => 32],
            [['real_name', 'ident_card_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'invest_type' => 'Invest Type',
            'user_id' => 'User ID',
            'real_name' => 'Real Name',
            'ident_card_id' => 'Ident Card ID',
            'phone' => 'Phone',
            'amount' => 'Amount',
            'create_time' => 'Create Time',
        ];
    }
}
