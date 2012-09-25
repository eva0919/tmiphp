<?php

App::import('Vendor', 'php-excel-reader/excel_reader2');

App::import('Vendor', 'simple/simple_html_dom');
class TestController extends AppController {

	//引入PHPExcel函式庫
//require_once("phpexcel/Classes/PHPExcel.php");
//require_once("phpexcel/Classes/PHPExcel/IOFactory.php");
//require_once("phpexcel/Classes/PHPExcel/Reader/Excel5.php");


	var $name = 'Test';
	var $layout = 'ajax';
	public function view() {
	App::import('Vendor', 'php-excel-reader/excel_reader2');	
	$data = new Spreadsheet_Excel_Reader('ex-Excel-C.xls', true);
    $this->set('data', $data);

	}
	public function getjson() {
		App::import('Vendor', 'phpQuery/phpQuery');
		phpQuery::newDocumentFile('http://finance.google.com/finance/info?client=ig&q=TPE:1101');  
		$companies = pq("")->text();  
		$itemList = explode('"', $companies);
		$this->render($itemList[15]);
		//$this->loadModel('Test');       
		//$test = $this->Test->find('all');
		//$this->set('test',$test);
	}
	  /**
   * Read the excel content into an $arr and
   * print it to debug.log
   */
  	public function read_excel() {
  		$this->response->header('Access-Control-Allow-Origin', '*');
  $this->response->header('Access-Control-Allow-Methods', 'PUT, GET, POST, DELETE, OPTIONS');
  $this->response->header('Access-Control-Allow-Headers', 'Content-Type');
	$data = new Spreadsheet_Excel_Reader('yabo.xls', true);
	$temp = $data->dumptoarray();

	$this->log($temp, 'debug');
	$this->set('temp', $temp);
	$this->set('data', $data);
	$this->render('view');
  	}

	}

?>