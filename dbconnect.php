<?php


// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

/*define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'dbtest');*/

define('DBHOST', 'us-cdbr-iron-east-04.cleardb.net');
define('DBUSER', 'b4492e23c1e6a8');
define('DBPASS', 'c83533e1');
define('DBNAME', 'heroku_3b0836e36c3237d');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME);


/*$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = mysql_connect($server,$username,$password);
$dbcon = mysql_select_db($db);
//$conn = new mysqli($server, $username, $password, $db);*/

if ( !$conn ) {
	die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
	die("Database Connection failed : " . mysql_error());
}

?>
