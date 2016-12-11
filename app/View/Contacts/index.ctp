<div class="pctop">
<!--PC用ビューです-->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script>
	$(function() {
		$("#datepicker1").datepicker();
		$("#datepicker2").datepicker();
		$("#datepicker3").datepicker();
		$("#datepicker4").datepicker();
	});
</script>
<h2>お問い合わせフォーム（PC版）</h2>
<?php echo $this->Session->flash(); ?>
<?php echo $this->Form->create('Contact', array('action' => 'confirm')) . PHP_EOL; ?>
<?php echo $this->Form->input('name', array('type' => 'text', 'label' => 'お名前')) . PHP_EOL; ?>
<?php echo $this->Form->input('email', array('type' => 'text', 'label' => 'メールアドレス')) . PHP_EOL; ?>
<?php echo $this->Form->input('phone', array('type' => 'text', 'label' => '電話番号')) . PHP_EOL; ?>
<?php echo $this->Form->input('zip', array('type' => 'text',  'label' => '郵便番号')) . PHP_EOL; ?>
<?php echo $this->Form->input('addr', array('type' => 'text',  'label' => 'ご住所')) . PHP_EOL; ?>
<div>
<h3>ペットの種類</h3>
<?php echo $this->Form->select('pet', array(
	'小型犬(～10kg)' => '小型犬(～10kg)',
	'中型犬(～20kg)' => '中型犬(～20kg)',
	'大型犬(～25kg)' => '大型犬(～25kg)',
	'猫' => '猫',
 	'その他' => 'その他'
	),
		array(
			'empty' => '選択してください',
		)) . PHP_EOL; ?><br />
</div>
<div>
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
</div>
<div>
<?php echo $this->Form->input('date1', array(
		'type' => 'text',
		'div' => false,
		'style' => 'width:90%',
		'id' => 'datepicker1',
	  	'label' => 'シッティング・散歩代行希望日1',
	)). ' ～' ; ?>
<?php echo $this->Form->input('date2', array(
		'type' => 'text',
		'div' => false,
		'style' => 'width:90%',
	 	'id' => 'datepicker2',
	 	'label' => 'シッティング・散歩代行希望日2',
	)) . 'まで' . PHP_EOL; ?>
</div>
<?php echo $this->Form->input('date3', array('type' => 'text', 'id' => 'datepicker3', 'label' => 'ご希望打ち合わせ日1')) . PHP_EOL; ?>
<?php echo $this->Form->input('date4', array('type' => 'text', 'id' => 'datepicker4', 'label' => 'ご希望打ち合わせ日2')) . PHP_EOL; ?>
<h3>ご要望・ご相談はこちらへご記入ください</h3>
<?php echo $this->Form->textarea('other', array('type' => 'text', 'label' => 'その他')) . PHP_EOL; ?>
<?php echo $this->Form->end('確認画面へ進む') . PHP_EOL; ?>

</div>
