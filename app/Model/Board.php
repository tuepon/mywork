<?php
class Board extends AppModel {

	public $name = 'Board';
	
	public $validate = array(
	
		'name' => array(
			array(
					'rule' => array('maxLength', 10),
					'allowEmpty' => true,
					'message' => '名前は10文字までで入力してください。',
			),
		),
		'subject' => array(
			array(
					'rule' => array('maxLength', 20),
					'allowEmpty' => true,
					'message' => 'タイトルは20文字までで入力してください。',
			),
		),
		'content' => array(
			array(
					'rule' => 'notBlank',
					'message' => '本文はかならず入力してください。',
			),
			array(
					'rule' => array('maxLength', 500),
					'message' => '本文は500文字までで入力してください。',
			),
		),
	);
}
