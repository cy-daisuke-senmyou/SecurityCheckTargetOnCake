<?php

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

  // ログインチェック
  public function checkLogin($username, $password) {
    $sql = "SELECT * FROM user where username = '$username' and password = '$password'";
    $data = $this->query($sql);
    if(count($data) >= 1 && is_numeric($data[0]['user']['id'])) {
			return true;
		} else {
			return false;
		}
	}
}
