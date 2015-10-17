<?php

class PerjalananController extends Controller
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
				'actions'=>array('create','create1','create2', 'lanjut','create3','create4','update','Pilihpenerbit','admin', 'cetaklaporan', 'cetakexcel'),
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
		$model=new Perjalanan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			$model->STATUS = "BARU";
			if($model->save())
				$this->redirect(array('create2','id'=>$model->ID_PERJALANAN));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreate1($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			if($model->save())
			{
				$this->redirect(array('create2','id'=>$model->ID_PERJALANAN));
			}
				
		}
		$this->render('create1',array(
			'model'=>$model,
		));
	}

	public function actionCreate2($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			$model->STATUS = "TUJUAN TERISI";
			if($model->save())
				$this->redirect(array('create2','id'=>$model->ID_PERJALANAN));
		}

		$this->render('create2',array(
			'model'=>$model,
		));
	}

	public function actionLanjut($id)
	{
		$model=$this->loadModel($id);

		Perjalanan::model()->updateByPk($id,array("STATUS"=>"TUJUAN TERISI"));
		$this->redirect(array('create3',"id"=>$id));
	}

	public function actionCreate3($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			if($model->TITIPAN_AWAL!=NULL)
			{
				$sisa = $model->TITIPAN_AWAL - ($model->RITASE + $model->TAMBAHAN);
			}
			if($model->save())
			{
				if($model->TITIPAN_AWAL==NULL)
				{
					$this->redirect(array('create3','id'=>$model->ID_PERJALANAN));
				}
				else
				{
					Perjalanan::model()->updateByPk($id,array("STATUS"=>"TAMBAHAN DAN UANG AWAL TERISI", "SISA"=>$sisa));
					$this->redirect(array('create4','id'=>$model->ID_PERJALANAN));
				}
				
			}
				
		}

		$this->render('create3',array(
			'model'=>$model,
		));
	}

	public function actionCreate4($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			$uangbawa = $model->SISA + $model->UANG_DIBERIKAN;
			if($model->save())
			{
				Perjalanan::model()->updateByPk($id,array("STATUS"=>"SELESAI", "UANG_DIBAWA"=>$uangbawa));
				$this->redirect(array('admin'));
			}
				
		}

		$this->render('create4',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */

	public function actionPilihpenerbit($idp)
	{

	}
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_PERJALANAN));
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

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Perjalanan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Perjalanan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Perjalanan']))
			$model->attributes=$_GET['Perjalanan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCetaklaporan($penerbit, $nopol, $tgl_awal, $tgl_akhir)
	{
		$criteria=new CDbCriteria;

		if (!empty($tgl_awal) && empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN>='$tgl_awal'";
		}
		else if (empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN<='$tgl_akhir'";
		}
		else if (!empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN>='$tgl_awal' and TGL_PERJALANAN<='$tgl_akhir'";
		}
		$criteria->compare('ID_PENERBIT',$penerbit, true);
		$criteria->compare('ID_KENDARAAN',$nopol);

    	$model = Perjalanan::model()->findAll($criteria);

    	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase','autoload'));

        $pdf->SetCreator(PDF_CREATOR);  
 
        $pdf->SetTitle("Laporan Rekap Perjalanan");                
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
		<h1 align="center">LAPORAN PERJALANAN</h1>
		<table align="left" border="1" cellpadding="2" cellspacing="0">
			<tbody>
				<tr>
					<td width="25" align="center">NO</td>
					<td width="75" align="center">Nama Penerbit</td>
					<td width="65" align="center">Nopol Kendaraan</td>
					<td width="55" align="center">Tanggal Perjalanan</td>
					<td width="60" align="center">Nomor Surat PO</td>
					<td width="75" align="center">Jenis Perintah</td>
					<td width="40" align="center">Ritase</td>
					<td width="40" align="center">Titipan Awal</td>
					<td width="40" align="center">Lebih</td>
					<td width="40" align="center">Kurang</td>
					<td width="40" align="center">Akhir</td>
					<td width="65" align="center">Status</td>
				</tr>
EOD;
		$no_urut = 0;
		foreach ($model as $mod) {
			
		$no_urut++;
		$penerbit = $mod->iDPENERBIT->NAMA_PENERBIT;
		$nopol = $mod->iDKENDARAAN->NOPOL;
		$tgl_perj = "";
		if($mod->TGL_PERJALANAN!="0000-00-00")
		{
			$tgl_perj = date("d-M-y", strtotime($mod->TGL_PERJALANAN));
		}
		else $tgl_perj = '-';

		$html .= <<<EOD
				<tr>
					<td width="25" align="center">$no_urut</td>
					<td width="75" align="center">$penerbit</td>
					<td width="65" align="center">$nopol</td>
					<td width="55" align="center">$tgl_perj</td>
					<td width="60" align="center">$mod->NO_SURAT_PO</td>
					<td width="75" align="center">$mod->JENIS_PERINTAH</td>
					<td width="40" align="center">$mod->RITASE</td>
					<td width="40" align="center">$mod->TITIPAN_AWAL</td>
					<td width="40" align="center">$mod->LEBIH</td>
					<td width="40" align="center">$mod->KURANG</td>
					<td width="40" align="center">$mod->AKHIR</td>
					<td width="65" align="center">$mod->STATUS</td>
				</tr>
EOD;
		}
		$html .= <<<EOD
			</tbody>
		</table>
EOD;
		
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		$filename = Yii::getPathOfAlias('webroot').'/laporan/PO/rekap perjalanan tanggal '.date('d-M-y').'.pdf';

        $pdf->Output($filename, 'F');
        //Yii::app()->end();

        $this->redirect(Yii::app()->request->baseUrl.'/laporan/PO/rekap perjalanan tanggal '.date('d-M-y').'.pdf');

	}

	public function actionCetakexcel($penerbit, $nopol, $tgl_awal, $tgl_akhir)
	{
		$criteria=new CDbCriteria;

		if (!empty($tgl_awal) && empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN>='$tgl_awal'";
		}
		else if (empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN<='$tgl_akhir'";
		}
		else if (!empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PERJALANAN>='$tgl_awal' and TGL_PERJALANAN<='$tgl_akhir'";
		}
		$criteria->compare('ID_PENERBIT',$penerbit, true);
		$criteria->compare('ID_KENDARAAN',$nopol);

    	$model = Perjalanan::model()->findAll($criteria);

    	$this->render('exportexcel', array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Perjalanan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Perjalanan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Perjalanan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='perjalanan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
