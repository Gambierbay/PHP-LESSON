<?php
/**
 * Lesson09 ���X�g�Ƀf�[�^��ǉ��A�폜���A���e��\������v���O�����B
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