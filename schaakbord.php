<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="2px">
<?php
$i2 = "";
for($i=1;$i<=8;$i++){
    ?>
    <tr>
    <?php
    for($x=1;$x<=8;$x++){
        $i1 = $i.$x;
        $i2 .= "$i1,";
        $checking = explode(',', $i2);
        if($i % 2 == 0){
            if(!colorChange($i1,$checking)){
            ?>
            <td style="background-color:black" height="30px" width="30px"></td>
            <?php
            }
            if(colorChange($i1,$checking)){
            ?>
            <td style="background-color:white" height="30px" width="30px"></td>
            <?php
            }
        }else if($i % 2 != 0){
            if(colorChange($i1,$checking)){
            ?>
            <td style="background-color:black" height="30px" width="30px"></td>
            <?php
            }
            if(!colorChange($i1,$checking)){
            ?>
            <td style="background-color:white" height="30px" width="30px"></td>
            <?php
            }
        }
    }
    ?>
    </tr>
    <?php
}
function colorChange($value,$checkable){
if(in_array($value,$checkable)){
    $actual_position_ = array_search($value,$checkable) + 1;
    if($actual_position_%2==0){
        return true;
    }else{
        return false;
    }
}
}
?>
</table>
</body>
</html>