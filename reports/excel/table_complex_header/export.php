<?php
ob_start();
include "MyReport.php";
$report = new MyReport;
$report->run();
ob_end_clean();

$exportType = $_GET["type"];
if ($exportType === "excel") {
    $report->exportToExcel('MyReportExcel')->toBrowser("MyReportExcel.xlsx");
} else {
    $report->exportToXLSX('MyReportExcel')->toBrowser("MyReportBigSpreadsheet.xlsx");
}
