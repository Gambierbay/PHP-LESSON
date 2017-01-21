<?php

require_once '/test/webapp/WebAppLesson03/function.php';
require_logined_session();

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<title>トップページ</title>
<link rel="stylesheet" type="text/css" href="wiki.css">
</head>
<body>
<h1>トップ</h1>
<div>ようこそ、ログインID:<?=h($_SESSION['username'])?>さん</div>
<form name="tablename" action="https://localhost/test/webapp/WebAppLesson03/result.php" method="POST">
<input type="submit" name='select' value="item">
<form name="tablename" action="https://localhost/test/webapp/WebAppLesson03/result.php" method="POST">
<input type="submit" name='select' value="item_order">
<form name="myForm" action="https://localhost/test/webapp/WebAppLesson03/logout.php?token=<?=h(generate_token())?>" method="GET">
<img vspace="20">
<input type="submit" value="ログアウト">
</form>