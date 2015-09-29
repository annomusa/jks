<?php

class PengadaanController extends Controller
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
				'actions'=>array('create', 'create2', 'create3','update','admin', 'lanjut', 'setuju', 'cetaklaporan'),
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
		$model=new Pengadaan;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pengadaan']))
		{
			$model->attributes=$_POST['Pengadaan'];
			$model->STATUS="BARU";
			if($model->save())
				$this->redirect(array('sparepart/admin','id'=>$model->ID_PENGADAAN));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionCreate2($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pengadaan']))
		{
			$model->attributes=$_POST['Pengadaan'];
			if($model->save())
				$this->redirect(array('create2','id'=>$model->ID_PENGADAAN));
		}

		$this->render('create2',array(
			'model'=>$model,
		));
	}

	public function actionCreate3($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Perjalanan']))
		{
			$model->attributes=$_POST['Perjalanan'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('create3',array(
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

		if(isset($_POST['Pengadaan']))
		{
			$model->attributes=$_POST['Pengadaan'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_PENGADAAN));
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
		$dataProvider=new CActiveDataProvider('Pengadaan');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionLanjut($id)
	{
		$model=$this->loadModel($id);

		Pengadaan::model()->updateByPk($id,array("STATUS"=>"PENYETUJUAN KEUANGAN"));
		$this->redirect(array('create3',"id"=>$id));
	}

	public function actionSetuju($id)
	{
		$model=$this->loadModel($id);

		$relasi = RelasiPengadaanSparepart::model()->findAllByAttributes(array('ID_PENGADAAN'=>$id));

		foreach ($relasi as $rel) 
		{
			$stok = Yii::app()->db->createCommand()->select('STOK')->from('sparepart')->where('ID_SPAREPART=:ID_SPAREPART',array(':ID_SPAREPART'=>$rel->ID_SPAREPART))->queryScalar();
			if($stok==NULL)
			{
				$stok=$rel->JUMLAH;
			}
			else $stok = $stok+$rel->JUMLAH;
			Sparepart::model()->updateByPk($rel->ID_SPAREPART,array("STOK"=>$stok));
		}

		Pengadaan::model()->updateByPk($id,array("STATUS"=>"DISETUJUI KEUANGAN"));
		$this->redirect(array('admin'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pengadaan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pengadaan']))
			$model->attributes=$_GET['Pengadaan'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionCetaklaporan($tgl_awal, $tgl_akhir, $toko, $status)
	{
		$criteria=new CDbCriteria;

		if (!empty($tgl_awal) && empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PENGADAAN>='$tgl_awal'";
		}
		else if (empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PENGADAAN<='$tgl_akhir'";
		}
		else if (!empty($tgl_awal) && !empty($tgl_akhir))
		{
			$criteria->condition = "TGL_PENGADAAN>='$tgl_awal' and TGL_PENGADAAN<='$tgl_akhir'";
		}
		$criteria->compare('NAMA_TOKO',$toko, true);
		$criteria->compare('STATUS',$status);

    	$model = Pengadaan::model()->findAll($criteria);

    	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        spl_autoload_register(array('YiiBase','autoload'));

        $pdf->SetCreator(PDF_CREATOR);  
 
        $pdf->SetTitle("Laporan Rekap Pengadaan");                
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
		<h1 align="center">LAPORAN PENGADAAN</h1>
		<table align="left" border="1" cellpadding="2" cellspacing="0" vertical-align="middle">
			<tbody>
				<tr>
					<td width="40" align="center">NO</td>
					<td width="75" align="center">Nomor PO</td>
					<td width="65" align="center">Tanggal Pengadaan</td>
					<td width="175" align="center">Permintaan</td>
					<td width="75" align="center">Nama Toko</td>
					<td width="75" align="center">Harga Total</td>
					<td width="125" align="center">Status</td>
				</tr>
EOD;
		$no_urut = 0;
		foreach ($model as $mod) {
			
		$no_urut++;

		$tgl_peng = "";
		if($mod->TGL_PENGADAAN!="0000-00-00")
		{
			$tgl_peng = date("d-M-y", strtotime($mod->TGL_PENGADAAN));
		}
		else $tgl_peng = '-';

		$html .= <<<EOD
				<tr>
					<td width="40" align="center">$no_urut</td>
					<td width="75" align="center">$mod->NO_PO</td>
					<td width="65" align="center">$tgl_peng</td>
					<td width="175" align="center">$mod->PERMINTAAN</td>
					<td width="75" align="center">$mod->NAMA_TOKO</td>
					<td width="75" align="center">$mod->HARGA_TOTAL</td>
					<td width="125" align="center">$mod->STATUS</td>
				</tr>
EOD;
		}
		$html .= <<<EOD
			</tbody>
		</table>
EOD;
		
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		$filename = Yii::getPathOfAlias('webroot').'/laporan/pengadaan/rekap pengadaan tanggal '.date('d-M-y').'.pdf';

        $pdf->Output($filename, 'F');
        //Yii::app()->end();

        $this->redirect(Yii::app()->request->baseUrl.'/laporan/pengadaan/rekap pengadaan tanggal '.date('d-M-y').'.pdf');

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pengadaan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pengadaan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pengadaan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pengadaan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
