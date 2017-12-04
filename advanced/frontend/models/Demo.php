<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property integer $id
 * @property string $name
 * @property string $give
 * @property string $type
 * @property string $option
 * @property string $options
 * @property integer $ok
 * @property string $rule
 * @property string $r_scope
 * @property string $l_scope
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ok'], 'integer'],
            [['name', 'give', 'type', 'option', 'options', 'rule', 'r_scope', 'l_scope'], 'string', 'max' => 255],
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
            'give' => 'Give',
            'type' => 'Type',
            'option' => 'Option',
            'options' => 'Options',
            'ok' => 'Ok',
            'rule' => 'Rule',
            'r_scope' => 'R Scope',
            'l_scope' => 'L Scope',
        ];
    }
}
