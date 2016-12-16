<?php
require_once 'MyListItem.php';
/**
 * MyListManager リストを管理する機能を持ったクラス。
 * 
 * @author manabe hiroki
 */
class MyListManager {

/**
 * 先頭のリストメンバへの参照を格納するフィールド。
 *
 * @var MyListItem
 */
private $firstitem;

function __construct(){
    $this->firstitem = new MyListItem(null,null);
}

/**
 * リストの末尾にデータを追加するメソッド。
 *
 * @param Object $object 追加するデータ
 * @return void
 */
public function add($object) {
	$cursor = $this->firstitem;
	// リストの末尾まで移動する
	while($cursor->getNext() !== null) {
		$cursor = $cursor->getNext();
	}
	
	// 末尾のメンバの次に来る参照に追加するデータを設定する
	$cursor->setNext(new MyListItem(null,$object));
}

/**
 * リストの指定した位置にデータを追加するメソッド。
 *
 * @param Object $object 追加するデータ
 * @param Integer $index 位置を指定する非負の整数
 * @return void
 */
public function add_middle($object,$index) {
	try {
		// 指定した位置が負の数かを判断し、負の数の場合は例外を投げる
		if($index < 0) {
			throw new Exception('非負の整数を入力して下さい');
		}
	
		$cursor = $this->firstitem;
			// リストを指定した位置まで移動する
			for($i = 0; $i < $index; $i++) {
				$cursor = $cursor->getNext();
				if($cursor == null) {
					throw new Exception('リストの要素数以内の整数を入力して下さい');
				}
			}
	} catch (Exception $e) {
		echo "エラー:".$e->getMessage(),PHP_EOL;
		return;
	  }

	// 指定した位置に作成したリストメンバを追加する
	$cursor->setNext(new MyListItem($cursor->getNext(),$object));
}

/**
 * リストの指定した位置のデータを削除するメソッド。
 *
 * @param Integer $index 位置を指定する非負の整数
 * @return void
 */
public function remove($index) {
	try {
		// 指定した位置が負の数かを判断し、負の数の場合は例外を投げる
		if($index < 0) {
			throw new Exception('非負の整数を入力して下さい');
		}
	
		$cursor = $this->firstitem;
			// リストを指定した位置まで移動する
			for($i = 0; $i < $index; $i++) {
				$cursor = $cursor->getNext();
				if($cursor == null) {
					throw new Exception('リストの要素数以内の整数を入力して下さい');
				}
			}
	} catch (Exception $e) {
		echo "エラー:".$e->getMessage(),PHP_EOL;
		return;
	  }
	$cursor->setNext($cursor->getNext()->getNext());
}

/**
 * リストの内容を先頭から順に全て出力するメソッド。
 *
 */

public function printList() {
	$cursor = $this->firstitem;
	// リストの末尾まで移動しながらデータを出力する
	while($cursor->getNext() != null) {
		echo $cursor->getItem(),PHP_EOL;
		$cursor = $cursor->getNext();
	}

}

}
?>