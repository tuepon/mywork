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
				array(
					'allowEmpty' => true,
						),
			),
			'addr' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'pet' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'qty' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'date1' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'date2' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'date3' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'date4' => array(
				array(
					'allowEmpty' => true,
					),
			),
			'other' => array(
				array(
					'allowEmpty' => true,
					),
				array(
					'rule' => array('maxLength', 500),
					'message' => '本文は500文字までで入力してください',
					),
			),
	);
}
