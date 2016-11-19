<?php
/**
 * Lesson02 与えられた1から10までの整数列を選択ソートで昇順に並べ替えるプログラム。
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
	$maxDataVal = $data[$end]; // 比較時の暫定最大値を格納する変数
	$maxDataIdx = $end; // 比較時の暫定最大値のインデックスを格納する変数
	$swapFlag = false; // 比較が終了した時、並べ替えが必要か否かを表すフラグ true:必要 false:不要
	
	for($index = $end-1; $index >= 0; $index--) {
		// 暫定最大値より大きい場合は暫定最大値とインデックスを更新する
		if($maxDataVal < $data[$index]) {
			$maxDataVal = $data[$index];
			$maxDataIdx = $index;
			$swapFlag = true;
		}
	}

	// フラグがtrueの場合は暫定最大値と比較開始時の値を交換する
	if($swapFlag == true) {
		$data[$maxDataIdx] = $data[$end];
		$data[$end] = $maxDataVal;
		outData($data);
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
