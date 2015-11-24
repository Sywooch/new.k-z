<?php
/**
 * Created by PhpStorm.
 * User: Николай
 * Date: 4/8/2015
 * Time: 10:22 PM
 */

namespace frontend\models;

class Ads extends \common\models\Ads{

    public static function getAd(){
        return Ads::find()->
            where('`disable_date` >= \''.date('Y-m-d').'\' OR `disable_date` = \'0000-00-00 00:00:00\'')->
            andWhere(['state' => 1]);
    }

    public static function byPosition($position, $all = false){
        $ads = Ads::getAd()->andWhere(['position' => $position])->asArray();
        if($all){
            return $ads->all();
        }else{
            return $ads->one();
        }
    }

} 