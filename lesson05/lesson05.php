<?php
/**
 * Lesson05 Personから生成されるオブジェクトをリストに格納し、各フィールドの内容を表示するプログラム。
 *
 * @author	manabe hiroki
 */

require 'Person.php';

/**
 * Personから生成されるオブジェクトを格納する配列。
 *
 * @var Array[Person] $persons
 */
$persons = array();


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

array_push($persons,$p1,$p2,$p3);

foreach($persons as $index => $person) {
	$person->outProperty();
}

?>
