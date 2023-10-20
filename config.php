<?php
#
#   																				        ▄▄▄▄▄▄▄▄      
#██████████████████████████████████▀█												  █   ▄██████████▄    
#█─▄▄▄─█─▄▄─█▄─▀█▄─▄█▄─▄▄─█▄─▄█─▄▄▄▄█												 █▐   ████████████    
#█─███▀█─██─██─█▄▀─███─▄████─██─██▄─█												 ▌▐  ██▄▀██████▀▄██   
#▀▄▄▄▄▄▀▄▄▄▄▀▄▄▄▀▀▄▄▀▄▄▄▀▀▀▄▄▄▀▄▄▄▄▄▀												▐┼▐  ██▄▄▄▄██▄▄▄▄██   
 $CONFIG=26;/*							    										▐▄▐████ ▀▐▐▀█ █ ▌▐██▄ 
#																					  █████          ▐███▌
# 											 █▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█					 █▀▀██▄█ ▄   ▐ ▄███▀ 
#											 █ CLIENT.REDRUM.SU █					  █  ███████▄██████   
#											 █▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█					     █████████▐▌██▌   
#																					     ▐▀▐ ▌▀█▀ ▐ █     
#																							   ▐    ▌     
▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
*/
#                               █▄▄ ▄▀█ █▀ █ █▀▀   █▀ █▀▀ ▀█▀ ▀█▀ █ █▄░█ █▀▀ █▀
#                               █▄█ █▀█ ▄█ █ █▄▄   ▄█ ██▄ ░█░ ░█░ █ █░▀█ █▄█ ▄█

$settings['LETTER']        = "letter.txt"; // LETTER FILE NAME, EXTENSION CAN BE CHANGED TO HTML IF YOU PREFER THAT
$settings['TIMEZONE']      = "Europe/Stockholm"; // YOU CAN CHANGE THE TIME ZONE. https://redrum.su/client/timezone
$settings['DATE']          = "d/m";   // ALL CODES HERE https://redrum.su/client/home?page=basic#date
$settings['SCHEDULAR']     = ""; // 2 hours / 30 minutes / 1 day / tomorrow / next monday.. LEAVE EMPTY TO DISABLE
$settings['SMTP_ORDER']    = "inorder"; // SETS HOW THE MAILER SELECTS SMTPS EX: RANDOM / INORDER
$settings['SMTP_START']    = 0;  // SELECT WHICH SMTP TO START SENDING WITH IF YOU'RE SENDING INODER
$settings['ADD_DAYS']      = 1;  // ADD DAYS TO DATE AND CALL IT WITH %DATE2%. YOU CAN SET THE FORMAT ABOVE
$settings['HTML_MESSAGE']  = 1;  // IF THE MESSAGE IS IN HTML OR PLAIN TEXT 1 => HTML, 0 =>PLAIN
$settings['MINIFY_HTML']   = 1;  // WILL MINIFY THE HTML LETTER TO SAVE DATA AND REDUCE THE STRESS ON THE SMTP
$settings['SLEEP']         = 0;  // DELAY BETWEEN EMAILS IN SECONDS (HIGHER IS BETTER)
$settings['RANDOMDELAY']   = 0;  // RANDOM DELAY INBETWEEN EMAILS (UP TO 9 SECS) 1 => ENABLE, 0 => DISABLE
$settings['COOLOFF_LIMIT'] = ""; // EX: 300, WILL TRIGGER A COOLOFF TIMER EVERY 300 EMAILS SENT
$settings['COOLOFF_TIME']  = ""; // 2 hours / 30 minutes / 1 day / tomorrow / next monday..
$settings['THREADS']       = 0;  // NUMBER OF THREADS TO USE (DONT USE MORE THAN 1 THREAD ON 1 SMTP)
$settings['SPAM_LIMIT']    = 0;  // 0 FOR UNLIMITED, PUT A NUMBER TO STOP AT A CERTAIN LINE
$settings['SAVE_SPAMMED']  = 1;  // SAVE SPAMMED EMAILS TO RECORDS/SPAMMED.TXT
$settings['SAVE_FAILED']   = 1;  // SAVE UNDELIVERED EMAILS TO RECORDS/UNDELIVERED.TXT
$settings['DELETESPAM']    = 0;  // REMOVE SPAMMED EMAILS FROM THE VICTIMS LIST
$settings['SMTPAUTH']      = 1;  // IF THE SMTP REQUIRES PASSWORD OR NOT
$settings['HIDDEN_TEXT_L'] = ''; // ADDS HIDDEN TEXT IN LETTER PREVIEW EX: HELLO %EMAIL% / file[hidden.txt]
#_________________________________________________ᴵᴹᴬᴳᴱ ᴸᴱᵀᵀᴱᴿ​​​​​_________________________________________________________________

