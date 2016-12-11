<div class="sptop">
<!--スマホ用確認画面 -->
<h2>入力内容をご確認ください(スマホ)</h2>
<?php echo $this->Form->create('Contact', array('action' => 'send')) . PHP_EOL; ?>
<div>
お名前：
    <?php echo $this->Form->value('name') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('name'); ?>
</div>
<div>
メールアドレス：
    <?php echo $this->Form->value('email') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('email'); ?>
</div>
<div>
電話番号：
    <?php echo $this->Form->value('phone') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('phone'); ?>
</div>
<div>
郵便番号：
    <?php echo $this->Form->value('zip') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('zip'); ?>
</div>
<div>
ご住所：
    <?php echo $this->Form->value('addr') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('addr'); ?>
</div>
<div>
ペットの種類：
    <?php echo $this->Form->value('pet') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('pet'); ?>
</div>
<div>
頭数：
    <?php echo $this->Form->value('qty') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('qty'); ?>
</div>
<div>
シッティング・散歩代行希望日1：
<?php
	echo $this->Form->hidden('Contact.date1.year');
	echo $this->Form->hidden('Contact.date1.month');
	echo $this->Form->hidden('Contact.date1.day');
	$date1 = $this->request->data['Contact']['date1'];
	echo $date1['year'] . '/' . $date1['month'] . '/' . $date1['day'];
//	echo $this->Form->hidden('date1');
?>
</div>
<div>
シッティング・散歩代行希望日2：
<?php
	echo $this->Form->hidden('Contact.date2.year');
	echo $this->Form->hidden('Contact.date2.month');
	echo $this->Form->hidden('Contact.date2.day');
	$date2 = $this->request->data['Contact']['date2'];
	echo $date2['year'] . '/' . $date2['month'] . '/' . $date2['day'];
//	echo $this->Form->hidden('date2');s
?>
</div>
<div>
ご希望打ち合わせ日1：
<?php
	echo $this->Form->hidden('Contact.date3.year');
	echo $this->Form->hidden('Contact.date3.month');
	echo $this->Form->hidden('Contact.date3.day');
	$date3 = $this->request->data['Contact']['date3'];
	echo $date3['year'] . '/' . $date3['month'] . '/' . $date3['day'] . PHP_EOL;
//	echo $this->Form->hidden('date3');
?>
</div>
<div>
ご希望打ち合わせ日2：
<?php
	echo $this->Form->hidden('Contact.date4.year');
	echo $this->Form->hidden('Contact.date4.month');
	echo $this->Form->hidden('Contact.date4.day');
	$date4 = $this->request->data['Contact']['date4'];
	echo $date4['year'] . '/' . $date4['month'] . '/' . $date4['day'] . PHP_EOL;
//	echo $this->Form->hidden('date4');
?>
</div>
<div>
その他：
    <?php echo $this->Form->value('other') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('other'); ?>
</div>
<?php echo $this->Form->button('前に戻る', array('type' => 'button', 'onClick' => 'history.back()')) . PHP_EOL; ?>
<?php echo $this->Form->end('送信する') . PHP_EOL; ?>
</div>
