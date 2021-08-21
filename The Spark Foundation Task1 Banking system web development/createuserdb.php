<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "banking";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Could not connect to the database due to the following error: ".mysqli_connect_error());
    }    
    if(isset($_POST['name'],$_POST['email'],$_POST['balance'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender = $_POST['gender'];
        $balance=$_POST['balance'];
        $phone = $_POST['phone'];
        $acc = rand(100000,1000000);
        $sql="INSERT INTO `users` (`name`,`email`,`gender`,`phone`,`balance`,`account`) VALUES ('$name','$email','$gender','$phone','$balance','$acc')";
        $result=mysqli_query($conn,$sql);
        if($result){
                     ?>
        <script>
            alert("Thanks for your response..!!");
            window.location.replace("bankingsystem.php");
        </script>
        <?php
        }
    }else{
        ?>
        <script>
            alert("Please try again ");
        </script>
        <?php
    }  

?>