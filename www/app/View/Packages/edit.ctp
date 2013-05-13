<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Edit Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('emails');
		echo $this->Form->input('file');
		echo $this->Form->input('md5');
		echo $this->Form->input('content');
		echo $this->Form->input('delivered');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Package.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Package.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?></li>
	</ul>
</div>
