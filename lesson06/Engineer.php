<?php
require_once 'Person.php';
/**
 * Engineer 技術者の情報を記録し、表示する機能を持ったクラス。
 * 
 * @author manabe hiroki
 */
class Engineer extends Person {

/**
 * 技術者の保有技術を格納する変数。
 *
 * @var String
 */
private $skill;

/**
 * 引数に与えた文字列を保有技術に設定するメソッド。
 *
 * @param String $skill 保有技術に設定する文字列
 * @return void
 */
public function setSkill($skill) {
	$this->skill = $skill;
}

/**
 * 技術者の保有技術を返すメソッド。
 *
 * @return String $skill 技術者の保有技術
 */
public function getSkill() {
	return $this->skill;
}

/**
 * Engineerで生成したオブジェクトの各プロパティの値を全て表示するメソッド。
 *
 */

public function outProperty() {

	print($this->getname()."さんのデータ");
	print("<br/>");

	print("氏名:".$this->getName());
	print("<br/>");
	print("住所:".$this->getAddress());
	print("<br/>");
	print("年齢:".$this->getAge());
	print("<br/>");
	print("保有技術:".$this->getSkill());
	print("<br/>");
	print("電話番号:".$this->getTelephoneNumber());
	print("<br/>");
	print("<br/>");
}

}
?>