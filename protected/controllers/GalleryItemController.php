<?php

class GalleryItemController extends Controller
{
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
            'pagination' => array(
                'pageSize' => 20,
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
    public function actionView($id)
    {
        $model = $this->loadModel($id);

        $this->render('view', array(
            'model' => $model,
        ));
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
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param GalleryItem $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'gallery-item-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
