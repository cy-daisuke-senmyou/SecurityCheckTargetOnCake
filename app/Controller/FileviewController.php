<?php

/**
 * ファイルビューのController
 */
class FileviewController extends AppController {

  public function beforeFilter() {
    parent::beforeFilter();
    // 全てのアクションを許可
    $this->Auth->allow();
  }

  // ファイル名指定フォーム表示
  public function index() {
  }

  public function submit() {
    $filename = trim($this->request->data['filename']);
    $path = '/home/ec2-user/public/file/' . $filename;
		$command = "cat $path";
		$data['file'] = shell_exec($command);

    if(!empty($data['file'])) {
      $this->set('file', $data['file']);
      $this->render('result');
    } else {
      $this->render('failure');
    }
  }
}
