<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
$result=null;
$number1=null;
$number2=null;
$error_string=0;
if (isset($_POST['oper'])) {
$number1=$_POST['num1'];
$number2=$_POST['num2'];
$operator=$_POST['oper'];
if(is_numeric($number1) && is_numeric($number2)):

    switch($operator){
        case "add":
            $result=$number1+$number2;
            break;
        case "sub":
            $result=$number1-$number2;
            break;
        case "div":
            if($number2==0) {
                $result="Error";
                break;
            }
            else{
            $result=$number1/$number2;
            break;
            }
        case "mult":
            $result=$number1*$number2;
            break;
        case "clear":
            $number1='';
            $number2='';
            $result='';
            break;
    }
else :
    $error_string=1;
endif;
}
?>


<body>
    <div class="main">
        <form action="" method="POST" id="hi">
            <h2>Online PHP Calculator</h2>
            <input type="text" name="num1" requierd placeholder="First Number" name='name'
                value="<?php echo $number1; ?>">
            <?php  if($error_string==1){
                        echo "<span style='color:red;font-weight:bold;',font>*</span>";
            }
                ?>
            <br>
            <br>
            <input type="text" name='num2' requierd placeholder="Second Number" value="<?php echo $number2; ?>">
            <?php  if($error_string==1){
                        echo "<span style='color:red;font-weight:bold;',font>*</span>";
            }
                ?>
            <br>
            <br>
            <input readonly="readonly" type="text" name='result' requierd placeholder="Result"
                value="<?php  echo $result ?>">
            <br>
            <br>
            <button name='oper' value="add">ADD</button>
            <button name='oper' value="sub">Subtract</button>
            <button name='oper' value="mult">Multiply</button>
            <button name='oper' value="div">Divide</button>
            <button name='oper' value="clear">Clear</button>
            <?php  if($result=="Error"){
                        echo "<p style='color:white;font-weight:bold;',font>Can not Divide By Zero</p>";
            }
                ?>
        </form>
    </div>
</body>

</html>