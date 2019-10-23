<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newtable".
 *
 * @property int $id
 * @property string $firs_coloumn
 */
class Newtable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newtable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firs_coloumn'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firs_coloumn' => 'Firs Coloumn',
        ];
    }
}
