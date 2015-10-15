<?php

class PerbaikanController extends Controller
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
				'actions'=>array('create','update','admin','mekanik', 'cetaklaporan'),
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
	public function actionCreate()
	{
		$model=new Perbaikan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perbaikan']))
		{
			$model->attributes=$_POST['Perbaikan'];
			if($model->save())
			{
				if($model->JENIS_PERBAIKAN=="0")
				{
					Perbaikan::model()->updateByPk($model->ID_PERBAIKAN,array('STATUS'=>"Ke Mekanik"));
				}
				else if($model->JENIS_PERBAIKAN=="1")
				{
					if($model->JENIS_PENGGANTIAN==0)
						Perbaikan::model()->updateByPk($model->ID_PERBAIKAN,array('STATUS'=>"Ganti Sparepart"));
					else
						Perbaikan::model()->updateByPk($model->ID_PERBAIKAN,array('STATUS'=>"Ganti Ban"));
				}
				else if($model->JENIS_PERBAIKAN=="2")
				{
					if($model->JENIS_PENGGANTIAN==0)
						Perbaikan::model()->updateByPk($model->ID_PERBAIKAN,array('STATUS'=>"Ke Mekanik dan Ganti Sparepart"));
					else
						Perbaikan::model()->updateByPk($model->ID_PERBAIKAN,array('STATUS'=>"Ganti Ban"));
				}
				$this->redirect(array('admin'));	
			}
				
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

		if(isset($_POST['Perbaikan']))
		{
			$model->attributes=$_POST['Perbaikan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_PERBAIKAN));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	public function actionMekanik($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perbaikan']))
		{
			$model->attributes=$_POST['Perbaikan'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('mekanik',array(
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Perbaikan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Perbaikan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Perbaikan']))
			$model->attributes=$_GET['Perbaikan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCetaklaporan($nopol, $tgl_awal, $tgl_akhir, $jenis)
	{
		$criteria=new CDbCriteria;

		if (!empty($tgl_awal) && empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERBAIKAN>='$tgl_awal'";
		}
		else if (empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERBAIKAN<='$tgl_akhir'";
		}
		else if (!empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERBAIKAN>='$tgl_awal' and TGL_PERBAIKAN<='$tgl_akhir'";
		}
		$criteria->with = array('iDKENDARAAN');
		$criteria->compare('iDKENDARAAN.NOPOL',$nopol, true);
		$criteria->compare('JENIS_PERBAIKAN',$jenis);

    	$model = Perbaikan::model()->findAll($criteria);

    	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase','autoload'));

        $pdf->SetCreator(PDF_CREATOR);  
 
        $pdf->SetTitle("Laporan Rekap Perbaikan");                
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetFont('helvetica', '', 8);
        $pdf->SetTextColor(80,80,80);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->AddPage();
        $pdf->setJPEGQuality(75);

        $html = <<<EOD
		<h1 align="center">LAPORAN PERBAIKAN</h1>
		<table align="left" border="1" cellpadding="2" cellspacing="0">
			<tbody>
				<tr>
					<td width="40" align="center">NO</td>
					<td width="75" align="center">Nopol Kendaraan</td>
					<td width="65" align="center">Tanggal Perbaikan</td>
					<td width="150" align="center">Kerusakan</td>
					<td width="75" align="center">Estimasi Waktu Perbaikan (hari)</td>
					<td width="75" align="center">Jenis Perbaikan</td>
					<td width="75" align="center">Status</td>
					<td width="75" align="center">PJ Mekanik</td>
				</tr>
EOD;
		$no_urut = 0;
		foreach ($model as $mod) {
			
		$no_urut++;
		$nopol = $mod->iDKENDARAAN->NOPOL;

		$jenis_perbaikan = "";
		if($mod->JENIS_PERBAIKAN==0)
			$jenis_perbaikan = "Perbaikan";
		else if($mod->JENIS_PERBAIKAN==1)
			$jenis_perbaikan = "Penggantian";
		else if($mod->JENIS_PERBAIKAN==2)
			$jenis_perbaikan = "Perbaikan dan Penggantian";

		$tgl_perb = "";
		if($mod->TGL_PERBAIKAN!="0000-00-00")
		{
			$tgl_perb = date("d-M-y", strtotime($mod->TGL_PERBAIKAN));
		}
		else $tgl_perb = '-';

		$html .= <<<EOD
				<tr>
					<td width="40" align="center">$no_urut</td>
					<td width="75" align="center">$nopol</td>
					<td width="65" align="center">$tgl_perb</td>
					<td width="150" align="center">$mod->KERUSAKAN</td>
					<td width="75" align="center">$mod->ESTIMASI_WAKTU_PERBAIKAN</td>
					<td width="75" align="center">$jenis_perbaikan</td>
					<td width="75" align="center">$mod->STATUS</td>
					<td width="75" align="center">$mod->PJ_MEKANIK</td>
				</tr>
EOD;
		}
		$html .= <<<EOD
			</tbody>
		</table>
EOD;
		
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		$filename = Yii::getPathOfAlias('webroot').'/laporan/perbaikan/rekap perbaikan tanggal '.date('d-M-y').'.pdf';

        $pdf->Output($filename, 'F');
        //Yii::app()->end();

        $this->redirect(Yii::app()->request->baseUrl.'/laporan/perbaikan/rekap perbaikan tanggal '.date('d-M-y').'.pdf');

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Perbaikan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Perbaikan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Perbaikan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='perbaikan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
