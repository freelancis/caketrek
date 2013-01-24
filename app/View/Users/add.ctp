<div class="users form">
	<div class="page-header">
	  <h1><?php echo __('Users'); ?> <small><?php echo $this->action; ?></small></h1>
	</div>
	<div class="subhead">
		<div class="subnav">
			<ul class="nav nav-pills">
				<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Badges'), array('controller' => 'badges', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Badge'), array('controller' => 'badges', 'action' => 'add')); ?> </li>
 </li>

			</ul>
		</div>
	</div>

	<div class="row">
		<?php echo $this->Form->create('User'); ?>
		<div class="span9 form-horizontal">
			<fieldset>
				<legend><?php echo __('Add User'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username');
				echo $this->Form->input('password');
				echo $this->Form->input('email');
			?>
			</fieldset>
		</div>
		<div class="span3">
			<div>
				<?php
					echo $this->Form->input('Badge',array('label' => __('Badges',true),'type' => 'select', 'multiple' => 'checkbox'));
					echo $this->Form->end(array('label'=>_('Submit'),'class'=>'btn btn-primary',
					'div'=>array('class'=>'form-actions')));
				?>
			</div>
		</div>
	</div>
</div>