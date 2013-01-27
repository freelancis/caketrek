<div class="guides form">
<?php echo $this->Form->create('Guide'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guide'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('slogan');
		echo $this->Form->input('description');
		echo $this->Form->input('tourist_id');
		echo $this->Form->input('validated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Guide.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Guide.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>
