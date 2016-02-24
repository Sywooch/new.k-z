<?php

use yii\db\Migration;

class m160224_203253_migrate_categories_from_joomla extends Migration
{
    public function up()
    {
        $categoriesList = new \yii\db\Query();

        $categoriesList = $categoriesList->from(\Yii::$app->params['oldDb'].'.joom_categories')->all();

        $categoriesCount = count($categoriesList);

        $categoriesAttributes = [
            'id'            =>  'id',
            'link'          =>  'path',
            'title'         =>  'title',
            'parent'        =>  'parent_id',
            'created'       =>  'created_time',
            'created_user'  =>  'created_user_id',
            'meta_description'=>'metadesc',
            'meta_keywords' =>  'metakey',
        ];

        $i = 0;

        echo "Копирование категорий...";
        foreach($categoriesList as $category){
            $newCategory = new \common\models\Category();

            $newCategory->id = $category['id'];

            foreach($categoriesAttributes as $newAttribute => $oldAttribute){
                $newCategory->$newAttribute = $category[$oldAttribute];
            }

            $newCategory->published = $category['published'] == 1 ? 1 : 0;
            $newCategory->deleted = $category['published'] == -2 ? 1 : 0;

            $newCategory->save(false);

            $i++;
            echo $i.' из '.$categoriesCount."\n";
        }
    }

    public function down()
    {
        \common\models\Category::deleteAll();

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
