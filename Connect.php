<?php

$connect = mysqli_connect("localhost","root","voting") or die("Connection failes!");
if ($connect) {
    echo"Connected!";
} 
else {
    echo "Not Connected!";
}
?>