<?php

use yii\db\Migration;

class m160707_051700_migrate_comments extends Migration
{
    public function up()
    {
        $comments = new \yii\db\Query();

        $comments = $comments->from(\Yii::$app->params['oldDb'].'.joom_jcomments')->all();

        $commentsCount = count($comments);

        echo "    > migrating comments... Almost have {$commentsCount} comments...\r\n";

        $i = 0;

        foreach($comments as $comment){
            $i++;

            echo "    > comment {$i} from {$commentsCount}... ";

            $commentModel = new \common\models\Comment([
                'newsID'        =>  $comment['object_id'],
                'author'        =>  $comment['name'],
                'email'         =>  $comment['email'],
                'text'          =>  $comment['comment'],
                'ip'            =>  $comment['ip'],
                'date'          =>  $comment['date'],
                'isGood'        =>  $comment['isgood'],
                'isBad'         =>  $comment['ispoor'],
                'published'     =>  $comment['published'],
                'deleted'       =>  $comment['deleted']
            ]);

            if($commentModel->save(false)){
                echo "saved!";
            }

            echo "\r\n";
        }
    }

    public function down()
    {
        \common\models\Comment::deleteAll();
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
