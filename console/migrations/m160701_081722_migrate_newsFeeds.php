<?php

use yii\db\Migration;

class m160701_081722_migrate_newsFeeds extends Migration
{
    public function up()
    {
        $feeds = new \yii\db\Query();

        $feeds = $feeds->from(\Yii::$app->params['oldDb'].'.joom_obrss')->all();
        
        foreach($feeds as $feed){
            $componentParams = \yii\helpers\Json::decode($feed['paramsforowncomponent']);
            $params = \yii\helpers\Json::decode($feed['params']);

            $newsFeed = new \common\models\NewsFeed();

            $newsFeed->setAttributes([
                'categories'    =>  $componentParams['categories'],
                'articles'      =>  explode(',', $componentParams['excludearticle']),
                'name'          =>  $feed['name'],
                'link'          =>  $feed['alias'],
                'params'        =>  [
                    'image'         =>  $params['image_file'],
                    'feedLength'    =>  $params['count'],
                    'hideImages'    =>  $params['hideimages'],
                ],
                'description'   =>  $feed['description'],
                'published'     =>  $feed['published'],
                'created'       =>  $feed['created'],
            ]);

            $newsFeed->save(false);
        }
    }

    public function down()
    {
        \common\models\NewsFeed::deleteAll();
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
