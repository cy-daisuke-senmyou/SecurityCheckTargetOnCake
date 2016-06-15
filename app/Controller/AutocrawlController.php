<?php

/**
 * 掲示板のController
 */
class AutocrawlController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();
    // 全てのアクションを許可
    $this->Auth->allow();
  }

  // 遷移元ページ表示
  public function index() {
  }

  public function end() {
  }
}
