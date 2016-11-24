<?php
/**
 * Lesson08 �R�}���h���C��������int�^�֕ϊ����Ĕz��֒ǉ����A�o�u���\�[�g���{�̌�o�͂���v���O�����B
 *
 * @author	manabe hiroki
 */


/**
 * int�^�ɕϊ������R�}���h���C���������i�[����z��B
 *
 * @var Array[int] $integers
 */
$integers = array();


for($i=1;$i<count($argv);$i++){
	try {
		if(ctype_digit($argv[$i]) == false) {
			throw new Exception('������͓��͂��Ȃ��ŉ�����');
		}
	} catch (Exception $e) {
		echo "�G���[:".$e->getMessage();
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
 * outData �^����ꂽ����̓��e��S�ĕ\������֐��B
 *
 * @param	Array[int] $argArray ���e��\�����鐮����
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