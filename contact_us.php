
<?php
$isinserted=false;
if(isset($_POST['name'])){
    $db_hostname="localhost";
    $db_username="root";
    $db_password="";
    $db_name="tour";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password);
    if(!$conn)
    {
        die("Connection to data base failed due to " . mysqli_connect_error());
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="INSERT INTO `tour`.`contact`(`Name`,`Email`,`Phone`,`Subject`,`Message`) values ('$name','$email','$phone','$subject','$message')";
    $result=mysqli_query($conn,$sql);
    if($conn->query($sql) == true){
        $isinserted = true;
      }else{
        echo "ERROR : $sql <br> $con->error";
      }
    echo "We will contact you soon";
    $conn->close();
    }
?>
