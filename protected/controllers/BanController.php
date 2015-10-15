<?php

class BanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'hapusrelasi'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'ambilban'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Ban;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ban']))
		{
			$model->attributes=$_POST['Ban'];
			if($model->save())
				$this->redirect(array('admin', 'status'=>0, 'id'=>0));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ban']))
		{
			$model->attributes=$_POST['Ban'];
			if($model->save())
				$this->redirect(array('admin', 'status'=>0, 'id'=>0));
		}

		$this->render('update',array(
			'model'=>$model,
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
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin', 'status'=>0, 'id'=>0));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
		$model=new Ban('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ban']))
			$model->attributes=$_GET['Ban'];

		$this->render('index',array(
			'model'=>$model, 'id'=>$id,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ban('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ban']))
			$model->attributes=$_GET['Ban'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionAmbilban($id, $id_ban)
	{
		$model=$this->loadModel($id_ban);
		
		$jumlah_awal = $model->JUMLAH;
		$jumlah_akhir = $jumlah_awal - 1;
		Yii::app()->db->createCommand()->update('ban', array(
            'JUMLAH'=>$jumlah_akhir,
            ), 'ID_BAN=:ID_BAN', array(':ID_BAN'=>$model->ID_BAN));

		Yii::app()->db->createCommand()->update('perbaikan', array(
            'STATUS'=>'SELESAI',
            ), 'ID_PERBAIKAN=:ID_PERBAIKAN', array(':ID_PERBAIKAN'=>$id));

		$jumlah_ban = 1;
		if(RelasiPb::model()->exists('ID_PERBAIKAN=:ID_PERBAIKAN AND ID_BAN=:ID_BAN', array(':ID_PERBAIKAN'=>$id, ':ID_BAN'=>$model->ID_BAN)))
		{
			$jumlah_ban = Yii::app()->db->createCommand()->select('JUMLAH')
                ->from('relasi_pb')
                ->where('ID_PERBAIKAN=:ID_PERBAIKAN AND ID_BAN=:ID_BAN', array(':ID_PERBAIKAN'=>$id, ':ID_BAN'=>$model->ID_BAN))
                ->queryScalar();
            $jumlah_ban++;
			Yii::app()->db->createCommand()->update('relasi_pb', array(
            'ID_PERBAIKAN'=>$id,
            'ID_BAN'=>$model->ID_BAN,
            'JUMLAH'=>$jumlah_ban,
            ), 'ID_PERBAIKAN=:ID_PERBAIKAN AND ID_BAN=:ID_BAN', array(':ID_PERBAIKAN'=>$id, ':ID_BAN'=>$model->ID_BAN));
		}
		else
		{
			Yii::app()->db->createCommand()->insert('relasi_pb', array(
                'ID_PERBAIKAN'=>$id,
	            'ID_BAN'=>$model->ID_BAN,
	            'JUMLAH'=>$jumlah_ban,
            ));
		}

		$this->redirect(array('ban/index','id'=>$id));
		
	}

	public function actionHapusrelasi($id)
	{
		$model = RelasiPb::model()->findByAttributes(array('ID_PERBAIKAN'=>$id));
		$jumlah_tambah = $model->JUMLAH;

		$jumlah_ban = Yii::app()->db->createCommand()->select('JUMLAH')
            ->from('ban')
            ->where('ID_BAN=:ID_BAN', array(':ID_BAN'=>$model->ID_BAN))
            ->queryScalar();

        $jumlah_ban = $jumlah_ban + $jumlah_tambah;

		Yii::app()->db->createCommand()->update('ban', array(
        'JUMLAH'=>$jumlah_ban,
        ), 'ID_BAN=:ID_BAN', array(':ID_BAN'=>$model->ID_BAN));

        $relasi = RelasiPb::model()->findByPk($model->ID_RELASI_PB);
        $relasi->delete();

        $this->redirect(array('ban/index','id'=>$id));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ban the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ban::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ban $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ban-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
