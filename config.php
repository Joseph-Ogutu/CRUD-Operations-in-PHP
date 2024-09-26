<?php
/**Database credentials.Assuming you are running MYSQL server with default settings(user 'root' with no password) */
define ('DB_SERVER', 'localhost');
define ('DB_USERNAME', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'demo');


/**Attempt to connect to MYSQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/**check connection */
if ($link === false){
    die("ERROR: could connect." . 
mysqli_connect_error());
}
?>