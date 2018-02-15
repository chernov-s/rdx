<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    public function rules()
    {
        return [
            [['id', 'name'], 'required']
        ];
    }
}
