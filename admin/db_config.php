<?php

$hname='localhost';
$uname='root';
$pass='';
$db='skyline-website';

$con = mysqli_connect($hname, $uname, $pass, $db);

if(!$con){
    die('Cannot COnnect Database'.mysqli_connect_errno());
}

function filteration($data){
    foreach( $data as $key => $value ){
     $data[$key]=trim($value);
     $data[$key]=stripcslashes($value);
     $data[$key]=htmlspecialchars($value);
     $data[$key]=strip_tags($value);
    }

    return $data;
}

function select($sql, $values, $dataypes){

    $con = $GLOBALS['con'];

 if($stmt = mysqli_prepare($con, $sql)){
mysqli_stmt_bind_param($stmt,$dataypes, ...$values);
if(mysqli_stmt_execute($stmt)){
    $res = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $res;
}
else{
    mysqli_stmt_close($stmt);
    die('Quesry cnanot be prepared-Select');
}
    }
    else{
        die("Query cannot be executed - Select");
    }
}

?>