<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id_book
 * @property string $book_name
 * @property int $book_owner
 *
 * @property Users $bookOwner
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_owner'], 'default', 'value' => null],
            [['book_owner'], 'integer'],
            [['book_name'], 'string', 'max' => 50],
            [['book_owner'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['book_owner' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Book',
            'book_name' => 'Book Name',
            'book_owner' => 'Book Owner',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookOwner()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'book_owner']);
    }
}
