<?php
/**
 * Lesson04 Personから生成されるオブジェクトを作り、各フィールドの値を表示するプログラム。
 *
 * @author	manabe hiroki
 */

require 'Person.php';

$p1 = new Person();
$p2 = new Person();
$p3 = new Person();

$p1->setName("佐藤太郎");
$p2->setName("山田花子");
$p3->setName("木村次郎");

$p1->setAddress("東京都");
$p2->setAddress("青森県");
$p3->setAddress("京都府");

$p1->setAge(20);
$p2->setAge(80);
$p3->setAge(38);

$p1->setTelephoneNumber("030123456");
$p2->setTelephoneNumber("0170123456");
$p3->setTelephoneNumber("0750123456");

outProperty($p1);
outProperty($p2);
outProperty($p3);

/**
 * Personで生成したオブジェクトの各プロパティの値を全て表示するメソッド。
 * @param newPerson Personで生成したオブジェクト
 */

function outProperty($newPerson) {

	print($newPerson->getname()."さんのデータ");
	print("<br/>");

	print("名前:".$newPerson->getName());
	print("<br/>");
	print("住所:".$newPerson->getAddress());
	print("<br/>");
	print("年齢:".$newPerson->getAge());
	print("<br/>");
	print("電話番号:".$newPerson->getTelephoneNumber());
	print("<br/>");
	print("<br/>");
}
?>
