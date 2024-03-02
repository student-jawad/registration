 <?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database_project";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if ($connect)
{
    echo "connection ok";
}
else
{
    echo "connection failed".mysqli_connect_error();
}

?> 