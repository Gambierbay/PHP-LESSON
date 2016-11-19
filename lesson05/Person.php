<?php
/**
 * Person 人物の情報を記録し、表示する機能を持ったクラス。
 * 
 * @author manabe hiroki
 */
class Person {

/**
 * 人物の名前を格納する変数。
 *
 * @var String
 */
private $name;

/**
 * 人物の住所を格納する変数。
 *
 * @var String
 */
private $address;

/**
 * 人物の電話番号を格納する変数。
 *
 * @var String
 */
private $telephone;

/**
 * 人物の年齢を格納する変数。
 *
 * @var int
 */
private $age;

/**
 * 引数に与えた文字列を名前に設定するメソッド。
 *
 * @param String $name 名前に設定する文字列
 * @return void
 */
public function setName($name) {
	$this->name = $name;
}

/**
 * 人物の名前を返すメソッド。
 *
 * @return String $name 人物の名前
 */
public function getName() {
	return $this->name;
}

/**
 * 引数に与えた文字列を住所に設定するメソッド。
 *
 * @param String $address 住所に設定する文字列
 * @return void
 */
public function setAddress($address) {
	$this->address = $address;
}

/**
 * 人物の住所を返すメソッド。
 *
 * @return String $address 人物の住所
 */
public function getAddress() {
	return $this->address;
}

/**
 * 引数に与えた文字列を電話番号に設定するメソッド。
 *
 * @param String $telephoneNumber 電話番号に設定する文字列
 * @return void
 */
public function setTelephoneNumber($telephoneNumber) {
	$this->telephoneNumber = $telephoneNumber;
}

/**
 * 人物の電話番号を返すメソッド。
 *
 * @return String $telephoneNumber 人物の電話番号
 */
public function getTelephoneNumber() {
	return $this->telephoneNumber;
}

/**
 * 引数に与えた数値を年齢に設定するメソッド。
 *
 * @param int $age 年齢に設定する数値
 * @return void
 */
public function setAge($age) {
	$this->age = $age;
}

/**
 * 人物の年齢を返すメソッド。
 *
 * @return int $age 人物の年齢
 */
public function getAge() {
	return $this->age;
}

/**
 * Personで生成したオブジェクトの各プロパティの値を全て表示するメソッド。
 * 
 */

public function outProperty() {

	print($this->getname()."さんのデータ");
	print("<br/>");

	print("名前:".$this->getName());
	print("<br/>");
	print("住所:".$this->getAddress());
	print("<br/>");
	print("年齢:".$this->getAge());
	print("<br/>");
	print("電話番号:".$this->getTelephoneNumber());
	print("<br/>");
	print("<br/>");
}
}
?>