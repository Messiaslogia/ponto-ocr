<?php 

    require_once 'models/OcrModel.php';
    require 'vendor/autoload.php';

    use thiagoalessio\TesseractOCR\TesseractOCR;
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    class OcrController{

        private $model;
        
        public function __construct() {
            $this->model = new OcrModel();
        }

        public function handleUploadImage(){
            
        }    

    }