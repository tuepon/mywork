<div class="sptop">
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
サポート希望日：
<?php
	echo $this->Form->hidden('Contact.date1.year');
	echo $this->Form->hidden('Contact.date1.month');
	echo $this->Form->hidden('Contact.date1.day');
	$date1 = $this->request->data['Contact']['date1'];
	echo $date1['year'] . "-" . $date1['month'] . "-" . $date1['day'] . PHP_EOL;
?>
</div>
<div>
事前連絡希望日：
<?php
	echo $this->Form->hidden('Contact.date2.year');
	echo $this->Form->hidden('Contact.date2.month');
	echo $this->Form->hidden('Contact.date2.day');
	$date2 = $this->request->data['Contact']['date2'];
	echo $date2['year'] . "-" . $date2['month'] . "-" . $date2['day'] . PHP_EOL;
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
