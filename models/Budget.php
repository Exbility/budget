<?php

namespace kouosl\budget\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property int $id
 * @property string $title
 * @property string $category
 * @property string $type
 * @property string $amount
 * @property string $date
 * @property int $author
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category', 'type'], 'required'],
            [['title', 'category', 'type'], 'string'],
            [['date', 'amount'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category' => 'Category',
            'type' => 'Type',
			'amount' => 'Amount',
            'date' => 'Date',
            'author' => 'Author',
        ];
    }
}
