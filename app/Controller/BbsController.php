<?php

/**
 * 掲示板のController
 */
class BbsController extends AppController {
  public $uses = array('Bbs');

  public function beforeFilter() {
    parent::beforeFilter();
    // 全てのアクションを許可
    $this->Auth->allow();
  }

  // 掲示板投稿フォーム表示
  public function index() {
    $allPost = $this->Bbs->getAllPost();
    $this->set('allPost', $allPost);

  }

  public function submit() {
    $name = trim($this->request->data['name']);
    $message = trim($this->request->data['message']);

    $result = $this->Bbs->post($name, $message);

    if($result) {
      $this->redirect(array('controller' => 'bbs', 'action' => 'index'));
    } else {
      $this->render('failure');
    }
  }
}
