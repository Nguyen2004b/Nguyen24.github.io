

<?php session_start(); ?>
<?php

$DATABASE = 'tungmm1_test'; // Tên Database *
$USERNAME = 'tungmm1_test'; // User *
$PASSWORD = 'kimthuy95'; // Pass User *
$LOCALHOST = 'localhost'; 
$site_domain = 'https://dichvuthanhdong.work/'; // Link Website * 
//Tài Khoản Admin: admin | admin



define("DATABASE", $DATABASE);//////////////////////////////////////////////
define("USERNAME", $USERNAME);///////////////N/T/T/H/A/N/H///////////////////////
define("PASSWORD", $PASSWORD);///////////////////////////////////////////////////////
define("LOCALHOST", $LOCALHOST);////////////////////////////////////////////*/
$check_ketnoi = $ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);///////////////
mysqli_query($ketnoi,"set names 'utf8'");/////////////////////////////////////
date_default_timezone_set('Asia/Ho_Chi_Minh');
include_once('SMTP/class.smtp.php'); // thư viện smtp
include_once('SMTP/PHPMailerAutoload.php');  // thư viện smtp
include_once('SMTP/class.phpmailer.php');  // thư viện smtp

if (!$check_ketnoi)
{
    echo '<script language="javascript">';
    echo 'alert(Vui lòng kết nối đến DATABASE)';  //not showing an alert box.
    echo '</script>';
    exit;
}
function sendCSM($mail_nhan,$ten_nhan,$chu_de,$noi_dung,$bcc){
        // PHPMailer Modify
        $mail = new PHPMailer();
        $mail->SMTPDebug = 0;
        $mail ->Debugoutput = "html";
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tungdz@gmail.com'; //GMAIL BOT
        $mail->Password = 'thay nick moi vao nhe'; // PASS GMAIL BOT
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('tungdz@gmail.com', $bcc); //GMAIL BOT
        $mail->addAddress($mail_nhan, $ten_nhan);
        $mail->addReplyTo('tungdz@gmail.com', $bcc); //GMAIL BOT
        $mail->isHTML(true);
        $mail->Subject = $chu_de;
        $mail->Body    = $noi_dung;
        $mail->CharSet = 'UTF-8';
        $send = $mail->send();
        return $send;
}
$site = mysqli_query($ketnoi,"SELECT * FROM `setting` ")->fetch_array();
$site_color_nav = $site['site_color_nav'];
$site_favicon = $site['site_favicon'];
$site_img = $site['site_img'];
$site_gmail = $site['site_gmail'];
$site_tenweb = $site['tenweb'];
$site_mota = $site['mota'];
$site_tukhoa = $site['tukhoa'];
$site_thongbao = $site['thongbao'];
$site_thong_bao_chay = $site['thong_bao_chay'];
$site_logo = $site['logo'];
$site_logo1 = $site['site_logo1'];
$site_api = $site['api'];
$site_idfb = $site['id_fb'];
$site_idbot = $site['idbot'];
$site_cookie = $site['cookie'];
$site_baotri = $site['baotri'];
$site_status_top = $site['status_top'];
$site_status_order = $site['status_order'];
$site_currency = $site['currency'];
$site_ck_nap_the = $site['ck_nap_the'];
$site_img1 = $site['img1'];
$site_color = $site['color'];
$site_color1 = $site['color1'];
$site_min_order = $site['min_order'];
$site_color_login = $site['color_login'];
$site_text_xac_minh_giao_dich = $site['text_xac_minh_giao_dich'];
$site_text_login = $site['text_login'];
$site_text_nap_tien = $site['text_nap_tien'];
$site_text_mail_order = $site['text_mail_order'];
$bg_login = $site['bg_login'];
$site_callback = $site_domain.'callback.php';


