<?php
/**
 * Lesson08 コマンドライン引数をint型へ変換して配列へ追加し、バブルソート実施の後出力するプログラム。
 *
 * @author	manabe hiroki
 */


/**
 * int型に変換したコマンドライン引数を格納する配列。
 *
 * @var Array[int] $integers
 */
$integers = array();


for($i=1;$i<count($argv);$i++){
	try {
		if(ctype_digit($argv[$i]) == false) {
			throw new Exception('文字列は入力しないで下さい');
		}
	} catch (Exception $e) {
		echo "エラー:".$e->getMessage();
		continue;
	}
	array_push($integers,intval($argv[$i]));
}

for($end = count($integers)-1; $end > 0; $end--) {
	for($index = 0; $index < $end; $index++) {
		if($integers[$index] > $integers[$index+1]) {
			$tmp = $integers[$index];
			$integers[$index] = $integers[$index+1];
			$integers[$index+1] = $tmp;
		}
	}
}

outData($integers);

/**
 * outData 与えられた数列の内容を全て表示する関数。
 *
 * @param	Array[int] $argArray 内容を表示する整数列
 * @return	void
 * @author	manabe hiroki
 */
function outData($argArray) {
	for($num = 0; $num < count($argArray); $num++) {
		print($argArray[$num]);
		print(" ");
	}
}

?>