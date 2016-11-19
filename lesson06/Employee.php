<?php
require_once 'Person.php';
/**
 * Employee 社員の情報を記録し、表示する機能を持ったクラス。
 * 
 * @author manabe hiroki
 */
class Employee extends Person {

/**
 * 社員の所属部署名を格納する変数。
 *
 * @var String
 */
private $section;

/**
 * 引数に与えた文字列を所属部署名に設定するメソッド。
 *
 * @param String $section 所属部署名に設定する文字列
 * @return void
 */
public function setSection($section) {
	$this->section = $section;
}

/**
 * 社員の所属部署名を返すメソッド。
 *
 * @return String $section 技術者の保有技術
 */
public function getSection() {
	return $this->section;
}

/**
 * Employeeで生成したオブジェクトの各プロパティの値を全て表示するメソッド。
 *
 */

public function outProperty() {

	print($this->getname()."さんのデータ");
	print("<br/>");

	print("氏名:".$this->getName());
	print("<br/>");
	print("年齢:".$this->getAge());
	print("<br/>");
	print("所属部署名:".$this->getSection());
	print("<br/>");
	print("電話番号:".$this->getTelephoneNumber());
	print("<br/>");
	print("<br/>");
}

}
?>