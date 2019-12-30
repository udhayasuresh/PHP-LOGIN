 <?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'pass';
$db = mysqli_connect ($db_hostname, $db_username,$db_password,$db_name);
if (mysqli_connect_error($db)) 
{
echo "Database connection could not be established!";
exit();
}
?>