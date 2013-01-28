<div class="tourists view">
<h2><?php  echo __('Tourist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Id'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['media_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tourist['User']['username'], array('controller' => 'users', 'action' => 'view', $tourist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tourist['Tourist']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
	<div>
		Badges :
	<?php
	for ($i=0; $i < count($tourist['Badge']); $i++) { 
		echo $tourist['Badge'][$i]['label'].',';
	}
	?>

	</div>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourist'), array('action' => 'edit', $tourist['Tourist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tourist'), array('action' => 'delete', $tourist['Tourist']['id']), null, __('Are you sure you want to delete # %s?', $tourist['Tourist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
