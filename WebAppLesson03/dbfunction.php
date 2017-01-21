<?php

function db_select($tablename)
{
  $url = "localhost";
  $user = "root";
  $pass = "";
  $db = "webapp";

  // MySQLへ接続する
  $link = mysql_connect($url,$user,$pass) or die("MySQLへの接続に失敗しました。");

  // データベースを選択する
  $sdb = mysql_select_db($db,$link) or die("データベースの選択に失敗しました。");
  
  // 文字コードをUTF8に設定する
  mysql_query('SET NAMES utf8', $link ); 

  // クエリを送信する
  $sql = "SELECT * FROM ".$tablename;
  $result = mysql_query($sql, $link) or die("クエリの送信に失敗しました。<br />SQL:".$sql);

  //結果セットの行数を取得する
  $rows = mysql_num_rows($result);

  //表示するデータを作成
  if($rows){
  	if($tablename === "item") {
  		$columnName .= "<tr>";
      	$columnName .= "<td>item_no</td><td>item_name</td><td>price</td><td>item_detail</td>";
      	$columnName .= "</tr>\n";
    	while($row = mysql_fetch_array($result)) {
      		$tempHtml .= "<tr>";
      		$tempHtml .= "<td>".$row["item_no"]."</td><td>".$row["item_name"]."</td><td>".$row["price"]."</td><td>".$row["item_detail"]."</td>";
      		$tempHtml .= "</tr>\n";
    	}
    }
    else {
    	$columnName .= "<tr>";
      	$columnName .= "<td>order_no</td><td>item_no</td><td>quantity</td><td>staff_no</td><tdorder_date</td>";
      	$columnName .= "</tr>\n";
    	while($row = mysql_fetch_array($result)) {
      		$tempHtml .= "<tr>";
      		$tempHtml .= "<td>".$row["order_no"]."</td><td>".$row["item_no"]."</td><td>".$row["quantity"]."</td><td>".$row["staff_no"]."</td><td>".$row["order_date"]."</td>";
      		$tempHtml .= "</tr>\n";
    	}
    }
    $msg = $rows."件のデータがあります。";
  }else{
    $msg = "指定されたテーブルにはデータが登録されていません。";
  }

  //結果保持用メモリを開放する
  mysql_free_result($result);

  // MySQLへの接続を閉じる
  mysql_close($link) or die("MySQL切断に失敗しました。");
  return array ('msg'=>$msg,'data'=>$tempHtml,'column'=>$columnName);
}