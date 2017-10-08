<? php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bwea";




//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection

if(mysqli_connect_errno($connd)){
    die("ERROR: could not connect".mysqli_connect_error());
}

?>