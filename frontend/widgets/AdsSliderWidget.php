<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 26.11.15
 * Time: 22:12
 */

namespace frontend\widgets;


use yii\base\Widget;
use yii\helpers\Html;

class AdsSliderWidget extends Widget
{

    public $models = [];

    private function renderPagination(){
        $items = [];
        $i = 0;

        foreach($this->models as $model){
            $i++;
            $items[] = Html::tag('li', $i, [
                'class' =>  $i == 1 ? 'active' : ''
            ]);
        }

        return Html::tag('ul', implode('', $items), [
           'class'  =>  'nspPagination'
        ]);
    }

    private function renderSlides(){
        $items = [];

        foreach($this->models as $model){
            $items[] = $this->render('_nspArtPage', [
                'model' =>  $model
            ]);
        }

        return implode('', $items);
    }

    public function run(){
        return $this->render('_slider', [
            'pagination'    =>  $this->renderPagination(),
            'slides'        =>  $this->renderSlides()
        ]);
    }


}