$settings['IMAGE_LETTER']  = false; // CONVERTS THE LETTER TO IMAGE. LEARN MORE ON THE SITE
$settings['IMAGE_QUALITY'] = 1;	 	// IMAGE QUALITY 1 => LQ, 2 => HQ (HIGH QUALITY IMAGES ARE LARGE IN SIZE)
$settings['ENC_IMAGE']     = 0; 	// 0 => DISABLED. 1, 2, 3, 4 => (DIFFERENT NAME ENC METHODS)
$settings['MAX_SIZE']      = "720"; // IMAGE SIZE, USE LOWER SIZE IF IT'S GETTING SHRINKED
$settings['RANDOM_SIZE']   = false; // SLIM CHANGES TO THE SIZE WHICH RESULTS IN NEW IMAGE HASH 
$settings['HIDDEN_TEXT']   = false; // ADDS A HIDDEN TEXT TO APPEAR IN THE LETTER PREVIEW (INCREASES RANDOMIZATION)
$settings['IMAGE_TEXT']    = 'Hello %EMAIL%'; // THE TEXT TO BE ADDED IN THE LETTER PREVIEW, HIDDEN IN THE LETTER
$settings['IMAGE_vTEXT']   = ''; 	// VISIBLE TEXT TO APPEAR AT THE END (EX: <span style="color:red">text</span> / file[vtext.txt])

#___________________________________________________🇸​​​​​🇪​​​​​🇱​​​​​🇫​​​​​ 🇹​​​​​🇪​​​​​🇸​​​​​🇹​​​​​​​​​​______________________________________________________________________

$settings['SELFTEST']      = false; // ENABLE SENDING TESTS TO YOUR EMAIL EVERY WHATEVER NUMBER YOU PUT BELOW (LOCAL)
$settings['TESTMAIL']      = "";    // PUT YOUR EMAIL HERE TO TEST IF THE LETTER STILL DELIVERS
$settings['INTERVAL']      = "100"; // SENDS A TEST TO YOUR EMAIL EACH 100 EMAILS, CAN BE CHANGED
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

#                                  █▀▀ █▄░█ █▀▀ █▀█ █▄█ █▀█ ▀█▀ █ █▀█ █▄░█
#                                  ██▄ █░▀█ █▄▄ █▀▄ ░█░ █▀▀ ░█░ █ █▄█ █░▀█

$settings['ENCODING']  	   = "UTF-8"; // CHARACTER ENCODING, UTF-8 / UTF-16 / UTF-32 / ASCII
$settings['LETTER_ENCODE'] = ""; //Options: "8bit", "7bit", "binary", "base64", and "quoted-printable"
$settings['HTML2TEXT']     = 0; // ENABLE OR DISABLE HTML TO TEXT CONVERSION
$settings['ENCLETTER']     = 0; // 1 => ZERO/GHOST/ABSOLUTE FONT BOMB. 2 => MINIMAL VARIATION OF 1.
$settings['ENCFROM']       = 0; // 0 => DISABLED. 1, 2, 3, 4 => (DIFFERENT NAME ENC METHODS)
$settings['ENCSUBJECT']    = 0; // 0 => DISABLED. 1, 2, 3, 4 => (DIFFERENT NAME ENC METHODS)
$settings['ENC_EMBEDLOGO'] = 0; // 0 => DISABLED. 1, 2, 3, 4 => (DIFFERENT NAME ENC METHODS)
$settings['ALTBODY']       = 1; // ENABLE OR DISABLE ALTBODY FOR PPL WITH HTML DISABLED
$settings['ALTBODYTXT']    = "NONE"; // (TEXT / HTML / GENERIC / NONE)
$ALTBODY  /*DETAILS*/      = 'To view the message, please use an HTML compatible email viewer'; // ALT BODY TEXT IF ABOVE IS GENERIC
$settings['LOGO_ENC']	   = 1; // 1 FOR EMBED LOGO / 2 FOR BASE64 DATA URI
$settings['LOGO_LINK']	   = "https://upload.wikimedia.org/wikipedia/commons/8/85/Microsoft_365_logo.png"; // DEFAULT LOGO URL
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

