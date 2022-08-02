<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name ="viewport" content="width-device-width, initial-scale.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<!-- <div class="navigation-container">
<div class="navigation-content">
</div>
</div> -->


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



$sql = "SELECT * FROM products";
$reqult = mysqli_query( $conn, $sql);

?>
<div class="ab">
<h1 style="color: white; text-align: left;">Products</h1>
</div>
<table border='3'>
<div class="aa">
<tr>
        <td style="color: white; width:40px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Id</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Name</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Code</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Price</td>
        <td style="color: white; width:250px; text-align: center; height:40px; font-weight: 900; font-weight: bold;">Image</td>
        
        
</tr>
</div>

<?php

if( mysqli_num_rows($reqult) > 0 ){

    while( $row = mysqli_fetch_assoc($reqult) ){
        ?>

            <tr>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $row['id']; ?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $row['name'];?></td>
                    <td style="color: white; text-align: center; height:40px;"><?php echo $row['code']; ?></td>
                    <td style="color: white; text-align: center; height:40px;">Rs. <?php echo $row['price'];?> /-</td>




                   
                    <td style="color: white; text-align: center; height:40px;">
                    <div class="col-md-4 card" style= "padding:0">
                    
                    <img src=" <?php echo $row['image']; ?>" class="card-img-top" alt="..."></td>
                    </div>
                    
    
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