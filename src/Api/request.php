<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> Process the RequestButton.vue form </title>
  </head>
  <body style=' Text-align:center;color:#6d3572;' >
  
  <?php
   print ("<h2 style='text-align:center '>Happy Moments</h2>");
 
   
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
 $servicename=$_POST['servicename'];
 $category=$_POST['category'];
$sql="SELECT * from `$category` where `message`='$servicename'";
 $results=$conn->query($sql);
   if($results==true){
     
    $num_rows = mysqli_num_rows($results);
    if($num_rows>0){
    print "<br/> <b style='color:green'> Congratulations,<br/> This service availabe now . </b>";
   for ($row_num = 1; $row_num <= $num_rows;  $row_num++) 
   {
        $row = mysqli_fetch_array($results);
     print "<p> your service data are " . "<br/> <b>Name: </b>";
         print htmlspecialchars($row["message"]);
         print "<br/> <b> Price: </b>";
           print htmlspecialchars($row["price"]);
         print "<br/> <b> Location: </b>";
         if($row["location"]!=""){
           print htmlspecialchars($row["location"]);}
           else {print "This service doesnt has a location.";}
           print "<br/> <b> Capacity: </b>";
           print htmlspecialchars($row["capacity"]);
           
         print "</p>";

   }
   $sql="DELETE from `$category` where `message`='$servicename'";
 $results=$conn->query($sql);
 $conn -> close();}else{ print "<br/> <b style='color: red'> *Sorry, this service already taken! <br/> Try another one or visit us another time we will message you stay tuned. </b>";
  $conn -> close();}
  }else{
    print "<br/> <b style='color: red'> *Sorry, this service already taken! <br/> Try another one or visit us another time we will message you stay tuned. </b>";
    $conn -> close();
  }
?>
    <?php

// Get form data values
$servicename=$_POST['servicename'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$category=$_POST['category'];


// Return the results to the browser in a table

    ?>
    <h4> Your submited: </h4>
 
    <p /> <p />
    
      <table border = "border" align = "center">
      <caption> <?php print ("Your information "); ?> </caption>
      <tr>
        <th> Information </th>
        <th> your submitted </th> 
      </tr>
      <tr align = "center">
        <td> Firstname </td>
   
        <td> <?php print ("$firstname"); ?> </td>
        </td>
      </tr>
      <tr align = "center">
        <td> Lastname </td>
   
        <td> <?php print ("$lastname"); ?> </td>
        </td>
      </tr>
      <tr align = "center">
        <td> Email </td>
        <td> <?php print ("$email"); ?> </td>
   
        </td>
        </tr>
        <tr align = "center">
        <td> Phone </td>
        <td> <?php print ("$phone"); ?> </td>
   
        </td>
        </tr>
        <tr align = "center">
        <td> Service </td>
        <td> <?php print ("$servicename"); ?> </td>
   
        </td>
        </tr>
        <tr align = "center">
        <td> Category </td>
        <td> <?php print ("$category"); ?> </td>
   
        </td>
        </tr>
     

    </table>
<?php print ("<h5 style='float:right'>See you soon</h5><br/>");?>
  
  </body>
</html>
