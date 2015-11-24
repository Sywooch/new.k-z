<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 24.11.15
 * Time: 20:55
 */

namespace frontend\models;


class Category extends \common\models\Category
{

    public static function getMenu($type){
        return Category::find()->where(['menu' => $type])->orderBy('menu_position')->all();
    }

}