#                               █▀█ █▀▀ █▀▄▀█ █▀█ ▀█▀ █▀▀   █▀ █░█ █▀▀ █░░ █░░
#                               █▀▄ ██▄ █░▀░█ █▄█ ░█░ ██▄   ▄█ █▀█ ██▄ █▄▄ █▄▄

$settings['FILE_NAME']     = "password.php"; // CAN BE CHANGED. YOU NEED TO RENAME THE SHELL FILE ALSO
$settings['SPAM_METHOD']   = 2; // 1 => LOCAL / 2 => REMOTE
$settings['REMOTE_SMTP']   = 1; // 1 => USE SMTP  / 2 => SEND WITHOUT SMTP
$settings['REMOTE_METHOD'] = 1; // 1 => PHPMAILER / 2 = > POSTFIX
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

#                               ▄▀█ ▀█▀ ▀█▀ ▄▀█ █▀▀ █░█ █▀▄▀█ █▀▀ █▄░█ ▀█▀ █▀
#                               █▀█ ░█░ ░█░ █▀█ █▄▄ █▀█ █░▀░█ ██▄ █░▀█ ░█░ ▄█

$settings['SMTP_ATTACH']   = 0;  // ENABLE / DISABLE ATTACHMENTS (DONT FORGET TO PUT THE TYPE BELOW)
$settings['ATTACH_MODE']   = 1;  // 1 => NORMAL ATTACHMENT, 2 => INLINE ATTACHMENT 
$settings['ATTACH_ENC']    = 0;  // 1/2/3/4/5/6/7/8/9/10  SELECT THE ENCRYPTION TYPE. LEARN MORE ON THE SITE
$settings['DOUBLE_ENC']    = 0;  // DOUBLE ENCRYPTION FOR ATTACH_ENC 1 & ATTACH_ENC 8
$settings['ATTACH_NAME']   = "receipt%RANDOM%.pdf"; // ATTACHMENT NAME, YOU CAN USE RANDOMIZERS HERE
$settings['ENC_ATTACHNAME']= 0;  // 0 => DISABLED. 1, 2, 3, 4 => (DIFFERENT NAME ENC METHODS)
$settings['ATTACH_TYPE']   = "auto"; // ATTACHMENT TYPE, SEE ALL HERE https://redrum.su/client/mime
$settings['ATTACH_SPOOF']  = ""; // wav, mp3, m3u, ogg, OR ANYTHING. LEAVE EMPTY TO DISABLE OR ADD A SPACE TO HIDE
$settings['ATTACH_ENCODE'] = "base64"; //Options: "8bit", "7bit", "binary", "base64", and "quoted-printable"
$settings['MINIFY_ATTACH'] = 0;  // WILL MINIFY THE HTML ATTACHMENT TO SAVE DATA AND REDUCE THE STRESS ON THE SMTP
$settings['HIDDEN_TAG']    = ''; // CAN AFFECT DELIVERY, LEARN MORE ON THE SITE
$settings['ATTACH_CONVERT']= 0;  // 0 => Off, 1 => EML(1), 2 => EML(2), 3 => PDF, 4 => ODT, LEARN MORE ON THE SITE
$settings['EML_FROMNAME']  = ""; // SPOOFED FROM NAME FOR EML ATTACHMENTS EX: Microsoft (CAN USE RANDOMIZERS)
$settings['EML_FROMEMAIL'] = ""; // SPOOFED FROM EMAIL FOR EML ATTACHMENTS EX: accounts@office365.com (CAN USE RANDOMIZERS)
$settings['EML_SUBJECT']   = ""; // SPOOFED SUBJECT FOR EML ATTACHMENTS (CAN USE RANDOMIZERS)
$settings['DOMAIN_LOCK']   = ""; // LOCKS THE ATTACHMENT ON 1 DOMAIN EX: 'C:/' , 'google.com' (FOR ENC:2 ONLY)
$settings['ATTACH_EXPIRY'] = ""; // 10 day, Next Friday, tomorrow, 5 hours, 3 days, 1 week, 5 seconds (FOR ENC:2 ONLY)
$settings['ATTACH_ZIP']    = false; // FALSE => DISABLE, TRUE => WILL PUT THE ATTACHMENT IN A ZIP FILE
$settings['ZIP_FILE_NAME'] = "%COMPANY%.zip"; // YOU CAN USE RANDOMIZERS HERE. ['ENC_ATTACHNAME'] ALSO WORKS ON THIS
$settings['ZIP_EXT_SPOOF'] = ""; // wav, mp3, m3u, ogg, OR ANYTHING. LEAVE EMPTY TO DISABLE OR ADD A SPACE TO HIDE
$settings['ZIP_PASSWORD']  = ""; // SETS A PASSWORD FOR THE ZIPPED FILE. LEAVE EMPTY TO DISABLE
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

