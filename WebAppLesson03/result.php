<?php

require_once '/test/webapp/WebAppLesson03/dbfunction.php';
require_once '/test/webapp/WebAppLesson03/function.php';
require_logined_session();

$tablename = $_POST['select'];

$resultArray = db_select($tablename);

$msg = $resultArray['msg'];
$tempHtml = $resultArray['data'];
$columnName = $resultArray['column'];

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html>
<title>結果ページ</title>
<link rel="stylesheet" type="text/css" href="wiki.css">
</head>
<body>
<h1>結果</h1>
<?= $msg ?>
<table width = "300" border = "0">
<?= $columnName ?>
<?= $tempHtml ?>
</table>
<form name="myForm" action="https://localhost/test/webapp/WebAppLesson03/top.php" method="GET">
<img vspace="20">
<input type="submit" value="戻る">
</form>