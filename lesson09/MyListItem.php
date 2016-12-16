<?php
/**
 * MyListItem リストに追加するデータを保持するクラス。
 *
 * @author	manabe hiroki
 */
class MyListItem {

/**
 * 次にくるリストメンバへの参照を格納するフィールド。
 *
 * @var MyListItem
 */
private $next;

/**
 * リストに格納するデータを保持するフィールド。
 *
 * @var Object
 */
private $item;

function __construct($next,$item){
	$this->next = $next;
    $this->item = $item;
}


/**
 * nextフィールドのsetter。
 *
 * @param MyListItem $next 次にくるリストメンバ
 * @return void
 */
public function setNext($next) {
	$this->next = $next;
}

/**
 * nextフィールドのgetter。
 *
 * @return MyListItem $next 次にくるリストメンバ
 */
public function getNext() {
	return $this->next;
}

/**
 * itemフィールドのsetter。
 *
 * @param Object $item リストに格納するデータ
 * @return void
 */
public function setItem($item) {
	$this->item = $item;
}

/**
 * itemフィールドのgetter。
 *
 * @return Object $item リストに格納しているデータ
 */
public function getItem() {
	return $this->item;
}

}

?>