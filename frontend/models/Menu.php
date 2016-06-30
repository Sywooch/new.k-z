<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 01.07.16
 * Time: 0:43
 */

namespace frontend\models;


class Menu extends \common\models\Menu
{

    /**
     * @param $alias
     * @return self
     */
    public static function findByAlias($alias){
        return self::find()->where(['alias' => $alias])->with('items')->one();
    }

}