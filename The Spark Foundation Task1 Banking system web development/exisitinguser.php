<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="responsive.css">
    <title>Bank User</title>
</head>
<body>
    <nav class="navbar background1 h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><span>TSF Bank</span></div>
            <li><a href="bankingsystem.php">Home</a></li>
            <li><a href="#">Existing User</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="money.php">Transfer</a></li>
            <li><a href="registeruser.php">New User</a></li>
        </ul>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <div style="font-family: 'Gabriela', serif;   font-size: 40px;
    text-align: center;
    margin: 20px;">Bank Users</div>
    <div >
       <table>
         <tr>
            <th>User Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Balance</th>
        </tr>
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
        echo "</tr>";
}
echo "</table>";
}
?>
    </table> 
    </div>
    
<footer class="background" style="margin-top: 300px;">
    <p class="text-footer">
        Copyright &copy; 2028 - Basudev Sharma - The Spark Foundation.
    </p>

</footer>
    <script src="resp.js"></script>
</body>
</html>