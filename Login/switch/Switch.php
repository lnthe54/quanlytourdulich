<?php

if(isset($_GET['action'])) {
    $action = $_GET['action'];
}
else {
    $action ='user';	
}

switch($action){
    case 'user':{
        include("userManagement/userManagement.php");
        break;
    }
    case 'exportUser':{
        include("userManagement/export.php");
        break;
    }
    case 'insertUser':{
        include("userManagement/insert.php");
        break;
    }
    case 'deleteUser':{
        include("userManagement/delete.php");
        break;
    }
    case 'updateUser':{
        include("userManagement/update.php");
        break;
    }
    case 'tour':{
        include("tourManagement/tourManagement.php");
        break;
    }
    case 'insertTour':{
        include("tourManagement/insert.html");
        break;
    }
    case 'deleteTour':{
        include("tourManagement/deleteTour.php");
        break;
    }
    case 'updateTour':{
        include("tourManagement/updateTour.php");
        break;
    }
}
?>