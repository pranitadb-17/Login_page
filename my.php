  


<?php
include "config.php";

if(isset($_POST['but_submit'])){

$uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
$password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

 $sql_query = "select count(*) as cntUser from user_details where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];
        if($count > 0){

      echo "  Hello ",$uname;
      echo "<br>";
      echo "\n Welcome to PCCOER Dashboard !!!";
        //  header(" Location:login.html");
          }
          else{
            echo nl2br("  Invalid username and password. \r\n Please enter correct credentials.");
        }

    }

}
?>