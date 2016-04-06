		  
<?php

        // IN ORDER TO USE THIS CODE YOU NEED A KEY FROM BLIZZARD API!!! //
		   error_reporting(0);
		   $n = 1;
		   $request = file_get_contents('https://kr.api.battle.net/sc2/ladder/61052?locale=ko_KR&apikey=<YOUR KEY HERE>');
		   $request_api = json_decode($request, true);
		   echo "<div class='container'>";
		   	echo "<div class='panel-body'>";
		   	echo "<table style='width:100%' class='table'>";
		   	echo "<tr>";

		   	echo "<td><b>Rank</b></td><td><b>Nick</b></td><td><b>Points</td><td><b>Wins</td><td><b>Loses</b></td>";
		   foreach ($request_api['ladderMembers'] as $players ) {
		   	
		   	echo "</tr><tr>";
		   	echo "<td>".$n++."</td>";
		   	echo "<td>".$players['character']['displayName']."</td>";
			echo "<td>".$players['points']."</td>";	  
		   	echo "<td>".$players['wins']."</td>";
			echo "<td>".$players['losses']."</td>";		
			echo "<td>"."</td>"; 	
		   }
		   echo "</tr>";
		   	echo "</table>";
		   	echo "</div>";
		   	echo "</div>";
 		//}
 		
?>
