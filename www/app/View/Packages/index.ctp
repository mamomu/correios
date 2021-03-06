<div class="packages index">
	<h2><?php echo __('Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('file'); ?></th>
			<th><?php echo $this->Paginator->sort('delivered'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($packages as $package): $bgColor = $package['Package']['delivered'] == 1 ? '#bfb' : '#ff9'; ?>
	<tr style="background: <?php echo $bgColor; ?>">
		<td><?php echo h($package['Package']['title']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['emails']); ?>&nbsp;</td>
 		<td><?php echo substr($package['Package']['file'], 0, 4) == "http" ? "<a href='{$package['Package']['file']}' target='_blank'>Visualizar</a>" : $package['Package']['file']; ?>&nbsp;</td>
		<td><?php echo h($package['Package']['delivered'] == 1 ? 'Yes' : 'No'); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['created']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $package['Package']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $package['Package']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $package['Package']['id']), null, __('Are you sure you want to delete # %s?', $package['Package']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?></li>
	</ul>
</div>
