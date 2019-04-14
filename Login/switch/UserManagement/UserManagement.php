<!DOCTYPE html>
<html lang="en">
<head>
<style>
   a:link {
       color: white
   }
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
    <title>Admin</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script><script>
            $(document).ready(function() {
                $("#loginLink").click(function( event ){
                    event.preventDefault();
                    $(".overlay").fadeToggle("fast");
                  });
                
                $(".overlayLink").click(function(event){
                    event.preventDefault();
                    var action = $(this).attr('data-action');
                    
                    $.get( "ajax/" + action, function( data ) {
                        $( ".login-content" ).html( data );
                    });	
                    
                    $(".overlay").fadeToggle("fast");
                });
                
                $(".close").click(function(){
                    $(".overlay").fadeToggle("fast");
                });
                
                $(document).keyup(function(e) {
                    if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
                        event.preventDefault();
                        $(".overlay").fadeToggle("fast");
                    }
                });
            });
            </script>
</head>
<body>
<h3 class="text-center text-success"><u>Quản Lý Người Dùng</u></h3>
<a class="btn btn-danger" href="http://localhost/quanlydulich/Login/switch/UserManagement/export.php?export=true">Xuất ra danh sách</a>

<div class="overlay container" style="display:none;">
    <form method="post" action="success.php?action=delete" class="row container">
        <label class="col-4 text-warning font-weight-bold" style="margin-top:15px;">
            USERNAME: 
            <input type="text" name="email"  placeholder="Example: a@gmail.com"/>
        </label>
        <label class="col-4 text-warning font-weight-bold" style="margin-top:15px;">
            PASSWORD: 
            <input type="text" name="pass"  placeholder="" />
        </label> 
        <button type="submit" class="col-2 btn btn-warning" style="margin-top:15px;">THÊM</button>
    </form>
</div> 

<table class="table" style = "margin-top: 15px;">

    <tr class ="row">
        <th class="col-1 text-center text-primary text-uppercase font-italic">ID</th>
        <th class="col-3 text-center text-primary text-uppercase font-italic">USERNAME</th>
        <th class="col-3 text-center text-primary text-uppercase font-italic">PASSWORD</th>
        <th class="col-4 text-center text-primary text-uppercase font-italic"></th>
    </tr>  

    <?php 
        include('connect_mysql.php');

        $user = 'email';
        $pass = 'pass';
        $id = 'MaKH';
        $sql = "SELECT * FROM tb_khachhang";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "
                <tr class='row'>
                    <th class='col-1 text-center text-primary'>$row[$id]</th>
                    <th class='col-3 text-center text-primary'>$row[$user]</th>
                    <th class='col-3 text-center' style='color:light'>$row[$pass]</th>
                    <th class='col-2 text-center'><a action='success.php?action=updateUser' style='text-decoration: none;'><button class='btn btn-warning col-6' name='MaKH' value='$row[$id]'>Sửa</button></a></th>
                    <th class='col-2 text-center'><a action='success.php?action=deleteUser' style='text-decoration: none;'><button class='btn btn-danger col-6' name='MaKH' value='$row[$id]'>Xóa</button></a></th>
                </tr>
            ";
        }

        $conn->close();
    ?> 
</table> 
<div class="row">
    <a href="insert.php" style="text-decoration: none;" class="text-light overlayLink btn btn-warning col-11">THÊM NGƯỜI DÙNG</a>
</div>
</body>
</html>