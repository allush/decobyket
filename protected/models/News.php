<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id_news
 * @property string $datetime
 * @property string $title
 * @property string $body
 * @property integer $id_user
 *
 * The followings are the available model relations:
 * @property User $user
 */
class News extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return News the static model class
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
        return 'news';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, body,id_user', 'required'),
            array('title', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_news, datetime, title, body, id_user', 'safe', 'on' => 'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'id_user'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id_news' => 'Id News',
            'datetime' => 'Дата публикации',
            'title' => 'Заголовок',
            'body' => 'Содержание',
            'id_user' => 'Автор',
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

        $criteria->compare('id_news', $this->id_news);
        $criteria->compare('datetime', $this->datetime, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('body', $this->body, true);
        $criteria->compare('id_user', $this->id_user);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}