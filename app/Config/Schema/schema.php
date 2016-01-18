<?php
class AppSchema extends CakeSchema {

  public function before($event = array()) {
    return true;
  }

  // テーブル作成後に初期データ投入
  public function after($event = array()) {
    if (isset($event['create'])) {
      switch ($event['create']) {
          case 'user':
              App::uses('ClassRegistry', 'Utility');
              $user = ClassRegistry::init('User');
              $user->create();
              $user->save(
                  array('User' =>
                      array('username' => 'daisuke_senmyou', 'password' => 'password')
                  )
              );
              break;
      }
  }
}

  // ユーザー
  public $user = array(
    'id'           => array('type' => 'integer',  'null' => false, 'default' => null, 'key' => 'primary', 'extra' => 'auto_increment'),
    'username'     => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 50),
    'password'     => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 255),
    'role'         => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 20),
    'email'        => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 255),
    'created'      => array('type' => 'datetime', 'null' => false, 'default' => null),
    'modified'     => array('type' => 'datetime', 'null' => false, 'default' => null),
  );

  // 掲示板
  public $bbs = array(
    'id'           => array('type' => 'integer',  'null' => false, 'default' => null, 'key' => 'primary', 'extra' => 'auto_increment'),
    'name'         => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 50),
    'message'      => array('type' => 'text',     'null' => false, 'default' => null),
    'created'      => array('type' => 'datetime', 'null' => false, 'default' => null),
    'modified'     => array('type' => 'datetime', 'null' => false, 'default' => null),
  );
}
