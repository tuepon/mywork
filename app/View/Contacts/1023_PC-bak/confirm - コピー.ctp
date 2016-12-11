<div class="table">
<!--PC用確認画面 -->
<h2>入力内容をご確認ください</h2>
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
    <?php echo $this->Form->value('date1') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('date1'); ?>
</div>
<div>
シッティング・散歩代行希望日2：
	<?php echo $this->Form->value('date2') . PHP_EOL; ?>
     <?php echo $this->Form->hidden('date2'); ?>
</div>
<div>
ご希望打ち合わせ日1：
    <?php echo $this->Form->value('date3') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('date3'); ?>
</div>
<div>
ご希望打ち合わせ日2：
    <?php echo $this->Form->value('date4') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('date4'); ?>
</div>
<div>
その他：
    <?php echo $this->Form->value('other') . PHP_EOL; ?>
    <?php echo $this->Form->hidden('other'); ?>
</div>
<?php echo $this->Form->button('前に戻る', array('type' => 'button', 'onClick' => 'history.back()')) . PHP_EOL; ?>
<?php echo $this->Form->end('送信する') . PHP_EOL; ?>
</div>
