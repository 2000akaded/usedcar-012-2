<?php 
    session_start();
    include("connext.php");
    $pid = $_POST['hdnProductId'];
    $brand = $_POST['txtbrand'];
    $model = $_POST['txtmodel'];
    $color= $_POST['txtcolor'];
    $license= $_POST['txtlicense'];
    $province= $_POST['txtprovince'];
    $modelYear= $_POST['txtmodelYear'];
    $price= $_POST['txtprice'];
    $postedBy= $_POST['txtpostedBy'];
    
    

    $sql = "UPDATE car SET brand='$brand',model='$model',color='$color',license='$license',province='$province',modelYear='$modelYear',price='$price',postedBy='$postedBy' WHERE id = $pid";
    
    echo $sql;

    $result=$conn->query($sql);
    if(!$result){
        echo "Error: " .$conn->error;
    }
    else{
        header("Location:index.php");
    }



?>