<?php 
 echo "<table><tr>";
 for($i=0;$i<=100;$i++)
 {
	 if($i==0)
	 {
		 echo "<th></th>";
	 }
		 else
		 {
			 echo "<td><b>$i</b></td>";
		 }
	 }
	 echo "</tr>";
	 for($i=1;$i<=100;$i++)
	 {
		 echo "<tr>";
		 echo "<td>$i</td>";
		 for($j=1;$j<=100;$j++)
		 {
			 $mult = $i*$j;
			 echo "<td>$mult</td>";
		 }
		 echo "</tr>";
	 }
	 echo "</table>";
		
?> 