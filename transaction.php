<?php
    $billMonth = $_POST['billMonth'];
    $billYear = $_POST['billYear'];
    $billAmount = $_POST['billAmount'];
    $mobileNumber = $_POST['mobileNumber'];
    $billFile = $_POST['billFile'];

    $conn = new mysqli('localhost','root','','reimbursement');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into transaction(billMonth, billYear, billAmount, mobileNumber, billFile)
            values(?, ?, ?, ?, ?)")
        $stmt->bind_param("ssiib",$billMonth, $billYear, $billAmount, $mobileNumber, $billFile);
        $stmt->execute();
        echo "submission is done";
        $stmt->close();
        $conn->close();
    }
?>