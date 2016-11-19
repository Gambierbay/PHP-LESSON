<?php
/**
 * Lesson03 与えられた1から10までの整数列を隣接交換法で昇順に並べ替えるプログラム。
 *
 * @author	manabe hiroki
 */

/**
 * 並べ替え用に用意する数列の長さを格納する定数。
 * 数列の最大値はこの値に1を足した数値になる。
 */
const LENGTH = 9;

/**
 * 並べ替え用に用意する数列を格納する配列。
 *
 * @var Array[int] $data
 */
$data = range(1,LENGTH+1);

// 与えられた整数列をランダムに並び替える
for($loop = 0; $loop <= LENGTH; $loop++) {
	$left = rand(0,LENGTH);
	$right = rand(0,LENGTH);
	
	$swap = $data[$left];
	$data[$left] = $data[$right];
	$data[$right] = $swap;
}

print("ソート前</br>");
outData($data);
print("</br>");

for($end = LENGTH; $end > 0; $end--) {
	for($index = 0; $index < $end; $index++) {
		if($data[$index] > $data[$index+1]) {
			$tmp = $data[$index];
			$data[$index] = $data[$index+1];
			$data[$index+1] = $tmp;
			outData($data);
		}
	}
}

print("</br>ソート後</br>");
outData($data);

/**
 * outData 与えられた整数列の内容を全て表示する関数。
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
	print("</br>");
}
?>
