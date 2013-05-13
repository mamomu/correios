<div class="packages view">
<h2><?php  echo __('Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($package['Package']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($package['Package']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emails'); ?></dt>
		<dd>
			<?php echo h($package['Package']['emails']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($package['Package']['file']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Md5'); ?></dt>
		<dd>
			<?php echo h($package['Package']['md5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($package['Package']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivered'); ?></dt>
		<dd>
			<?php echo h($package['Package']['delivered']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Package'), array('action' => 'edit', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Package'), array('action' => 'delete', $package['Package']['id']), null, __('Are you sure you want to delete # %s?', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?> </li>
	</ul>
</div>
