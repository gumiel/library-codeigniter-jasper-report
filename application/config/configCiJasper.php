<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$config['dbConnection'] = array('driver' => 'postgres', 
				                'username' => 'postgres',
				                'password' => 'postgres',
				                'host' => 'localhost',
				                'database' => 'phpjasperreport',
				                'port' => '5432');
$config['dirJrxml'] = FCPATH."jasper_jrxml\\";
$config['dirReport'] = FCPATH."temp_reports\\";