if(isset($_SESSION['username']))
{  
    $check_user_data = $ketnoi->query("SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."'  ");
    if(mysqli_num_rows($check_user_data) == 0){
        session_start();
        session_destroy();
        header('location: /');
    }

	$QUERY_ACCOUNT = mysqli_query($ketnoi,"SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."' ");
	while ($user = mysqli_fetch_array($QUERY_ACCOUNT) ) 
	{
        $my_id = $user['id'];
		$my_username = $user['username'];
		$my_vnd = $user['money'];
		$my_fullname = $user['fullname'];
		$my_phone = $user['phone'];
		$my_mail = $user['mail'];
		$my_idfb = $user['id_facebook'];
		$my_password = $user['password'];
        $my_total_nap = $user['total_nap'];
        $my_ck = $user['ck'];
        $my_level = $user['level'];
        $my_avt = $user['avt'];
	}
    if ($my_vnd < 0)
    {
        $ketnoi->query("UPDATE `users` SET `banned` = 1 WHERE `username` = '".$my_username."' ");
        session_start();
        session_destroy();
        header('location: /');
    }
}
else
{
    $my_username = 'Khách';
    $my_vnd = '0';
    $my_level = '';
    $my_idfb = '';
    $my_ck = '0';
    $my_avt = 'https://i.imgur.com/k9AlaAq.png';
}


if (!empty($_SERVER['HTTP_CLIENT_IP']))     
{  
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];  
}  
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
{  
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
}  
else  
{  
    $ip_address = $_SERVER['REMOTE_ADDR'];  
} 
function check_img($img)
{
    $filename = $_FILES[$img]['name'];
    $ext = explode(".", $filename);
    $ext = end($ext);
    $valid_ext = array("png","jpeg","jpg","PNG","JPEG","JPG","gif","GIF");
    if(in_array($ext, $valid_ext))
    {
        return true;
    }
}
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}
function display($data)
{
    if ($data == 'hide')
    {
        $show = '<span class="badge bg-danger">ẨN</span>';
    }
    else if ($data == 'show')
    {
        $show = '<span class="badge bg-success">HIỂN THỊ</span>';
    }
    return $show;
}
function pheptru($int1, $int2)
{
    return $int1 - $int2;
}
function phepcong($int1, $int2)
{
    return $int1 + $int2;
}
function phepnhan($int1, $int2)
{
    return $int1 * $int2;
}
function phepchia($int1, $int2)
{
    return $int1 / $int2;
}
function random($string, $int)
{
    $chars = $string;  
    $data = substr(str_shuffle($chars), 0, $int);
    return $data;
}
function status($data)
{
    if ($data == 'xuly')
    {
        $show = '<span class="badge badge-info">Đang xử lý</span>';
    }
    else if ($data == 'hoantat')
    {
        $show = '<span class="badge badge-success">Hoàn tất</span>';
    }
    else if ($data == 'thatbai')
    {
        $show = '<span class="badge badge-danger">Thất bại</span>';
    }
    else
    {
        $show = '<span class="badge badge-warning">Khác</span>';
    }
    return $show;
}
function check_string($data)
{
    return str_replace(array('<',"'",'>','?','/',"\\",'--','eval(','<php'),array('','','','','','','','',''),htmlspecialchars(addslashes(strip_tags($data))));
}




