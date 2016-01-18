<?php

/**
 * ユーザー情報のController
 */
class PasswdchangeController extends AppController {
  public $uses = array('User');

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('logout');
  }

  // ログインフォーム表示
  public function index() {
  }

  // パスワード変更フォーム表示
  public function form() {
  }

  // ログアウト実行
  public function logout() {
    $this->redirect($this->Auth->logout());
  }

  // パスワード変更
  public function submit() {
    $id = $this->Auth->user('id');
    // request->data だとGETパラメーターが取得できない。
    if( $this->request->is('post') ) {
      $password = trim($this->request->data('password'));
    } else {
      $password = trim($this->request->query('password'));
    }
    $this->log("password = $password.", LOG_DEBUG);

    $result = $this->User->updatePasswd($id, $password);

    if($result) {
      $this->render('success');
    } else {
      $this->render('failure');
    }

  }
}
