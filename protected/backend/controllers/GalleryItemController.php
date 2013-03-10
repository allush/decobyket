<?php

class GalleryItemController extends Controller
{
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'create', 'update', 'upload', 'delete'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'index' page.
     */
    public function actionCreate()
    {
        $model = new GalleryItem;

        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);

        if (isset($_POST['GalleryItem'])) {
            $model->attributes = $_POST['GalleryItem'];
            //создаем уникальное имя файла
            $model->imgName = md5(time()) . '.jpg';

            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'index' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['GalleryItem'])) {
            $model->attributes = $_POST['GalleryItem'];
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex($catalog = null)
    {
        $galleryCatalogs = new CActiveDataProvider('GalleryCatalog');

        $dataProvider = new CActiveDataProvider('GalleryItem', array(
            'criteria' => array(
                'condition' => isset($catalog) ? "id_gallery_catalog=$catalog" : '',
            ),
        ));

        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'galleryCatalogs' => $galleryCatalogs
        ));
    }

    /**
     * Lists all models.
     */
    public function actionUpload()
    {
        $this->render('upload');
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return GalleryItem the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model = GalleryItem::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist . ');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param GalleryItem $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'gallery - item - form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
