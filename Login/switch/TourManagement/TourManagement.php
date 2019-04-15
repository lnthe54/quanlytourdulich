<!DOCTYPE html>
<html lang="vn">
<head>
<meta charset="UTF-8">

<style>
 
div.overlay {
    background-color: rgba(0,0,0,.25);
    bottom: 0;
    display: center ;
    justify-content: center;
    left: 50%;
    width: 100%;
    position: relative;
    margin: 0 auto;
    top: 25%;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Lý Tour Du Lịch</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
</head>
<body>
<h3 class="text-center text-success"><u>Quản Lý Tour Du Lịch</u></h3>
<div>
<a class="btn btn-danger" href="http://localhost/quanlytour/Login/switch/TourManagement/insertTour.html">Thêm Tour</a>
</div>
<div>
<table class="table" style = "margin-top: 15px;">

    <tr class ="row">
        <th class="col-1 text-center text-primary text-uppercase font-italic"></th>
        <th class="col-2 text-center text-primary text-uppercase font-italic">Tên Tour</th>
        <th class="col-1 text-center text-primary text-uppercase font-italic">Giá</th>
        <th class="col-1.5 text-center text-primary text-uppercase font-italic">Thời Gian</th>
        <th class="col-1.5 text-center text-primary text-uppercase font-italic">Giảm Giá Trẻ Em</th>
        <th class="col-4 text-center text-primary text-uppercase font-italic"></th>
    </tr>
    <?php 
        include('connect_mysql.php');

        $maTour = 'MaTour';
        $tenTour = 'TenTour';
        $price = 'Gia';
        $time = 'ThoiGian';
        $sale = 'GiamGiaTreEm';
        $img = 'img';
        
        $sql = "SELECT * FROM tb_tourdulich";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "
                <tr class='row'>
                    <th class='col-1 text-center' style='margin-right: 20px;'><img src='image/$row[$img]' height = '60' width = '100'></th>
                    <th class='col-2 text-center '>$row[$tenTour]</th>
                    <th class='col-1 text-center'>$row[$price]$</th>
                    <th class='col-1.5 text-center '>$row[$time]</th>
                    <th class='col-1 text-center '>$row[$sale]%</th>
                    <th class='col-2 text-center'><a href='http://localhost/quanlytour/Login/switch/TourManagement/update.php?MaTour=$row[$maTour]' style='text-decoration: none;'><button class='btn btn-warning col-4'>Sửa</button></a></th>
                    <th class='col-2 text-center'><a href='http://localhost/quanlytour/Login/switch/TourManagement/deleteTour.php?MaTour=$row[$maTour]' style='text-decoration: none; margin-right: 200px;'><button class='btn btn-danger col-4'>Xóa</button></a></th>
                </tr>
            ";
        }

        $conn->close();
    ?> 
</table> 
</div>


</body>
</html>