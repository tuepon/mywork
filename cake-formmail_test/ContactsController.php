<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {
	public $uses = array('Contact');

    // 入力画面
    public function index() {
    }

    // 確認画面
    public function confirm() {
    }

    // 送信処理
    public function send() {
	    $email = new CakeEmail('gmail');

	    $email->config(array(
	    		'template' => 'contacts',
			'viewVars' => array(
				'name' => $this->request->data['Contact']['name'],
				'email' => $this->request->data['Contact']['email'],
				'message' => $this->request->data['Contact']['message'],
			),
			'to' => 't.uepon@gmail.com',
			'subject’ => 'お問合せ',
	   ));

	   if ($email->send()) {
		   $this->redirect('comp');
	   } else {
		   		// メール送信失敗の処理
	　}
  　}

   　 // 完了画面
    　public function comp() {
    　}
}
