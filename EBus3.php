<!DOCTYPE html>
<html>
<body>
    <title>Receipt</title>
<!--  //Starting the session to get the session variable from last page-->
<h1>Thank You For Your Purchase!</h1>

    <?php

session_start();
$fullNameValue = $_POST['txtName'];
echo "Name: ".$fullNameValue.".";

$totalValue = $_POST['txtTotal'];
echo "Your Subtotal is $".$totalValue.".";

?>

</body>
</html>


