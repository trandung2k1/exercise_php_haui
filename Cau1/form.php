<?php
$err= '';
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $password = $_POST["password"];
   $patternPass = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
   if(empty($password) || empty($name)){
        $err = 'Tên hoặc mật khẩu không được để trống';
   }else{
        if(!preg_match($patternPass, $password)){
            $err = "Mật khẩu không hợp lệ";
        }else{
            $msg = "Dữ liệu hợp lệ";
        }
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cau1</title>
</head>
<body>
    <div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
           <div> 
                <lable>Tên đăng nhập: </lable>
                <input name="name" autocomplete="off">
            </div>
            <div>
                <lable>Mật khẩu: </lable>
               <input name="password" autocomplete="off">
            </div>
            <button type="submit">Đăng nhập</button>
           <input type="reset" name="Reset" value="Reset" tabindex="50">
        </form>
        <h1><?php echo $err;?></h1>
        <h1><?php echo $msg;?></h1>
    </div>
</body>
</html>