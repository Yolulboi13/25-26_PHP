<html>
<head>
    <title>App App - Kablam</title>
</head>
<body>
<h1>See your information below:</h1>

Name:<?php echo $_GET["name"];?><br>
Email:<?php echo $_GET["email"];?><br>
Message:<?php echo $_GET["message"];?><br>

<?php
// Variables start with a $
// Data types are automatically assigned

$babysFirstVariable = 5;
$babysSecondVariable = "Dojyan";

$num1 = 1;
$num2 = 2;

// Conditionals (if/else/else if)
if($num1>$num2){
    echo "num1 is bigger";
}else{
    echo "num2 is bigger";
}

?>

</body>
</html>