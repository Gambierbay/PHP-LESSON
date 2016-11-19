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


$p1 = new Person();
$p2 = new Person();
$p3 = new Person();

$em1 = new Employee();
$em2 = new Employee();
$em3 = new Employee();

$en1 = new Engineer();
$en2 = new Engineer();
$en3 = new Engineer();

$p1->setName("佐藤太郎");
$p2->setName("山田花子");
$p3->setName("木村次郎");
$em1->setName("剛田 武史");
$em2->setName("磯野 浪平");
$em3->setName("木手 英二");
$en1->setName("平沢 進一");
$en2->setName("坂本 龍二");
$en3->setName("谷山 浩美");

$p1->setAddress("東京都");
$p2->setAddress("青森県");
$p3->setAddress("京都府");
$en1->setAddress("東京都");
$en2->setAddress("東京都");
$en3->setAddress("神奈川県");

$p1->setAge(20);
$p2->setAge(80);
$p3->setAge(38);
$em1->setAge(45);
$em2->setAge(55);
$em3->setAge(20);
$en1->setAge(30);
$en2->setAge(31);
$en3->setAge(28);

$p1->setTelephoneNumber("030123456");
$p2->setTelephoneNumber("0170123456");
$p3->setTelephoneNumber("0750123456");
$em1->setTelephoneNumber("1530123456");
$em2->setTelephoneNumber("1680123456");
$em3->setTelephoneNumber("1740123456");
$en1->setTelephoneNumber("2670123456");
$en2->setTelephoneNumber("2480123456");
$en3->setTelephoneNumber("2910123456");

$en1->setSkill("画像処理技術");
$en2->setSkill("通信技術");
$en3->setSkill("音声処理技術");
$em1->setSection("第一事業部");
$em2->setSection("総務部");
$em3->setSection("第三事業部");

array_push($persons,$p1,$p2,$p3,$em1,$em2,$em3,$en1,$en2,$en3);

foreach($persons as $index => $person) {
	$person->outProperty();
}

?>
