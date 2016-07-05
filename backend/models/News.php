<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 03.07.16
 * Time: 21:49
 */

namespace backend\models;


use backend\helpers\TranslitHelper;

class News extends \common\models\News
{

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'categoryID']);
    }

}