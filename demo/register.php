<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $check = $_REQUEST['check-password'];

    $ors = [];
    if (empty($email)) {
        $ors['email'] = 'Nhập email vào đây';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ors['email'] = 'Email sai định dạng';
    }
    if (empty($name)) {
        $ors['name'] = 'Nhâp tên vào đây';
    }
    if (empty($password)){
        $ors['password'] = 'Nhâp tên vào đây';
    }
    elseif (!preg_match("/^[_a-zA-Z0-9]{6,}$/",$password)){
        $ors['password']="Mật khẩu từ 6 ký tự trở lên";
        }
    if (empty($check)){
        $ors['check-password']="Xác nhận lại mật khẩu";
    }
    elseif ($password != $check){
        $ors['check-password']="mật khâu không trùng ở trên";
    }
    if (empty($ors)){
        header("location:demo.php");
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>
        <h4>Email</h4>
        <input type="text" name="email" placeholder="Email">
        <p style="color: red"><?php echo $ors['email'] ??"" ?></p>
        <h4>Full name</h4>
        <input type="text" name="name" placeholder="Nhập tên">
        <p style="color: red"><?php echo $ors['name'] ??"" ?></p>

        <h4>Password</h4>
        <input type="password" name="password" placeholder="Password">
        <p style="color: red"><?php echo $ors['password'] ??"" ?></p>

        <h4>Check-Password</h4>
        <input type="password" name="check-password" placeholder= "Check Password">
        <p style="color: red"><?php echo $ors['check-password'] ??"" ?></p>

       <p><button>Register</button></p>
    </label>
</form>
</body>
</html>
