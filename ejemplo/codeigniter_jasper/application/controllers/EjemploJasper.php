<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EjemploJasper extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
		$this->config->load('configCiJasper'); //Carga el configurador. Tambien puedes cargarlo automaticamente en el archivo autoload.php con $autoload['config'] = array('configCiJasper');
		$this->load->library('phpjasperreport/cijasper');
			
	}

	public function creandoPdf()
	{
		$file = $this->cijasper->run('prueba1.jrxml', ['id'=>221],['pdf']);
		echo $file;
	}

	public function creandoExcel()
	{
		$file = $this->cijasper->run('prueba1.jrxml', ['id'=>221],['xls']);
		echo $file;
	}

	public function forzandoDescarga()
	{
		$file = $this->cijasper->run('prueba1.jrxml', ['id'=>221],['pdf']);
		$this->cijasper->forceDowload($file, 'nuevoOtro.pdf');
	}

	public function eliminandoArchivoDeTemporal()
	{
		$file = $this->cijasper->run('prueba1.jrxml', ['id'=>221],['pdf']);
		$this->cijasper->forceDowload($file, 'nuevoOtro.pdf');
		$this->cijasper->removeFile($file);
	}

}

/* End of file EjemploJasper.php */
/* Location: ./application/controllers/EjemploJasper.php */