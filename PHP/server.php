<?php 
$HOSTNAME='localhost';
$USERNAME='csdb29';
$PASSWORD='csdb29';
$DATABASE='csdb29';
$check=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($check)
{
    echo "Connection successful";
}
else {
    die(mysqli_error($check));
}
?>