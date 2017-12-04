<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "register".
 *
 * @property integer $id
 * @property string $name
 * @property string $pwd
 * @property string $phone
 * @property string $shengri
 * @property string $addr
 * @property string $tag
 */
class Register extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'register';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'pwd', 'phone', 'shengri', 'addr', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
            'phone' => 'Phone',
            'shengri' => 'Shengri',
            'addr' => 'Addr',
            'tag' => 'Tag',
        ];
    }
}
