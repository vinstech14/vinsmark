<?php
require_once("../database/databasecon.php");
require_once("functions.php");

if(isset($_POST['updatedata'])){
    $id = $_POST['update_id'];
    $itemno = $_POST['uitemnumber'];
    $controlno = $_POST['ucontrolnumber'];
    $party= $_POST['upartyrepresented'];
    $gender = $_POST['ugender'];
    $casetitle = $_POST['ucasetitle'];
    $court = $_POST['ucourt'];
    $casenumber = $_POST['ucasenumber'];
    $casetype = $_POST['ucasetype'];
    $coa = $_POST['ucauseofaction'];
    $casestatus = $_POST['ucasestatus'];
    $lat = $_POST['ulastactiontaken'];
    $cot = $_POST['ucauseoftermination'];
    $startdate = $_POST['ustartdate'];
    $casedate = $_POST['ucasedate'];
    $columns = ['itemnumber','controlnumber','partyrepresented','gender','casetitle','court','casenumber','causeofaction','casestatus','lastactiontaken','causeoftermination','casedate', 'casetype', 'startdate'];
    $data = [$itemno,$controlno,$party,$gender,$casetitle,$court,$casenumber,$coa,$casestatus,$lat,$cot,$casedate];
    $conditions = "id = '$id'";
    
    if(updateData($conn, 'cases', $columns, $data, $conditions)===true)
        header("location: ../../components/pages/transaction.php");
}
?>