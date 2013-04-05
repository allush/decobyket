<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id_product
 * @property string $name
 * @property string $date_create
 * @property integer $cost
 * @property string $description
 * @property integer $id_product_catalog
 * @property integer $existence
 * @property integer $visible
 *
 * @property ProductPicture[] $pictures
 */
class Product extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Product the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'product';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, cost, id_product_catalog', 'required'),
            array('cost, id_product_catalog, existence, visible', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('description', 'safe'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'pictures' => array(self::HAS_MANY, 'ProductPicture', 'id_product'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_product' => 'Id Article',
            'name' => 'Название',
            'date_create' => 'Дата добавления',
            'cost' => 'Стоимость, руб.',
            'description' => 'Описание',
            'id_product_catalog' => 'Каталог',
            'existence' => 'Наличие, шт.',
            'visible' => 'Показывать на сайте',
        );
    }

    /**
     * @return ProductPicture|string
     */
    public function mainPicture()
    {
        $pictures = $this->pictures;
        if ($pictures !== null && count($pictures) > 0)
            return Yii::app()->baseUrl.'/images/product/'.$pictures[0]->picture_path;
        return '';
    }
}