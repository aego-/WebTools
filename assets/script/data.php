<?php
// localización
include("geoiploc.php");
$ip = $_SERVER["REMOTE_ADDR"];
// obteniendo 'user_agent':
if ( isset( $_SERVER ) ) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
} else {
    global $HTTP_SERVER_VARS;
    if ( isset( $HTTP_SERVER_VARS ) ) {
        $user_agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
    } else {
        global $HTTP_USER_AGENT;
        $user_agent = $HTTP_USER_AGENT;
      }
  }
//
function getOS() {
    global $user_agent;
    $os_array =  array(
                        '/windows nt 10/i'      =>  'Windows 10',
                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                        '/windows nt 6.2/i'     =>  'Windows 8',
                        '/windows nt 6.1/i'     =>  'Windows 7',
                        '/windows nt 6.0/i'     =>  'Windows Vista',
                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                        '/windows nt 5.1/i'     =>  'Windows XP',
                        '/windows xp/i'         =>  'Windows XP',
                        '/windows nt 5.0/i'     =>  'Windows 2000',
                        '/windows me/i'         =>  'Windows ME',
                        '/win98/i'              =>  'Windows 98',
                        '/win95/i'              =>  'Windows 95',
                        '/win16/i'              =>  'Windows 3.11',
                        '/macintosh|mac os x/i' =>  'Mac OS X',
                        '/mac_powerpc/i'        =>  'Mac OS 9',
                        '/linux/i'              =>  'Linux',
                        '/debian/i'             =>  'Debian',
                        '/linux mint/i'         =>  'Linux Mint',
                        '/gentoo/i'             =>  'Gentoo',
                        '/elementary os/i'      =>  'Elementary OS',
                        '/kubuntu/i'            =>  'Kubuntu',
                        '/ubuntu/i'             =>  'Ubuntu',
                        '/fedora/i'             =>  'Fedora',
                        '/freebsd/i'            =>  'FreeBSD',
                        '/openbsd/i'            =>  'OpenBSD',
                        '/netbsd/i'             =>  'NetBSD',
                        '/sunos/i'              =>  'Solaris',
                        '/iphone/i'             =>  'iPhone',
                        '/ipod/i'               =>  'iPod',
                        '/ipad/i'               =>  'iPad',
                        '/android/i'            =>  'Android',
                        '/blackberry/i'         =>  'BlackBerry',
                        '/windows phone/i'      =>  'Windows Phone',
                        '/nintendo/i'           =>  'Nintendo',
                        '/webos/i'              =>  'Mobile'
                      );
    //
    $os_platform = "Unknown OS Platform";
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}
//
function getBrowser() {
    global $user_agent;
    $browser_array = array(
                        '/mobile/i'     =>  'Handheld Browser',
                        '/msie/i'       =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Google Chrome',
                        '/edge/i'       =>  'Microsoft Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/crios/i'     	=>  'Chrome Mobile',
                        '/vivaldi/i'	=>	'Vivaldi',
                        '/chromium/i'	=>	'Chromium',
                        '/iceweasel/i'	=>	'Iceweasel',
                        '/lynx/i'		=>	'Lynx'
                      );
    $browser = "Unknown Browser";
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }
    }
    return $browser;
}
// obteniendo ip real
function getRealIP(){
    if (isset($_SERVER["HTTP_CLIENT_IP"])){
        return $_SERVER["HTTP_CLIENT_IP"];
    } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
        	  return $_SERVER["HTTP_X_FORWARDED_FOR"];
      } elseif (isset($_SERVER["HTTP_X_FORWARDED"])){
        		return $_SERVER["HTTP_X_FORWARDED"];
    	} elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){
          		  return $_SERVER["HTTP_FORWARDED_FOR"];
    	  } elseif (isset($_SERVER["HTTP_FORWARDED"])){
        			return $_SERVER["HTTP_FORWARDED"];
    		} else{
    			return $_SERVER["REMOTE_ADDR"];
    		  }
}
// Iniciando ejecución de funciones:
$user_os        =   getOS();
$user_browser   =   getBrowser();
date_default_timezone_set('America/Mexico_City');
$date_Mex = date('jS F Y');
$time_Mex = date('h:i:s A');
$real_user_ip = getRealIP();
?>