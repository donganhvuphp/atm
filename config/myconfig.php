<?php
    define('HOST','localhost');
    define('USERNAME','root');
    define('PASS','');
    define('DBNAME','ltmt1k10_atm');

    $conn = mysqli_connect(HOST , USERNAME, PASS , DBNAME);

    //insert , update , delete 
    function execute($sql){
        global $conn ;

        // query
        mysqli_query($conn , $sql);

        //close connect
        mysqli_close($conn);
    }

    //select 
    function executeResult($sql){
        global $conn ;

        // query
        $result = mysqli_query($conn , $sql);
        $list = array();
        while($row = mysqli_fetch_assoc($result)){
            $list[] = $row ;
        }
        //close connect
        mysqli_close($conn);
        return $list ; 
    }
?>