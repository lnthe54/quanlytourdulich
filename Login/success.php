<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="css/homecss.css" type="text/css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
<body>

 <h1>  
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top:0px">
  <a class="navbar-brand" href="#">QUẢN LÝ WEB DU LỊCH</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <h6 style="margin-left:1000px; margin-top:10px"class="">xin chào, Admin123</h6>
    </ul>
  </div>
</nav>
</h1>
<div style="float:left; width:16%;height:656px;" class="bg-light">
  <div style="width: 100%;"><a class="btn bg-light" href="success.php?action=user" style="color:blue">Quản Lý Người Dùng</a></div>
  <div style="width: 100%;"><a class="btn bg-light" href="success.php?action=tour" style="color:blue">Quản Lý Tour Du Lịch</a></div>
  <div style="width: 100%; margin-left:35px;"><a class="btn btn-danger" href="../index.html">Đăng Xuất</a></div>
</div>
<div style="float:right; width:83%;"> 
<?php
include("switch/Switch.php"); 
?> 
</div>
</body>
 
</html>