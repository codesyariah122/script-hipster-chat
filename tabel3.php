<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "CREATE TABLE user( ".
       "id INT(10) NOT NULL AUTO_INCREMENT, ".
       "nick varchar(50) COLLATE latin1_general_ci NOT NULL, ".
	   "email varchar(50) NOT NULL, ".
	   "pass varchar(50), ".
       "PRIMARY KEY ( id )); "; 

mysql_select_db( 'chat' );

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>