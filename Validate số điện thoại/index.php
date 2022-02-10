<?php
$regex="/^[(]{1}+[0-9]{2}+[)]{1}+[-]{1}+[(]{1}+[0]{1}+[0-9]{9}+[)]{1}$/";
$str='(84)-(0965884200)';
if (preg_match($regex,$str)){
    echo "Định dạng đúng";
}
else{
    echo "Định dạng sai";
}