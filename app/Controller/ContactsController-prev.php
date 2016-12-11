<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class ContactsController extends AppController {
	public $uses = array('Contact');

   // 入力画面
    public function index() {
	    $this->layout = 'default0';
    }

    // 確認画面
    public function confirm() {
	    $this->layout = 'default0';
    }

    // 送信処理
    public function send() {
	    $email = new CakeEmail('default');
	    $email->config(array(
	    		'template' => 'contact',
			'viewVars' => array(
				'name' => $this->request->data['Contact']['name'],
				'email' => $this->request->data['Contact']['email'],
				'phone' => $this->request->data['Contact']['phone'],
				'zip' => $this->request->data['Contact']['zip'],
				'addr' => $this->request->data['Contact']['addr'],
				'pet' => $this->request->data['Contact']['pet'],
				'qty' => $this->request->data['Contact']['qty'],
				'date1' => $this->request->data['Contact']['date1'],
				'date2' => $this->request->data['Contact']['date2'],
				'other' => $this->request->data['Contact']['other'],
			),
			'to' => 'info@webisle.net',
			'subject' => '【さきかな】お問合せ',
		));

	   if ($email->send()) {
		   $this->redirect('comp');
	   } else {
		   		// メール送信失敗の処理
		  echo "送信に失敗しました";
		  break;
	   }
   }
	   // 送信完了画面
   	public function comp(){
	    $this->layout = 'default0';
    }
}
