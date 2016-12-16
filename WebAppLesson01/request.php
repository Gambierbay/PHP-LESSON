<?php
/**
 * question アンケート入力ページの入力内容を結果ページに送信するプログラム。
 *
 * @author	manabe hiroki
 */
 
/**
 * 入力した名前を格納する変数。
 *
 * @var String $name
 */
$name = $_POST['personname'];

/**
 * 入力した年齢を格納する変数。
 *
 * @var int $age
 */
$age = $_POST['personage'];

/**
 * 入力した住所を格納する変数。
 *
 * @var String $address
 */
$address = $_POST['personaddress'];

/**
 * 一つ目のアンケート回答内容を格納する変数。
 *
 * @var String $question1
 */
$question1 = $_POST['q1'];

/**
 * 二つ目のアンケート回答内容を格納する変数。
 *
 * @var String $question2
 */
$question2 = $_POST['q2'];

/**
 * 三つ目のアンケート回答内容を格納する変数。
 *
 * @var String $question3
 */
$question3 = $_POST['q3'];

if(filter_var($age,FILTER_VALIDATE_INT) === false) {
	$age = 'エラー!半角数字を入力して下さい';
}

session_start();

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;
$_SESSION['address'] = $address;
$_SESSION['question1'] = $question1;
$_SESSION['question2'] = $question2;
$_SESSION['question3'] = $question3;


////GETまたはPOST送信で、指定したURLにデータを送信する関数 
//function SendRequest($method,$url,$send_data){ 
//	//引数が正しいか判定する 
//	if( 
//		//送信方法が有効か 
//		!($method==="GET" || $method=="POST") || 
//		//URLとして有効か 
//		!preg_match("/^https?:\/\/[a-zA-Z0-9-_.!~*\'();\/?:@&=+$,%#]+$/",$url) || 
//		//連想配列か（完全ではないが、0がなければ連想配列と判断する） 
//		(!empty($send) && array_key_exists(0,$send_data)) 
//	) 
//		return false; 
//
//	//クエリストリングの生成 
//	$query_string=http_build_query($send_data); 
// 
//	//送信用ヘッダオプションの定義 
//	$options=array( 
//        "http"=>array( 
//                "method"=>$method, 
//                "header"=>"Content-type: application/x-www-form-urlencoded", 
//        ) 
//	); 
//	//GET送信の場合はURLの末尾にクエリストリングを結合する 
//	if($method==="GET") 
//        $url=$url."?".$query_string; 
//	//POST送信の場合は送信用ヘッダオプションのcontextに送信データを入れる 
//	else if($method==="POST") 
//        $options["http"]["content"]=$query_string; 
// 
//	//ストリームコンテキストの生成 
//	$http_stream_context=stream_context_create($options); 
// 
//	//リクエスト送信&レスポンスを戻り値として返す 
//	return file_get_contents($url,false,$http_stream_context); 
//}
//
//	//送信データを用意する 
//    $url="http://localhost/test/webapp/Lesson01/result.php"; 
//    $send_data["name"]=$name; 
//    $send_data["age"]=$age; 
//    $send_data["address"]=$address;
//    $send_data["question1"]=$question1;
//    $send_data["question2"]=$question2;
//    $send_data["question3"]=$question3;
//
//echo SendRequest("GET",$url,$send_data); 
// 結果ページにリダイレクト(移動)
header( "Location: http://localhost/test/webapp/Lesson01/result.php" ) ;

exit ;