#								  	 ▄▀█ █▀▄ █░█ ▄▀█ █▄░█ █▀▀ █▀▀ █▀▄
#									 █▀█ █▄▀ ▀▄▀ █▀█ █░▀█ █▄▄ ██▄ █▄▀

$settings['TURBO']           = false; // WILL KEEP THE CONNECTION ALIVE WITH THE SMTP, PUT 0 SLEEP TIME IF ENABLED
$settings['XRAGENT']         = false; // WILL GENERATE RANDOM HEADERS IN LETTER, SOME DOMAINS OR SMTPS REFUSES THIS
$settings['XSENDER&ABUSE']   = false; // ENABLE X-SENDER AND X-ABUSE
$settings['SELFMAIL']        = false; // WILL CHANGE THE HEADERS SO IT SHOWS THE EMAIL WAS SENT FROM THE VICTIM HEADERS
$settings['SPOOFSELF']       = false; // ENABLE SPOOFING VICTIM'S EMAIL SO IT SHOWS THE EMAIL WAS SENT FROM THEIR EMAIL
$settings['ADD_REPLY'] 	     = false; // ADD YOUR SMTP SENDER EMAIL FOR REPLIES AND BOUNCE BACKS
$settings['REPLY_EMAIL']     = ""; 	  // SPOOF EMAIL FOR "REPLY TO" AND "RETURN TO". LEAVE EMPTY FOR DEFAULT
$settings['GET_REPORT']	     = false; // ENABLE REQUESTING DELIVERY READ-REPORT NOTIFICATION
$settings['REPORT_EMAIL']    = ""; 	  // YOUR EMAIL TO RECEIVE THE REPORT IF ABOVE IS ENABLED
$settings['SPAM_OTHER']      = false; // WILL SPAM THE OTHER FOLDER (OTHER, CLUSTER, PROMOTIONS..)
$settings['TRACKER']         = false; // TRACKS LETTER OPENING (SAVES EMAIL, IP, READ TIME)
$settings['TRACK_link']      = "";    // LINK WHERE TO SAVE RESULTS. EX HTTPS://DOMAIN.COM/FOLDER LEARN MORE ON THE SITE. 
$settings['RELAYING_DOMAIN'] = "";    // ADDS/SPOOFS X-RELAYING-DOMAIN HEADER. YOU CAN USER RANDOMIZERS HERE
#_________________________________________________🇲​​​​​🇮​​​​​🇲​​​​​🇪​​​​​🇴​​​​​🇱​​​​​🇪​​​​​_________________________________________________________________________

