<?php

class SparepartController extends Controller
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
				'actions'=>array('create', 'create2','update','admin','insert'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
	public function actionCreate($id)
	{
		$model=new Sparepart;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sparepart']))
		{
			$model->attributes=$_POST['Sparepart'];
			if($model->save())
				$this->redirect(array('pengadaan/create2','id'=>$id));
		}

		$this->render('create',array(
			'model'=>$model, 'id'=>$id
		));
	}

	public function actionCreate2($id)
	{
		//$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sparepart']))
		{
			$model->attributes=$_POST['Sparepart'];
			if($model->save())
				$this->redirect(array('create2','id'=>$id));
		}

		$this->render('create2',array(
			'model'=>$model, 'id'=>$id
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

		if(isset($_POST['Sparepart']))
		{
			$model->attributes=$_POST['Sparepart'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_SPAREPART));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	public function actionInsert($id, $peng)
	{
		$isi = Yii::app()->db->createCommand()->select('COUNT(*)')->from('relasi_pengadaan_sparepart')->where('ID_PENGADAAN=:ID_PENGADAAN AND ID_SPAREPART=:ID_SPAREPART',array(':ID_PENGADAAN'=>$peng, ':ID_SPAREPART'=>$id))->queryScalar();
		$idrel = Yii::app()->db->createCommand()->select('ID_RELASI')->from('relasi_pengadaan_sparepart')->where('ID_PENGADAAN=:ID_PENGADAAN AND ID_SPAREPART=:ID_SPAREPART',array(':ID_PENGADAAN'=>$peng, ':ID_SPAREPART'=>$id))->queryScalar();
		$total = Yii::app()->db->createCommand()->select('HARGA_TOTAL')->from('pengadaan')->where('ID_PENGADAAN=:ID_PENGADAAN',array(':ID_PENGADAAN'=>$peng))->queryScalar();
		
		if($isi==0)
		{
			Yii::app()->db->createCommand()->insert('relasi_pengadaan_sparepart',array('ID_PENGADAAN'=>$peng, 'ID_SPAREPART'=>$id));
			$harga = Yii::app()->db->createCommand()->select('HARGA_SEMENTARA')->from('relasi_pengadaan_sparepart')->where('ID_PENGADAAN=:ID_PENGADAAN',array(':ID_PENGADAAN'=>$peng))->queryScalar();
			if($total==NULL)
			{
				$total = $harga;
			}
			else if($total!=NULL)
			{
				$total = $total+$harga;
			}
			
		}
		else if($isi>0)
		{
			RelasiPengadaanSparepart::model()->updateByPk($idrel,array('ID_PENGADAAN'=>$peng, 'ID_SPAREPART'=>$id));
		}

		Pengadaan::model()->updateByPk($peng,array("HARGA_TOTAL"=>$total));
		


		$this->redirect(array('sparepart/admin','id'=>$peng));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		/*$dataProvider=new CActiveDataProvider('Sparepart');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		$model=new Sparepart('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sparepart']))
			$model->attributes=$_GET['Sparepart'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sparepart('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sparepart']))
			$model->attributes=$_GET['Sparepart'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Sparepart the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Sparepart::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Sparepart $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sparepart-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
