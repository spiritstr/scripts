 <?php 
 		
            // ----------------------- SpiritSTR ----------------------- //
            // if yoy dont want to use the normal version this one will  //
            // only show you the streamers who are online.               //






            $streams = array('STREAM_1','STREAM_2','STREAM_3');
 			$length = count($streams);
 			for ($i = 0; $i < $length; $i++){
            $twitch_api = json_decode(file_get_contents(sprintf('https://api.twitch.tv/kraken/streams/%s',strtolower($streams[$i]))), true);
			if ($twitch_api['stream'] == null){
                "";
            }
            else { echo "Status: <a href='http://twitch.tv/".$streams[$i]."'>Online"."</a><br>";
			$twitch_api = json_decode(@file_get_contents('https://api.twitch.tv/kraken/channels/'.$streams[$i]));
            echo  "Canal: <b><a href='http://twitch.tv/".$streams[$i] ."'>".$streams[$i]."</a></b><br>";
            echo "Name : " .$twitch_api->status; 
            echo "</br>Game : " .$twitch_api->game; 
            echo "</br> Followers : " .$twitch_api->followers."<br><br>";
		} 
    }

 ?>