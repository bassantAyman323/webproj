<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> feedback </title>>
  </head>
  <body style=' Text-align:center;color:#6d3572;' >
  <?php
  
   session_start();
   echo "SID:".session_id();
   if(!IsSet($_SESSION['count'])){
     $_SESSION['count']=0;
   }else{
     $_SESSION['count']++;
     echo "<br/><h3 >Welcome back it's your"." ".$_SESSION['count'] ." time to visit us. </h3>";}

      print ("<h3 >Thanks for using our website we care about your information.</h3>");
    ?>
  <?php 
include "db.php";
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
 $comment=$_POST['comment'];
$sql="SELECT * from `feedback`";
 $results=$conn->query($sql);
   if($results==true){
     
    $num_rows = mysqli_num_rows($results);
    if($num_rows>0){
    print "<br/> <b style='color:black;border-style: outset;'> Comments:<br/>";
   for ($row_num = 1; $row_num <= $num_rows;  $row_num++) 
   {
        $row = mysqli_fetch_array($results);
         print htmlspecialchars($row["comment"]);
         print "</p>";

   }
   
 $conn -> close();}else{ print "<br/> <b style='color: red'> *Sorry, this service already taken! <br/> Try another one or visit us another time we will message you stay tuned. </b>";
  $conn -> close();}
  }else{
    print "<br/> <b style='color: red'> *Sorry, this service already taken! <br/> Try another one or visit us another time we will message you stay tuned. </b>";
    $conn -> close();
  }

?>   
<?php print ("<h5>Thanks for your feedback</h5><br/>");?>
  
  </body>
</html>
