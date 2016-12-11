<?php
App::uses('AppController', 'Controller');
class ContactsController extends AppController {
	//モデル
	public $name = 'Contacts';
	public $uses = array('Contact');

	// 入力画面
    public function index() {
	    $this->layout = 'default0'; //レイアウト選択

    }

 	// 確認画面
    public function confirm() {
	    $this->layout = 'default0';
	    //validation
	    		$this->Contact->set($this->request->data);
	    		if(!$this->Contact->validates()){
		    		$this->Session->setFlash('入力内容を確認ください');
		    		$this->render('index');
		    		return;
	    	   }
	}
     // 送信処理
    public function send() {
	    App::uses('CakeEmail', 'Network/Email');
	    $email = new CakeEmail('default'); //メール設定選択
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
				'date3' => $this->request->data['Contact']['date3'],
				'date4' => $this->request->data['Contact']['date4'],
				'other' => $this->request->data['Contact']['other'],
			),
			'to' => 'petsittersakikana@yahoo.co.jp', //メールがこのアドレスに送信される
			'subject' => '【さきかな】お問合せが入りました',
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
//	    $this->layout = 'default';
    }
}
