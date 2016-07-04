<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 02.07.16
 * Time: 10:53
 */

namespace frontend\helpers;


class SelectedCategoriesHelper
{

    public static function getWithColors($categories, $categoriesColors = []){
        $result = [];

        foreach($categories as $category){
            $color = array_key_exists($category->id, $categoriesColors) ? $categoriesColors[$category->id] : self::getCategoryColor($category->id);

            $result[] = [
                'color'     =>  $color,
                'category'  =>  $category
            ];
        }


        return $result;
    }

    public static function getCategoryColor($categoryID){
        $colors = [
            '34'    =>  '',
            '32'    =>  'green',
            '35'    =>  'grey',
            '38'    =>  'green',
            '44'    =>  'blue',
            '76'    =>  ''
        ];

        if(array_key_exists($categoryID, $colors)){
            return $colors[$categoryID];
        }

        return '';
    }

}