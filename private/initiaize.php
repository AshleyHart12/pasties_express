<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "Iam33!");
define("DB_NAME", "stickers");

ob_start();

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

  function confirm_db_connect(){
    if(mysqli_connect_errno()) {
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
      }
  }

//   function error_404(){
//     header($_SERVER["SERVER_PROTOCOL"] . "404 Not found");
//     exit();
// }

// function error_500(){
//     header($_SERVER["SERVER_PROTOCOL"] . "500 Internal Server Error");
//     exit();
// }

  require_once('query_functions.php');

$db = db_connect();


?>