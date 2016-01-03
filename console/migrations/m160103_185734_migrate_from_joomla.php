<?php

use yii\db\Schema;
use yii\db\Migration;

class m160103_185734_migrate_from_joomla extends Migration
{

    public function up()
    {
        $this->addColumn('news', 'unpublishDate', Schema::TYPE_DATETIME);
        $this->addColumn('news', 'checkedDate', Schema::TYPE_DATETIME);
        $this->addColumn('news', 'checked', Schema::TYPE_INTEGER.' UNSIGNED NOT NULL DEFAULT 0');
        $this->addColumn('news', 'textPreview', Schema::TYPE_TEXT);

        $newsList = new \yii\db\Query();

        $newsList = $newsList->from(\Yii::$app->params['oldDb'].'.joom_content')->all();

        echo "Копирование новостей...";
        foreach($newsList as $news){
            $newNews = new \common\models\News();
            $newNews->author        = $news['created_by'];
            $newNews->title         = $news['title'];
            $newNews->textPreview   = $news['introtext'];
            $newNews->text          = $news['fulltext'];
            $newNews->link          = $news['alias'];
            $newNews->published     = $news['access'] == '1' ? 1 : 0;
            $newNews->deleted       = $news['state'] == '-2' ? 1 : 0;
            $newNews->publishDate   = $news['publish_up'];
            $newNews->favorite      = $news['featured'];
            $newNews->hits          = $news['hits'];
            $newNews->meta_description = $news['metadesc'];
            $newNews->meta_keywords = $news['metakey'];
            $newNews->category      = $news['catid'];
            $newNews->unpublishDate = $news['publish_down'];
            $newNews->checkedDate   = $news['checked_out_time'];
            $newNews->checked       = $news['checked_out'];

            $newNews->save(false);
        }
    }

    public function down()
    {
        $this->dropColumn('news', 'unpublishDate');
        $this->dropColumn('news', 'checkedDate');
        $this->dropColumn('news', 'checked');
        $this->dropColumn('news', 'textPreview');

        $this->truncateTable('news');

        return true;
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
