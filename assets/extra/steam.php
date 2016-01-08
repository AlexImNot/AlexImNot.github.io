<?php
    $steamid64 = "76561198070618780";
    $apikey = "F108FAE064897633C6F73F83EF190B9E";

    $str_url_profile='http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$apikey.'&steamids='.$steamid64;

	$str_content=file_get_contents($str_url_profile);
	if($str_content==false) {
		$str_error='no response from server';
	} else {
		$str_json=json_decode($str_content,true);

		foreach($str_json['response']['players'] as $var_item) {
			$str_name=$var_item['personaname'];
			$str_realname=$var_item['realname'];
			$str_avatar=$var_item['avatarfull'];
			$num_persona=$var_item['personastate'];
			$num_visible=$var_item['communityvisibilitystate'];
			$str_steamid=$var_item['steamid'];
			$str_game=$var_item['gameextrainfo'];
		}
	}
?>