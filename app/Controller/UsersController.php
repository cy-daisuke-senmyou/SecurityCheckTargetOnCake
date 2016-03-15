<?php

App::uses('AppController', 'Controller');

/**
 * ユーザー情報のController
 */
class UsersController extends AppController {

  // Authコンポーネントによる認証
  public function login() {
    if ($this->request->is('post')) {
      $username = $this->request->data['User']['username'];
      $password = $this->request->data['User']['password'];
      if ($this->Auth->login()) {
        $this->log("Login success. [ $username / $password ]", LOG_DEBUG);
        $this->redirect($this->Auth->redirect());
      } else {
        $this->log("Login failed. [ $username / $password ]", LOG_DEBUG);
        $this->Flash->error(__('Invalid username or password, try again'));
      }
    }
  }

  public function logout() {
    $this->redirect($this->Auth->logout());
  }
}
