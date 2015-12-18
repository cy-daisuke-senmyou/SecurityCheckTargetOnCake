<?php

class Bbs extends AppModel {
  public $useTable = 'bbs';

  // 全ての投稿を取得
  public function getAllPost() {
    $sql = 'select name, message, created from bbs order by created desc';
    $results = $this->query($sql);
    return $results;
  }

  // 掲示板投稿
  public function post($name, $message) {
    if(empty($name) || empty($message)) {
			return false;
		}
		$sql = "insert into bbs (name, message, created, modified) values('$name', '$message', now(), now())";
    $result = $this->query($sql);
    return true;
	}
}
