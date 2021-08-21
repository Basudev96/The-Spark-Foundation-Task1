<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//  echo "hello" ;
if(!$conn){
    die("Could not connect to the database due to the following error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo '<form method ="post" action = "details.php">';
        echo "<td>" . $row["id"]. "</td><td>". $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["gender"] . "</td><td>"  . $row["balance"] . "</td>";
        echo "<td ><a href='details.php?id={$row["id"]}&name={$row["name"]}&message=no' type='button' name='user'  id='users1' >  <span>Transfer</span></a></td>";
        echo "</tr>";
}
echo "</table>";
}
?>