<?php
require_once "../../../common.php";

class MyReport extends \koolreport\KoolReport
{
    use \koolreport\excel\BigSpreadsheetExportable;

    function settings()
    {
        return array(
            "dataSources" => array(
                "dollarsales"=>array(
                    'filePath' => '../../../data/customer_product_dollarsales2.xlsx',
                    'class' => '\koolreport\excel\BigSpreadsheetDataSource'      
                ), 
            )
        );
    }    function setup()
    {
        $node = $this->src('dollarsales')
        ->pipe($this->dataStore('sales'));
    }
}
