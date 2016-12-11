<?php
class Contact extends AppModel {
	public $useTable = false;
	public $name = 'Contact';

	public $validate = array(
//名前、メルアド、電話番号は必須とする
	    		'name' => array(
			array(
					'rule' => 'notBlank',
					'message' => 'お名前は必須です。',
					),
			array(
					'rule' => array('maxLength', 20),
					'allowEmpty' => false,
					'message' => 'お名前は20文字までで入力してください',
					),
			),
			'email' => array(
			 array(
					'rule' => 'notBlank',
					'allowEmpty' => false,
					'message' => 'メールアドレスは必須です。',
					),
			array(
					'rule' => 'email',
					'message' => 'メールアドレスを入力してください',
					),
			),
			'phone' => array(
				array(
					'rule' => 'notBlank',
					'allowEmpty' => false,
					'message' => '電話番号は必須です。',
					),
			),
			'zip' => array(
			),
			'addr' => array(
			),
			'pet' => array(
			),
			'qty' => array(
			),
			'date1' => array(
			),
			'date2' => array(
			),
			'date3' => array(
			),
			'date4' => array(
			),
			'other' => array(
				array(
					'rule' => array('maxLength', 500),
					'allowEmpty' => true,
					'message' => '本文は500文字までで入力してください',
					),
			),
	);
}
