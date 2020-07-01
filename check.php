<?php
$id=$_POST['id'];
switch($id){
    case 101010:
        echo "Sagar Verma";
        break;
    case 101:
        echo "Jayant";
        break;
    case 10101:
        echo "Abhishek";
        break;
    case 1010:
        echo "Anonymous";
        break;
    default:
        echo 404;
}

?>