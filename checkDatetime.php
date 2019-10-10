<?php
    $var = "2016-02-29 00:02:03"; // correct date: leap year
    $var = "2017-02-29 00:02:03"; // wrong date
    $var = "2016-02-28 00:02:03"; // correct time
    $var = "2016-02-28 60:02:03"; // wrong time
    $var = "2016-02-28 24:02:03"; // wrong time
    $var = "2016-02-28 00:02:03"; // correct time
    $var = "2016-02-28 23:02:03"; // correct time
    
    
    //$var = "2016-02-28"; // inputdate
    
    $check=true;

    /* BAD 	$regex = '/^.{19}$/';

	// regex with leap year: ovvero considera anche l'anno bisestile: 2016-02-29, 2014-02-29	
	
	primo carattere: $regex = '/^';
	data yyyy-mm-dd con leap year: $regex .= "(?:(?:(?:(?:(?:[1-9]\d)(?:0[48]|[2468][048]|[13579][26])|(?:(?:[2468][048]|[13579][26])00))(-)(?:0?2\1(?:29)))|(?:(?:[1-9]\d{3})(-)(?:(?:(?:0?[13578]|1[02])\2(?:31))|(?:(?:0?[13-9]|1[0-2])\2(?:29|30))|(?:(?:0?[1-9])|(?:1[0-2]))\2(?:0?[1-9]|1\d|2[0-8])))))";
	orario 00-24 : 00-59 : 00-59 ->	$regex .= '\s([0-1][0-9]|2[0-3])\:[0-5][0-9]\:[0-5][0-9]';
	fine: $regex .= '$/';
	
	^(?:(?:(?:(?:(?:[1-9]\d)(?:0[48]|[2468][048]|[13579][26])|(?:(?:[2468][048]|[13579][26])00))(-)(?:0?2\1(?:29)))|(?:(?:[1-9]\d{3})(-)(?:(?:(?:0?[13578]|1[02])\2(?:31))|(?:(?:0?[13-9]|1[0-2])\2(?:29|30))|(?:(?:0?[1-9])|(?:1[0-2]))\2(?:0?[1-9]|1\d|2[0-8])))))\s([0-1][0-9]|2[0-3])\:[0-5][0-9]\:[0-5][0-9]$
	La regex richiede il carattere di escape \ per il "\"
	*/
	$regex = '/^(?:(?:(?:(?:(?:[1-9]\\d)(?:0[48]|[2468][048]|[13579][26])|(?:(?:[2468][048]|[13579][26])00))(-)(?:0?2\\1(?:29)))|(?:(?:[1-9]\\d{3})(-)(?:(?:(?:0?[13578]|1[02])\\2(?:31))|(?:(?:0?[13-9]|1[0-2])\\2(?:29|30))|(?:(?:0?[1-9])|(?:1[0-2]))\\2(?:0?[1-9]|1\\d|2[0-8])))))\\s([0-1][0-9]|2[0-3])\\:[0-5][0-9]\\:[0-5][0-9]$/';
	
	if( !preg_match($regex, $var ) ){ 
     $errorMsgs[]='Invalid date format. '.$var.' instead of yyyy-mm-dd hh:mm:ss';// - '.$regex;
     $check=false;
    } else {
        echo("I feel good");
    }
    
    if($check) return $var;
    echo("<pre>"); print_r($errorMsgs); echo("</pre>");
    exit();
?>
