<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['submit'])){
    $itemno = $_POST['aitemnumber'];
    $controlno = $_POST['acontrolnumber'];
    $party= $_POST['apartyrepresented'];
    $gender = $_POST['agender'];
    $casetitle = $_POST['acasetitle'];
    $court = $_POST['acourt'];
    $casenumber = $_POST['acasenumber'];
    $casetype = $_POST['acasetype'];
    $coa = $_POST['acauseofaction'];
    $casestatus = $_POST['acasestatus'];
    $lat = $_POST['alastactiontaken'];
    $cot = $_POST['acauseoftermination'];
    $startdate = $_POST['astartdate'];
    $casedate = $_POST['acasedate'];
    $columns = ['itemnumber','controlnumber','partyrepresented','gender','casetitle','court','casenumber','causeofaction','casestatus','lastactiontaken','causeoftermination','casedate', 'casetype', 'startdate'];
    $data = [$itemno,$controlno,$party,$gender,$casetitle,$court,$casenumber,$coa,$casestatus,$lat,$cot,$casedate,$casetype,$startdate];
    
    if(saveData($conn, 'cases', $columns, $data)===true)
        header("location: ../../components/pages/transaction.php");
}
?>