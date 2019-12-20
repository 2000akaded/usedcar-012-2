<?php
    session_start();
    include("connext.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soi5 Used Cars 012</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Soi 5 Used Cars 012</a>
            
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="index.php"><i class="fa fa-home fa-fw"></i> หน้าหลัก</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            
            
            <?php
             if(isset($_SESSION['id'])){
                    ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> 
                    ยินดีตอนรับ <?php echo $_SESSION['username'] ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="Logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    <li><a href="newproduct.php">เพิ่มรายการสินค้า</a></li>
                </ul>
            </li>
           
            <?php
                        }
                        else{
                        ?>    
                   
                        <li>
                        <a href="login.php">
                            <i class="fa fa-lock fa-fw"></i> เข้าสู่ระบบ
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                    
<!-- *************************************** -->
        </ul>

        
    </nav>
    <br><br><br>
    <h2>Edit Car</h2>
    <center><img src="jpg/<?php echo $prd->carpic; ?>" alt="" ></center>
    <div class="container">
        <div class="row">
            <form action="updatproduct.php" class="form-horizontal" method= "post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Brand : </label>
                <div class="col-md-9">
                    <input type="text"name="txtbrand" class="form-control" value="<?php echo $prd->brand;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Model : </label>
                <div class="col-md-9">
                    <input type="text"name="txtmodel" class="form-control" value="<?php echo $prd->model;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Color : </label>
                <div class="col-md-9">
                    <input type="text"name="txtcolor" class="form-control" value="<?php echo $prd->color;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="control-label col-md-3">License :</label>
                <div class="col-md-9">
                    <input type="text"name="txtlicense" class="form-control" value="<?php echo $prd->license;?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Province : </label>
                <div class="col-md-9">
                
                <input type="text"name="txtprovince" class="form-control" value="<?php echo $prd->province;?>">
                </div>
            </div> 
            <div class="form-group">
                <label for="name" class="control-label col-md-3">ModelYear :</label>
                <div class="col-md-9">
                    <input type="text"name="txtmodelYear" class="form-control" value="<?php echo $prd->modelYear;?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Price :</label>
                <div class="col-md-9">
                    <input type="text"name="txtprice" class="form-control" value="<?php echo $prd->price;?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="name" class="control-label col-md-3">PostedBy :</label>
                <div class="col-md-9">
                    <input type="text"name="txtpostedBy" class="form-control" value="<?php echo $prd->postedBy;?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="name" class="control-label col-md-3">Carpic :</label>
                <div class="col-md-9">
                    <input type="file"name="filePic" class="form-control-file" accept="image/*">
                </div>
            </div>  
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                <input type="hidden"name="hdnProductId"value="<?php echo $prd->id; ?>">
                    <button type="submit" class="btn btn-primary">Save </button>
                    <button type="reset" class="btn btn-danger">Reset </button>
                </div>
            </div>  
            </form>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>