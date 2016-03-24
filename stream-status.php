  <?php 
 			/*      
				
							Code by SpiritSTR https://github.com/spiritstr
							Feel free to modify the way you want, but i would be happy if you
							tweet for @spiritstr saying if this script was useful to you!!!
							just use include for this file where you want to show the streams.

 			*/


 			$streams = array('spiritstr','rockletztv');
 			$streamer = array ('spirit'=>'spiritstr','rock'=>'rockletztv'); 
 			$length = count($streams);
 			 for ($i = 0; $i < $length; $i++){
            $twitch_api = json_decode(@file_get_contents('https://api.twitch.tv/kraken/channels/'.$streams[$i])); 
            echo "Name : " .$twitch_api->status; 
            echo "</br>Game : " .$twitch_api->game; 
            echo "</br> Followers : " .$twitch_api->followers;
			$json_array = json_decode('$twitch_api');
			if ($json_array['stream'] == null)
			{ ?>
			<br>OFFLINE
			<br>
			<br>
			<?php } else { ?>
			<br>ONLINE
			<br>
			<br>
			<?php }    
		}

 ?>
