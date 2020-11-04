
    <html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    </head>
    <body>

    <?php 

    if($_SERVER["REQUEST_METHOD"] == "POST") {

    $SERVER_NAME = 'localhost';
    $USER_NAME = 'root';
    $PASSWORD = 'Iam33!';
    $DB_NAME = 'stickersDB';
    $PORT = 3000;
    $mysqlConnection = mysqli_connect(
        $SERVER_NAME,
        $USER_NAME,
        $PASSWORD,
        $DB_NAME,
        $PORT
    );

    if($mysqlConnection){
        echo "connection established";
    } else {
        die("connection failed: ".
         mysqli_connect_error());
    }

    // $brand =$_POST["brand"];
    // echo $brand;

}
    ?>


    <form  method="post" action="/index.php">
       <input type="text" name="brand" />
       <input type='submit' value='submit' name='submit' />
   </form> 
   <h2>WORKING</h2>
   
    </body>
    </html>
