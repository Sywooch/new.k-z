<?php

namespace common\models;

use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "newsFeeds".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $params
 * @property string $description
 * @property integer $published
 * @property string $created
 * @property string $categories
 * @property string $articles
 * @property string $fullLink
 */
class NewsFeed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsFeeds';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'link', 'created'], 'required'],
            [['params', 'description', 'categories', 'articles'], 'string'],
            [['published'], 'integer'],
            [['created'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['link'], 'string', 'max' => 128],
        ];
    }

    public function init()
    {
        parent::init();

        $this->params = $this->categories = $this->articles = [];
    }

    public function afterFind()
    {
        parent::afterFind();

        if(!empty($this->params)){
            $this->params = Json::decode($this->params);
        }

        if(!empty($this->categories)){
            $this->categories = Json::decode($this->categories);
        }

        if(!empty($this->articles)){
            $this->articles = Json::decode($this->articles);
        }
    }

    public function beforeSave($insert)
    {

        $this->params = Json::encode($this->params);
        $this->categories = Json::encode($this->categories);
        $this->articles = Json::encode($this->articles);

        return parent::beforeSave($insert);
    }

    public function getFullLink(){
        return "{$this->id}-{$this->link}";
    }

    public function getNews(){
        return News::find()->where(['or', ['in', 'categoryID', $this->categories],  ['in', 'id', $this->articles]]);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'link' => 'Link',
            'params' => 'Params',
            'description' => 'Description',
            'published' => 'Published',
            'created' => 'Created',
            'categories' => 'Categories',
            'articles' => 'Articles',
        ];
    }
}
