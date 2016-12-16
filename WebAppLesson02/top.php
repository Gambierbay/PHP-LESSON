<?php

require_once '/test/webapp/Lesson02/function.php';
require_logined_session();

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<title>トップページ</title>
<link rel="stylesheet" type="text/css" href="wiki.css">
</head>
<body>
<h1>トップ</h1>
<div>ようこそ、ログインID<?=h($_SESSION['username'])?>さん</div>
<form name="myForm" action="https://localhost/test/webapp/Lesson02/logout.php?token=<?=h(generate_token())?>" method="GET">
<input type="submit" value="ログアウト">
</form>