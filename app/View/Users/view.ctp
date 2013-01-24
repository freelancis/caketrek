<div class="users view">
	<div class="page-header">
	  <h1><?php echo __('Users'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<div class="subhead">
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Badges'), array('controller' => 'badges', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Badge'), array('controller' => 'badges', 'action' => 'add')); ?> </li>

			</ul>
		</div>
	</div>
	<div class="row">
		<div class="span9">
			<h3><?php echo h($user['User']['username']); ?></h3>
			<p>e-mail: <?php echo h($user['User']['email']); ?></p>
			<?php if(isset($user['Tourist']['bio'])): ?>
				<div class="bio"><?php echo h($user['Tourist']['bio']); ?></div>
				<p><?php echo $this->Html->link(_('edit'),
					array('controller'=>'tourists', 'action'=>'edit', $user['Tourist']['id']),
					array('class'=>'btn')); ?></p>
			<?php endif; ?>
		</div>
		<div class="span3">
			<?php if (!empty($user['Badge'])): ?>
				<h2>Badges</h2>
				<?php foreach ($user['Badge'] as $badge): ?>
					
				<span class="label label-info"><?php echo $badge['label']; ?></span>
				
				<?php endforeach; ?>
			<?php endif; ?>
				
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="span12">
			<div class="related">
				<h3><?php echo __('Related Badges'); ?></h3>
				<?php if (!empty($user['Badge'])): ?>
				<table cellpadding = "0" cellspacing = "0" class="table">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Name'); ?></th>
					<th><?php echo __('Label'); ?></th>
					<th><?php echo __('Description'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
					$i = 0;
					foreach ($user['Badge'] as $badge): ?>
					<tr>
						<td><?php echo $badge['id']; ?></td>
						<td><?php echo $badge['name']; ?></td>
						<td><?php echo $badge['label']; ?></td>
						<td><?php echo $badge['description']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'badges', 'action' => 'view', $badge['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'badges', 'action' => 'edit', $badge['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'badges', 'action' => 'delete', $badge['id']), null, __('Are you sure you want to delete # %s?', $badge['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>

				<div class="actions">
					<ul>
						<li><?php echo $this->Html->link(__('New Badge'), array('controller' => 'badges', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>
