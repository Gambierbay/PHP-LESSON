<?php

require_once '/test/webapp/WebAppLesson03/function.php';
require_unlogined_session();


// ユーザから受け取ったユーザ名とパスワード
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

// POSTメソッドのときのみ実行
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        validate_token(filter_input(INPUT_POST, 'token')) &&
        (($password=="password")&&($username=="nskint"))
    ) {
        // 認証が成功したとき
        // セッションIDの追跡を防ぐ
        session_regenerate_id(true);
        // ユーザ名をセット
        $_SESSION['username'] = $username;
        // ログイン完了後に / に遷移
        header('Location: https://localhost/test/webapp/WebAppLesson03/top.php');
        exit;
    }
    // 認証が失敗したとき
    // 「403 Forbidden」
    http_response_code(403);
}

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<title>ログインページ</title>
<link rel="stylesheet" type="text/css" href="wiki.css">
</head>
<body>
<form action="" method="POST">
<h1>ログイン</h1>
<p></p>
<div class = "center"><font color="red">ログインされていません。ログインしてください。</font></div>
<div class="center">
<table>
	<tr>
		<td>ログインID：</td>
		<td><input type="text" name="username"size="20"></td>
	</tr>
	<tr>
		<td>パスワード：</td>
		<td><input type="password" name="password" size="15"></td>
	</tr>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" value="ログイン"></td>
	</tr>
</table>
	<input type="hidden" name="token" value="<?=h(generate_token())?>">
</div>
</form>
<?php if (http_response_code() === 403): ?>
<p style="color: red;">ユーザ名またはパスワードが違います</p>
<?php endif; ?>