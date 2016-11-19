<?php
/**
 * Lesson06 Person,Employee,Engineerから生成されるオブジェクトをリストに格納し、各フィールドの内容を表示するプログラム。
 *
 * @author	manabe hiroki
 */

require_once 'Person.php';
require 'Engineer.php';
require 'Employee.php';

/**
 * Personから生成されるオブジェクトを格納する配列。
 *
 * @var Array[Person] $persons
 */
$persons = array();


array_push($persons,new Person("佐藤太郎", "東京都", 24, "020123456"));
array_push($persons,new Employee("山田花子", 35, "営業", "0170123456"));
array_push($persons,new Engineer("木村 次郎", "京都府", 48, "0750123456", "音声処理"));

printAllData($persons);

serchName($persons,"木村");

/**
 * 引数に与えた配列内のPersonオブジェクトのデータを全て表示するメソッド。
 *
 * @param Array[Person] $persons Personオブジェクトを格納する配列
 * @return void
 */
function printAllData($persons) {
	foreach($persons as $index => $person) {
		$person->outProperty();
	}
}

/**
 * 引数に与えた配列内のPersonオブジェクトの氏名に対して与えた文字列と前方一致するものを表示する。
 *
 * @param Array[Person] $persons Personオブジェクトを格納する配列
 * @param String		$name 検索したい文字列
 * @return void
 */
function serchName($persons,$name) {
	foreach($persons as $index => $person) {
		if(strpos($person->getName(),$name) !== false) {
			print($person->getName());
			print("<br/>");
		}
	}
}


?>
