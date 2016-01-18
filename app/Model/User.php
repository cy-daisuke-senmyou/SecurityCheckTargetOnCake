<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
  public $useTable = 'user';

  // Validation rules
  public $validate = array(
    'id' => array(
      'naturalnumber' => array(
        'rule' => array('naturalnumber'),
        'message' => 'Natural numbers only',
        'allowEmpty' => false,
      ),
    ),
    'mail_address' => array(
      'email' => array(
        'rule' => array('email'),
        'message' => 'Invalid mail address',
        'allowEmpty' => true,
      ),
    ),
  );

  // 独自ログインチェック
  public function checkLogin($username, $password) {
    $sql = "SELECT * FROM user where username = '$username' and password = '$password'";
    $data = $this->query($sql);
    if(count($data) >= 1 && is_numeric($data[0]['user']['id'])) {
			return true;
		} else {
			return false;
		}
	}

  public function updatePasswd($id, $password) {
    $sql = "update user set password = '$password' where id = '$id'";
    $result = $this->query($sql);
    // パスワードが変更された場合の戻り値は「1」だが、同じ値だと戻り値は「0」になる。
    if($result >= 0) {
      return true;
    } else {
      return false;
    }
  }


  // パスワードのハッシュ化
  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $passwordHasher = new BlowfishPasswordHasher();
      $this->data[$this->alias]['password'] = $passwordHasher->hash(
        $this->data[$this->alias]['password']
      );
    }
    return true;
  }
}
