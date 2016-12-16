<?php
/**
 * Lesson09 リストにデータを追加、削除し、内容を表示するプログラム。
 *
 * @author	manabe hiroki
 */
require_once 'MyListManager.php';
require_once 'MyListItem.php';


$MyList = new MyListManager();

$MyList->add(1);
$MyList->add(3);
$MyList->add(5);
$MyList->add(7);


$MyList->add_middle(2,1);
$MyList->add_middle(4,3);
$MyList->add_middle(8,-1);

$MyList->remove(5);



$MyList->printList();
?>