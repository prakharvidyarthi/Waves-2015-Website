<?php
//makes a link to the database
function f_sqlConnect($user,$pass,$db){
	$link=mysql_connect('localhost',$user,$pass);
	if(!$link){
		die("Could not connect".mysql_error());
	}
	$db_selected=mysql_select_db($db,$link);
	if(!$db_selected){
		die('Can \'t use'.$db.':'.mysql_error());
	}
}
//to preventt from databse ijection attack
function f_clean($array){
	return array_map('mysql_real_escape_string',$array);
}
function checkLogin() {
	//global $jdb;
	
	//Grab our authorization cookie array
	$cookie = $_COOKIE['valid'];
			
	//Set our user and authID variables
	$user = $cookie['user'];
	$authID = $cookie['authID'];
			
	/*
	 * If the cookie values are empty, we redirect to login right away;
	 * otherwise, we run the login check.
	 */
	/*if ( !empty ( $cookie ) ) {
				
		}*/if(empty($cookie)) {
				//Build our redirect
				$url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
				$redirect = str_replace('index_test.php', 'login.php', $url);
				
				//Redirect to the home page
				header("Location: $redirect?msg=login");
				exit;
			}
			
			/*return $results;
		}
	}*/
}

function logout() {
			//Expire our auth coookie to log the user out
			$idout = setcookie('joombologauth[authID]', '', -3600, '', '', '', true);
			$userout = setcookie('joombologauth[user]', '', -3600, '', '', '', true);
			
			if ( $idout == true && $userout == true ) {
				return true;
			} else {
				return false;
			}
		}
function check_events($check){
	$reg_events;
	$i=0;
	if($check['sizzle'] != NULL){
		$reg_events[$i]="Sizzle";
		$i++;
	}
	if($check['dhinchak'] != NULL){
		$reg_events[$i]="Dhinchak";
		$i++;
	}
	if($check['jumele'] != NULL){
		$reg_events[$i]="Jumele";
		$i++;
	}
	if($check['jumele'] != NULL){
		$reg_events[$i]="Jumele";
		$i++;
	}
	if($check['nukkad_natak'] != NULL){
		$reg_events[$i]="Nukkad Natak";
		$i++;
	}
	if($check['skime'] != NULL){
		$reg_events[$i]="Skime";
		$i++;
	}
	if($check['montage'] != NULL){
		$reg_events[$i]="Montage";
		$i++;
	}
	if($check['mezzotint'] != NULL){
		$reg_events[$i]="Mezzotint";
		$i++;
	}
	if($check['reverse_flash'] != NULL){
		$reg_events[$i]="Reverse Flash";
		$i++;
	}
	if($check['time_lapse'] != NULL){
		$reg_events[$i]="Time Lapse";
		$i++;
	}
	if($check['portature'] != NULL){
		$reg_events[$i]="Portature";
		$i++;
	}
	if($check['panorama'] != NULL){
		$reg_events[$i]="Panorama";
		$i++;
	}
	if($check['artathon'] != NULL){
		$reg_events[$i]="Artathon";
		$i++;
	}
	if($check['shutter_island'] != NULL){
		$reg_events[$i]="Shutter Island";
		$i++;
	}
	if($check['just_a_minute'] != NULL){
		$reg_events[$i]="Just A Minute";
		$i++;
	}
	if($check['waves_poetry_slam'] != NULL){
		$reg_events[$i]="Waves Poetry Slam";
		$i++;
	}
	if($check['word_games'] != NULL){
		 $reg_events[$i]="Word Games";
		$i++;
	}
	if($check['indian_rock'] != NULL){
		$reg_events[$i]="Indian Rock";
		$i++;
	}
	if($check['silence_of_the_amps'] != NULL){
		$reg_events[$i]="Silence Of The Amps";
		$i++;
	}
	if($check['the_jukebox'] != NULL){
		$reg_events[$i]="The Jukebox";
		$i++;
	}
	if($check['solonote'] != NULL){
		$reg_events[$i]="Solonote";
		$i++;
	}
	if($check['alaap'] != NULL){
		$reg_events[$i]="Alaap";
		$i++;
	}
	if($check['waves_open_quiz'] != NULL){
		$reg_events[$i]="Waves Open Quiz";
		$i++;
	}
	if($check['the_entertainment_quiz'] != NULL){
		$reg_events[$i]="The Entertainment Quiz";
		$i++;
	}
	if($check['the_vices_quiz'] != NULL){
		$reg_events[$i]="The Vices Quiz";
		$i++;
	}
	if($check['the_lone_wolf'] != NULL){
		$reg_events[$i]="The Lone Wolf";
		$i++;
	}
	if($check['sea_rock'] != NULL){
		$reg_events[$i]="Sea Rock";
		$i++;
	}
	if($check['lexomnia'] != NULL){
		$reg_events[$i]="Lexomnia";
		$i++;
	}
	if($check['contention'] != NULL){
		$reg_events[$i]="Contention";
		$i++;
	}
	if($check['wallstreet_fete'] != NULL){
		$reg_events[$i]="Wallstreet Fete";
		$i++;
	}
	if($check['show_me_the_funny'] != NULL){
		$reg_events[$i]="Show Me The Funny";
		$i++;
	}
	if($check['ratatouille'] != NULL){
		$reg_events[$i]="Ratatouille";
		$i++;
	}
	if($check['rubik_challenge'] != NULL){
		$reg_events[$i]="Rubik Challenge";
		$i++;
	}
	if($check['natyanjali'] != NULL){
		$reg_events[$i]="Natyanjali";
		$i++;
	}
	if($check['fashp'] != NULL){
		$reg_events[$i]="Fash-P";
		$i++;
	}
	if($check['mr_and_ms_waves'] != NULL){
		$reg_events[$i]="Mr And Ms Waves";
		$i++;
	}
	return $reg_events;
}
?>