<?php
ob_start();
include "MyReport.php";
$report = new MyReport;
$report->run();
ob_end_clean();
$report->exportToExcel('MyReportExcel')->toBrowser("MyReport.xlsx");
