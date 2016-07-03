<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 03.07.16
 * Time: 10:34
 */

namespace frontend\models;


class NewsFeed extends \common\models\NewsFeed
{

    public function getNews(){
        return News::find()->where(['or', ['in', 'categoryID', $this->categories],  ['in', 'id', $this->articles]]);
    }

}