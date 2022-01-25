<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อ2</title>
</head>
<body>
    <?php
    $salary = "60000";
    echo "เงินเดือน " .$salary ." บาท";
    echo "<br>";
    if($salary<=10000){
        $bonus= ($salary *300/100);
        echo "โบนัส  " .$bonus ." บาท";
   } else if($salary>=50000){
       $bonus= ($salary*200/100);
       echo "โบนัส  " .$bonus ." บาท";
   }else{
       $bonus=($salary*100/100);
       echo "โบนัส " .$bonus ." บาท";
   }
   $avg=$salary+$bonus;
   echo "<br>รายรับสุทธิ = ".$avg." บาท";

    ?>
    
</body>
</html>