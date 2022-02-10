<?php
$regex="/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
$srt="/Aa@gmail.com/";
if (preg_match($regex,$srt)){
    echo "Email hợp lệ";
}
else{
    echo "Email không hợp lệ";
}




?>