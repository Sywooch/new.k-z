<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $link
 * @property string $title
 * @property integer $parent
 * @property integer $menu
 * @property integer $menu_position
 * @property string $created
 * @property integer $created_user
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $deleted
 * @property integer $published
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'created', 'created_user'], 'required'],
            [['title', 'meta_description', 'meta_keywords'], 'string'],
            [['parent', 'menu', 'menu_position', 'created_user', 'deleted', 'published'], 'integer'],
            [['created'], 'safe'],
            [['link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'link' => Yii::t('common', 'Link'),
            'title' => Yii::t('common', 'Title'),
            'parent' => Yii::t('common', 'Parent'),
            'menu' => Yii::t('common', 'Menu'),
            'menu_position' => Yii::t('common', 'Menu Position'),
            'created' => Yii::t('common', 'Created'),
            'created_user' => Yii::t('common', 'Created User'),
            'meta_description' => Yii::t('common', 'Meta Description'),
            'meta_keywords' => Yii::t('common', 'Meta Keywords'),
            'deleted' => Yii::t('common', 'Deleted'),
            'published' => Yii::t('common', 'Published'),
        ];
    }
}
