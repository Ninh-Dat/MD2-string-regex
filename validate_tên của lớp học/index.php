<?php
$regex="/^[APC]{1}+[0-9]{4}+[GHIKML]{1}$/";
$str='P1236K';
if (preg_match($regex,$str)){
    echo "Định dạng đúng";
}
else{
    echo "Định dạng sai";
}