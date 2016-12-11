<?php
App::uses('AppModel', 'Model');

class Contact extends AppModel {
    public $useTable = false;

    public $validate = array(
	    		'name' => array(
					'rule' => array('maxLength', 20),
					'allowEmpty' => false,
					'message' => 'お名前は20文字までで入力してください',
			),
			'email' => array(
					'rule' => array('email'),
					'message' => 'メールアドレスを入力してください',
					'allowEmpty' => false,
			),
			'phone' => array(
					'rule' => array('phone'),
					'message' => '電話番号を入力してください',
					'allowEmpty' => false,
			),
			'zip' => array(
					'rule' => array('zip'),
					'allowEmpty' => true,
			),
			'addr' => array(
					'rule' => array('addr'),
					'allowEmpty' => true,
			),
			'pet' => array(
					'rule' => array('pet'),
					'allowEmpty' => true,
			),
			'qty' => array(
					'rule' => array('qty'),
					'allowEmpty' => true,
			),
			'date1' => array(
					'rule' => array('date1'),
					'allowEmpty' => true,
			),
			'date2' => array(
					'rule' => array('date2'),
					'allowEmpty' => true,
			),
			'other' => array(
				array(
					'rule' => array('other'),
					'allowEmpty' => true,
				),
				array(
					'rule' => array('maxLength', 500),
					'message' => '本文は500文字までで入力してください',
				),
			),
	);
}
