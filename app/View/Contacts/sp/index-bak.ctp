<div class="sptop">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<h2>お問い合わせはこちらからどうぞ(スマホ版)</h2>
<?php echo $this->Form->create('Contact', array('action' => 'confirm')) . PHP_EOL; ?>
<?php echo $this->Form->input('name', array('type' => 'text', 'label' => 'お名前')) . PHP_EOL; ?>
<?php echo $this->Form->input('email', array('type' => 'text', 'label' => 'メールアドレス')) . PHP_EOL; ?>
<?php echo $this->Form->input('phone', array('type' => 'text', 'label' => '電話番号')) . PHP_EOL; ?>
<?php echo $this->Form->input('zip', array('type' => 'text',  'label' => '郵便番号')) . PHP_EOL; ?>
<?php echo $this->Form->input('addr', array('type' => 'text',  'label' => 'ご住所')) . PHP_EOL; ?>
<h3>ペットの種類</h3>
<?php echo $this->Form->select('pet', array(
		'小型犬(～10kg)' => '小型犬(～10kg)',
	 	'中型犬(～20kg)' => '中型犬(～20kg)',
		'大型犬(～25kg)' => '大型犬(～25kg)',
		'猫' => '猫',
	 	'その他' => 'その他'
	),
		array(
			'empty' => '選択してください'
		)) . PHP_EOL; ?><br />
<h3>頭数</h3>
<?php echo $this->Form->select('qty', array(
	'1匹' => '1匹',
	'2匹' => '2匹',
	'3匹' => '3匹',
	'4匹以上' => '4匹以上',
	),
		array(
			'empty' => '選択してください'
	)) . PHP_EOL; ?>
<?php echo $this->Form->input('date1', array(
	'type' => 'date',
	'dateFormat' => 'YMD',
	'monthNames' => false,
	'label' => 'シッティング・散歩代行希望日'
	)) . PHP_EOL; ?>
<?php echo $this->Form->input('date2', array(
	'type' => 'date',
	'dateFormat' => 'YMD',
	'monthNames' => false,
	'label' => 'ご希望打ち合わせ日'
	)) . PHP_EOL; ?>
<h3>その他のご相談はこちらへご記入ください</h3>
<?php echo $this->Form->textarea('other', array('type' => 'text', 'label' => 'その他')) . PHP_EOL; ?>
<?php echo $this->Form->end('確認画面へ進む') . PHP_EOL; ?>

</div>
