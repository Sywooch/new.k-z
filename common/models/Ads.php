<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property string $id
 * @property string $code
 * @property string $create_date
 * @property string $disable_date
 * @property string $name
 * @property integer $position
 * @property integer $state
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'string'],
            [['create_date', 'disable_date', 'name'], 'required'],
            [['create_date', 'disable_date'], 'safe'],
            [['position', 'state'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'code' => Yii::t('common', 'Code'),
            'create_date' => Yii::t('common', 'Create Date'),
            'disable_date' => Yii::t('common', 'Disable Date'),
            'name' => Yii::t('common', 'Name'),
            'position' => Yii::t('common', 'Position'),
            'state' => Yii::t('common', 'State'),
        ];
    }
}
