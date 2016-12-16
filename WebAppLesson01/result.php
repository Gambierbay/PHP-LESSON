<?php
session_start();
?>


<html>
<head>
<meta charset="UTF-8">
<title>送信結果</title>
<link rel="stylesheet" type="text/css" href="wiki.css">
</head>
<body>
<h1>アンケート結果</h1>
<h2>基本情報</h2>
<ul>
<li>名前：<?php echo htmlspecialchars($_SESSION['name']); ?><br>
<li>年齢：<?php echo $_SESSION['age']; ?><br>
<li>住所：<?php echo htmlspecialchars($_SESSION['address']); ?><br>
</ul>

<h2>アンケート</h2>
<ul>
<li>毎日、朝食を食べていますか？&nbsp;&nbsp;回答：<?php echo htmlspecialchars($_SESSION['question1']); ?><br>
<li>睡眠は6時間以上とっていますか？&nbsp;&nbsp;回答：<?php echo htmlspecialchars($_SESSION['question2']); ?><br>
<li>週に1時間以上運動していますか？&nbsp;&nbsp;回答：<?php echo htmlspecialchars($_SESSION['question3']); ?><br>
</ul>
</html>