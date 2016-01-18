<?php

App::uses('AppController', 'Controller');

/**
 * ユーザー情報のController
 */
class UsersController extends AppController {

  // Authコンポーネントによる認証
  public function login() {
    if ($this->request->is('post')) {
      if ($this->Auth->login()) {
        $this->redirect($this->Auth->redirect());
      } else {
        $this->Flash->error(__('Invalid username or password, try again'));
      }
    }
  }

  public function logout() {
    $this->redirect($this->Auth->logout());
  }
}
