<?php
$sum = 1;
$err = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = (int)$_POST['x'];
    if(empty($x)) {
        $err = "Không có số n";
    }else{
        if($x < 0){
        $err ="Du lieu phai lon hon 0";
    }else{
            $gt = 1;
            for ($i = 1; $i <= $x; $i++) {
                $gt *= $i;
                $sum += ($i * $x) / $gt;
            }
            $sum  = round($sum, 6);
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
    <title>Cau2</title>
</head>
<body>
    <div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
           <div> 
                <lable>Nhap so n: </lable>
                <input name="x" autocomplete="off">
            </div>
            <div>
                <lable>Ket qua bieu thuc: </lable>
               <input type="text" value="<?php echo $sum;?>">
            </div>
            <button>Tinh</button>
            <h1><?php echo $err;?></h1>
        </form>
    </div>
</body>
</html>