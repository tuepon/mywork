<?php
App::uses('AppController', 'Controller');

class BoardController extends AppController {

	public $uses = array('Board');
	
	public function index() {
	
		if (!empty($this->data['Board'])) {
			// 投稿内容をデータベースに書き込む
				$save_data = array('Board' => array(
					'name' => $this->data['Board']['name'],
					'subject' => $this->data['Board']['subject'],
					'content' => $this->data['Board']['content'],
				));
				$this->Board->create();
				if ($this->Board->save($save_data)){
					$this->data = null;
				}		
		} else if (!empty($this->data['Delete']['delno'])) {
				// 削除フラグを有効にする
				$save_data = array(
					'del_flg' => 1,
				);
				$this->Board->id = $this->data['Delete']['delno'];
				if ($this->Board->save($save_data)){
					$this->data = null;
				}
		}
	
	// 投稿の一覧を取得する
	$board_find_where = array(
		'del_flg' => '0',
	);

	$board_find_options = array(
		'conditions' => $board_find_where,
		'order' => array('created' => 'desc'),
		'limit' => 10,
	);

	$board_data = $this->Board->find('all', $board_find_options);

	// 検索結果を画面で表示可能にする
	$this->set('board_data', $board_data);
	}
}