$settings['mimeOLE']       = false; // ENABLE MIMEOLE SPOOF
$MimeOLE /*DETAILS*/       = 'Produced By Microsoft MimeOLE V6.00.2800.1441'; // ADD MIMEOLE HERE IF ABOVE IS TRUE
#________________________________________________🇨​​​​​🇺​​​​​🇸​​​​​🇹​​​​​🇴​​​​​🇲​​​​​🇭​​​​​🇪​​​​​🇦​​​​​🇩​​​​​🇪​​​​​🇷​​​​​_______________________________________________________________________

$settings['CUSTOMHEADER']  = false; // ENABLE IF YOU KNOW WHAT YOU ARE DOING
$CUSTOMHEADER = array(

        'X-Mailer: ColdFusion 2021 Application Server',		
        'X-Accountcode: USATF',
		
); // FORMAT: 'X-custom-header: custom-value',
#_______________________________________________________​​​​​_______________________________________________________________________

$settings['RAND_BOUNDARY'] = true; // ENABLE RANDOM BOUNDARY, IF FALSE PUT A BOUNDARY BELOW
$settings['BOUNDARY_FORMAT'] = 1;  //  TWO DIFFERENT BOUNDARIES JUST IN CASE, CHOOSE 1 OR 2, OR YOU CAN PUT CUSTOM ONE BELOW
$CUSTOMBOUND /*DETAILS*/   = "_----------=_MCPart_816704512"; // BOUNDARY SPOOF CAN BE CHANGED
#__________________________________________________🇩​​​​​🇪​​​​​🇻​​​​​🇮​​​​​🇨​​​​​🇪​​​​​_________________________________________________________________________

$MAILER /*SPOOFED MAILER*/ = "";  // MAILER NAME LEAVE EMPTY FOR NONE OR CHANGE TO SPOOF TO OTHER MAILERS EX artist_notification_mailer
$HOST 	/*SPOOFED DEVICE*/ = "auto";  // SPOOFS HOST (auto , smtp , OR TYPE ANYTHING FOR A CUSTOM NAME). LEARN MORE ON THE STIE
$MSG_ID /*SPOOFED MSG_ID*/ = "random";  //  MESSAGE IDENTIFIER (random, auto, OR TYPE ANYTHING). YOU CAN USE RANDOMIZERS HERE
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
#
#							   █▀ █▀▄▀█ ▀█▀ █▀█ ▄▄ █▀▀ █▀█ █▄░█ █▀▀ █ █▀▀
#							   ▄█ █░▀░█ ░█░ █▀▀ ░░ █▄▄ █▄█ █░▀█ █▀░ █ █▄█
$smtps = array(
#_________________________________________ 🇵​​​​​🇦​​​​​🇸​​​​​🇹​​​​​🇪​​​​​ 🇧​​​​​🇪​​​​​🇹​​​​​🇼​​​​​🇪​​​​​🇪​​​​​🇳​​​​​ 🇹​​​​​🇭​​​​​🇪​​​​​ 🇱​​​​​🇮​​​​​🇳​​​​​🇪​​​​​🇸​​​​​ _____________________________________________

'0' => array(

        'DEBUG' => 0,		
        'SMTP_HOST' => 'email-smtp.us-east-1.amazonaws.com',
        'SMTP_USER' => 'AKIA272TD325SLDCINWL',
        'SMTP_PASSWORD' => 'BGIyETwPPHLK3jJfg3RdPCU5wuIVnvm2cC3U9J/9XrGO',
        'SMTP_PORT' => 587,
        'SMTP_SENDER' => 'noreply@thevillageatcc.com',
        'SMTP_FROM' => 'bvorwerk@rmortho.com',
        'SMTP_SUBJECT' => 'bvorwerk@rmortho.com',
        'SMTP_PRIORITY' => 2,
        'SMTP_SSL' => 2,
    ),
#____________________________________________ 🇪​​​​​🇳​​​​​🇩​​​​​🇸​​​​​ 🇭​​​​​🇪​​​​​🇷​​​​​🇪​​​​​ ___________________________________________________	
#
# FOR MULTI SMTP CHECK https://redrum.su/client/home?page=smtpconf#ms
);
#▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄

?>