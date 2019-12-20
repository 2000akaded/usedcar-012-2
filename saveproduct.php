<?php 
    include("connext.php");
    echo ini_get("upload_max_fillesize")."<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filePic"]["type"]);
    $size = $_FILES["filePic"]["size"]/1024/1024;
    //image/pns fileType=["imge", "png"]
    if(!in_array($fileType[1],$allowedType)){
        //เมื่ออัพโหลดไฟล์ให้ตรงกับ ในผ Allowedtyp
        echo "Non-image file is not allowed,";

    }
    else if($size>10.00){
        echo "File size exceeds the maximum treshold";
    }
    else{
        $brand = $_POST['txtbrand'];
        $model = $_POST['txtmodel'];
        $color= $_POST['txtcolor'];
        $license= $_POST['txtlicense'];
        $province= $_POST['txtprovince'];
        $modelYear= $_POST['txtmodelYear'];
        $price= $_POST['txtprice'];
        $postedBy= $_POST['txtpostedBy'];
        

        //echo "Type: " . $_FILES["filePic"]["type"] . "<br>";
        //echo "Name: " . $_FILES["filePic"]["name"] . "<br>";
        //echo "Size: " . $_FILES["filePic"]["size"] . "<br>";
        //echo "Temp name: " . $_FILES["filePic"]["tmp_name"] . "<br>";
        //echo "Error: " . $_FILES["filePic"]["error"] . "<br>";

        move_uploaded_file($_FILES["filePic"]["tmp_name"],"jpg/".$_FILES["filePic"]["name"]);

        $sqlInsert = "INSERT INTO car (brand,model,color,license,province,modelYear,price,postedBy) VALUES('$brand','$model','$color','$license','$province','$modelYear','$price','$postedBy')";
        //echo $sqlInsert;
        $result=$conn->query($sqlInsert);
        if($result){
           echo "<script language='javascript'>alert('Insert car Complete');</script>"; 
           header("Location: index.php");
        }
        else{
            echo "Error during insert: ".$conn->error;
        }
    }
?>