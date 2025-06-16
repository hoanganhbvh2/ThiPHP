<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem</title>
</head>

<body>
    <?php
        // $bill=[
        // ["id"=>1,"customer" =>"client A","usage"=>30,"month"=>"6/6/2025","rate"=>3000],
        // ["id"=>2,"customer" =>"client b","usage"=>20,"month"=>"6/6/2025","rate"=>3000],
        // ["id"=>3,"customer" =>"client C","usage"=>40,"month"=>"7/6/2025","rate"=>4000]
        // ];
    // truong hop 1: neu khong co dau hieu tk ==> toan bo danh sach
    // truong hop 2: neu co tk , so sanh cai tim kiem do=> danh sach moi==> table



    ?>
    





    <?php
    if(!isset($_GET["tk"]))  {
          $bill=[
    ["id"=>1,"customer" =>"client A","usage"=>30,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>2,"customer" =>"client b","usage"=>20,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>3,"customer" =>"client C","usage"=>40,"month"=>"7/6/2025","rate"=>4000]
          ];
    ?>
    //table in tat ca ket qua
    <table border=1>
        <tr>
            <th>id</th>
            <th>customer</th>
            <th>Usage</th>
            <th>month</th>
            <th>rate</th>
        </tr>
        <?php foreach($bill as $value){ ?>
        <tr>
            <td><?php echo  $value["id"];?></td>
            <td><?php echo  $value["customer"];?></td>
            <td><?php echo  $value["usage"];?></td>
            <td><?php echo  $value["month"];?></td>
            <td><?php echo  $value["rate"];?></td>

        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    }else{
    $bill=[
    ["id"=>1,"customer" =>"client A","usage"=>30,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>2,"customer" =>"client b","usage"=>20,"month"=>"6/6/2025","rate"=>3000],
    ["id"=>3,"customer" =>"client C","usage"=>40,"month"=>"7/6/2025","rate"=>4000]
          ];
     $bill1=[];     
        foreach($bill as $v){
            if($_GET["tk"]==$v["customer"]||$_GET["tk"]==$v["month"]){
        //  if(strpos($_GET["tk"],$v["customer"])||strpos($_GET["tk"],$v["month"])){
                array_push($bill1,$v);
            }
        }
        ?>
    // in ra ket qua da duoc tim kiem
    <table border=1>
        <tr>
            <th>id</th>
            <th>customer</th>
            <th>Usage</th>
            <th>month</th>
            <th>rate</th>
        </tr>
        <?php foreach($bill1 as $value){ ?>
        <tr>
            <td><?php echo  $value["id"];?></td>
            <td><?php echo  $value["customer"];?></td>
            <td><?php echo  $value["usage"];?></td>
            <td><?php echo  $value["month"];?></td>
            <td><?php echo  $value["rate"];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    }
    ?>
    <form action="timkiem.php" medthod="get">
        <input type="text" name="tk">
        <input type="submit" value="Tim kiem">
    </form>

</body>

</html>