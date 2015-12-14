<?php

/**
 * ユーザー情報のController
 */
class UsersController extends AppController {
  public $uses = array('User');

  // 全てのactionの前に実行される。
  public function index() {
  }

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
