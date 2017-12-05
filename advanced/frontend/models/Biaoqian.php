<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "biaoqian".
 *
 * @property integer $id
 * @property string $nickname
 * @property string $shengri
 * @property string $dizhi
 * @property string $xingqu
 */
class Biaoqian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'biaoqian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname', 'shengri', 'dizhi', 'xingqu'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Nickname',
            'shengri' => 'Shengri',
            'dizhi' => 'Dizhi',
            'xingqu' => 'Xingqu',
        ];
    }
}
