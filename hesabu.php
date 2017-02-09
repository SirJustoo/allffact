<?php 

// Display Multiplication Table 

// default values 
$multicand=3; 
$from=1; 
$to=15; 

// get values - form post 
if($_POST['action']=="go"){ 
$multicand=$_POST['multicand']; 
$from=$_POST['from']; 
$to=$_POST['to']; 
$commutative=0; 
if(isset($_POST['comm'])){ 
$commutative=1; 
} 
$mtable=array(); 
$mtable=mtable($multicand,$from,$to,$commutative);

echo" 
<html> 
<style> 
table td{ 
font-family: arial; 
font-size: 20px; 
} 
</style> 
<body> 
<table cellspacing='15'> 
"; 
$count=0; 
for($q=0; $q<count($mtable); $q++){ 
   if($commutative==1){ 
   echo "<tr><td>".$mtable[$count]."</td>"; 
   $count++; 
   echo "<td>".$mtable[$count]."</td></tr>"; 
   $count++; 
   } 
   else{ 
   echo "<tr><td>".$mtable[$count]."</td></tr>"; 
   $count++; 
   } 
} 
echo "</table>"; 

      $ch1=""; 
      if($commutative==1){ 
      $ch1="checked"; 
      } 
} 
?> 

<br /><br /> 
<form method="post"> 
<input type="hidden" name="action" value="go">
Multicand: <input type="text" name="multicand" value="<?=$multicand?>"><br /> 
From: <input type="text" name="from" value="<?=$from?>"><br /> 
To: <input type="text" name="to" value="<?=$to?>"><br /> 
<input type="checkbox" name="comm" <?=$ch1?> > Show Commutative<br /><br />
<input type="submit" name="submit" value="Show Table">
</form> 
</body> 
</html> 

<?php 
// Multiplication Table Function 
function mtable($multicand, $from, $to, $commutative){ 
$mtable=array(); 
for($x=$from; $x<=$to; $x++){ 
$mtable[]=$multicand." X ".$x." = ".$multicand*$x;
if($commutative){ 
$mtable[]=$x. " X ".$multicand." = ".$x*$multicand;
} 
} 
return $mtable; 
} 
?>https://github.com/SirJustoo/factwtf/blob/master/calculator.html,
