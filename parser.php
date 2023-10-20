<?php
error_reporting(0);
$smtps = file('C:\Program Files (x86)/Redrum/smtps.txt');
$InParsed = array();
$alreadyin = file('C:\Program Files (x86)/Redrum/parsedt.txt');
foreach($alreadyin as $parseed){
    $parseed = trim($parseed);
    $InParsed[$parseed] = $parseed;
}

$counting = 0;
foreach($smtps as $test){
    $counting++;
}
echo "\e[36;1m\r\n";
echo "Loaded $counting SMTPs\n";
echo "\e[0m \r\n";
$date = new DateTime();
$added = 0;
$skipped = 0;

foreach($smtps as $smtp){
    $getSMTP = list($hostname, $port, $username, $password, $ssl) = explode(' ', $smtp);
	
if (empty($ssl))
{
if ($port==465) { $ssl=1;} else {$ssl=2;}
}
    if(isset($InParsed[$hostname.":".$username])){
        $skipped++;
		echo "\e[91m \r\n";
        echo "Skipping ".$hostname." already parsed \n";
        continue;
    }
    else{
        file_put_contents('C:\Program Files (x86)/Redrum/parsedt.txt', $hostname.":".$username."\n", FILE_APPEND);
    }
	
	
	#DEBUG => CAN BE CHANGED
    #SMTP_ATTACHMENT => CAN BE CHANGED
    #SMTP_FROM => CAN BE CHANGED
    #SMTP_SUBJECT => CAN BE CHANGED
    #SMTP_PRIORITY => CAN BE CHANGED
    #SMTP_SSL => CAN BE CHANGED
    #SMTP_LIMIT => CAN BE CHANGED
	
	
	
	#      EDIT HERE  ||
	#                 ||
    #                 ||
	#                \  /
	#                 \/
	
#--------------------------------------------------------------------------------------------------------------------------------------------------#	
	
    $smtp = "
	'$added' => array(
        'DEBUG' => 0,	
        'SMTP_HOST' => '$hostname',
        'SMTP_USER' => '$username',
        'SMTP_PASSWORD' => '".trim($password)."',
        'SMTP_PORT' => $port,
        'SMTP_SENDER' => '$username',		
        'SMTP_FROM' => 'put name here',
        'SMTP_SUBJECT' => 'put subject here',
        'SMTP_PRIORITY' => 2,
        'SMTP_SSL' => $ssl,
    ),";
	
	
#--------------------------------------------------------------------------------------------------------------------------------------------------#
	
	
    file_put_contents('C:\Program Files (x86)/Redrum/parsed.txt', $smtp ,FILE_APPEND);
    $added++;
}
echo "\e[36;1m";
echo 'Successfully added:';
echo "\e[0;97m '$added'";
echo "\e[91m Skipped:";
echo "\e[0;97m '$skipped'\r\n";
echo "\e[0;97m";


?>
