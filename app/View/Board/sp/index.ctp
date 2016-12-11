<div class="sptop">
<?php echo $this->Form->create('Board'); ?>
	<?php echo $this->Form->input('name', array('label' => '名前') ); ?><br />
	<?php echo $this->Form->input('subject', array('label' => 'タイトル') );
?><br />
	<?php echo $this->Form->input('content', array('type' =>'textarea' ,
'label' => '本文') ); ?>
	<?php echo $this->Form->submit(); ?>
	<?php echo $this->Form->end(); ?>
<hr>

<p>
<?php foreach($board_data as $key => $val): ?>
<table>
<tr>
	<td><?php echo h($val['Board']['id']); ?></td>
	<td><?php echo h($val['Board']['name']); ?></td>
	<td><?php echo h($val['Board']['subject']); ?></td>
	<td><?php echo h($val['Board']['created']); ?></td>
</tr>
<tr>
	<td colspan="4"><?php echo h($val['Board']['content']); ?></td>
</tr>
</table>
<?php endforeach; ?>
</p>

<div class="deletearea">
<?php echo $this->Form->create('Delete'); ?>
<?php echo $this->Form->input('delno', array('label' => '削除記事No.', 'width' =>
5) ); ?>
<?php echo $this->Form->submit(); ?>
<?php echo $this->Form->end(); ?>
</div>

</div>