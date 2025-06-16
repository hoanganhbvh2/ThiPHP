<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
</head>

<body>
    <?php
     if(isset($_GET["user"])){
        echo "xin chao:",$_GET["user"];
     }
    ?>
    <?php
// Trường 
// id int
// customer string
// usage int
// month string
// rate int
    $bill=[
    ["id"=>1,"customer" =>"client A","usage"=>30,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>2,"customer" =>"client b","usage"=>20,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>3,"customer" =>"client C","usage"=>40,"month"=>"7/6/2025","rate"=>4000]
    ];   
        ?>
        <h2>Bill thanh toan </h2>
        <a href="timkiem.php">Tim kiem </a>
    
    
    <table border=1>
        <tr>
            <th>id</th>
            <th>customer</th>
            <th>Usage</th>
            <th>month</th>
            <th>rate</th>
            <th>total</th>
            <th>total1</th>
        </tr>
        <?php foreach($bill as $value){ ?>
        <tr>
            <td><?php echo  $value["id"];?></td>
            <td><?php echo  $value["customer"];?></td>
            <td><?php echo  $value["usage"];?></td>
            <td><?php echo  $value["month"];?></td>
            <td><?php echo  $value["rate"];?></td>
            <?php
            $total=$value["usage"]*$value["rate"];
            $total1=$total*(1-test($value["usage"]))
            ?>
            <td><?php echo $total ;?></td>
            <td><?php echo $total1 ;?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    function test($u){
        if($u>=300){
            return 0.2;
        }
        elseif($u<300&&$u>=100){
            return 0.1;
        }
        else{
            return 0.05;
        }
    }
    ?>



</body>

</html>