<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Sửa Tour Du Lịch</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

</head>

<body>

<?php 
    $server   = "localhost";   
    $username = "root";
    $password = "";    
    $dbname   = "quanlydulich";      

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if (!$conn) {
        die("Không kết nối :".mysqli_connect_error());
        exit();
    }

    $maTour = $_REQUEST['MaTour'];

    $tenTour = "TenTour";
    $gia = "Gia";
    $thoiGian = "ThoiGian";
    $giamGia = "GiamGiaTreEm";
    $image = "img";

    $sql = "SELECT * FROM tb_tourdulich WHERE MaTour = $maTour";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $name = $row[$tenTour];
        $price = $row[$gia];
        $time = $row[$thoiGian];
        $sale = $row[$giamGia];
        $img = $row[$image];
    }

    $conn->close();
?> 


    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div background = "images/bg.jpg" class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Thông Tin Tour Du Lịch</h2>
                    <form action = "updateTour.php?id=<?php echo $maTour ?>" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Tên tour" name="TenTour"
                            value="<?php echo $name; ?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Thời gian" name="ThoiGian"
                                    value="<?php echo $time; ?>">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Giá" name="Gia"
                                    value="<?php echo $price; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="Giảm giá trẻ em" name="GiamGiaTreEm"
                                    value="<?php echo $sale; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div>
                                <input class="input--style-1" type="file" placeholder = "Chọn ảnh" name="img">
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Sửa Thông Tin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>