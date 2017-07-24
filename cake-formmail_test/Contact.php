<?php
App::uses('AppModel', 'Model');

class Contact extends AppModel
{
    public $useTable = false;

    public $validate = array(
	    		'name' => array(
					'rule' => array('maxLength' 20),
					'allowEmpty' => true,
					'message' => 'お名前は20文字までで入力してください'
			),
			'email' => array(
					'rule' => array('email'),
					'message' => 'メールアドレスを入力してください',
					'allowEmpty' => false
			),
			'message' => array(
				array(
					'rule' => 'notBlank'
					'message' => '本文は必ず入力してください'
				)
				array(
					'rule' => array('maxLength', 500),
					'message' => '本文は500文字までで入力してください'
				)
			)
	)
｝
