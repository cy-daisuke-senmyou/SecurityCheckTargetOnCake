<?php

/**
 * ユーザー情報のController
 */
class LoginController extends AppController {
  public $uses = array('User');

  // ログインフォーム表示
  public function index() {
  }

  // ログイン試行
  public function submit() {
    $username = trim($this->request->data['username']);
    $password = trim($this->request->data['password']);

    $result = $this->User->checkLogin($username, $password);

    if($result) {
      $this->render('success');
    } else {
      $this->render('failure');
    }
  }
}
