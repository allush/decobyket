<?php

/**
 * This is the model class for table "gallery_item".
 *
 * The followings are the available columns in table 'gallery_item':
 * @property integer $id_gallery_item
 * @property string $imgName
 * @property string $name
 * @property string $description
 * @property integer $id_gallery_catalog
 *
 * The followings are the available model relations:
 * @property GalleryCatalog $idGalleryCatalog
 */
class GalleryItem extends CActiveRecord
{
    public $imageFile;
    public $imgFolder = '/images/gallery/';
    public $thumbFolder = '/images/gallery/thumbnails/';

    public function image()
    {
        return $this->imgFolder . $this->imgName;
    }

    public function thumbnail()
    {
        return $this->thumbFolder . $this->imgName;
    }


    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return GalleryItem the static model class
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
        return 'gallery_item';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('imgName, id_gallery_catalog, name', 'required'),
            array('id_gallery_catalog', 'numerical', 'integerOnly' => true),
            array('imgName, name', 'length', 'max' => 255),
            array('imageFile', 'file',
                'allowEmpty' => true,
                'maxSize' => 8000000,
                'tooLarge'=> 'размер изображения не должен превышать 8 Мб'
            ),
            array('description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_gallery_item, imgName, name, description, id_gallery_catalog', 'safe', 'on' => 'search'),
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
            'idGalleryCatalog' => array(self::BELONGS_TO, 'GalleryCatalog', 'id_gallery_catalog'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_gallery_item' => 'Id Gallery Item',
            'imgName' => 'Картинка',
            'name' => 'Название',
            'description' => 'Описание',
            'id_gallery_catalog' => 'Каталог',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_gallery_item', $this->id_gallery_item);
        $criteria->compare('imgName', $this->imgName, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('id_gallery_catalog', $this->id_gallery_catalog);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function afterSave()
    {
        $image = CUploadedFile::getInstance($this, 'imageFile');
        // если загружен новый файл
        if ($image !== null) {
            // то удалить старые картинки
            $this->deleteImages();

            // загрузить новую с тем же именем
            $image->saveAs(Yii::app()->basePath . '/..' . $this->image());
            $this->createImage();
            $this->createThumbnail();
        }
        parent::afterSave();
    }

    protected function beforeDelete()
    {
        $this->deleteImages();
        return parent::beforeDelete();
    }

    private function deleteImages()
    {
        // удалить картинку и миниатюру
        if (file_exists(Yii::app()->basePath . '/..' . $this->image()))
            unlink(Yii::app()->basePath . '/..' . $this->image());
        if (file_exists(Yii::app()->basePath . '/..' . $this->thumbnail()))
            unlink(Yii::app()->basePath . '/..' . $this->thumbnail());
    }

    /**
     * Создать миниатюру для изображени
     */
    private function createThumbnail()
    {
        $ih = new CImageHandler();
        $ih->load(Yii::app()->basePath . '/..' . $this->image())
            ->thumb(150, false)
            ->save(Yii::app()->basePath . '/..' . $this->thumbnail());
    }

    /**
     * Изменить размер загруженного изображения, размер больше допустимого
     */
    private function createImage(){
        $ih = new CImageHandler();
        $ih->load(Yii::app()->basePath . '/..' . $this->image())
            ->thumb(1024, false)
            ->save();
    }
}