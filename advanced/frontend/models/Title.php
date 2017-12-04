<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "title".
 *
 * @property integer $t_id
 * @property string $t_name
 * @property string $t_title
 * @property string $t_cont
 */
class Title extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'title';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_name', 't_title', 't_cont'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            't_title' => 'T Title',
            't_cont' => 'T Cont',
        ];
    }
}