// inbox facebook
set_time_limit(0);
function curl_post($url, $method, $postinfo, $cookie_file_path) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie_file_path);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
    curl_setopt($ch,CURLOPT_COOKIEFILE, $cookie_file_path);
    curl_setopt($ch, CURLOPT_USERAGENT,
        "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $_SERVER['REQUEST_URI']);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    if ($method=='POST') 
    {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
    }
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
}
function convertTokenToCookie($token) {
    $html = json_decode(file_get_contents("https://api.facebook.com/method/auth.getSessionforApp?access_token=$token&format=json&new_app_id=350685531728&generate_session_cookies=1"), true);
    $cookie = $html['session_cookies'][0]['name']."=".$html['session_cookies'][0]['value'].";".$html['session_cookies'][1]['name']."=".$html['session_cookies'][1]['value'].";".$html['session_cookies'][2]['name']."=".$html['session_cookies'][2]['value'].";".$html['session_cookies'][3]['name']."=".$html['session_cookies'][3]['value'];
    return $cookie;
}
function senInboxCSM($cookie, $noiDungTinNhan, $idAnh, $idNguoiNhan) {

//lấy id người gửi
    preg_match("/c_user=([0-9]+);/", $cookie, $idNguoiGui);
    $idNguoiGui = $idNguoiGui[1];

//lấy dtsg
    $html =  curl_post('https://m.facebook.com', 'GET' , "" , $cookie);
    $re = "/<input type=\"hidden\" name=\"fb_dtsg\" value=\"(.*?)\" autocomplete=\"off\" \\/>/"; 
    preg_match($re, $html, $dtsg);
    $dtsg = $dtsg[1];


//tách chuỗi thành vòng lặp, lấy từng người nhận ra
    $ex = explode("|", $idNguoiNhan);
    foreach ($ex as $idNguoiNhan) {
    // echo ".$idNguoiNhan.";


    //lấy tids
        $html1 = curl_post("https://m.facebook.com/messages/read/?fbid=$idNguoiNhan&_rdr",'GET','', $cookie);
        $re = "/tids=(.*?)\&/"; 
        preg_match($re, $html1, $tid);
        if (isset($tid[1])) {
        $tid=urldecode($tid[1]);  //encode mã tids lại
        $data = array("fb_dtsg" => "$dtsg",
            "body" => "$noiDungTinNhan",
            "send" => "Gá»­i",
            "photo_ids[$idanh]" => "$idAnh",
            "tids" => "$tid",
            "referrer" => "",
            "ctype" => "",
            "cver" => "legacy");
    } else {
        $data = array("fb_dtsg" => "$dtsg",
            "body" => "$noiDungTinNhan",
            "Send" => "Gá»­i",
            "ids[0]" => "$idNguoiNhan",
            "photo" => "",
            "waterfall_source" => "message");
    }

    //Gửi tin nhắn
    $html = curl_post('https://m.facebook.com/messages/send/?icm=1&refid=12', 'POST', http_build_query($data), $cookie);
    $re = preg_match("/send_success/", $html, $rep); //bắt kết quả trả về
    if (isset($rep[0])) {
        return true;
        ob_flush();
        flush();
    } else {
        return false;
        ob_flush();
        flush();
    }
}
}
function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    
    curl_close($ch);
    return $data;
}
function xoadau($strTitle)
{
$strTitle=strtolower($strTitle);
//Code loại bỏ ký hiệu đặc biệt
$strTitle=trim($strTitle);//Loại bỏ các dấu cách(khoảng trắng) ở đầu và cuối 1 chuỗi
$strTitle=str_replace(' ','-',$strTitle);
$strTitle=preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/",'o',$strTitle);
$strTitle=preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/",'o',$strTitle);
$strTitle=preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/",'a',$strTitle);
$strTitle=preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/",'a',$strTitle);
$strTitle=preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/",'e',$strTitle);
$strTitle=preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/",'e',$strTitle);
$strTitle=preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/",'u',$strTitle);
$strTitle=preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/",'u',$strTitle);
$strTitle=preg_replace("/(ì|í|ị|ỉ|ĩ)/",'i',$strTitle);
$strTitle=preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/",'i',$strTitle);
$strTitle=preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/",'y',$strTitle);
$strTitle=preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/",'y',$strTitle);
$strTitle=str_replace('đ','d',$strTitle);
$strTitle=str_replace('Đ','d',$strTitle);
$strTitle=preg_replace("/[^-a-zA-Z0-9]/",'',$strTitle);
return $strTitle;
}
function getHeader(){
    $headers = array();
    $copy_server = array(
        'CONTENT_TYPE'   => 'Content-Type',
        'CONTENT_LENGTH' => 'Content-Length',
        'CONTENT_MD5'    => 'Content-Md5',
    );
    foreach ($_SERVER as $key => $value) {
        if (substr($key, 0, 5) === 'HTTP_') {
            $key = substr($key, 5);
            if (!isset($copy_server[$key]) || !isset($_SERVER[$key])) {
                $key = str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', $key))));
                $headers[$key] = $value;
            }
        } elseif (isset($copy_server[$key])) {
            $headers[$copy_server[$key]] = $value;
        }
    }
    if (!isset($headers['Authorization'])) {
        if (isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION'])) {
            $headers['Authorization'] = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
        } elseif (isset($_SERVER['PHP_AUTH_USER'])) {
            $basic_pass = isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
            $headers['Authorization'] = 'Basic ' . base64_encode($_SERVER['PHP_AUTH_USER'] . ':' . $basic_pass);
        } elseif (isset($_SERVER['PHP_AUTH_DIGEST'])) {
            $headers['Authorization'] = $_SERVER['PHP_AUTH_DIGEST'];
        }
    }
    return $headers;
}
$MEMO_PREFIX = $site['MEMO_PREFIX'];
function parse_order_id($des){
    global $MEMO_PREFIX;
    $re = '/'.$MEMO_PREFIX.'\d+/im';
    preg_match_all($re, $des, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0 )
        return null;
    // Print the entire match result
    $orderCode = $matches[0][0];
    $prefixLength = strlen($MEMO_PREFIX);
    $orderId = intval(substr($orderCode, $prefixLength ));
    return $orderId ;
}

?>