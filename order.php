<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navigation-container">
<div class="navigation-content">
</div>
</div>


<style>

.aa {

margin-left: 200px;
margin-top:  100px;

}

.ab {

    margin-left: 200px;
margin-top:  150px;

}

</style>



<?php 



$sql = "SELECT * FROM payment_method";
$reqult = mysqli_query( $conn, $sql);

?>
<div class="ab">
<h1 style="color: white; text-align: left;">Payment Details</h1>
</div>
<table border='3'>
<div class="aa">
<tr>
        <td style="color: white; width:40px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Card Name</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Card Number</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Expirey Month</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Expirey year</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">payment</td>
        
        
</tr>
</div>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $payment_method = mysqli_fetch_assoc($reqult) ){
        ?>

            <tr>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $payment_method['cardname']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $payment_method['cardnumber']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $payment_method['expmonth']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $payment_method['expyear']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $payment_method['rupee']; ?></td>
                    
            </tr>

        <?php
    }

}else{
    echo '0 results';
}
?>

</table>

</body>
</html>