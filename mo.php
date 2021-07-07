
<?php

$con=new mysqli("localhost","root","","mov");
$stmt =$con->prepare("select * from mov_info");
$stmt ->execute();
$result=$stmt ->get_result();
while($row = $result ->fetch_assoc()){

	echo "<tr><td>".$row['id']."</td><td>".$row['forward']."</td><td>".$row['left']."</td><td>".$row['stop']."</td><td>".$row['right']."</td><td>".$row['back']."</td><td>";
}

?>


<?php
.$_POST["forward"];
.$_POST["left"];
.$_POST["right"];
.$_POST["stop"];
.$_POST["backward"];



$con=new mysqli("localhost","root","","mov");
$stmt =$con->prepare("Update From mov_info('forward,left,stop,right,back') VALUES(?,?,?,?,?)");
$stmt ->bind_parm("bbbbb"),$stmt);
$stmt ->execute();
echo "Done";
?>
