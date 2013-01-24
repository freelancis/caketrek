<div class="users index">
	<div class="page-header">
	  <h1><?php echo __('Users'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<div class="subhead">
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('List Badges'), array('controller' => 'badges', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Badge'), array('controller' => 'badges', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
				<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('password'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('updated'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			<?php
				foreach ($users as $user): ?>
				<tr>
					<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
					<td><?php echo $this->Html->link(h($user['User']['username']),
					 array('action' => 'view', $user['User']['id'])); ?>&nbsp;</td>
					<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<div class="pagination">
				<ul>
			<?php
				echo $this->Paginator->prev('«', array('tag'=>'li'), null, array('tag'=>'li','class' => 'prev active'));
				echo $this->Paginator->numbers(array('separator' => '','tag'=>'li'));
				echo $this->Paginator->next('»', array('tag'=>'li'), null, array('tag'=>'li','class' => 'next active'));
			?>
				</ul>
			</div>
			<p>
			<?php
				echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?></p>
			<?php debug($this->Paginator->params()); ?>
		</div>
	</div>
</div>

