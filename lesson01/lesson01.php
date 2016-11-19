<?php
/**
 * Lesson01 1から100までの整数の内で、3の倍数又は3がつく値だけを表示する。
 *
 * @author	manabe hiroki
 */
for($i = 1; $i <= 100; $i++){
	if(($i%3 == 0) || ($i%10 == 3) || (floor($i/10) == 3)) {
		print($i);
		print("<br />");
	}
}
?>