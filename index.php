<?php
$conn = mysqli_conn('localhost','root','','bookhub');
if($conn === TRUE){
echo 'yes';
}else{
echo 'no';
}

?>