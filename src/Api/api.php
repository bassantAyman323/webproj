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
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $type1=$_POST['type1'];
    $noofguests=$_POST['noofguests'];
    $budget=$_POST['budget'];
    $additionalneeds=$_POST['additionalneeds'];
    $place=$_POST['place'];
    $styl=$_POST['styl'];
   
    $service=$_POST['service'];
    $childreen=$_POST['childreen'];
    $cardname=$_POST['cardname'];
    $cardno=$_POST['cardno'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $agree=$_POST['agree'];
      $sql="INSERT INTO  `Request` (`firstname`,`lastname`,`phoneno`,`email`,`address`,`city`,`type1`,`noofguests`,`budget`,`additionalneeds`,`place`,`styl`,`service`,`childreen`,`cardname`,`cardno`,`expmonth`,`expyear`,`cvv`,`agree`
      )
        VALUES('$firstname','$lastname','$phone','$email','$address','$city','$type1','$noofguests','$budget','$additionalneeds','$place','$styl','$service','$childreen','$cardname','$cardno','$expmonth'
,'$expyear','$cvv' ,'$agree'       )";
      
       
   $result=$conn->query($sql);
    if($result===true){
 $res['error']=false;
       $res['message']="added successfully";
   
    }else{
  $res['error']=true;
     $res['message']="wrong";
  
    }
  
}
if($action=="comment"){
    $comment=$_POST['comment'];
    
      $sql="INSERT INTO  `feedback` (`comment`)
        VALUES('$comment')";
      
       
   $result=$conn->query($sql);
    if($result===true){
 $res['error']=false;
       $res['message']="added successfully";
   
    }else{
  $res['error']=true;
     $res['message']="wrong";
  
    }
  
}
$conn -> close();
header("Content-type: application/json");
echo json_encode($res);
die();



?>
