<?php
class AppSchema extends CakeSchema {

  public function before($event = array()) {
    return true;
  }

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
    'email'        => array('type' => 'string',   'null' => false, 'default' => null, 'length' => 255),
    'created'      => array('type' => 'datetime', 'null' => false, 'default' => null),
    'modified'     => array('type' => 'datetime', 'null' => false, 'default' => null),
  );

}
