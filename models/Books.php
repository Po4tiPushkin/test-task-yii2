<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $ID
 * @property string $NAME
 * @property int|null $AUTHOR_ID
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAME'], 'required'],
            [['AUTHOR_ID'], 'integer'],
            [['NAME'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NAME' => 'Name',
            'AUTHOR_ID' => 'Author ID',
        ];
    }
}
