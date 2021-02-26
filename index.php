<?php
ob_start();
define('API_KEY', '1663966605:AAE2i0keHKGYcli29VfK_8Qe-1mg2_MDuTs');
function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

function SendMessage($chatid, $text, $parsmde, $disable_web_page_preview, $keyboard)
{
    bot('sendMessage', [
        'chat_id' => $chatid,
        'text' => $text,
        'parse_mode' => $parsmde,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function SendMessage2($chatid, $text, $message_id, $parsmde, $disable_web_page_preview, $keyboard)
{
    bot('sendMessage', [
        'chat_id' => $chatid,
        'text' => $text,
        'reply_to_message_id' => $message_id,
        'parse_mode' => $parsmde,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function ForwardMessage($chatid, $from_chat, $message_id)
{
    bot('ForwardMessage', [
        'chat_id' => $chatid,
        'from_chat_id' => $from_chat,
        'message_id' => $message_id
    ]);
}

function SendPhoto($chatid, $photo, $keyboard, $caption)
{
    bot('SendPhoto', [
        'chat_id' => $chatid,
        'photo' => $photo,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}

function SendAudio($chatid, $audio, $keyboard, $caption, $sazande, $title)
{
    bot('SendAudio', [
        'chat_id' => $chatid,
        'audio' => $audio,
        'caption' => $caption,
        'performer' => $sazande,
        'title' => $title,
        'reply_markup' => $keyboard
    ]);
}

function save($filename, $TXTdata)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, "$TXTdata");
    fclose($myfile);
}

function SendDocument($chatid, $document, $keyboard, $caption)
{
    bot('SendDocument', [
        'chat_id' => $chatid,
        'document' => $document,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}

function SendSticker($chatid, $sticker, $keyboard)
{
    bot('SendSticker', [
        'chat_id' => $chatid,
        'sticker' => $sticker,
        'reply_markup' => $keyboard
    ]);
}

function SendVideo($chatid, $video, $keyboard, $duration)
{
    bot('SendVideo', [
        'chat_id' => $chatid,
        'video' => $video,
        'duration' => $duration,
        'reply_markup' => $keyboard
    ]);
}

function SendVoice($chatid, $voice, $keyboard, $caption)
{
    bot('SendVoice', [
        'chat_id' => $chatid,
        'voice' => $voice,
        'caption' => $caption,
        'reply_markup' => $keyboard
    ]);
}

function SendContact($chatid, $first_name, $phone_number, $keyboard)
{
    bot('SendContact', [
        'chat_id' => $chatid,
        'first_name' => $first_name,
        'phone_number' => $phone_number,
        'reply_markup' => $keyboard
    ]);
}

function SendChatAction($chatid, $action)
{
    bot('sendChatAction', [
        'chat_id' => $chatid,
        'action' => $action
    ]);
}

function KickChatMember($chatid, $user_id)
{
    bot('kickChatMember', [
        'chat_id' => $chatid,
        'user_id' => $user_id
    ]);
}

function LeaveChat($chatid)
{
    bot('LeaveChat', [
        'chat_id' => $chatid
    ]);
}

function GetChat($chatid)
{
    bot('GetChat', [
        'chat_id' => $chatid
    ]);
}

function GetChatMembersCount($chatid)
{
    bot('getChatMembersCount', [
        'chat_id' => $chatid
    ]);
}

function GetChatMember($chatid, $userid)
{
    $truechannel = json_decode(file_get_contents('https://api.telegram.org/bot' . API_KEY . "/getChatMember?chat_id=" . $chatid . "&user_id=" . $userid));
    $tch = $truechannel->result->status;
    return $tch;
}

function AnswerCallbackQuery($callback_query_id, $text, $show_alert)
{
    bot('answerCallbackQuery', [
        'callback_query_id' => $callback_query_id,
        'text' => $text,
        'show_alert' => $show_alert
    ]);
}

function EditMessageText($chat_id, $message_id, $text, $parse_mode, $disable_web_page_preview, $keyboard)
{
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,
        'parse_mode' => $parse_mode,
        'disable_web_page_preview' => $disable_web_page_preview,
        'reply_markup' => $keyboard
    ]);
}

function EditMessageCaption($chat_id, $message_id, $caption, $keyboard, $inline_message_id)
{
    bot('editMessageCaption', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'caption' => $caption,
        'reply_markup' => $keyboard,
        'inline_message_id' => $inline_message_id
    ]);
}

function rwchatcount($id, $count)
{
    file_put_contents("user/$id/chatcount.txt", $count);
}

//=============
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$usrn = $update->callback_query->message->chat->username;
$usrn1 = $update->callback_query->message->from->username;
$messageid = $update->callback_query->message->message_id;
$data_id = $update->callback_query->id;
$txt = $update->callback_query->message->text;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$from_username = $update->message->from->username;
$from_first = $update->message->from->first_name;
$forward_id = $update->message->forward_from->id;
$forward_chat = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$textmessage = $update->message->text;
$message_id = $update->message->message_id;
$stickerid = $update->message->sticker->file_id;
$videoid = $update->message->video->file_id;
$voiceid = $update->message->voice->file_id;
$fileid = $update->message->document->file_id;
$photo = $update->message->photo;
$photoid = $photo[count($photo) - 1]->file_id;
$musicid = $update->message->audio->file_id;
$caption = $update->message->caption;
$datetime = json_decode(file_get_contents("https://api.feelthecode.xyz/date/?timezone=Asia/tehran"));
$time = $datetime->time;
$date = $datetime->date;
$allmember = file_get_contents('data/allmember.txt');
$username = $update->message->from->username;
$name = $update->message->from->first_name;
$signup = file_get_contents("user/" . $from_id . "/signup.txt");
$step = file_get_contents("user/" . $from_id . "/step.txt");
$command = file_get_contents("user/" . $from_id . "/command.txt");
$change = file_get_contents("user/" . $from_id . "/change.txt");
$randtrue = file_get_contents("user/" . $from_id . "/rand.txt");
@mkdir('user/' . $from_id);
$chatadd = file_get_contents("data/chat.txt");
$chatadd2 = file_get_contents("data/chat2.txt");
$supportadd = file_get_contents("data/support.txt");
$vips = file_get_contents("data/vips.txt");
$ban = file_get_contents("data/banlist.txt");
$admin = "996310583";

//===============
$button_admin = json_encode(['keyboard' => [
    [['text' => '🔙 العودة']],
    [['text' => 'رسالة عامة 📩'], ['text' => 'توجيه رسالة 📬']],
    [['text' => 'ارسال رسالة لمستخدم'], ['text' => 'تفاصيل المستخدم ']],
    [['text' => '❌حذف vip'], ['text' => 'اعطاء vip']],
    [['text' => 'الاحصائيات👥'], ['text' => 'تحذير للمستخدم']],
    [['text' => ' حظر المستخدم '], ['text' => 'تم الغاء حظر المستخدم ']],
], 'resize_keyboard' => true]);
$button_signup = json_encode(['keyboard' => [
    [['text' => 'التسجيل']],
], 'resize_keyboard' => true]);
$button_official = json_encode(['keyboard' => [
    [['text' => 'ابدأ الدردشة']],
    [['text' => 'عضوية مميزة'], ['text' => '👤التفاصيل']],
    [['text' => '📬الدعم'], ['text' => 'مشاركة الرابط']],
], 'resize_keyboard' => true]);
$button_zir = json_encode(['keyboard' => [
    [['text' => 'رابط المشاركة🔐']],
    [['text' => 'كم شخص دخل الرابط؟'], ['text' => 'ترقية الحساب🔥']],
    [['text' => '🔙 العودة']],
], 'resize_keyboard' => true]);
$button_back_support = json_encode(['keyboard' => [
    [['text' => 'انهاء المحادثة 🗳️']],
], 'resize_keyboard' => true]);
$button_back_chat = json_encode(['keyboard' => [
    [['text' => '🔖تفاصيل المستخدم']],
    [['text' => '🗳️ انهاء المحادثة']],
], 'resize_keyboard' => true]);
$button_chat = json_encode(['keyboard' => [
    [['text' => 'بدء الدردشة']],
    [['text' => '👱‍♀دردشة مع بنت'], ['text' => '👱دردشة مع صبي']],
    [['text' => '🔙 العودة']],
], 'resize_keyboard' => true]);
$button_chat2 = json_encode(['keyboard' => [
    [['text' => 'أنهي المحادثة ⭕️'], ['text' => 'أكمل المحادثة✅']],
    [['text' => 'حظر وانهاء المحادثة🚫']],
], 'resize_keyboard' => true]);
$button_chat3 = json_encode(['keyboard' => [
    [['text' => 'لا تحظره'], ['text' => 'احظره']],
], 'resize_keyboard' => true]);
$button_back_search = json_encode(['keyboard' => [
    [['text' => '🔍 الغاء البحث']],
], 'resize_keyboard' => true]);
$button_jens = json_encode(['keyboard' => [
    [['text' => '👱‍♀ بنت'], ['text' => '👱 صبي']],
], 'resize_keyboard' => true]);
$button_einfo = json_encode(['keyboard' => [
    [['text' => '✍ تحرير']],
    [['text' => '🔙 العودة']],
], 'resize_keyboard' => true]);
$button_pfriend = json_encode(['inline_keyboard' => [
    [['text' => '🗣إجابة', 'callback_data' => 'pfriend']],
    [['text' => '⛔️تقرير', 'callback_data' => 'reportpf']],
], 'resize_keyboard' => true]);
$button_vip = json_encode(['keyboard' => [
    [['text' => '☢عضویت در کانال'], ['text' => '💳پرداخت']],
    [['text' => '🔙 العودة']],
], 'resize_keyboard' => true]);
$button_senn = json_encode(['keyboard' => [
    [['text' => '12'], ['text' => '13'], ['text' => '14'], ['text' => '15'], ['text' => '16']],
    [['text' => '17'], ['text' => '18'], ['text' => '19'], ['text' => '20'], ['text' => '21']],
    [['text' => '22'], ['text' => '23'], ['text' => '24'], ['text' => '25'], ['text' => '26']],
    [['text' => '27'], ['text' => '28'], ['text' => '29'], ['text' => '30'], ['text' => '31']],
    [['text' => '32'], ['text' => '33'], ['text' => '34'], ['text' => '35'], ['text' => '36']],
    [['text' => '37'], ['text' => '38'], ['text' => '39'], ['text' => '+40'], ['text' => '-50']],
], 'resize_keyboard' => true]);
$button_mlife = json_encode(['keyboard' => [
    [['text' => 'سوريا'], ['text' => 'الأردن'], ['text' => 'ايران']],
    [['text' => 'العراق'], ['text' => 'سلطنة عمان'], ['text' => 'تونس']],
    [['text' => 'لبنان'], ['text' => 'مصر'], ['text' => 'موريتانيا']],
    [['text' => 'فلسطين'], ['text' => 'الصومال'], ['text' => 'جيبوتي']],
    [['text' => 'الامارات'], ['text' => 'السودان'], ['text' => 'البحرين']],
    [['text' => 'قطر'], ['text' => 'الجزائر'], ['text' => 'اليمن'], ['text' => 'باكستان']],
    [['text' => 'السعودية'], ['text' => 'المغرب'], ['text' => 'تركيا']],
    [['text' => 'الكويت'], ['text' => 'ليبيا']],
], 'resize_keyboard' => true]);
$button_back = json_encode(['keyboard' => [
    [['text' => '🔙 العودة']],
], 'resize_keyboard' => true]);
$button_lagv = json_encode(['keyboard' => [
    [['text' => 'الغاء']],
], 'resize_keyboard' => true]);
//==========ban
if (strpos($ban, "$from_id") !== false) {
    SendMessage($chat_id, "لقد تم حظرك من البوت الرجاء عدم ارسال رسالة بعد الآن");
    return false;
}
$inch = file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=@TeamSyria&user_id=" . $from_id);
if (strpos($inch, '"status":"left"') == true) {
    SendMessage($chat_id, "الرجاء الاشتراك بقناتنا لمعرفة اخر الآخبار", 'html', 'true', json_encode(['inline_keyboard' => [
        [['text' => "Team Syria 🇸🇾", 'url' => "https://telegram.me/TeamSyria"]]
    ], 'resize_keyboard' => true]));
    return false;
}
if ($warn == '3') {
    $banwarn = fopen("data/banlist.txt", "a") or die("Unable to open file!");
    fwrite($banwarn, "$from_id\n");
    fclose($banwarn);
    SendMessage($chat_id, "اعلان ... 📛

وصل عدد تحذيراتك إلى 3 ... ❗️

لقد تم حظرك من الروبوت بسبب عدم إتباع قواعد الروبوت وتكرارها ... 🚫

من فضلك لا ترسل رسالة بعد الآن ... 🚫", "html", "true", $button_official);
    return false;
} //=========start

elseif (preg_match('/^\/([Ss]tart)(.*)/', $textmessage)) {
    preg_match('/^\/([Ss]tart)(.*)/', $textmessage, $match);
    $match[2] = str_replace(" ", "", $match[2]);
    $match[2] = str_replace("\n", "", $match[2]);
    if ($match[2] != null) {
        if (strpos($allmember, "$from_id") == false) {
            if ($match[2] != $from_id) {
                if (strpos($gold, "$from_id") == false) {
                    $txxt = file_get_contents('user/' . $match[2] . "/gold.txt");
                    $pmembersid = explode("\n", $txxt);
                    if (!in_array($from_id, $pmembersid)) {
                        $aaddd = file_get_contents('user/' . $match[2] . "/gold.txt");
                        $aaddd .= $from_id . "\n";
                        file_put_contents('user/' . $match[2] . "/gold.txt", $aaddd);
                    }
                    SendMessage($match[2], "تهانينا .. دخل شخص جديد عبر رابطك الى البوت !❤️", "html", "true");
                }
            }
        }
    }
    if (!file_exists("user/$from_id/step.txt")) {
        save("user/$from_id/command.txt", "none");
        save("user/$from_id/change.txt", "none");
        save("user/$from_id/step.txt", "none");
        save("user/$from_id/signup.txt", "none");
        save("user/$from_id/rand.txt", "none");
        save("user/$from_id/mlife.txt", "الاسمعلوم");
        save("user/$from_id/nam.txt", "الاسمعلوم");
        save("user/$from_id/senn.txt", "الاسمعلوم");
        save("user/$from_id/jens.txt", "الاسمعلوم");
        SendMessage($chat_id,  " اهلا وسهلا بك عزيزي في بوت التعارف

نقدم لك الكثير من الميزات في هذا البوت🔐
حيث يمكنك :
1.التحدث بصفة مجهول وبشكل عشوائي مع اي شخص اخر 
2.السرية التامة في محادثتك حيث لا يقوم البوت بحفظ المحادثات
3. وهناك ميزات كثيرة تعرف عليها وانت تستخدم البوت
4. استمتع
🇸🇾 -يرجى التسجيل :","html", "true", $button_signup);
    } else {
        save("user/$from_id/step.txt", "none");
        SendMessage($chat_id, " اهلا وسهلا بك عزيزي في بوت التعارف

نقدم لك الكثير من الميزات في هذا البوت🔐
حيث يمكنك :
1.التحدث بصفة مجهول وبشكل عشوائي مع اي شخص اخر 
2.السرية التامة في محادثتك حيث لا يقوم البوت بحفظ المحادثات
3. وهناك ميزات كثيرة تعرف عليها وانت تستخدم البوت
4. استمتع
🇸🇾 -استخدم الزر المطلوب : ", "html", "true", $button_official);
    }
} elseif ($textmessage == '📬الدعم') {
    if ($supportadd == null) {
        save("data/support.txt", $from_id);
        SendMessage($chat_id, "طلب محادثتك للدعم تم الارسال بنجاح 📬..

أرجو الإنتظار...", "html", "true");
        SendMessage($admin, "👤 طلب محادثة من قبل المستخدم مع الملف الشخصي :

$name
@$username
$from_id
", 'html', 'true', json_encode(['keyboard' => [
            [['text' => 'قبول الدعوة'], ['text' => 'رفض الدعوة']],
        ], 'resize_keyboard' => true]));
    } else {
        SendMessage($chat_id, "قائمة انتظار الدعم ممتلئة

يرجى المحاولة مرة أخرى في بضع دقائق ...", "html", "true", $button_official);
    }
} elseif ($textmessage == 'قبول الدعوة' && $from_id == $admin) {
    $supportadd = file_get_contents("data/support.txt");
    SendMessage($chat_id, "بدأت محادثتك مع المستخدم:", "html", "true", $button_back_support);
    save("user/$from_id/rand.txt", $supportadd);
    save("user/$supportadd/rand.txt", $admin);
    save("user/$from_id/command.txt", "chat start");
    save("user/$supportadd/command.txt", "chat start");
    SendMessage($supportadd, "تم قبول طلب الدعم الخاص بك ... ❗️

تستطيع التحدث:", "html", "true", $button_back_support);
} elseif ($textmessage == 'رفض الدعوة' && $from_id == $admin) {
    $usersupport = $supportadd;
    SendMessage($chat_id, "تم رفض طلب دعم المستخدم.", "html", "true", $button_admin);
    SendMessage($supportadd, "تم رفض طلب الدعم الخاص بك", "html", "true");
    $newlist = str_replace($usersupport, "", $supportadd);
    save("data/support.txt", $newlist);
} elseif ($textmessage == 'انهاء المحادثة 🗳️') {
    $usersupport = $supportadd;
    if ($from_id != $admin) {
        SendMessage($chat_id, "انتهت محادثتك مع الدعم .!", "html", "true", $button_official);
        save("user/$supportadd/command.txt", "none");
        save("user/$from_id/command.txt", "none");
        $newlist = str_replace($usersupport, "", $supportadd);
        save("data/support.txt", $newlist);
        SendMessage($admin, "تم إكمال محادثتك بواسطة المستخدم الآخر ❗️", "html", "true", $button_admin);
    } else {
        SendMessage($chat_id, "محادثتك مع المستخدم قد انتهت", "html", "true", $button_admin);
        save("user/$supportadd/command.txt", "none");
        save("user/$from_id/command.txt", "none");
        SendMessage($supportadd, "انتهت محادثتك مع الدعم .!", "html", "true", $button_official);
        $newlist = str_replace($usersupport, "", $supportadd);
        save("data/support.txt", $newlist);
    }
} elseif ($textmessage == 'مشاركة الرابط') {
    SendMessage($chat_id, "أهلا وسهلا بك صديقي في رابط المشاركة الرجاء الاختيار من الازرار :", "html", "true", $button_zir);
} elseif ($textmessage == 'رابط المشاركة🔐') {
    SendMessage($chat_id, "من خلال ارسال الرابط لأصدقائك يمكنك الحصول على نقاط 🔥❤️", "html", "true", $button_zir);
    SendMessage($chat_id, "مرحبا.. انا ادعوك للتكلم الجماعي المجهول
    عن طريق هذا البوت يمكنك التحدث مع اشخاص لا تعرفهم
بصفة مجهول 🔐
محادثاتك كلها خاصة ونحترم خصوصيتك 🔐🔥
https://telegram.me/prvr_bot?start=$from_id 🌀", "html", "true", $button_zir);
} elseif ($textmessage == 'كم شخص دخل الرابط؟') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "☢ عزيزي المستخدم
عدد الأشخاص الذين انضموا إلى البوت عبر الرابط الخاص بك: ($mmemcount)", "html", "true", $button_zir);
} elseif ($textmessage == 'ترقية الحساب🔥') {
    $gold = file_get_contents("user/" . $from_id . "/gold.txt");
    $oldertega = file_get_contents("user/" . $from_id . "/oldertega.txt");
    $member_id = explode("\n", $gold);
    $mmemcount = count($member_id) - 1;
    if ($mmemcount > 20) {
        if ($oldertega != 'false') {
            $ertega = fopen("data/vips.txt", "a") or die("Unable to open file!");
            fwrite($ertega, "$from_id\n");
            fclose($ertega);
            SendMessage($chat_id, "مبروك ..! لقد اصبح حسابك Vip الآن ", "html", "true", $button_zir);
            save("user/$from_id/karbara.txt", "0");
            save("user/$from_id/oldertega.txt", "false");
        } else {
            save("user/$from_id/step.txt", "none");
            SendMessage($chat_id, "لقد استعملت هذه الميزة بالفعل .!", "html", "true", $button_zir);
        }
    } else {
        SendMessage($chat_id, "عزيزي المستخدم ...
لترقية حسابك ، يجب أن يقوم 20 شخصًا بتسجيل الدخول إلى البوت من خلال الرابط الخاص بك
لكن عدد الأشخاص الذين انضموا إلى البوت باستخدام الرابط الخاص بك هو = ($mmemcount) ✅ " ,"html", "true", $button_zir);
    }
}

elseif ($textmessage=='عضوية مميزة' or $textmessage=='/vip'){
    SendMessage($chat_id, "لكي تحصل  على حساب Vip يجب دفع 2$ للمطور @J_69_L
او عن طريق تجميع نقاط بالبوت 🔥🔐

لشراء ملف البوت @J_69_L", "html", "true");
}


 elseif ($textmessage == '👤التفاصيل') {
    $signup = file_get_contents("user/" . $from_id . "/signup.txt");
    $nam = file_get_contents("user/" . $from_id . "/nam.txt");
    $senn = file_get_contents("user/" . $from_id . "/senn.txt");
    $jens = file_get_contents("user/" . $from_id . "/jens.txt");
    $mlife = file_get_contents("user/" . $from_id . "/mlife.txt");
    SendMessage($chat_id, "المواصفات الخاصة بك عزيزي المستخدم :
➖➖➖➖➖➖➖➖
👤 الاسم = $nam 
☯ العمر = $senn 
مكان الاقامة : = $mlife
الجنس : = $jens 
➖➖➖➖➖➖➖➖️", "html", "true", $button_einfo);
} elseif ($textmessage == 'ابدأ الدردشة') {
    SendMessage($chat_id, "اهلا وسهلا بك في دردشة التعارف 📬 .. يرجى استخدام الزر المطلوب :", "html", "true", $button_chat);
} elseif ($textmessage == '🔍 الغاء البحث') {
    $newlist = str_replace($from_id, "", $chatadd);
    save("data/chat.txt", $newlist);
    $newlist2 = str_replace($from_id, "", $chatadd2);
    save("data/chat2.txt", $newlist2);
    SendMessage($chat_id, "تم إلغاء البحث", "html", "true", $button_chat);
} elseif ($textmessage == '🔖تفاصيل المستخدم') {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $namu = file_get_contents("user/" . $randtrue . "/nam.txt");
        $mlifeu = file_get_contents("user/" . $randtrue . "/mlife.txt");
        $sennu = file_get_contents("user/" . $randtrue . "/senn.txt");
        $jensu = file_get_contents("user/" . $randtrue . "/jens.txt");
        SendMessage($chat_id, "تفاصيل المستخدم : :
▫️الاسم : $namu 
▪️العمر : $sennu 
▫️مكان الاقامة : $mlifeu
▪️الجنس : $jensu", "html", "true");
    } else {
        SendMessage($chat_id, "لأظهار معلومات عن الشخص الآخر يجب ان يكون حسابك مميزا يرحى اختيار /vip لتفعيل هذه الميزة", "html", "true");
    }
} elseif ($textmessage == "بدء الدردشة") {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    if ($chatcount > 5) {
        sendMessage($chat_id, "لقد تكلمت ب 5 محادثات بشكل مجاني اذا اردت المزيد يرحى اختيار الامر /vip");
        exit();
    }
    $txtt = file_get_contents('data/chat.txt');
    $member_id = explode("\n", $txtt);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "يتم الآن البحث عن اشخاص 📬  الرجاء الانتظار ....", "html", "true", $button_back_search);
    file_put_contents("data/chat.txt", "$chatadd\n$from_id");
    file_put_contents("user/" . $from_id . "/rand.txt", null);
    $all_member = fopen("data/chat.txt", "r");
    while (!feof($all_member)) {
        $user = fgets($all_member);
        $user = str_replace(" ", "", $user);
        $user = str_replace("\n", "", $user);
        $blck = file_get_contents("user/" . $from_id . "/block.txt");
        $blck2 = file_get_contents("user/" . $user . "/block.txt");
        $ex = explode("\n", $blck);
        $ex2 = explode("\n", $blck2);
        if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns != "الاسمعلوم" && $jns != null && $jns != "" && $jns != "\n" && $jns != "الاسمعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
            file_put_contents("user/" . $from_id . "/rand.txt", $user);
            break;
        } else {
            file_put_contents("user/" . $from_id . "/rand.txt", null);
        }
    }
    $rand = file_get_contents("user/" . $from_id . "/rand.txt");
    if ($rand != null) {
        file_put_contents("user/" . $from_id . "/command.txt", "chat start");
        file_put_contents("user/" . $rand . "/command.txt", "chat start");
        file_put_contents("user/" . $rand . "/rand.txt", $from_id);
        $str = str_replace($from_id . "\n", "", $chatadd);
        $str = str_replace($rand . "\n", "", $chatadd);
        file_put_contents("data/chat.txt", $str);
        SendMessage($chat_id, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :", "html", "true", $button_back_chat);
        SendMessage($rand, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :
", "html", "true", $button_back_chat);
    }
} elseif ($textmessage == '🗳️ انهاء المحادثة') {
    SendMessage($chat_id," هل انت متأكد من أنك تريد أن تفعل هذا؟

يمكنك حظر هذا المستخدم قبل إغلاق المحادثة حتى لا يتصل بك مرة أخرى ❗️

لإغلاق زر المحادثة: قم بإنهاء المحادثة گفت
لمتابعة زر المحادثة: تابع المحادثة ✅
لحظر المستخدم وإغلاق المحادثة زر: حظر المحادثة وإنهائها 🚫

المس أحد الأزرار أدناه للمتابعة:", "html", "true", $button_chat2);
} elseif ($textmessage == '🔙 العودة' or $textmessage == '/cancel') {
    save("user/$from_id/step.txt", "none");
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "الرجاء تحديد الخيار المطلوب ... 🖲", "html", "true", $button_official);
} elseif ($textmessage == 'أنهي المحادثة ⭕️') {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    rwchatcount($chat_id, $chatcount + 1);
    SendMessage($randtrue, "لقد خرج المستخدم من هذه المحادثة 🔐

هل تريد حظر المستخدم ؟ ", "html", "true", $button_chat3);
    save("user/$from_id/command.txt", "none");
    file_put_contents("user/" . $from_id . "/rand.txt", '');
    file_put_contents("user/" . $randtrue . "/rand.txt", '');
    SendMessage($chat_id, "محادثتك مع المستخدم قد انتهت❗️", "html", "true", $button_chat);
} elseif ($textmessage == 'احظره') {
    $myfile2 = fopen("user/$from_id/block.txt", "a") or die("Unable to open file!");
    fwrite($myfile2, "$randtrue\n");
    fclose($myfile2);
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "محادثتك مع المستخدم قد انتهت❗️

وتم حظر المسخدم 🗳️", "html", "true", $button_chat);
} elseif ($textmessage == 'لا تحظره') {
    save("user/$from_id/command.txt", "none");
    SendMessage($chat_id, "محادثتك مع المستخدم قد انتهت❗", "html", "true", $button_chat);
} elseif ($textmessage == 'أكمل المحادثة✅') {
    SendMessage($chat_id, "يمكنك متابعة محادثتك :", "html", "true", $button_back_chat);
} elseif ($textmessage == 'حظر وانهاء المحادثة🚫') {
    $chatcount = @file_get_contents("user/$chat_id/chatcount.txt");
    rwchatcount($chat_id, $chatcount + 1);
    SendMessage($randtrue, "لقد خرج المستخدم من هذه المحادثة 🔐

هل تريد حظر المستخدم ؟ ", "html", "true", $button_chat3);
    save("user/$from_id/command.txt", "none");
    $myfile2 = fopen("user/$from_id/block.txt", "a") or die("Unable to open file!");
    fwrite($myfile2, "$randtrue\n");
    fclose($myfile2);
    SendMessage($chat_id, "محادثتك مع المستخدم قد انتهت❗️

وتم حظر المسخدم 🗳️", "html", "true", $button_chat);
} elseif ($textmessage == "👱دردشة مع صبي") {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $txtt = file_get_contents('data/chat2.txt');
        $member_id = explode("\n", $txtt);
        $mmemcount = count($member_id) - 1;
        SendMessage($chat_id, "يتم الآن البحث عن اشخاص 📬  الرجاء الانتظار ....", "html", "true", $button_back_search);
        file_put_contents("data/chat2.txt", "$chatadd2\n$from_id");
        file_put_contents("user/" . $from_id . "/rand.txt", null);
        $all_member = fopen("data/chat2.txt", "r");
        while (!feof($all_member)) {
            $user = fgets($all_member);
            $user = str_replace(" ", "", $user);
            $user = str_replace("\n", "", $user);
            $blck = file_get_contents("user/" . $from_id . "/block.txt");
            $blck2 = file_get_contents("user/" . $user . "/block.txt");
            $jns = file_get_contents("user/" . $user . "/jens.txt");
            $jns2 = file_get_contents("user/" . $from_id . "/jens.txt");
            $ex = explode("\n", $blck);
            $ex2 = explode("\n", $blck2);
            if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns == "صبي" && $jns == "👱‍ صبي" && $jns != "الاسمعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
                file_put_contents("user/" . $from_id . "/rand.txt", $user);
                break;
            } else {
                file_put_contents("user/" . $from_id . "/rand.txt", null);
            }
        }
        $rand = file_get_contents("user/" . $from_id . "/rand.txt");
        if ($rand != null) {
            file_put_contents("user/" . $from_id . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/rand.txt", $from_id);
            $str = str_replace($from_id, '', $chatadd2);
            $str = str_replace($rand, '', $chatadd2);
            file_put_contents("data/chat2.txt", $str);
            SendMessage($chat_id, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :", "html", "true", $button_back_chat);
            SendMessage($rand, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :", "html", "true", $button_back_chat);
        }
    } else {
        SendMessage($chat_id, "للأسف ، حسابك ليس مميزا 💔", "html", "true", $button_chat);
    }
} elseif ($textmessage == "👱‍♀دردشة مع بنت") {
    $vipsbot = file_get_contents('data/vips.txt');
    $vipsbot2 = explode("\n", $vipsbot);
    if (in_array($from_id, $vipsbot2)) {
        $txtt = file_get_contents('data/chat2.txt');
        $member_id = explode("\n", $txtt);
        $mmemcount = count($member_id) - 1;
        SendMessage($chat_id, "يتم الآن البحث عن اشخاص 📬  الرجاء الانتظار ....", "html", "true", $button_back_search);
        file_put_contents("data/chat2.txt", "$chatadd2\n$from_id");
        file_put_contents("user/" . $from_id . "/rand.txt", null);
        $all_member = fopen("data/chat2.txt", "r");
        while (!feof($all_member)) {
            $user = fgets($all_member);
            $user = str_replace(" ", "", $user);
            $user = str_replace("\n", "", $user);
            $blck = file_get_contents("user/" . $from_id . "/block.txt");
            $blck2 = file_get_contents("user/" . $user . "/block.txt");
            $jns = file_get_contents("user/" . $user . "/jens.txt");
            $jns2 = file_get_contents("user/" . $from_id . "/jens.txt");
            $ex = explode("\n", $blck);
            $ex2 = explode("\n", $blck2);
            if ($user != null && $user != "" && $user != "\n" && $from_id != $user && !in_array($from_id, $ex2) && !in_array($user, $ex && $jns == "بنت" && $jns == "👱‍♀ بنت" && $jns != "الاسمعلوم" && $jns != null && $jns != "" && $jns != "\n")) {
                file_put_contents("user/" . $from_id . "/rand.txt", $user);
                break;
            } else {
                file_put_contents("user/" . $from_id . "/rand.txt", null);
            }
        }
        $rand = file_get_contents("user/" . $from_id . "/rand.txt");
        if ($rand != null) {
            file_put_contents("user/" . $from_id . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/command.txt", "chat start");
            file_put_contents("user/" . $rand . "/rand.txt", $from_id);
            $str = str_replace($from_id, '', $chatadd2);
            $str = str_replace($rand, '', $chatadd2);
            file_put_contents("data/chat2.txt", $str);
            SendMessage($chat_id, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :", "html", "true", $button_back_chat);
            SendMessage($rand, "🔎 تم العثور على المستخدم والاتصال معه بنجاح

يمكنك التحدث معه الآن  :", "html", "true", $button_back_chat);
        }
    } else {
        SendMessage($chat_id, "للأسف ، حسابك ليس مميزا 💔", "html", "true", $button_chat);
    }
} elseif ($command == "chat start") {
    if ($stickerid != null) {
        SendSticker($randtrue, $stickerid);
    } elseif ($videoid != null) {
        SendVideo($randtrue, $videoid, $caption);
    } elseif ($voiceid != null) {
        SendVoice($randtrue, $voiceid, "", $caption);
    } elseif ($fileid != null) {
        SendDocument($randtrue, $fileid, "", $caption);
    } elseif ($musicid != null) {
        SendAudio($randtrue, $musicid, "", $caption);
    } elseif ($photoid != null) {
        SendPhoto($randtrue, $photoid, "", $caption);
    } elseif ($textmessage != null) {
        SendMessage($randtrue, $textmessage, "html", "true");
    }
} elseif ($textmessage == 'التسجيل') {
    save("user/$from_id/signup.txt", "nam");
    SendMessage($chat_id, "✍ عزيزي المستخدم الرجاء إدخال اسمك :", "html", "true", $button_lagv);
} elseif ($textmessage == 'الغاء') {
    save("user/$from_id/step.txt", "none");
    SendMessage($chat_id, "عملیات مورد نظر لغو شد❌
لطفا گزینه مورد نظر خود را انتخاب کنید...🖲", "html", "true", $button_signup);
} elseif ($signup == 'nam') {
    save("user/$from_id/signup.txt", "senn");
    save("user/$from_id/nam.txt", "$textmessage");
    SendMessage($chat_id, "💬 اختر عمرك الآن", "html", "true", $button_senn);
} elseif ($signup == 'senn') {
    if ($textmessage == '12' or $textmessage == '13' or $textmessage == '14' or $textmessage == '15' or $textmessage == '16' or $textmessage == '17' or $textmessage == '18' or $textmessage == '19' or $textmessage == '20' or $textmessage == '21' or $textmessage == '22' or $textmessage == '23' or $textmessage == '24' or $textmessage == '25' or $textmessage == '26' or $textmessage == '27' or $textmessage == '28' or $textmessage == '29' or $textmessage == '30' or $textmessage == '31' or $textmessage == '32' or $textmessage == '33' or $textmessage == '34' or $textmessage == '35' or $textmessage == '36' or $textmessage == '37' or $textmessage == '38' or $textmessage == '39' or $textmessage == '+40' or $textmessage == '-50') {
        save("user/$from_id/signup.txt", "mlife");
        save("user/$from_id/senn.txt", "$textmessage");
        SendMessage($chat_id, "🏯 الآن اختر مكان إقامتك", "html", "true", $button_mlife);
    } else {
        SendMessage($chat_id, "الرجاء استخدام الأزرار فقط :", "html", "true", $button_senn);
    }
} elseif ($signup == 'mlife') {
    if ($textmessage == 'سوريا' or $textmessage == 'العراق' or $textmessage == 'لبنان' or $textmessage == 'فلسطين' or $textmessage == 'الأردن' or $textmessage == 'مصر' or $textmessage == 'السودان' or $textmessage == 'الصومال' or $textmessage == 'جيبوتي' or $textmessage == 'ليبيا' or $textmessage == 'تونس' or $textmessage == 'الجزائر' or $textmessage == 'المغرب' or $textmessage == 'السعودية' or $textmessage == 'قطر' or $textmessage == 'البحرين' or $textmessage == 'سلطنة عمان' or $textmessage == 'الكويت' or $textmessage == 'تركيا' or $textmessage == 'باكستان' or $textmessage == 'ايران' or $textmessage == 'اليمن') {
        save("user/$from_id/signup.txt", "jens");
        save("user/$from_id/mlife.txt", "$textmessage");
        SendMessage($chat_id, "يرجى تحديد جنسك :🔐","html", "true", $button_jens);
    } else {
        SendMessage($chat_id, "الرجاء استخدام الأزرار فقط :", "html", "true", $button_mlife);
    }
} elseif ($signup == 'jens') {
    if ($textmessage == '👱 صبي' or $textmessage == '👱‍♀ بنت') {
        save("user/$from_id/signup.txt", "ok");
        if ($textmessage == '👱 صبي') {
            save("user/$from_id/jens.txt", "صبي");
        }
        if ($textmessage == '👱‍♀ بنت') {
            save("user/$from_id/jens.txt", "بنت");
        }
        SendMessage($chat_id, "تم تسجيل ملفك الشخصي بنجاح في نظامنا ... ✔️", "html", "true", $button_official);
    } else {
        SendMessage($chat_id, "الرجاء استخدام الأزرار فقط :", "html", "true", $button_jens);
    }
} elseif ($textmessage == '✍ تحرير') {
    save("user/$from_id/step.txt", "nam");
    SendMessage($chat_id, "✍ عزيزي المستخدم الرجاء إدخال اسمك :", "html", "true", $button_back);
} elseif ($step == 'nam') {
    save("user/$from_id/step.txt", "senn");
    save("user/$from_id/nam.txt", "$textmessage");
    SendMessage($chat_id, "💬 اختر عمرك الآن", "html", "true", $button_senn);
} elseif ($step == 'senn') {
    if ($textmessage == '12' or $textmessage == '13' or $textmessage == '14' or $textmessage == '15' or $textmessage == '16' or $textmessage == '17' or $textmessage == '18' or $textmessage == '19' or $textmessage == '20' or $textmessage == '21' or $textmessage == '22' or $textmessage == '23' or $textmessage == '24' or $textmessage == '25' or $textmessage == '26' or $textmessage == '27' or $textmessage == '28' or $textmessage == '29' or $textmessage == '30' or $textmessage == '31' or $textmessage == '32' or $textmessage == '33' or $textmessage == '34' or $textmessage == '35' or $textmessage == '36' or $textmessage == '37' or $textmessage == '38' or $textmessage == '39' or $textmessage == '+40' or $textmessage == '-50') {
        save("user/$from_id/step.txt", "mlife");
        save("user/$from_id/senn.txt", "$textmessage");
        SendMessage($chat_id, "🏯 الآن اختر مكان إقامتك", "html", "true", $button_mlife);
    } else {
        SendMessage($chat_id, "الرجاء استخدام الأزرار فقط :", "html", "true", $button_senn);
    }
} elseif ($step == 'mlife') {
    if ($textmessage == 'سوريا' or $textmessage == 'لبنان' or $textmessage == 'فلسطين' or $textmessage == 'العراق' or $textmessage == 'الأردن' or $textmessage == 'السعودية' or $textmessage == 'قطر' or $textmessage == 'سلطنة عمان' or $textmessage == 'اليمن' or $textmessage == 'موريتانيا' or $textmessage == 'الجزائر ' or $textmessage == 'المغرب' or $textmessage == 'ايران' or $textmessage == 'باكستان' or $textmessage == 'تركيا' or $textmessage == 'ليبيا' or $textmessage == 'تونس' or $textmessage == 'البحرين' or $textmessage == 'مصر' or $textmessage == 'السودان' or $textmessage == 'الصومال' or $textmessage == 'جيبوتي') {
        save("user/$from_id/mlife.txt", "$textmessage");
        save("user/$from_id/step.txt", "none");
        save("user/$from_id/change.txt", "true");
        SendMessage($chat_id, "تم تسجيل ملفك الشخصي بنجاح في نظامنا ... ✔️", "html", "true", $button_official);
    } else {
        SendMessage($chat_id, "الرجاء استخدام الأزرار فقط :", "html", "true", $button_mlife);
    }
} elseif ($textmessage == '/panel' and $from_id == $admin) {
    SendMessage($chat_id, "مرحبا بكم في لوحة الادارة", "html", "true", $button_admin);
} elseif ($textmessage == 'الاحصائيات👥' and $from_id == $admin) {
    $txtt = file_get_contents('data/allmember.txt');
    $member_id = explode("\n", $txtt);
    $mmemcount = count($member_id) - 1;
    SendMessage($chat_id, "إجمالي المستخدمين: $mmemcount شخص", "html", "true");
} elseif ($textmessage == 'توجيه رسالة 📬' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "s2a fwd");
    SendMessage($chat_id, "قم بإعادة توجيه الرسالة المطلوبة", "html", "true", $button_back);
} elseif ($command == 's2a fwd' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "none");
    SendMessage($chat_id, "تم وضع رسالتك في قائمة الانتظار.", "html", "true", $button_admin);
    $all_member = fopen("data/allmember.txt", 'r');
    while (!feof($all_member)) {
        $user = fgets($all_member);
        ForwardMessage($user, $admin, $message_id);
    }
} elseif ($textmessage == 'رسالة عامة 📩' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "s2a");
    SendMessage($chat_id, "أدخل رسالتك", "html", "true", $button_back);
} elseif ($command == 's2a' and $from_id == $admin) {
    file_put_contents("user/" . $from_id . "/command.txt", "none");
    SendMessage($chat_id, "يتم الارسال الى جميع المستخدمين تم وضع رسالتك في قائمة الانتظار ...", "html", "true", $button_admin);
    $all_member = fopen("data/allmember.txt", 'r');
    while (!feof($all_member)) {
        $user = fgets($all_member);
        if ($sticker_id != null) {
            SendSticker($user, $stickerid);
        } elseif ($videoid != null) {
            SendVideo($user, $videoid, $caption);
        } elseif ($voiceid != null) {
            SendVoice($user, $voiceid, '', $caption);
        } elseif ($fileid != null) {
            SendDocument($user, $fileid, '', $caption);
        } elseif ($musicid != null) {
            SendAudio($user, $musicid, '', $caption);
        } elseif ($photoid != null) {
            SendPhoto($user, $photoid, '', $caption);
        } elseif ($textmessage != null) {
            SendMessage($user, $textmessage, "html", "true");
        }
    }
} elseif ($textmessage == 'تحذير للمستخدم' && $from_id == $admin) {
    save("user/$from_id/command.txt", "warn");
    SendMessage($chat_id, "ادخل معرف المستخدم :", "html", "true", $button_back);
} elseif ($command == 'warn') {
    if (file_exists("user/$textmessage/step.txt")) {
        $warnk = file_get_contents("user/" . $textmessage . "/warn.txt");
        $newwarn = $warnk + 1;
        save("user/$textmessage/warn.txt", $newwarn);
        save("user/$from_id/command.txt", "none");
        $warnuser = file_get_contents("user/" . $textmessage . "/warn.txt");
        SendMessage($chat_id, "تم تحذير المستخدم المقصود.
عدد تحذيرات المستخدم: $warnuser", "html", "true", $button_admin);
        SendMessage($textmessage, "لقد تلقيت تنبيه جديد !!

عدد تحذيراتك: $warnuser");
        save("user/$from_id/sendwarn.txt", "none");
    } else {
        save("user/$from_id/command.txt", "none");
        SendMessage($chat_id, "لم يتم العثور على المستخدم المطلوب !");
    }
} elseif ($textmessage == 'تم الغاء حظر المستخدم ' && $from_id == $admin) {
    SendMessage($chat_id, "استخدم الأمر التالي لإلغاء حظر المستخدم
/unban Userid");
} elseif ($textmessage == ' حظر المستخدم' && $from_id == $admin) {
    SendMessage($chat_id, "استخدم الأمر التالي لحظر المستخدم
/ban Userid");
} elseif (strpos($textmessage, "/ban") !== false && $from_id == $admin) {
    $bban = str_replace('/ban', '', $textmessage);
    if ($bban != '') {
        $myfile2 = fopen("data/banlist.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$bban\n");
        fclose($myfile2);
        SendMessage($chat_id, " حظر المستخدم $bban بنجاح");
    }
} elseif (strpos($textmessage, "/unban") !== false && $from_id == $admin) {
    $unbban = str_replace('/unban', '', $textmessage);
    if ($unbban != '') {
        $newlist = str_replace($unbban, "", "data/banlist.txt");
        save("data/banlist.txt", $newlist);
        SendMessage($chat_id, "تم إلغاء حظر المستخدم بنجاح 🍃");
    }
} elseif ($textmessage == 'ارسال رسالة لمستخدم' && $from_id == $admin) {
    save("user/$from_id/command.txt", "sendpm");
    SendMessage($chat_id, "ادخل معرف المستخدم :", "html", "true", $button_back);
} elseif ($command == 'sendpm') {
    $senduser = $textmessage;
    if (file_exists('user/' . $senduser . "/step.txt")) {
        save("user/$from_id/command.txt", "sendpm2");
        SendMessage($chat_id, "أدخل رسالتك:");
    }
} elseif ($command == 'sendpm2') {
    $sendtext = $textmessage;
    SendMessage($senduser, "📬 رسالة جديدة من الدعم :

$sendtext");
    SendMessage($chat_id, "تم الارسال بنجاح 📬", "html", "true", $button_back);
} elseif ($textmessage == 'تفاصيل المستخدم ' && $from_id == $admin) {
    save("user/$from_id/command.txt", "info");
    SendMessage($chat_id, "ادخل معرف المستخدم :", "html", "true", $button_back);
} 

elseif ($command == 'info') {
    if (file_exists("user/$textmessage/step.txt")) {
        save("user/$from_id/command.txt", "none");
        $namu = file_get_contents("user/" . $textmessage . "/nam.txt");
        $mlifeu = file_get_contents("user/" . $textmessage . "/mlife.txt");
        $sennu = file_get_contents("user/" . $textmessage . "/senn.txt");
        $jensu = file_get_contents("user/" . $textmessage . "/jens.txt");
        SendMessage($chat_id, "مشخصات کاربر :

الاسم : $namu
جنسیت : $jensu 
سن : $sennu 
محل زندگی = $mlifeu", "html", "true", $button_admin);
    } else {
        SendMessage($chat_id, "لم يتم العثور على المستخدم المطلوب !", "html", "true", $button_back);
    }
} elseif ($textmessage == 'اعطاء vip' && $from_id == $admin) {
    save("user/$from_id/command.txt", "addvip");
    SendMessage($chat_id, "ادخل معرف المستخدم :", "html", "true", $button_back);
} elseif ($command == 'addvip') {
    if (file_exists("user/$textmessage/step.txt")) {
        save("user/$from_id/command.txt", "none");
        $myfile2 = fopen("data/vips.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$textmessage\n");
        fclose($myfile2);
        SendMessage($chat_id, "تم اعطاء المستخدم الصلاحيات📬", "html", "true", $button_admin);
        SendMessage($textmessage, "حساب شما توسط پشتیبانی ویژه شد❗️", "html", "true");
    } else {
        SendMessage($chat_id, "لم يتم العثور على المستخدم المطلوب !");
    }
} elseif ($textmessage == '❌حذف vip' && $from_id == $admin) {
    save("user/$from_id/command.txt", "delvip");
    SendMessage($chat_id, "ادخل معرف المستخدم :", "html", "true", $button_back);
} elseif ($command == 'delvip') {
    if (file_exists("user/$textmessage/step.txt")) {
        $newlist = str_replace($textmessage, "", $vips);
        save("data/vips.txt", $newlist);
        SendMessage($chat_id, "تم ازالة المستخدم من العضوية الخاصة📬", "html", "true", $button_admin);
        SendMessage($chat_id, "للأسف تم حذف حسابك من قائمة الحسابات الخاصة !", "html", "true");
    } else {
        SendMessage($chat_id, "لم يتم العثور على المستخدم المطلوب !");
    }
} else {
    bot('sendMessage', [
        'chat_id' => $chatid,
        'text' => "الامر خاطئ",
        ]);
}
if (!file_exists('user/' . $from_id)) {
    mkdir('user/' . $from_id);
}
if (!file_exists('user/' . $from_id . "/warn.txt")) {
    file_put_contents('user/' . $from_id . "/warn.txt", "0");
}
$txxt = file_get_contents('data/allmember.txt');
$pmembersid = explode("\n", $txxt);
if (!in_array($chat_id, $pmembersid)) {
    $aaddd = file_get_contents('data/allmember.txt');
    $aaddd .= $chat_id . "\n";
    file_put_contents('data/allmember.txt', $aaddd);
}
unlink("error_log");
?>
