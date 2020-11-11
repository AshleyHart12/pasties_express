<?php

    function find_all_stickers(){
        global $db;

        $sql = "SELECT * FROM stickers ";
        $result = mysqli_query($db, $sql);
        return $result;
    }

?>