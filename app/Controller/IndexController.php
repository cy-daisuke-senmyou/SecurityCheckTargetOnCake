<?php

/**
 * Indexページ表示用コントローラー
 */
class IndexController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();
    // 全てのアクションを許可
    $this->Auth->allow();
  }

  // Indexページ表示
  public function index() {
  }
}
