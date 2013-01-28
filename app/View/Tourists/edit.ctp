<div class="tourists form">
<?php echo $this->Form->create('Tourist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tourist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('bio');
		echo $this->Form->input('media_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('badges',
			array('label'=>'Badges','type'=>'select','multiple'=>'checkbox')
		);
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tourist.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tourist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
