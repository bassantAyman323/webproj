<?php
include "./db.php";
if(isset($_SERVER['HTTP_ORIGIN'])){
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true'); 
    header('Access-Control-Max-Age: 1000');     
}
if($_SERVER['REQUEST_METHOD']=='OPTIONS'){
    if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])){
        header("Access-Control-Allow-Methods:POST,GET,OPTIONS,PUT,DELETE"); 
    }
    if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){
        header("Access-Control-Allow-Headers:Accept, Content-Type,Content-Length,Accept-Encoding,X-CSRF-Token,Authorization"); 
    }
    exit(0);
}
$res= array('error' => false);
$action='';

if(isset($_GET['action'])){
    $action=$_GET['action'];
}
if($action=="send"){
    $Name=$_POST['Name'];
    $email=$_POST['Email'];
    $message=$_POST['Message'];
    $sql = "INSERT INTO 'reviews' (`Name`, `Email`, `Message`) VALUES ('$Name', '$email', '$message')";

    $result=$conn->query($sql);
    if($result===true){
        $res['error']=false;
        $res['message']="added successfully";
    } else {
        $res['error']=true;
        $res['message']="wrong";
    }
}
$conn -> close();
header("Content-type: application/json");
echo json_encode($res);
die();
?>